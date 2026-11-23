<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSaleRequest;
use App\Models\Customer;
use App\Models\Product;
use App\Models\Sale;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class SaleController extends Controller
{
    public function index(): View
    {
        $sales = Sale::with(['product', 'customer', 'seller'])
            ->latest('created_at')
            ->paginate(15);

        return view('sales.index', compact('sales'));
    }

    public function create(): View
    {
        $products = Product::orderBy('name')->get();
        $customers = Customer::orderBy('full_name')->get();

        return view('sales.create', compact('products', 'customers'));
    }

    public function store(StoreSaleRequest $request): RedirectResponse
    {
        $validated = $request->validated();
        $quantity = (int) $validated['quantity'];

        DB::transaction(function () use ($validated, $quantity) {
            $product = Product::lockForUpdate()->findOrFail($validated['product_id']);

            if ($quantity > $product->stock_quantity) {
                throw ValidationException::withMessages([
                    'quantity' => "Insufficient stock for {$product->name}. Only {$product->stock_quantity} unit(s) available.",
                ]);
            }

            $totalPrice = round((float) $product->price * $quantity, 2);

            Sale::create([
                'product_id' => $product->id,
                'customer_id' => $validated['customer_id'] ?? null,
                'sold_by' => Auth::id(),
                'quantity' => $quantity,
                'total_price' => $totalPrice,
            ]);

            $product->decrement('stock_quantity', $quantity);
        });

        return redirect()
            ->route('sales.index')
            ->with('success', 'Sale recorded and inventory updated successfully.');
    }

    public function destroy(Sale $sale): RedirectResponse
    {
        DB::transaction(function () use ($sale) {
            if ($sale->product_id) {
                $product = Product::lockForUpdate()->find($sale->product_id);

                if ($product) {
                    $product->increment('stock_quantity', $sale->quantity);
                }
            }

            $sale->delete();
        });

        return redirect()
            ->route('sales.index')
            ->with('success', "Sale #{$sale->id} was voided and {$sale->quantity} unit(s) were returned to inventory.");
    }
}
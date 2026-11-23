<x-layouts::app :title="__('Record Sale')">
    <div class="mx-auto max-w-2xl space-y-6 p-6">
        <div class="flex items-center justify-between">
            <div>
                <h1 class="text-2xl font-semibold text-zinc-900 dark:text-zinc-100">Record New Sale</h1>
                <p class="text-sm text-zinc-500 dark:text-zinc-400">Select a product, optional customer, and quantity sold.</p>
            </div>
            <a href="{{ route('sales.index') }}"
               class="rounded-lg border border-zinc-300 px-4 py-2 text-sm font-medium text-zinc-700 hover:bg-zinc-50 dark:border-zinc-700 dark:text-zinc-300 dark:hover:bg-zinc-800">
                Sales History
            </a>
        </div>

        @if ($errors->any())
            <div class="rounded-lg border border-red-300 bg-red-50 p-4 text-sm text-red-700 dark:border-red-800 dark:bg-red-950/50 dark:text-red-300">
                <p class="font-medium">Unable to record sale:</p>
                <ul class="mt-1 list-disc pl-5">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('sales.store') }}"
              class="space-y-5 rounded-xl border border-zinc-200 bg-white p-6 shadow-sm dark:border-zinc-800 dark:bg-zinc-900">
            @csrf

            <div>
                <label for="product_id" class="block text-sm font-medium text-zinc-700 dark:text-zinc-300">
                    Product <span class="text-red-500">*</span>
                </label>
                <select id="product_id" name="product_id" required
                        class="mt-1 block w-full rounded-lg border border-zinc-300 bg-white px-3 py-2 text-sm text-zinc-900 focus:border-zinc-500 focus:outline-none dark:border-zinc-700 dark:bg-zinc-800 dark:text-zinc-100">
                    <option value="">-- Choose a product --</option>
                    @foreach ($products as $product)
                        <option value="{{ $product->id }}"
                                data-price="{{ $product->price }}"
                                data-stock="{{ $product->stock_quantity }}"
                                @selected(old('product_id') == $product->id)
                                @disabled($product->stock_quantity < 1)>
                            {{ $product->name }} — {{ number_format($product->price, 2) }}
                            ({{ $product->stock_quantity > 0 ? $product->stock_quantity . ' in stock' : 'Out of stock' }})
                        </option>
                    @endforeach
                </select>
                @error('product_id')
                    <p class="mt-1 text-xs text-red-600 dark:text-red-400">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="customer_id" class="block text-sm font-medium text-zinc-700 dark:text-zinc-300">
                    Customer (Optional)
                </label>
                <select id="customer_id" name="customer_id"
                        class="mt-1 block w-full rounded-lg border border-zinc-300 bg-white px-3 py-2 text-sm text-zinc-900 focus:border-zinc-500 focus:outline-none dark:border-zinc-700 dark:bg-zinc-800 dark:text-zinc-100">
                    <option value="">Walk-in Customer</option>
                    @foreach ($customers as $customer)
                        <option value="{{ $customer->id }}" @selected(old('customer_id') == $customer->id)>
                            {{ $customer->full_name }} ({{ $customer->email }})
                        </option>
                    @endforeach
                </select>
                @error('customer_id')
                    <p class="mt-1 text-xs text-red-600 dark:text-red-400">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="quantity" class="block text-sm font-medium text-zinc-700 dark:text-zinc-300">
                    Quantity <span class="text-red-500">*</span>
                </label>
                <input id="quantity" name="quantity" type="number" min="1" step="1"
                       value="{{ old('quantity', 1) }}" required
                       class="mt-1 block w-full rounded-lg border border-zinc-300 bg-white px-3 py-2 text-sm text-zinc-900 focus:border-zinc-500 focus:outline-none dark:border-zinc-700 dark:bg-zinc-800 dark:text-zinc-100">
                @error('quantity')
                    <p class="mt-1 text-xs text-red-600 dark:text-red-400">{{ $message }}</p>
                @enderror
            </div>

            <div class="rounded-lg bg-zinc-50 p-4 dark:bg-zinc-800/60">
                <div class="flex items-center justify-between text-sm">
                    <span class="text-zinc-500 dark:text-zinc-400">Estimated Total</span>
                    <span id="estimated-total" class="text-lg font-semibold text-zinc-900 dark:text-zinc-100">0.00</span>
                </div>
            </div>

            <div class="flex items-center justify-end gap-3 pt-2">
                <a href="{{ route('sales.index') }}"
                   class="rounded-lg border border-zinc-300 px-4 py-2 text-sm font-medium text-zinc-700 hover:bg-zinc-50 dark:border-zinc-700 dark:text-zinc-300 dark:hover:bg-zinc-800">
                    Cancel
                </a>
                <button type="submit"
                        class="rounded-lg bg-zinc-900 px-4 py-2 text-sm font-medium text-white hover:bg-zinc-800 dark:bg-white dark:text-zinc-900 dark:hover:bg-zinc-200">
                    Complete Sale
                </button>
            </div>
        </form>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const productSelect = document.getElementById('product_id');
            const quantityInput = document.getElementById('quantity');
            const totalDisplay = document.getElementById('estimated-total');

            function updateTotal() {
                const selected = productSelect.options[productSelect.selectedIndex];
                const price = parseFloat(selected?.dataset.price || 0);
                const qty = parseInt(quantityInput.value || 0, 10);
                const total = price > 0 && qty > 0 ? price * qty : 0;
                totalDisplay.textContent = total.toLocaleString(undefined, {
                    minimumFractionDigits: 2,
                    maximumFractionDigits: 2,
                });
            }

            productSelect.addEventListener('change', updateTotal);
            quantityInput.addEventListener('input', updateTotal);
            updateTotal();
        });
    </script>
</x-layouts::app>
<x-layouts::app :title="__('Record Sale')">
    <div class="mx-auto max-w-2xl space-y-6 p-6">
        <div class="flex flex-wrap items-center justify-between gap-4">
            <div>
                <p class="text-xs font-semibold uppercase tracking-widest text-terracotta-600 dark:text-terracotta-500">
                    Point of Sale
                </p>
                <h1 class="mt-1 text-2xl font-semibold tracking-tight text-espresso-900 dark:text-oat-50">
                    Record New Sale
                </h1>
                <p class="text-sm text-espresso-600 dark:text-espresso-400">
                    Select a product, optional customer, and quantity sold.
                </p>
            </div>
            <a href="{{ route('sales.index') }}"
               class="rounded-xl border border-almond bg-crema px-4 py-2 text-sm font-medium text-espresso-700 transition hover:bg-oat-100 dark:border-espresso-700 dark:bg-espresso-900 dark:text-oat-200">
                Sales History
            </a>
        </div>

        @if ($errors->any())
            <div class="rounded-xl border border-red-300 bg-red-50 p-4 text-sm text-red-700 dark:border-red-800 dark:bg-red-950/50 dark:text-red-300">
                <p class="font-medium">Unable to record sale:</p>
                <ul class="mt-1 list-disc pl-5">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('sales.store') }}"
              class="space-y-5 rounded-2xl border border-almond bg-crema p-6 shadow-xs dark:border-espresso-700 dark:bg-espresso-900">
            @csrf

            <div>
                <label for="product_id" class="block text-sm font-medium text-espresso-900 dark:text-oat-100">
                    Product <span class="text-terracotta-600">*</span>
                </label>
                <select id="product_id" name="product_id" required
                        class="mt-1.5 block w-full rounded-xl border border-almond bg-white px-3.5 py-2.5 text-sm text-espresso-900 shadow-2xs transition focus:border-terracotta-600 focus:outline-none focus:ring-2 focus:ring-terracotta-600/20 dark:border-espresso-700 dark:bg-espresso-800 dark:text-oat-50">
                    <option value="">-- Choose a product --</option>
                    @foreach ($products as $product)
                        <option value="{{ $product->id }}"
                                data-price="{{ $product->price }}"
                                data-stock="{{ $product->stock_quantity }}"
                                @selected(old('product_id') == $product->id)
                                @disabled($product->stock_quantity < 1)>
                            {{ $product->name }} — &#8369;{{ number_format($product->price, 2) }}
                            ({{ $product->stock_quantity > 0 ? $product->stock_quantity . ' in stock' : 'Out of stock' }})
                        </option>
                    @endforeach
                </select>
                @error('product_id')
                    <p class="mt-1 text-xs text-red-600 dark:text-red-400">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="customer_id" class="block text-sm font-medium text-espresso-900 dark:text-oat-100">
                    Customer <span class="font-normal text-espresso-600 dark:text-espresso-400">(Optional)</span>
                </label>
                <select id="customer_id" name="customer_id"
                        class="mt-1.5 block w-full rounded-xl border border-almond bg-white px-3.5 py-2.5 text-sm text-espresso-900 shadow-2xs transition focus:border-terracotta-600 focus:outline-none focus:ring-2 focus:ring-terracotta-600/20 dark:border-espresso-700 dark:bg-espresso-800 dark:text-oat-50">
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
                <label for="quantity" class="block text-sm font-medium text-espresso-900 dark:text-oat-100">
                    Quantity <span class="text-terracotta-600">*</span>
                </label>
                <input id="quantity" name="quantity" type="number" min="1" step="1"
                       value="{{ old('quantity', 1) }}" required
                       class="mt-1.5 block w-full rounded-xl border border-almond bg-white px-3.5 py-2.5 text-sm text-espresso-900 shadow-2xs transition focus:border-terracotta-600 focus:outline-none focus:ring-2 focus:ring-terracotta-600/20 dark:border-espresso-700 dark:bg-espresso-800 dark:text-oat-50">
                @error('quantity')
                    <p class="mt-1 text-xs text-red-600 dark:text-red-400">{{ $message }}</p>
                @enderror
            </div>

            <div class="rounded-xl border border-almond bg-oat-50 p-4 dark:border-espresso-700 dark:bg-espresso-800/70">
                <div class="flex items-center justify-between text-sm">
                    <span class="font-medium text-espresso-600 dark:text-espresso-400">Estimated Total</span>
                    <span class="text-lg font-bold text-espresso-900 dark:text-oat-50">
                        &#8369;<span id="estimated-total">0.00</span>
                    </span>
                </div>
            </div>

            <div class="flex items-center justify-end gap-3 pt-2">
                <a href="{{ route('sales.index') }}"
                   class="rounded-xl border border-almond bg-white px-4 py-2 text-sm font-medium text-espresso-700 transition hover:bg-oat-100 dark:border-espresso-700 dark:bg-espresso-800 dark:text-oat-200">
                    Cancel
                </a>
                <button type="submit"
                        class="rounded-xl bg-terracotta-600 px-4 py-2 text-sm font-medium text-crema shadow-xs transition hover:bg-terracotta-700">
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
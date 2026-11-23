<x-layouts::app :title="__('Products')">
    <div class="space-y-6 p-6">
        <div class="flex flex-wrap items-center justify-between gap-4">
            <div>
                <p class="text-xs font-semibold uppercase tracking-widest text-terracotta-600 dark:text-terracotta-500">
                    Inventory / Products
                </p>
                <h1 class="mt-1 text-2xl font-semibold tracking-tight text-espresso-900 dark:text-oat-50">
                    Product catalog
                </h1>
                <p class="text-sm text-espresso-600 dark:text-espresso-400">
                    Keep prices, images, and available stock up to date.
                </p>
            </div>
            <a href="{{ route('products.create') }}"
               class="inline-flex items-center gap-1.5 rounded-xl bg-terracotta-600 px-4 py-2.5 text-sm font-medium text-crema shadow-xs transition hover:bg-terracotta-700">
                <span>+ Add product</span>
            </a>
        </div>

        @if (session('success'))
            <div class="rounded-xl border border-sage-600/30 bg-sage-100 px-4 py-3 text-sm font-medium text-sage-700 dark:border-sage-600/40 dark:bg-sage-700/20 dark:text-sage-100">
                {{ session('success') }}
            </div>
        @endif

        @if (session('error'))
            <div class="rounded-xl border border-red-300 bg-red-50 px-4 py-3 text-sm font-medium text-red-700 dark:border-red-800 dark:bg-red-950/50 dark:text-red-300">
                {{ session('error') }}
            </div>
        @endif

        @if ($products->isEmpty())
            <div class="rounded-2xl border border-almond bg-crema p-12 text-center shadow-xs dark:border-espresso-700 dark:bg-espresso-900">
                <p class="text-base font-medium text-espresso-900 dark:text-oat-50">No products in the catalog yet.</p>
                <p class="mt-1 text-sm text-espresso-600 dark:text-espresso-400">Add your first menu item to begin recording sales.</p>
            </div>
        @else
            <div class="grid gap-5 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ($products as $product)
                    <div class="group flex flex-col overflow-hidden rounded-2xl border border-almond bg-crema shadow-xs transition hover:border-terracotta-600/40 hover:shadow-sm dark:border-espresso-700 dark:bg-espresso-900">
                        <div class="relative h-44 w-full overflow-hidden bg-oat-100 dark:bg-espresso-800">
                            @if ($product->image)
                                <img src="{{ \Illuminate\Support\Facades\Storage::disk('public')->url($product->image) }}"
                                     alt="{{ $product->name }}"
                                     class="h-full w-full object-cover transition duration-300 group-hover:scale-105">
                            @else
                                <div class="flex h-full w-full flex-col items-center justify-center text-espresso-400">
                                    <svg class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 15.75 5.159-5.159a2.25 2.25 0 0 1 3.182 0l5.159 5.159m-1.5-1.5 1.409-1.409a2.25 2.25 0 0 1 3.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 0 0 1.5-1.5V6a1.5 1.5 0 0 0-1.5-1.5H3.75A1.5 1.5 0 0 0 2.25 6v12a1.5 1.5 0 0 0 1.5 1.5Zm10.5-11.25h.008v.008h-.008V8.25Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                                    </svg>
                                    <span class="mt-1 text-xs">No image</span>
                                </div>
                            @endif
                        </div>

                        <div class="flex flex-1 flex-col justify-between p-5">
                            <div>
                                <div class="flex items-start justify-between gap-3">
                                    <h2 class="text-base font-semibold text-espresso-900 dark:text-oat-50">
                                        {{ $product->name }}
                                    </h2>
                                    <span class="shrink-0 rounded-full bg-sage-100 px-2.5 py-0.5 text-sm font-semibold text-sage-700 dark:bg-sage-700/30 dark:text-sage-100">
                                        &#8369;{{ number_format($product->price, 2) }}
                                    </span>
                                </div>

                                <p class="mt-1.5 text-xs font-medium {{ $product->stock_quantity <= 5 ? 'text-terracotta-600 dark:text-terracotta-500' : 'text-espresso-600 dark:text-espresso-400' }}">
                                    {{ $product->stock_quantity }} in stock
                                </p>
                            </div>

                            <div class="mt-5 flex items-center gap-3 pt-2">
                                <a href="{{ route('products.edit', $product) }}"
                                   class="flex-1 rounded-xl border border-almond bg-oat-50 px-3 py-2 text-center text-xs font-semibold text-espresso-900 transition hover:border-terracotta-600/40 hover:bg-oat-100 dark:border-espresso-700 dark:bg-espresso-800 dark:text-oat-100 dark:hover:bg-espresso-700">
                                    Edit
                                </a>

                                <form method="POST" action="{{ route('products.destroy', $product) }}"
                                      onsubmit="return confirm('Remove this product from the catalog?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                            class="rounded-xl px-3 py-2 text-xs font-medium text-espresso-600 transition hover:bg-red-50 hover:text-red-700 dark:text-espresso-400 dark:hover:bg-red-950/40 dark:hover:text-red-300">
                                        Archive
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            @if (method_exists($products, 'hasPages') && $products->hasPages())
                <div class="pt-2">
                    {{ $products->links() }}
                </div>
            @endif
        @endif
    </div>
</x-layouts::app>
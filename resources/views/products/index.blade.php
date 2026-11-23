<x-layouts::app :title="__('Products')">
    <div class="min-h-full rounded-3xl bg-zinc-950 p-5 text-zinc-100 sm:p-8">
        <header class="mb-8 flex flex-wrap items-end justify-between gap-4">
            <div>
                <p class="mb-2 text-xs font-semibold uppercase tracking-[0.25em] text-teal-300">
                    Inventory / Products
                </p>
                <h1 class="text-3xl font-bold tracking-tight sm:text-4xl">Product catalog</h1>
                <p class="mt-2 text-sm text-zinc-400">
                    Keep prices, images, and available stock up to date.
                </p>
            </div>

            <a href="{{ route('products.create') }}"
               class="inline-flex min-h-12 items-center rounded-xl bg-teal-300 px-5 font-semibold text-zinc-950 transition hover:bg-teal-200">
                + Add product
            </a>
        </header>

        @if (session('status'))
            <div role="status" class="mb-6 rounded-xl border border-teal-400/30 bg-teal-400/10 px-4 py-3 text-sm text-teal-200">
                {{ session('status') }}
            </div>
        @endif

        <div class="grid gap-4 sm:grid-cols-2 xl:grid-cols-3">
            @forelse ($products as $product)
                <article class="overflow-hidden rounded-2xl border border-zinc-800 bg-zinc-900">
                    <div class="flex h-40 items-center justify-center bg-zinc-800">
                        @if ($product->image)
                            <img
                                src="{{ asset('storage/' . $product->image) }}"
                                alt="{{ $product->name }}"
                                class="h-full w-full object-cover"
                            >
                        @else
                            <span class="text-sm font-medium text-zinc-400">No product image</span>
                        @endif
                    </div>

                    <div class="p-5">
                        <div class="flex items-start justify-between gap-3">
                            <h2 class="text-lg font-semibold">{{ $product->name }}</h2>
                            <span class="shrink-0 font-semibold text-teal-300">
                                ₱{{ number_format((float) $product->price, 2) }}
                            </span>
                        </div>

                        <p class="mt-3 text-sm {{ $product->stock_quantity <= 5 ? 'text-amber-300' : 'text-zinc-400' }}">
                            {{ $product->stock_quantity }} in stock
                        </p>

                        <div class="mt-5 flex gap-3">
                            <a href="{{ route('products.edit', $product) }}"
                               class="inline-flex min-h-11 flex-1 items-center justify-center rounded-xl border border-zinc-600 px-4 text-sm font-medium hover:border-teal-300">
                                Edit
                            </a>

                            <form method="POST" action="{{ route('products.destroy', $product) }}"
                                  onsubmit="return confirm('Archive this product?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                        class="min-h-11 rounded-xl px-3 text-sm font-medium text-zinc-400 hover:text-red-300">
                                    Archive
                                </button>
                            </form>
                        </div>
                    </div>
                </article>
            @empty
                <div class="rounded-2xl border border-dashed border-zinc-700 bg-zinc-900 p-8 sm:col-span-2 xl:col-span-3">
                    <p class="text-lg font-semibold">No products yet</p>
                    <p class="mt-2 text-sm text-zinc-400">
                        Add your first product to start building the catalog.
                    </p>
                </div>
            @endforelse
        </div>

        <div class="mt-8">{{ $products->links() }}</div>
    </div>
</x-layouts::app>
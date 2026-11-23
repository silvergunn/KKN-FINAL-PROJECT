<x-layouts::app :title="__('Add product')">
    <div class="min-h-full rounded-3xl bg-zinc-950 p-5 text-zinc-100 sm:p-8">
        <a href="{{ route('products.index') }}" class="text-sm text-teal-300 hover:underline">
            ← Back to products
        </a>

        <div class="my-8">
            <p class="text-xs font-semibold uppercase tracking-[0.25em] text-teal-300">
                Inventory / New
            </p>
            <h1 class="mt-2 text-3xl font-bold">Add product</h1>
            <p class="mt-2 text-sm text-zinc-400">Set its price and available stock.</p>
        </div>

        <div class="max-w-3xl rounded-2xl border border-zinc-800 bg-zinc-900/50 p-5 sm:p-8">
            @include('products._form')
        </div>
    </div>
</x-layouts::app>
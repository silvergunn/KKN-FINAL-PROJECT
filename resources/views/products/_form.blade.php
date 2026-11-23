<form method="POST"
      action="{{ isset($product) ? route('products.update', $product) : route('products.store') }}"
      enctype="multipart/form-data"
      class="space-y-6">
    @csrf

    @isset($product)
        @method('PUT')
    @endisset

    @if (isset($product) && $product->image)
        <img src="{{ asset('storage/' . $product->image) }}"
             alt="Current image of {{ $product->name }}"
             class="mt-4 h-28 w-28 rounded-xl object-cover">
    @endif

    <div>
        <label for="name" class="mb-2 block text-sm font-medium">Product name</label>
        <input id="name" name="name" type="text" required maxlength="100"
               value="{{ old('name', $product->name ?? '') }}"
               class="min-h-12 w-full rounded-xl border border-zinc-700 bg-zinc-900 px-4 text-white outline-none focus:border-teal-300"
               placeholder="e.g. Wireless Desk Lamp">
        @error('name')
            <p class="mt-2 text-sm text-red-300">{{ $message }}</p>
        @enderror
    </div>

    <div class="grid gap-6 sm:grid-cols-2">
        <div>
            <label for="price" class="mb-2 block text-sm font-medium">Price (₱)</label>
            <input id="price" name="price" type="number" required min="0"
                   max="99999999.99" step="0.01"
                   value="{{ old('price', $product->price ?? '') }}"
                   class="min-h-12 w-full rounded-xl border border-zinc-700 bg-zinc-900 px-4 text-white outline-none focus:border-teal-300"
                   placeholder="0.00">
            @error('price')
                <p class="mt-2 text-sm text-red-300">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="stock_quantity" class="mb-2 block text-sm font-medium">Starting stock</label>
            <input id="stock_quantity" name="stock_quantity" type="number" required
                   min="0" step="1"
                   value="{{ old('stock_quantity', $product->stock_quantity ?? 0) }}"
                   class="min-h-12 w-full rounded-xl border border-zinc-700 bg-zinc-900 px-4 text-white outline-none focus:border-teal-300">
            @error('stock_quantity')
                <p class="mt-2 text-sm text-red-300">{{ $message }}</p>
            @enderror
        </div>
    </div>

    <div>
        <label for="image" class="mb-2 block text-sm font-medium">Product image (optional)</label>
        <input id="image" name="image" type="file"
               accept=".jpg,.jpeg,.png,.webp"
               class="block w-full rounded-xl border border-zinc-700 bg-zinc-900 p-3 text-sm text-zinc-300">
        <p class="mt-2 text-xs text-zinc-400">JPG, PNG, or WebP; maximum 2 MB.</p>
        @error('image')
            <p class="mt-2 text-sm text-red-300">{{ $message }}</p>
        @enderror
    </div>

    <div class="flex flex-wrap gap-3 border-t border-zinc-800 pt-6">
        <button type="submit"
                class="min-h-12 rounded-xl bg-teal-300 px-6 font-semibold text-zinc-950 hover:bg-teal-200">
            {{ isset($product) ? 'Save changes' : 'Add product' }}
        </button>
        <a href="{{ route('products.index') }}"
           class="inline-flex min-h-12 items-center rounded-xl border border-zinc-700 px-5 text-sm hover:border-zinc-500">
            Cancel
        </a>
    </div>
</form>
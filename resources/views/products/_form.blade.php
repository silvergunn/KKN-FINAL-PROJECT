@php
    $isEdit = isset($product) && $product->exists;
    $currentImageUrl = ($isEdit && $product->image)
        ? \Illuminate\Support\Facades\Storage::disk('public')->url($product->image)
        : null;
@endphp

<div class="space-y-5">
    <div>
        <label for="name" class="block text-sm font-medium text-espresso-900 dark:text-oat-100">
            Product name <span class="text-terracotta-600">*</span>
        </label>
        <input id="name" name="name" type="text" maxlength="100" required
               value="{{ old('name', $product->name ?? '') }}"
               class="mt-1.5 block w-full rounded-xl border border-almond bg-white px-3.5 py-2.5 text-sm text-espresso-900 shadow-2xs transition focus:border-terracotta-600 focus:outline-none focus:ring-2 focus:ring-terracotta-600/20 dark:border-espresso-700 dark:bg-espresso-800 dark:text-oat-50">
        @error('name')
            <p class="mt-1 text-xs text-red-600 dark:text-red-400">{{ $message }}</p>
        @enderror
    </div>

    <div class="grid gap-4 sm:grid-cols-2">
        <div>
            <label for="price" class="block text-sm font-medium text-espresso-900 dark:text-oat-100">
                Price (&#8369;) <span class="text-terracotta-600">*</span>
            </label>
            <input id="price" name="price" type="number" step="0.01" min="0" required
                   value="{{ old('price', $product->price ?? '') }}"
                   class="mt-1.5 block w-full rounded-xl border border-almond bg-white px-3.5 py-2.5 text-sm text-espresso-900 shadow-2xs transition focus:border-terracotta-600 focus:outline-none focus:ring-2 focus:ring-terracotta-600/20 dark:border-espresso-700 dark:bg-espresso-800 dark:text-oat-50">
            @error('price')
                <p class="mt-1 text-xs text-red-600 dark:text-red-400">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="stock_quantity" class="block text-sm font-medium text-espresso-900 dark:text-oat-100">
                Stock quantity <span class="text-terracotta-600">*</span>
            </label>
            <input id="stock_quantity" name="stock_quantity" type="number" step="1" min="0" required
                   value="{{ old('stock_quantity', $product->stock_quantity ?? 0) }}"
                   class="mt-1.5 block w-full rounded-xl border border-almond bg-white px-3.5 py-2.5 text-sm text-espresso-900 shadow-2xs transition focus:border-terracotta-600 focus:outline-none focus:ring-2 focus:ring-terracotta-600/20 dark:border-espresso-700 dark:bg-espresso-800 dark:text-oat-50">
            @error('stock_quantity')
                <p class="mt-1 text-xs text-red-600 dark:text-red-400">{{ $message }}</p>
            @enderror
        </div>
    </div>

    <!-- Interactive Product Image Dropzone -->
    <div>
        <span class="block text-sm font-medium text-espresso-900 dark:text-oat-100">
            Product image <span class="font-normal text-espresso-600 dark:text-espresso-400">(optional)</span>
        </span>

        @if ($currentImageUrl)
            <div class="mt-2 flex items-center gap-3.5 rounded-xl border border-almond bg-oat-50 p-3 dark:border-espresso-700 dark:bg-espresso-800/70">
                <img src="{{ $currentImageUrl }}" alt="{{ $product->name }}"
                     class="h-16 w-16 rounded-lg object-cover ring-1 ring-almond dark:ring-espresso-600">
                <div class="text-xs">
                    <p class="font-medium text-espresso-900 dark:text-oat-100">Current product photo</p>
                    <p class="mt-0.5 text-espresso-600 dark:text-espresso-400">Upload a new file below to replace it.</p>
                </div>
            </div>
        @endif

        <label for="image"
               id="product-image-dropzone"
               class="group mt-2.5 flex cursor-pointer flex-col items-center justify-center rounded-2xl border-2 border-dashed border-almond bg-oat-50/70 px-6 py-7 text-center shadow-2xs transition-all duration-150 hover:border-terracotta-600 hover:bg-terracotta-50/60 focus-within:border-terracotta-600 focus-within:ring-2 focus-within:ring-terracotta-600/25 dark:border-espresso-700 dark:bg-espresso-800/50 dark:hover:border-terracotta-500 dark:hover:bg-espresso-800">

            <input id="image"
                   name="image"
                   type="file"
                   accept="image/jpeg,image/png,image/webp"
                   class="sr-only">

            <div id="new-image-preview-wrapper" class="mb-3 hidden flex-col items-center">
                <img id="new-image-preview" src="" alt="Selected preview"
                     class="h-24 w-24 rounded-xl object-cover shadow-sm ring-2 ring-terracotta-600/40">
                <span id="new-image-filename"
                      class="mt-2 inline-flex items-center gap-1.5 rounded-full bg-sage-100 px-3 py-0.5 text-xs font-medium text-sage-700 dark:bg-sage-700/30 dark:text-sage-100"></span>
            </div>

            <div id="upload-icon-badge"
                 class="flex h-12 w-12 items-center justify-center rounded-full border border-almond bg-crema text-terracotta-600 shadow-xs transition-transform duration-150 group-hover:scale-105 group-hover:border-terracotta-600/40 group-hover:bg-terracotta-600 group-hover:text-crema dark:border-espresso-600 dark:bg-espresso-900 dark:text-terracotta-500">
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5m-13.5-9L12 3m0 0 4.5 4.5M12 3v13.5" />
                </svg>
            </div>

            <span class="mt-3 inline-flex items-center gap-1.5 rounded-xl border border-terracotta-600/30 bg-crema px-4 py-1.5 text-sm font-semibold text-terracotta-700 shadow-2xs transition group-hover:border-terracotta-600 group-hover:bg-terracotta-600 group-hover:text-crema dark:border-terracotta-500/40 dark:bg-espresso-900 dark:text-terracotta-500 dark:group-hover:bg-terracotta-500 dark:group-hover:text-espresso-950">
                {{ $currentImageUrl ? 'Upload New Product Image' : 'Upload Product Image' }}
            </span>

            <p class="mt-2 text-xs text-espresso-600 dark:text-espresso-400">
                Click to browse or drag and drop your photo here
            </p>
            <p class="mt-0.5 text-[11px] text-espresso-600/80 dark:text-espresso-400/80">
                JPG, PNG, or WebP &bull; Maximum 2 MB
            </p>
        </label>

        @error('image')
            <p class="mt-1.5 text-xs text-red-600 dark:text-red-400">{{ $message }}</p>
        @enderror
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const dropzone = document.getElementById('product-image-dropzone');
        const fileInput = document.getElementById('image');
        const previewWrapper = document.getElementById('new-image-preview-wrapper');
        const previewImg = document.getElementById('new-image-preview');
        const filenameBadge = document.getElementById('new-image-filename');
        const iconBadge = document.getElementById('upload-icon-badge');

        if (!dropzone || !fileInput) return;

        function showPreview(file) {
            if (!file || !file.type.startsWith('image/')) return;
            const reader = new FileReader();
            reader.onload = (e) => {
                previewImg.src = e.target.result;
                filenameBadge.textContent = file.name;
                previewWrapper.classList.remove('hidden');
                previewWrapper.classList.add('flex');
                iconBadge.classList.add('hidden');
            };
            reader.readAsDataURL(file);
        }

        fileInput.addEventListener('change', (e) => {
            if (e.target.files && e.target.files[0]) {
                showPreview(e.target.files[0]);
            }
        });

        ['dragenter', 'dragover'].forEach((eventName) => {
            dropzone.addEventListener(eventName, (e) => {
                e.preventDefault();
                dropzone.classList.add('border-terracotta-600', 'bg-terracotta-50');
            });
        });

        ['dragleave', 'drop'].forEach((eventName) => {
            dropzone.addEventListener(eventName, (e) => {
                e.preventDefault();
                dropzone.classList.remove('border-terracotta-600', 'bg-terracotta-50');
            });
        });

        dropzone.addEventListener('drop', (e) => {
            if (e.dataTransfer?.files?.length) {
                fileInput.files = e.dataTransfer.files;
                showPreview(e.dataTransfer.files[0]);
            }
        });
    });
</script>
@php
    $isEdit = isset($staff);
@endphp

<div class="space-y-5">
    <div>
        <label for="full_name" class="block text-sm font-medium text-espresso-900 dark:text-oat-100">
            Full Name <span class="text-terracotta-600">*</span>
        </label>
        <input id="full_name" name="full_name" type="text" maxlength="100" required
               value="{{ old('full_name', $staff->full_name ?? '') }}"
               class="mt-1.5 block w-full rounded-xl border border-almond bg-white px-3.5 py-2.5 text-sm text-espresso-900 shadow-2xs transition focus:border-terracotta-600 focus:outline-none focus:ring-2 focus:ring-terracotta-600/20 dark:border-espresso-700 dark:bg-espresso-800 dark:text-oat-50">
        @error('full_name')
            <p class="mt-1 text-xs text-red-600 dark:text-red-400">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="username" class="block text-sm font-medium text-espresso-900 dark:text-oat-100">
            Username <span class="text-terracotta-600">*</span>
        </label>
        <input id="username" name="username" type="text" maxlength="50" required
               value="{{ old('username', $staff->username ?? '') }}"
               class="mt-1.5 block w-full rounded-xl border border-almond bg-white px-3.5 py-2.5 text-sm text-espresso-900 shadow-2xs transition focus:border-terracotta-600 focus:outline-none focus:ring-2 focus:ring-terracotta-600/20 dark:border-espresso-700 dark:bg-espresso-800 dark:text-oat-50">
        @error('username')
            <p class="mt-1 text-xs text-red-600 dark:text-red-400">{{ $message }}</p>
        @enderror
    </div>

    <div class="grid gap-4 sm:grid-cols-2">
        <div>
            <label for="password" class="block text-sm font-medium text-espresso-900 dark:text-oat-100">
                Password @unless($isEdit)<span class="text-terracotta-600">*</span>@endunless
            </label>
            <input id="password" name="password" type="password" {{ $isEdit ? '' : 'required' }}
                   placeholder="{{ $isEdit ? 'Leave blank to keep current password' : 'Minimum 8 characters' }}"
                   class="mt-1.5 block w-full rounded-xl border border-almond bg-white px-3.5 py-2.5 text-sm text-espresso-900 shadow-2xs transition focus:border-terracotta-600 focus:outline-none focus:ring-2 focus:ring-terracotta-600/20 dark:border-espresso-700 dark:bg-espresso-800 dark:text-oat-50">
            @error('password')
                <p class="mt-1 text-xs text-red-600 dark:text-red-400">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="password_confirmation" class="block text-sm font-medium text-espresso-900 dark:text-oat-100">
                Confirm Password @unless($isEdit)<span class="text-terracotta-600">*</span>@endunless
            </label>
            <input id="password_confirmation" name="password_confirmation" type="password" {{ $isEdit ? '' : 'required' }}
                   class="mt-1.5 block w-full rounded-xl border border-almond bg-white px-3.5 py-2.5 text-sm text-espresso-900 shadow-2xs transition focus:border-terracotta-600 focus:outline-none focus:ring-2 focus:ring-terracotta-600/20 dark:border-espresso-700 dark:bg-espresso-800 dark:text-oat-50">
        </div>
    </div>

    <div>
        <label for="avatar" class="block text-sm font-medium text-espresso-900 dark:text-oat-100">
            Avatar Image <span class="font-normal text-espresso-600 dark:text-espresso-400">(JPG, PNG, WEBP — max 2MB)</span>
        </label>

        @if ($isEdit && $staff->avatar_url)
            <div class="mt-2 flex items-center gap-3 rounded-xl border border-almond bg-oat-50 p-3 dark:border-espresso-700 dark:bg-espresso-800/70">
                <img src="{{ $staff->avatar_url }}" alt="{{ $staff->full_name }}"
                     class="h-14 w-14 rounded-full object-cover ring-1 ring-almond dark:ring-espresso-600">
                <span class="text-xs text-espresso-600 dark:text-espresso-400">Current avatar (uploading a new file replaces it)</span>
            </div>
        @endif

        <input id="avatar" name="avatar" type="file" accept="image/jpeg,image/png,image/webp"
               class="mt-2 block w-full rounded-xl border border-almond bg-oat-50/70 p-2 text-sm text-espresso-700 file:mr-4 file:rounded-lg file:border-0 file:bg-terracotta-600 file:px-4 file:py-2 file:text-xs file:font-semibold file:text-crema hover:file:bg-terracotta-700 dark:border-espresso-700 dark:bg-espresso-800 dark:text-oat-200">
        @error('avatar')
            <p class="mt-1 text-xs text-red-600 dark:text-red-400">{{ $message }}</p>
        @enderror
    </div>
</div>
<div class="space-y-5">
    <div>
        <label for="full_name" class="block text-sm font-medium text-espresso-900 dark:text-oat-100">
            Full Name <span class="text-terracotta-600">*</span>
        </label>
        <input id="full_name" name="full_name" type="text" maxlength="100" required
               value="{{ old('full_name', $customer->full_name ?? '') }}"
               class="mt-1.5 block w-full rounded-xl border border-almond bg-white px-3.5 py-2.5 text-sm text-espresso-900 shadow-2xs transition focus:border-terracotta-600 focus:outline-none focus:ring-2 focus:ring-terracotta-600/20 dark:border-espresso-700 dark:bg-espresso-800 dark:text-oat-50">
        @error('full_name')
            <p class="mt-1 text-xs text-red-600 dark:text-red-400">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="email" class="block text-sm font-medium text-espresso-900 dark:text-oat-100">
            Email Address <span class="text-terracotta-600">*</span>
        </label>
        <input id="email" name="email" type="email" maxlength="100" required
               value="{{ old('email', $customer->email ?? '') }}"
               class="mt-1.5 block w-full rounded-xl border border-almond bg-white px-3.5 py-2.5 text-sm text-espresso-900 shadow-2xs transition focus:border-terracotta-600 focus:outline-none focus:ring-2 focus:ring-terracotta-600/20 dark:border-espresso-700 dark:bg-espresso-800 dark:text-oat-50">
        @error('email')
            <p class="mt-1 text-xs text-red-600 dark:text-red-400">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="phone" class="block text-sm font-medium text-espresso-900 dark:text-oat-100">
            Phone Number <span class="font-normal text-espresso-600 dark:text-espresso-400">(optional)</span>
        </label>
        <input id="phone" name="phone" type="text" maxlength="20"
               value="{{ old('phone', $customer->phone ?? '') }}"
               class="mt-1.5 block w-full rounded-xl border border-almond bg-white px-3.5 py-2.5 text-sm text-espresso-900 shadow-2xs transition focus:border-terracotta-600 focus:outline-none focus:ring-2 focus:ring-terracotta-600/20 dark:border-espresso-700 dark:bg-espresso-800 dark:text-oat-50">
        @error('phone')
            <p class="mt-1 text-xs text-red-600 dark:text-red-400">{{ $message }}</p>
        @enderror
    </div>
</div>
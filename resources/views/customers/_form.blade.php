<form method="POST"
      action="{{ isset($customer) ? route('customers.update', $customer) : route('customers.store') }}"
      class="space-y-6">
    @csrf

    @isset($customer)
        @method('PUT')
    @endisset

    <div>
        <label for="full_name" class="mb-2 block text-sm font-medium">Full name</label>
        <input id="full_name" name="full_name" type="text" required maxlength="100"
               value="{{ old('full_name', $customer->full_name ?? '') }}"
               autocomplete="name"
               class="min-h-12 w-full rounded-xl border border-zinc-700 bg-zinc-900 px-4 text-white outline-none focus:border-teal-300">
        @error('full_name')
            <p class="mt-2 text-sm text-red-300">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="email" class="mb-2 block text-sm font-medium">Email</label>
        <input id="email" name="email" type="email" required maxlength="100"
               value="{{ old('email', $customer->email ?? '') }}"
               autocomplete="email"
               class="min-h-12 w-full rounded-xl border border-zinc-700 bg-zinc-900 px-4 text-white outline-none focus:border-teal-300">
        @error('email')
            <p class="mt-2 text-sm text-red-300">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="phone" class="mb-2 block text-sm font-medium">Phone (optional)</label>
        <input id="phone" name="phone" type="tel" maxlength="20"
               value="{{ old('phone', $customer->phone ?? '') }}"
               autocomplete="tel"
               class="min-h-12 w-full rounded-xl border border-zinc-700 bg-zinc-900 px-4 text-white outline-none focus:border-teal-300">
        @error('phone')
            <p class="mt-2 text-sm text-red-300">{{ $message }}</p>
        @enderror
    </div>

    <div class="flex flex-wrap gap-3 border-t border-zinc-800 pt-6">
        <button type="submit"
                class="min-h-12 rounded-xl bg-teal-300 px-6 font-semibold text-zinc-950 hover:bg-teal-200">
            {{ isset($customer) ? 'Save changes' : 'Add customer' }}
        </button>

        <a href="{{ route('customers.index') }}"
           class="inline-flex min-h-12 items-center rounded-xl border border-zinc-700 px-5 text-sm hover:border-zinc-500">
            Cancel
        </a>
    </div>
</form>
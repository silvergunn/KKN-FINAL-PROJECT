<x-layouts::app :title="__('Edit customer')">
    <div class="min-h-full rounded-3xl bg-zinc-950 p-6 text-white md:p-8">
        <div class="mx-auto max-w-2xl">
            <p class="text-xs font-semibold uppercase tracking-[0.2em] text-teal-300">
                Customers
            </p>
            <h1 class="mt-2 text-3xl font-bold">Edit customer</h1>
            <p class="mb-8 mt-2 text-sm text-zinc-400">
                Update {{ $customer->full_name }}'s contact details.
            </p>

            @include('customers._form')
        </div>
    </div>
</x-layouts::app>
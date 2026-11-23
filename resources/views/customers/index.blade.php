<x-layouts::app :title="__('Customers')">
    <div class="min-h-full rounded-3xl bg-zinc-950 p-6 text-white md:p-8">
        <div class="mb-8 flex flex-wrap items-end justify-between gap-4">
            <div>
                <p class="text-xs font-semibold uppercase tracking-[0.2em] text-teal-300">
                    Customers
                </p>
                <h1 class="mt-2 text-3xl font-bold">Customer directory</h1>
                <p class="mt-2 text-sm text-zinc-400">
                    Keep customer details ready for future sales.
                </p>
            </div>

            <a href="{{ route('customers.create') }}"
               class="inline-flex min-h-12 items-center rounded-xl bg-teal-300 px-5 font-semibold text-zinc-950 hover:bg-teal-200">
                + Add customer
            </a>
        </div>

        @if (session('status'))
            <div class="mb-6 rounded-xl border border-teal-700 bg-teal-950/50 p-4 text-sm text-teal-300">
                {{ session('status') }}
            </div>
        @endif

        @forelse ($customers as $customer)
            <div class="mb-3 flex flex-wrap items-center justify-between gap-4 rounded-2xl border border-zinc-800 bg-zinc-900 p-5">
                <div>
                    <h2 class="font-semibold">{{ $customer->full_name }}</h2>
                    <p class="mt-1 text-sm text-zinc-400">{{ $customer->email }}</p>
                    <p class="mt-1 text-sm text-zinc-400">
                        {{ $customer->phone ?: 'No phone number' }}
                    </p>
                </div>

                <div class="flex items-center gap-3">
                    <a href="{{ route('customers.edit', $customer) }}"
                       class="rounded-xl border border-zinc-700 px-4 py-2 text-sm hover:border-teal-300">
                        Edit
                    </a>

                    <form method="POST" action="{{ route('customers.destroy', $customer) }}"
                          onsubmit="return confirm('Archive this customer?')">
                        @csrf
                        @method('DELETE')

                        <button type="submit" class="text-sm text-zinc-400 hover:text-red-300">
                            Archive
                        </button>
                    </form>
                </div>
            </div>
        @empty
            <div class="rounded-2xl border border-dashed border-zinc-700 bg-zinc-900 p-8">
                <h2 class="font-semibold">No customers yet</h2>
                <p class="mt-2 text-sm text-zinc-400">Add your first customer to start the directory.</p>
            </div>
        @endforelse

        <div class="mt-6">
            {{ $customers->links() }}
        </div>
    </div>
</x-layouts::app>
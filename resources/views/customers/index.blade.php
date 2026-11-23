<x-layouts::app :title="__('Customers')">
    <div class="space-y-6 p-6">
        <div class="flex flex-wrap items-center justify-between gap-4">
            <div>
                <p class="text-xs font-semibold uppercase tracking-widest text-terracotta-600 dark:text-terracotta-500">
                    Customers
                </p>
                <h1 class="mt-1 text-2xl font-semibold tracking-tight text-espresso-900 dark:text-oat-50">
                    Customer directory
                </h1>
                <p class="text-sm text-espresso-600 dark:text-espresso-400">
                    Keep customer details ready for future sales.
                </p>
            </div>
            <a href="{{ route('customers.create') }}"
               class="inline-flex items-center gap-1.5 rounded-xl bg-terracotta-600 px-4 py-2.5 text-sm font-medium text-crema shadow-xs transition hover:bg-terracotta-700">
                <span>+ Add customer</span>
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

        <div class="space-y-3">
            @forelse ($customers as $customer)
                <div class="flex flex-wrap items-center justify-between gap-4 rounded-2xl border border-almond bg-crema p-5 shadow-xs transition hover:border-terracotta-600/40 dark:border-espresso-700 dark:bg-espresso-900">
                    <div class="flex items-center gap-4">
                        <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-full bg-oat-100 text-sm font-semibold uppercase text-espresso-800 ring-1 ring-almond dark:bg-espresso-800 dark:text-oat-100 dark:ring-espresso-700">
                            {{ mb_substr($customer->full_name, 0, 2) }}
                        </div>
                        <div>
                            <h2 class="text-base font-semibold text-espresso-900 dark:text-oat-50">
                                {{ $customer->full_name }}
                            </h2>
                            <p class="text-sm text-espresso-600 dark:text-espresso-400">
                                {{ $customer->email }}
                            </p>
                            @if ($customer->phone)
                                <p class="mt-0.5 text-xs text-espresso-600/80 dark:text-espresso-400/80">
                                    {{ $customer->phone }}
                                </p>
                            @endif
                        </div>
                    </div>

                    <div class="flex items-center gap-2">
                        <a href="{{ route('customers.edit', $customer) }}"
                           class="rounded-xl border border-almond bg-oat-50 px-3.5 py-2 text-xs font-semibold text-espresso-900 transition hover:border-terracotta-600/40 hover:bg-oat-100 dark:border-espresso-700 dark:bg-espresso-800 dark:text-oat-100 dark:hover:bg-espresso-700">
                            Edit
                        </a>

                        <form method="POST" action="{{ route('customers.destroy', $customer) }}"
                              onsubmit="return confirm('Remove this customer record?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                    class="rounded-xl px-3 py-2 text-xs font-medium text-espresso-600 transition hover:bg-red-50 hover:text-red-700 dark:text-espresso-400 dark:hover:bg-red-950/40 dark:hover:text-red-300">
                                Archive
                            </button>
                        </form>
                    </div>
                </div>
            @empty
                <div class="rounded-2xl border border-almond bg-crema p-12 text-center shadow-xs dark:border-espresso-700 dark:bg-espresso-900">
                    <p class="text-base font-medium text-espresso-900 dark:text-oat-50">No customers registered yet.</p>
                    <p class="mt-1 text-sm text-espresso-600 dark:text-espresso-400">Add a customer profile to associate orders with regulars.</p>
                </div>
            @endforelse
        </div>

        @if (method_exists($customers, 'hasPages') && $customers->hasPages())
            <div class="pt-2">
                {{ $customers->links() }}
            </div>
        @endif
    </div>
</x-layouts::app>
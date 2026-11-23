<x-layouts::app :title="__('Sales History')">
    <div x-data="{
            voidModalOpen: false,
            sale: { id: '', product: '', customer: '', quantity: 0, total: '', url: '' },
            openVoidModal(data) {
                this.sale = data;
                this.voidModalOpen = true;
            }
         }"
         @keydown.escape.window="voidModalOpen = false"
         class="space-y-6 p-6">

        <div class="flex flex-wrap items-center justify-between gap-4">
            <div>
                <p class="text-xs font-semibold uppercase tracking-widest text-terracotta-600 dark:text-terracotta-500">
                    Point of Sale
                </p>
                <h1 class="mt-1 text-2xl font-semibold tracking-tight text-espresso-900 dark:text-oat-50">
                    Sales History
                </h1>
                <p class="text-sm text-espresso-600 dark:text-espresso-400">
                    Complete log of recorded POS transactions.
                </p>
            </div>
            <a href="{{ route('sales.create') }}"
               class="inline-flex items-center gap-1.5 rounded-xl bg-terracotta-600 px-4 py-2.5 text-sm font-medium text-crema shadow-xs transition hover:bg-terracotta-700">
                <span>+ Record Sale</span>
            </a>
        </div>

        @if (session('success'))
            <div class="rounded-xl border border-sage-600/30 bg-sage-100 px-4 py-3 text-sm font-medium text-sage-700 dark:border-sage-600/40 dark:bg-sage-700/20 dark:text-sage-100">
                {{ session('success') }}
            </div>
        @endif

        <div class="overflow-hidden rounded-2xl border border-almond bg-crema shadow-xs dark:border-espresso-700 dark:bg-espresso-900">
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-almond text-left text-sm dark:divide-espresso-700">
                    <thead class="bg-oat-100/80 text-xs font-semibold uppercase tracking-wider text-espresso-600 dark:bg-espresso-800 dark:text-espresso-400">
                        <tr>
                            <th class="px-4 py-3.5">#</th>
                            <th class="px-4 py-3.5">Product</th>
                            <th class="px-4 py-3.5">Customer</th>
                            <th class="px-4 py-3.5">Staff Member</th>
                            <th class="px-4 py-3.5 text-right">Qty</th>
                            <th class="px-4 py-3.5 text-right">Total Price</th>
                            <th class="px-4 py-3.5">Date</th>
                            <th class="px-4 py-3.5 text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-almond/70 dark:divide-espresso-800">
                        @forelse ($sales as $sale)
                            @php
                                $productName = $sale->product?->name ?? 'Deleted Product';
                                $customerName = $sale->customer?->full_name ?? 'Walk-in';
                            @endphp
                            <tr class="transition hover:bg-oat-50 dark:hover:bg-espresso-800/60">
                                <td class="px-4 py-3.5 font-medium text-espresso-900 dark:text-oat-50">
                                    {{ $sale->id }}
                                </td>
                                <td class="px-4 py-3.5 font-medium text-espresso-900 dark:text-oat-50">
                                    {{ $productName }}
                                </td>
                                <td class="px-4 py-3.5 text-espresso-600 dark:text-oat-200">
                                    {{ $customerName }}
                                </td>
                                <td class="px-4 py-3.5 text-espresso-600 dark:text-oat-200">
                                    {{ $sale->seller?->full_name ?? $sale->seller?->username ?? 'Unknown' }}
                                </td>
                                <td class="px-4 py-3.5 text-right text-espresso-900 dark:text-oat-50">
                                    {{ $sale->quantity }}
                                </td>
                                <td class="px-4 py-3.5 text-right font-semibold text-espresso-900 dark:text-oat-50">
                                    &#8369;{{ number_format($sale->total_price, 2) }}
                                </td>
                                <td class="px-4 py-3.5 text-espresso-600 dark:text-espresso-400">
                                    {{ $sale->created_at?->format('M d, Y h:i A') }}
                                </td>
                                <td class="px-4 py-3.5 text-right">
                                    <button type="button"
                                            @click="openVoidModal({
                                                id: '{{ $sale->id }}',
                                                product: @js($productName),
                                                customer: @js($customerName),
                                                quantity: {{ $sale->quantity }},
                                                total: '₱{{ number_format($sale->total_price, 2) }}',
                                                url: '{{ route('sales.destroy', $sale) }}'
                                            })"
                                            class="inline-flex items-center gap-1 rounded-xl border border-red-300/80 bg-red-50/70 px-3 py-1.5 text-xs font-medium text-red-700 transition hover:bg-red-100 dark:border-red-800/70 dark:bg-red-950/40 dark:text-red-300 dark:hover:bg-red-900/50">
                                        <svg class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                        </svg>
                                        <span>Void</span>
                                    </button>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="8" class="px-4 py-10 text-center text-espresso-600 dark:text-espresso-400">
                                    No sales recorded yet.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            @if ($sales->hasPages())
                <div class="border-t border-almond px-4 py-3 dark:border-espresso-700">
                    {{ $sales->links() }}
                </div>
            @endif
        </div>

        <!-- Void Sale Confirmation Modal -->
        <div x-show="voidModalOpen"
             style="display: none;"
             class="fixed inset-0 z-50 flex items-center justify-center p-4"
             role="dialog"
             aria-modal="true">
            <div @click="voidModalOpen = false"
                 class="fixed inset-0 bg-espresso-950/60 backdrop-blur-xs transition-opacity"></div>

            <div class="relative z-10 w-full max-w-md overflow-hidden rounded-2xl border border-almond bg-crema p-6 shadow-xl dark:border-espresso-700 dark:bg-espresso-900">
                <div class="flex items-start gap-4">
                    <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-full bg-red-100 text-red-700 dark:bg-red-950/70 dark:text-red-300">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
                        </svg>
                    </div>
                    <div>
                        <h2 class="text-lg font-semibold text-espresso-900 dark:text-oat-50">
                            Void Sale #<span x-text="sale.id"></span>?
                        </h2>
                        <p class="mt-1 text-sm text-espresso-600 dark:text-espresso-400">
                            This will permanently remove the sale record and return <strong class="font-semibold text-espresso-900 dark:text-oat-100"><span x-text="sale.quantity"></span> unit(s)</strong> back to product stock.
                        </p>
                    </div>
                </div>

                <div class="mt-4 rounded-xl border border-almond bg-oat-50 p-3.5 text-sm dark:border-espresso-700 dark:bg-espresso-800/70">
                    <div class="flex justify-between py-1">
                        <span class="text-espresso-600 dark:text-espresso-400">Product</span>
                        <span class="font-medium text-espresso-900 dark:text-oat-50" x-text="sale.product"></span>
                    </div>
                    <div class="flex justify-between py-1">
                        <span class="text-espresso-600 dark:text-espresso-400">Customer</span>
                        <span class="font-medium text-espresso-900 dark:text-oat-50" x-text="sale.customer"></span>
                    </div>
                    <div class="mt-1 flex justify-between border-t border-almond/80 pt-2 dark:border-espresso-700">
                        <span class="text-espresso-600 dark:text-espresso-400">Total Amount</span>
                        <span class="font-semibold text-terracotta-600 dark:text-terracotta-500" x-text="sale.total"></span>
                    </div>
                </div>

                <div class="mt-6 flex items-center justify-end gap-3">
                    <button type="button"
                            @click="voidModalOpen = false"
                            class="rounded-xl border border-almond bg-white px-4 py-2 text-sm font-medium text-espresso-700 transition hover:bg-oat-100 dark:border-espresso-700 dark:bg-espresso-800 dark:text-oat-200 dark:hover:bg-espresso-700">
                        Cancel
                    </button>
                    <form :action="sale.url" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                                class="rounded-xl bg-red-600 px-4 py-2 text-sm font-medium text-white shadow-xs transition hover:bg-red-700">
                            Confirm Void Sale
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layouts::app>
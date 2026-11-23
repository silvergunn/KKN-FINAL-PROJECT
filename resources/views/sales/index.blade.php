<x-layouts::app :title="__('Sales History')">
    <div class="space-y-6 p-6">
        <div class="flex flex-wrap items-center justify-between gap-4">
            <div>
                <h1 class="text-2xl font-semibold text-zinc-900 dark:text-zinc-100">Sales History</h1>
                <p class="text-sm text-zinc-500 dark:text-zinc-400">Complete log of recorded POS transactions.</p>
            </div>
            <a href="{{ route('sales.create') }}"
               class="rounded-lg bg-zinc-900 px-4 py-2 text-sm font-medium text-white hover:bg-zinc-800 dark:bg-white dark:text-zinc-900 dark:hover:bg-zinc-200">
                + Record Sale
            </a>
        </div>

        @if (session('success'))
            <div class="rounded-lg border border-emerald-300 bg-emerald-50 p-4 text-sm text-emerald-800 dark:border-emerald-800 dark:bg-emerald-950/50 dark:text-emerald-300">
                {{ session('success') }}
            </div>
        @endif

        <div class="overflow-hidden rounded-xl border border-zinc-200 bg-white shadow-sm dark:border-zinc-800 dark:bg-zinc-900">
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-zinc-200 text-left text-sm dark:divide-zinc-800">
                    <thead class="bg-zinc-50 text-xs font-semibold uppercase tracking-wider text-zinc-500 dark:bg-zinc-800/60 dark:text-zinc-400">
                        <tr>
                            <th class="px-4 py-3">#</th>
                            <th class="px-4 py-3">Product</th>
                            <th class="px-4 py-3">Customer</th>
                            <th class="px-4 py-3">Staff Member</th>
                            <th class="px-4 py-3 text-right">Qty</th>
                            <th class="px-4 py-3 text-right">Total Price</th>
                            <th class="px-4 py-3">Date</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-zinc-200 dark:divide-zinc-800">
                        @forelse ($sales as $sale)
                            <tr class="hover:bg-zinc-50/70 dark:hover:bg-zinc-800/40">
                                <td class="px-4 py-3 font-medium text-zinc-900 dark:text-zinc-100">
                                    {{ $sale->id }}
                                </td>
                                <td class="px-4 py-3 text-zinc-900 dark:text-zinc-100">
                                    {{ $sale->product?->name ?? 'Deleted Product' }}
                                </td>
                                <td class="px-4 py-3 text-zinc-600 dark:text-zinc-300">
                                    {{ $sale->customer?->full_name ?? 'Walk-in' }}
                                </td>
                                <td class="px-4 py-3 text-zinc-600 dark:text-zinc-300">
                                    {{ $sale->seller?->full_name ?? $sale->seller?->username ?? 'Unknown' }}
                                </td>
                                <td class="px-4 py-3 text-right text-zinc-900 dark:text-zinc-100">
                                    {{ $sale->quantity }}
                                </td>
                                <td class="px-4 py-3 text-right font-medium text-zinc-900 dark:text-zinc-100">
                                    {{ number_format($sale->total_price, 2) }}
                                </td>
                                <td class="px-4 py-3 text-zinc-500 dark:text-zinc-400">
                                    {{ $sale->created_at?->format('M d, Y h:i A') }}
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="px-4 py-8 text-center text-zinc-500 dark:text-zinc-400">
                                    No sales recorded yet.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            @if ($sales->hasPages())
                <div class="border-t border-zinc-200 px-4 py-3 dark:border-zinc-800">
                    {{ $sales->links() }}
                </div>
            @endif
        </div>
    </div>
</x-layouts::app>
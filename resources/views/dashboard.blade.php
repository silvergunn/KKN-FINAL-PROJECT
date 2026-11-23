<x-layouts::app :title="__('Dashboard')">
    <div class="space-y-6 p-6">
        <div class="flex flex-wrap items-center justify-between gap-4">
            <div>
                <h1 class="text-2xl font-semibold text-zinc-900 dark:text-zinc-100">POS Overview</h1>
                <p class="text-sm text-zinc-500 dark:text-zinc-400">
                    Welcome back, {{ auth()->user()->full_name ?? auth()->user()->username }}.
                </p>
            </div>
            <a href="{{ route('sales.create') }}"
               class="rounded-lg bg-zinc-900 px-4 py-2 text-sm font-medium text-white hover:bg-zinc-800 dark:bg-white dark:text-zinc-900 dark:hover:bg-zinc-200">
                + Record New Sale
            </a>
        </div>

        <!-- Top Summary Cards (Replaces the 3 striped boxes) -->
        <div class="grid gap-4 md:grid-cols-3">
            <div class="rounded-xl border border-zinc-200 bg-white p-5 shadow-sm dark:border-zinc-800 dark:bg-zinc-900">
                <p class="text-sm font-medium text-zinc-500 dark:text-zinc-400">Total Revenue</p>
                <p class="mt-2 text-3xl font-semibold text-zinc-900 dark:text-zinc-100">
                    {{ number_format($totalRevenue, 2) }}
                </p>
                <p class="mt-1 text-xs text-zinc-500 dark:text-zinc-400">
                    Across {{ $totalSalesCount }} completed {{ Str::plural('sale', $totalSalesCount) }}
                </p>
            </div>

            <div class="rounded-xl border border-zinc-200 bg-white p-5 shadow-sm dark:border-zinc-800 dark:bg-zinc-900">
                <p class="text-sm font-medium text-zinc-500 dark:text-zinc-400">Catalog Products</p>
                <p class="mt-2 text-3xl font-semibold text-zinc-900 dark:text-zinc-100">
                    {{ $totalProducts }}
                </p>
                <a href="{{ route('products.index') }}" class="mt-1 inline-block text-xs font-medium text-zinc-600 underline hover:text-zinc-900 dark:text-zinc-300">
                    Manage inventory &rarr;
                </a>
            </div>

            <div class="rounded-xl border border-zinc-200 bg-white p-5 shadow-sm dark:border-zinc-800 dark:bg-zinc-900">
                <p class="text-sm font-medium text-zinc-500 dark:text-zinc-400">Registered Customers</p>
                <p class="mt-2 text-3xl font-semibold text-zinc-900 dark:text-zinc-100">
                    {{ $totalCustomers }}
                </p>
                <a href="{{ route('customers.index') }}" class="mt-1 inline-block text-xs font-medium text-zinc-600 underline hover:text-zinc-900 dark:text-zinc-300">
                    View customer directory &rarr;
                </a>
            </div>
        </div>

        <!-- Bottom Section (Replaces the large bottom striped box) -->
        <div class="grid gap-6 lg:grid-cols-3">
            <!-- Recent Sales -->
            <div class="overflow-hidden rounded-xl border border-zinc-200 bg-white shadow-sm lg:col-span-2 dark:border-zinc-800 dark:bg-zinc-900">
                <div class="flex items-center justify-between border-b border-zinc-200 px-5 py-4 dark:border-zinc-800">
                    <h2 class="text-base font-semibold text-zinc-900 dark:text-zinc-100">Recent Transactions</h2>
                    <a href="{{ route('sales.index') }}" class="text-xs font-medium text-zinc-600 hover:text-zinc-900 dark:text-zinc-300">
                        View all &rarr;
                    </a>
                </div>
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-zinc-200 text-left text-sm dark:divide-zinc-800">
                        <thead class="bg-zinc-50 text-xs font-semibold uppercase tracking-wider text-zinc-500 dark:bg-zinc-800/60 dark:text-zinc-400">
                            <tr>
                                <th class="px-4 py-3">Product</th>
                                <th class="px-4 py-3">Customer</th>
                                <th class="px-4 py-3 text-right">Qty</th>
                                <th class="px-4 py-3 text-right">Total</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-zinc-200 dark:divide-zinc-800">
                            @forelse ($recentSales as $sale)
                                <tr>
                                    <td class="px-4 py-3 font-medium text-zinc-900 dark:text-zinc-100">
                                        {{ $sale->product?->name ?? 'Deleted Product' }}
                                    </td>
                                    <td class="px-4 py-3 text-zinc-600 dark:text-zinc-300">
                                        {{ $sale->customer?->full_name ?? 'Walk-in' }}
                                    </td>
                                    <td class="px-4 py-3 text-right text-zinc-900 dark:text-zinc-100">
                                        {{ $sale->quantity }}
                                    </td>
                                    <td class="px-4 py-3 text-right font-medium text-zinc-900 dark:text-zinc-100">
                                        {{ number_format($sale->total_price, 2) }}
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="px-4 py-6 text-center text-zinc-500 dark:text-zinc-400">
                                        No sales recorded yet. Click "Record New Sale" to get started.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Low Stock Watchlist -->
            <div class="overflow-hidden rounded-xl border border-zinc-200 bg-white shadow-sm dark:border-zinc-800 dark:bg-zinc-900">
                <div class="border-b border-zinc-200 px-5 py-4 dark:border-zinc-800">
                    <h2 class="text-base font-semibold text-zinc-900 dark:text-zinc-100">Low Stock Items</h2>
                </div>
                <div class="divide-y divide-zinc-200 dark:divide-zinc-800">
                    @forelse ($lowStockProducts as $item)
                        <div class="flex items-center justify-between px-5 py-3 text-sm">
                            <span class="font-medium text-zinc-900 dark:text-zinc-100">{{ $item->name }}</span>
                            <span class="rounded-full px-2.5 py-0.5 text-xs font-medium {{ $item->stock_quantity === 0 ? 'bg-red-100 text-red-700 dark:bg-red-950 dark:text-red-300' : 'bg-amber-100 text-amber-800 dark:bg-amber-950 dark:text-amber-300' }}">
                                {{ $item->stock_quantity }} left
                            </span>
                        </div>
                    @empty
                        <p class="px-5 py-6 text-center text-sm text-zinc-500 dark:text-zinc-400">
                            All products are well stocked.
                        </p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</x-layouts::app>
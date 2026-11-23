<x-layouts::app :title="__('Dashboard')">
    <div class="space-y-6 p-6">
        <div class="flex flex-wrap items-center justify-between gap-4">
            <div>
                <p class="text-xs font-semibold uppercase tracking-widest text-terracotta-600 dark:text-terracotta-500">
                    Point of Sale
                </p>
                <h1 class="mt-1 text-2xl font-semibold tracking-tight text-espresso-900 dark:text-oat-50">
                    POS Overview
                </h1>
                <p class="text-sm text-espresso-600 dark:text-espresso-400">
                    Welcome back, {{ auth()->user()->full_name ?? auth()->user()->username }}.
                </p>
            </div>
            <a href="{{ route('sales.create') }}"
               class="inline-flex items-center gap-1.5 rounded-xl bg-terracotta-600 px-4 py-2.5 text-sm font-medium text-crema shadow-xs transition hover:bg-terracotta-700">
                <span>+ Record New Sale</span>
            </a>
        </div>

        <!-- Top Summary Cards -->
        <div class="grid gap-4 md:grid-cols-3">
            <div class="rounded-2xl border border-almond bg-crema p-5 shadow-xs dark:border-espresso-700 dark:bg-espresso-900">
                <p class="text-sm font-medium text-espresso-600 dark:text-espresso-400">Total Revenue</p>
                <p class="mt-2 text-3xl font-bold tracking-tight text-espresso-900 dark:text-oat-50">
                    &#8369;{{ number_format($totalRevenue, 2) }}
                </p>
                <p class="mt-2 inline-flex items-center rounded-full bg-sage-100 px-2.5 py-0.5 text-xs font-medium text-sage-700 dark:bg-sage-700/30 dark:text-sage-100">
                    Across {{ $totalSalesCount }} completed {{ Str::plural('sale', $totalSalesCount) }}
                </p>
            </div>

            <div class="rounded-2xl border border-almond bg-crema p-5 shadow-xs dark:border-espresso-700 dark:bg-espresso-900">
                <p class="text-sm font-medium text-espresso-600 dark:text-espresso-400">Catalog Products</p>
                <p class="mt-2 text-3xl font-bold tracking-tight text-espresso-900 dark:text-oat-50">
                    {{ $totalProducts }}
                </p>
                <a href="{{ route('products.index') }}" class="mt-2 inline-block text-xs font-semibold text-terracotta-600 hover:text-terracotta-700 dark:text-terracotta-500">
                    Manage inventory &rarr;
                </a>
            </div>

            <div class="rounded-2xl border border-almond bg-crema p-5 shadow-xs dark:border-espresso-700 dark:bg-espresso-900">
                <p class="text-sm font-medium text-espresso-600 dark:text-espresso-400">Registered Customers</p>
                <p class="mt-2 text-3xl font-bold tracking-tight text-espresso-900 dark:text-oat-50">
                    {{ $totalCustomers }}
                </p>
                <a href="{{ route('customers.index') }}" class="mt-2 inline-block text-xs font-semibold text-terracotta-600 hover:text-terracotta-700 dark:text-terracotta-500">
                    View customer directory &rarr;
                </a>
            </div>
        </div>

        <!-- Bottom Section -->
        <div class="grid gap-6 lg:grid-cols-3">
            <!-- Recent Transactions -->
            <div class="overflow-hidden rounded-2xl border border-almond bg-crema shadow-xs lg:col-span-2 dark:border-espresso-700 dark:bg-espresso-900">
                <div class="flex items-center justify-between border-b border-almond px-5 py-4 dark:border-espresso-700">
                    <h2 class="text-base font-semibold text-espresso-900 dark:text-oat-50">Recent Transactions</h2>
                    <a href="{{ route('sales.index') }}" class="text-xs font-semibold text-terracotta-600 hover:text-terracotta-700 dark:text-terracotta-500">
                        View all &rarr;
                    </a>
                </div>
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-almond text-left text-sm dark:divide-espresso-700">
                        <thead class="bg-oat-100/80 text-xs font-semibold uppercase tracking-wider text-espresso-600 dark:bg-espresso-800 dark:text-espresso-400">
                            <tr>
                                <th class="px-4 py-3">Product</th>
                                <th class="px-4 py-3">Customer</th>
                                <th class="px-4 py-3 text-right">Qty</th>
                                <th class="px-4 py-3 text-right">Total</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-almond/70 dark:divide-espresso-800">
                            @forelse ($recentSales as $sale)
                                <tr class="transition hover:bg-oat-50 dark:hover:bg-espresso-800/60">
                                    <td class="px-4 py-3 font-medium text-espresso-900 dark:text-oat-50">
                                        {{ $sale->product?->name ?? 'Deleted Product' }}
                                    </td>
                                    <td class="px-4 py-3 text-espresso-600 dark:text-oat-200">
                                        {{ $sale->customer?->full_name ?? 'Walk-in' }}
                                    </td>
                                    <td class="px-4 py-3 text-right text-espresso-900 dark:text-oat-50">
                                        {{ $sale->quantity }}
                                    </td>
                                    <td class="px-4 py-3 text-right font-semibold text-espresso-900 dark:text-oat-50">
                                        &#8369;{{ number_format($sale->total_price, 2) }}
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="px-4 py-6 text-center text-espresso-600 dark:text-espresso-400">
                                        No sales recorded yet. Click "Record New Sale" to get started.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Low Stock Watchlist -->
            <div class="overflow-hidden rounded-2xl border border-almond bg-crema shadow-xs dark:border-espresso-700 dark:bg-espresso-900">
                <div class="border-b border-almond px-5 py-4 dark:border-espresso-700">
                    <h2 class="text-base font-semibold text-espresso-900 dark:text-oat-50">Low Stock Items</h2>
                </div>
                <div class="divide-y divide-almond/70 dark:divide-espresso-800">
                    @forelse ($lowStockProducts as $item)
                        <div class="flex items-center justify-between px-5 py-3 text-sm">
                            <span class="font-medium text-espresso-900 dark:text-oat-50">{{ $item->name }}</span>
                            <span class="rounded-full px-2.5 py-0.5 text-xs font-semibold {{ $item->stock_quantity === 0 ? 'bg-red-100 text-red-700 dark:bg-red-950 dark:text-red-300' : 'bg-terracotta-100 text-terracotta-700 dark:bg-terracotta-600/25 dark:text-terracotta-100' }}">
                                {{ $item->stock_quantity }} left
                            </span>
                        </div>
                    @empty
                        <p class="px-5 py-6 text-center text-sm text-sage-700 dark:text-sage-100">
                            All products are well stocked.
                        </p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</x-layouts::app>
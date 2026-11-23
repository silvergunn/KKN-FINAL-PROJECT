<x-layouts::app :title="__('Add Staff Member')">
    <div class="mx-auto max-w-2xl space-y-6 p-6">
        <div class="flex flex-wrap items-center justify-between gap-4">
            <div>
                <p class="text-xs font-semibold uppercase tracking-widest text-terracotta-600 dark:text-terracotta-500">
                    Management / Staff
                </p>
                <h1 class="mt-1 text-2xl font-semibold tracking-tight text-espresso-900 dark:text-oat-50">
                    Add Staff Member
                </h1>
                <p class="text-sm text-espresso-600 dark:text-espresso-400">
                    Create a new authenticated POS staff account.
                </p>
            </div>
            <a href="{{ route('staff.index') }}"
               class="rounded-xl border border-almond bg-crema px-4 py-2 text-sm font-medium text-espresso-700 transition hover:bg-oat-100 dark:border-espresso-700 dark:bg-espresso-900 dark:text-oat-200">
                Back to Staff
            </a>
        </div>

        <form method="POST" action="{{ route('staff.store') }}" enctype="multipart/form-data"
              class="space-y-6 rounded-2xl border border-almond bg-crema p-6 shadow-xs dark:border-espresso-700 dark:bg-espresso-900">
            @csrf

            @include('staff._form')

            <div class="flex items-center justify-end gap-3 pt-2">
                <a href="{{ route('staff.index') }}"
                   class="rounded-xl border border-almond bg-white px-4 py-2 text-sm font-medium text-espresso-700 transition hover:bg-oat-100 dark:border-espresso-700 dark:bg-espresso-800 dark:text-oat-200">
                    Cancel
                </a>
                <button type="submit"
                        class="rounded-xl bg-terracotta-600 px-4 py-2 text-sm font-medium text-crema shadow-xs transition hover:bg-terracotta-700">
                    Save Staff Member
                </button>
            </div>
        </form>
    </div>
</x-layouts::app>
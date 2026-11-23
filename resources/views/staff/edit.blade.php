<x-layouts::app :title="__('Edit Staff Member')">
    <div class="mx-auto max-w-2xl space-y-6 p-6">
        <div class="flex items-center justify-between">
            <div>
                <h1 class="text-2xl font-semibold text-zinc-900 dark:text-zinc-100">Edit Staff Member</h1>
                <p class="text-sm text-zinc-500 dark:text-zinc-400">Update account details, password, or avatar for {{ $staff->full_name }}.</p>
            </div>
            <a href="{{ route('staff.index') }}"
               class="rounded-lg border border-zinc-300 px-4 py-2 text-sm font-medium text-zinc-700 hover:bg-zinc-50 dark:border-zinc-700 dark:text-zinc-300 dark:hover:bg-zinc-800">
                Back to Staff
            </a>
        </div>

        <form method="POST" action="{{ route('staff.update', $staff) }}" enctype="multipart/form-data"
              class="space-y-6 rounded-xl border border-zinc-200 bg-white p-6 shadow-sm dark:border-zinc-800 dark:bg-zinc-900">
            @csrf
            @method('PUT')

            @include('staff._form', ['staff' => $staff])

            <div class="flex items-center justify-end gap-3 pt-2">
                <a href="{{ route('staff.index') }}"
                   class="rounded-lg border border-zinc-300 px-4 py-2 text-sm font-medium text-zinc-700 hover:bg-zinc-50 dark:border-zinc-700 dark:text-zinc-300 dark:hover:bg-zinc-800">
                    Cancel
                </a>
                <button type="submit"
                        class="rounded-lg bg-zinc-900 px-4 py-2 text-sm font-medium text-white hover:bg-zinc-800 dark:bg-white dark:text-zinc-900 dark:hover:bg-zinc-200">
                    Update Staff Member
                </button>
            </div>
        </form>
    </div>
</x-layouts::app>
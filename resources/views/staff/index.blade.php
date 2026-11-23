<x-layouts::app :title="__('Staff Management')">
    <div class="space-y-6 p-6">
        <div class="flex flex-wrap items-center justify-between gap-4">
            <div>
                <h1 class="text-2xl font-semibold text-zinc-900 dark:text-zinc-100">Staff Management</h1>
                <p class="text-sm text-zinc-500 dark:text-zinc-400">Manage POS staff accounts, avatars, and credentials.</p>
            </div>
            <a href="{{ route('staff.create') }}"
               class="rounded-lg bg-zinc-900 px-4 py-2 text-sm font-medium text-white hover:bg-zinc-800 dark:bg-white dark:text-zinc-900 dark:hover:bg-zinc-200">
                + Add Staff
            </a>
        </div>

        @if (session('success'))
            <div class="rounded-lg border border-emerald-300 bg-emerald-50 p-4 text-sm text-emerald-800 dark:border-emerald-800 dark:bg-emerald-950/50 dark:text-emerald-300">
                {{ session('success') }}
            </div>
        @endif

        @if (session('error'))
            <div class="rounded-lg border border-red-300 bg-red-50 p-4 text-sm text-red-700 dark:border-red-800 dark:bg-red-950/50 dark:text-red-300">
                {{ session('error') }}
            </div>
        @endif

        <div class="overflow-hidden rounded-xl border border-zinc-200 bg-white shadow-sm dark:border-zinc-800 dark:bg-zinc-900">
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-zinc-200 text-left text-sm dark:divide-zinc-800">
                    <thead class="bg-zinc-50 text-xs font-semibold uppercase tracking-wider text-zinc-500 dark:bg-zinc-800/60 dark:text-zinc-400">
                        <tr>
                            <th class="px-4 py-3">Staff Member</th>
                            <th class="px-4 py-3">Username</th>
                            <th class="px-4 py-3">Joined</th>
                            <th class="px-4 py-3 text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-zinc-200 dark:divide-zinc-800">
                        @forelse ($staff as $member)
                            <tr class="hover:bg-zinc-50/70 dark:hover:bg-zinc-800/40">
                                <td class="px-4 py-3">
                                    <div class="flex items-center gap-3">
                                        @if ($member->avatar_url)
                                            <img src="{{ $member->avatar_url }}" alt="{{ $member->full_name }}"
                                                 class="h-10 w-10 rounded-full object-cover ring-1 ring-zinc-200 dark:ring-zinc-700">
                                        @else
                                            <div class="flex h-10 w-10 items-center justify-center rounded-full bg-zinc-200 text-xs font-semibold uppercase text-zinc-700 dark:bg-zinc-800 dark:text-zinc-200">
                                                {{ mb_substr($member->full_name ?? $member->username, 0, 2) }}
                                            </div>
                                        @endif
                                        <div>
                                            <div class="font-medium text-zinc-900 dark:text-zinc-100">
                                                {{ $member->full_name }}
                                                @if ($member->id === auth()->id())
                                                    <span class="ml-1.5 rounded bg-zinc-100 px-1.5 py-0.5 text-xs text-zinc-600 dark:bg-zinc-800 dark:text-zinc-300">You</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-4 py-3 text-zinc-600 dark:text-zinc-300">
                                    {{ $member->username }}
                                </td>
                                <td class="px-4 py-3 text-zinc-500 dark:text-zinc-400">
                                    {{ $member->created_at?->format('M d, Y') }}
                                </td>
                                <td class="px-4 py-3 text-right">
                                    <div class="inline-flex items-center gap-2">
                                        <a href="{{ route('staff.edit', $member) }}"
                                           class="rounded-md border border-zinc-300 px-3 py-1.5 text-xs font-medium text-zinc-700 hover:bg-zinc-50 dark:border-zinc-700 dark:text-zinc-300 dark:hover:bg-zinc-800">
                                            Edit
                                        </a>
                                        @if ($member->id !== auth()->id())
                                            <form method="POST" action="{{ route('staff.destroy', $member) }}"
                                                  onsubmit="return confirm('Delete this staff member?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                        class="rounded-md border border-red-300 px-3 py-1.5 text-xs font-medium text-red-600 hover:bg-red-50 dark:border-red-800 dark:text-red-400 dark:hover:bg-red-950/50">
                                                    Delete
                                                </button>
                                            </form>
                                        @endif
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="px-4 py-8 text-center text-zinc-500 dark:text-zinc-400">
                                    No staff members found.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            @if ($staff->hasPages())
                <div class="border-t border-zinc-200 px-4 py-3 dark:border-zinc-800">
                    {{ $staff->links() }}
                </div>
            @endif
        </div>
    </div>
</x-layouts::app>
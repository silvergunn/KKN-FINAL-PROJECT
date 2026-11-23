<x-layouts::app :title="__('Staff Management')">
    <div class="space-y-6 p-6">
        <div class="flex flex-wrap items-center justify-between gap-4">
            <div>
                <p class="text-xs font-semibold uppercase tracking-widest text-terracotta-600 dark:text-terracotta-500">
                    Management / Staff
                </p>
                <h1 class="mt-1 text-2xl font-semibold tracking-tight text-espresso-900 dark:text-oat-50">
                    Staff Management
                </h1>
                <p class="text-sm text-espresso-600 dark:text-espresso-400">
                    Manage POS staff accounts, avatars, and credentials.
                </p>
            </div>
            <a href="{{ route('staff.create') }}"
               class="inline-flex items-center gap-1.5 rounded-xl bg-terracotta-600 px-4 py-2.5 text-sm font-medium text-crema shadow-xs transition hover:bg-terracotta-700">
                <span>+ Add Staff</span>
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

        <div class="overflow-hidden rounded-2xl border border-almond bg-crema shadow-xs dark:border-espresso-700 dark:bg-espresso-900">
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-almond text-left text-sm dark:divide-espresso-700">
                    <thead class="bg-oat-100/80 text-xs font-semibold uppercase tracking-wider text-espresso-600 dark:bg-espresso-800 dark:text-espresso-400">
                        <tr>
                            <th class="px-4 py-3.5">Staff Member</th>
                            <th class="px-4 py-3.5">Username</th>
                            <th class="px-4 py-3.5">Joined</th>
                            <th class="px-4 py-3.5 text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-almond/70 dark:divide-espresso-800">
                        @forelse ($staff as $member)
                            <tr class="transition hover:bg-oat-50 dark:hover:bg-espresso-800/60">
                                <td class="px-4 py-3.5">
                                    <div class="flex items-center gap-3">
                                        @if ($member->avatar_url)
                                            <img src="{{ $member->avatar_url }}" alt="{{ $member->full_name }}"
                                                 class="h-10 w-10 rounded-full object-cover ring-1 ring-almond dark:ring-espresso-700">
                                        @else
                                            <div class="flex h-10 w-10 items-center justify-center rounded-full bg-oat-100 text-xs font-semibold uppercase text-espresso-800 ring-1 ring-almond dark:bg-espresso-800 dark:text-oat-100 dark:ring-espresso-700">
                                                {{ mb_substr($member->full_name ?? $member->username, 0, 2) }}
                                            </div>
                                        @endif
                                        <div class="font-medium text-espresso-900 dark:text-oat-50">
                                            {{ $member->full_name }}
                                            @if ($member->id === auth()->id())
                                                <span class="ml-1.5 rounded-full bg-terracotta-100 px-2 py-0.5 text-xs font-semibold text-terracotta-700 dark:bg-terracotta-600/25 dark:text-terracotta-100">
                                                    You
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </td>
                                <td class="px-4 py-3.5 text-espresso-600 dark:text-oat-200">
                                    {{ $member->username }}
                                </td>
                                <td class="px-4 py-3.5 text-espresso-600 dark:text-espresso-400">
                                    {{ $member->created_at?->format('M d, Y') }}
                                </td>
                                <td class="px-4 py-3.5 text-right">
                                    <div class="inline-flex items-center gap-2">
                                        <a href="{{ route('staff.edit', $member) }}"
                                           class="rounded-xl border border-almond bg-oat-50 px-3.5 py-1.5 text-xs font-semibold text-espresso-900 transition hover:border-terracotta-600/40 hover:bg-oat-100 dark:border-espresso-700 dark:bg-espresso-800 dark:text-oat-100 dark:hover:bg-espresso-700">
                                            Edit
                                        </a>
                                        @if ($member->id !== auth()->id())
                                            <form method="POST" action="{{ route('staff.destroy', $member) }}"
                                                  onsubmit="return confirm('Delete this staff member?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                        class="rounded-xl px-3 py-1.5 text-xs font-medium text-espresso-600 transition hover:bg-red-50 hover:text-red-700 dark:text-espresso-400 dark:hover:bg-red-950/40 dark:hover:text-red-300">
                                                    Delete
                                                </button>
                                            </form>
                                        @endif
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="px-4 py-10 text-center text-espresso-600 dark:text-espresso-400">
                                    No staff members found.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            @if ($staff->hasPages())
                <div class="border-t border-almond px-4 py-3 dark:border-espresso-700">
                    {{ $staff->links() }}
                </div>
            @endif
        </div>
    </div>
</x-layouts::app>
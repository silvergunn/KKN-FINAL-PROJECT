<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStaffRequest;
use App\Http\Requests\UpdateStaffRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class StaffController extends Controller
{
    public function index(): View
    {
        $staff = User::orderBy('full_name')->paginate(15);

        return view('staff.index', compact('staff'));
    }

    public function create(): View
    {
        return view('staff.create');
    }

    public function store(StoreStaffRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        $data = [
            'username' => $validated['username'],
            'full_name' => $validated['full_name'],
            'password' => Hash::make($validated['password']),
        ];

        if (Schema::hasColumn('users', 'name')) {
            $data['name'] = $validated['full_name'];
        }

        if (Schema::hasColumn('users', 'email')) {
            $data['email'] = $validated['email'] ?? ($validated['username'] . '@pos.local');
        }

        if ($request->hasFile('avatar')) {
            $data['avatar'] = $request->file('avatar')->store('avatars', 'public');
        }

        User::create($data);

        return redirect()
            ->route('staff.index')
            ->with('success', 'Staff member created successfully.');
    }

    public function edit(User $staff): View
    {
        return view('staff.edit', compact('staff'));
    }

    public function update(UpdateStaffRequest $request, User $staff): RedirectResponse
    {
        $validated = $request->validated();

        $data = [
            'username' => $validated['username'],
            'full_name' => $validated['full_name'],
        ];

        if (Schema::hasColumn('users', 'name')) {
            $data['name'] = $validated['full_name'];
        }

        if (Schema::hasColumn('users', 'email') && ! empty($validated['email'])) {
            $data['email'] = $validated['email'];
        }

        if (! empty($validated['password'])) {
            $data['password'] = Hash::make($validated['password']);
        }

        if ($request->hasFile('avatar')) {
            if ($staff->avatar) {
                Storage::disk('public')->delete($staff->avatar);
            }
            $data['avatar'] = $request->file('avatar')->store('avatars', 'public');
        }

        $staff->update($data);

        return redirect()
            ->route('staff.index')
            ->with('success', 'Staff member updated successfully.');
    }

    public function destroy(User $staff): RedirectResponse
    {
        if ($staff->id === Auth::id()) {
            return redirect()
                ->route('staff.index')
                ->with('error', 'You cannot delete your own active account.');
        }

        if ($staff->sales()->exists()) {
            return redirect()
                ->route('staff.index')
                ->with('error', 'Cannot delete this staff member because they have recorded sales transactions.');
        }

        if ($staff->avatar) {
            Storage::disk('public')->delete($staff->avatar);
        }

        $staff->delete();

        return redirect()
            ->route('staff.index')
            ->with('success', 'Staff member deleted successfully.');
    }
}
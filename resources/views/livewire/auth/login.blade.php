<x-layouts::auth :title="__('Staff login')">
    <div class="flex flex-col gap-6">
        <x-auth-header
            :title="__('Sign in to Midnight POS')"
            :description="__('Enter your staff username and password')"
        />

        <x-auth-session-status class="text-center" :status="session('status')" />

        <form method="POST" action="{{ route('login.store') }}" class="flex flex-col gap-6">
            @csrf

            <flux:input
                name="username"
                :label="__('Username')"
                :value="old('username')"
                type="text"
                required
                autofocus
                autocomplete="username"
                maxlength="50"
                placeholder="Your username"
            />

            <flux:input
                name="password"
                :label="__('Password')"
                type="password"
                required
                autocomplete="current-password"
                :placeholder="__('Password')"
                viewable
            />

            <flux:checkbox
                name="remember"
                :label="__('Remember me')"
                :checked="old('remember')"
            />

            <flux:button variant="primary" type="submit" class="w-full">
                {{ __('Log in') }}
            </flux:button>
        </form>
    </div>
</x-layouts::auth>

<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class CreateFirstStaff extends Command
{
    protected $signature = 'pos:create-first-staff';

    protected $description = 'Create the first POS staff account';

    public function handle(): int
    {
        if (User::withTrashed()->exists()) {
            $this->error('A staff account already exists.');

            return self::FAILURE;
        }

        $username = Str::lower(trim((string) $this->ask('Username')));
        $fullName = trim((string) $this->ask('Full name'));
        $email = Str::lower(trim((string) $this->ask('Email')));
        $password = (string) $this->secret('Password (at least 12 characters)');
        $confirmation = (string) $this->secret('Confirm password');

        if ($password !== $confirmation) {
            $this->error('The passwords do not match.');

            return self::FAILURE;
        }

        $data = compact('username', 'fullName', 'email', 'password');

        $validator = Validator::make($data, [
            'username' => ['required', 'string', 'alpha_dash:ascii', 'min:3', 'max:50', 'unique:users,username'],
            'fullName' => ['required', 'string', 'max:100'],
            'email' => ['required', 'email', 'max:255', 'unique:users,email'],
            'password' => ['required', 'string', 'min:12'],
        ]);

        if ($validator->fails()) {
            foreach ($validator->errors()->all() as $message) {
                $this->error($message);
            }

            return self::FAILURE;
        }

        User::create([
            'username' => $username,
            'full_name' => $fullName,
            'name' => $fullName,
            'email' => $email,
            'password' => Hash::make($password),
        ]);

        $this->info('First staff account created.');

        return self::SUCCESS;
    }
}
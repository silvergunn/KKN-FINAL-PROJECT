<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $adminData = [
            'username' => 'admin',
            'full_name' => 'Store Administrator',
            'password' => Hash::make('password123'),
        ];

        if (Schema::hasColumn('users', 'name')) {
            $adminData['name'] = 'Store Administrator';
        }

        if (Schema::hasColumn('users', 'email')) {
            $adminData['email'] = 'admin@pos.local';
        }

        if (Schema::hasColumn('users', 'email_verified_at')) {
            $adminData['email_verified_at'] = now();
        }

        User::updateOrCreate(
            ['username' => 'admin'],
            $adminData
        );

        $products = [
            ['name' => 'Iced Americano', 'price' => 120.00, 'stock_quantity' => 50],
            ['name' => 'Caramel Macchiato', 'price' => 155.00, 'stock_quantity' => 35],
            ['name' => 'Matcha Latte', 'price' => 165.00, 'stock_quantity' => 25],
            ['name' => 'Chocolate Croissant', 'price' => 95.00, 'stock_quantity' => 20],
        ];

        foreach ($products as $product) {
            Product::firstOrCreate(['name' => $product['name']], $product);
        }

        $customers = [
            ['full_name' => 'Juan Dela Cruz', 'email' => 'juan@example.com', 'phone' => '09171234567'],
            ['full_name' => 'Maria Santos', 'email' => 'maria@example.com', 'phone' => '09187654321'],
        ];

        foreach ($customers as $customer) {
            Customer::firstOrCreate(['email' => $customer['email']], $customer);
        }
    }
}

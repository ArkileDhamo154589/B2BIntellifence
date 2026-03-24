<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SuperAdminSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Achilleas',
            'last_name' => 'Admin',
            'email' => 'arkiledamo97@gmail.com',
            'phone' => '6900000000',
            'password' => Hash::make('123456789'),
            'role' => 'super_admin',
            'company_id' => null,
            'is_active' => true,
        ]);
    }
}

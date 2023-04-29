<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'first_name' => "mostafa",
            'last_name' => "gamal",
            'email' => "admin@email.com",
            'phone' => "01121238817",
            'password' => "12345678",
            'type' => "super_admin"
        ]);
    }
}

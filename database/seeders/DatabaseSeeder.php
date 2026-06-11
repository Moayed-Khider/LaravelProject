<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Role;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // إنشاء الأدوار
        $admin = Role::create([
            'name'        => 'admin',
            'description' => 'Administrator',
        ]);

        $user = Role::create([
            'name'        => 'user',
            'description' => 'Regular User',
        ]);

        // إنشاء مستخدم admin
        $adminUser = User::create([
            'name'     => 'Admin',
            'email'    => 'admin@example.com',
            'password' => Hash::make('password'),
        ]);
        $adminUser->roles()->attach($admin);

        // إنشاء مستخدم عادي
        $regularUser = User::create([
            'name'     => 'User',
            'email'    => 'user@example.com',
            'password' => Hash::make('password'),
        ]);
        $regularUser->roles()->attach($user);
    }
}
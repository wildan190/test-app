<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserFactory extends Factory
{
    protected $model = User::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => Hash::make('password'), // Default password
            'remember_token' => null,
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function (User $user) {
            // Ambil atau buat Role
            $adminRole = Role::firstOrCreate(['name' => 'Admin']);
            $managerRole = Role::firstOrCreate(['name' => 'Manager']);
            $userRole = Role::firstOrCreate(['name' => 'User']);

            // Ambil atau buat Permissions
            $permissions = Permission::pluck('id', 'name'); // Ambil ID dan Nama permission

            // Set Role dan Permission sesuai spesifikasi
            switch ($user->email) {
                case 'admin@example.com':
                    $user->assignRole($adminRole);
                    $user->syncPermissions($permissions); // Admin mendapatkan semua akses
                    break;

                case 'manager@example.com':
                    $user->assignRole($managerRole);
                    $managerPermissions = Permission::whereIn('id', [3, 7])->get();
                    $user->syncPermissions($managerPermissions); // Manager hanya mendapatkan id 3 & 7
                    break;

                case 'user@example.com':
                    $user->assignRole($userRole);
                    $user->syncPermissions([]); // User tidak mendapatkan izin apapun
                    break;
            }
        });
    }
}

<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            'Permissions',
            'Roles',
            'Report',
            'CreateReport',
            'Settings',
            'Assign',
            'AccessUser',
        ];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }

        $adminRole = Role::firstOrCreate(['name' => 'Admin']);
        $managerRole = Role::firstOrCreate(['name' => 'Manager']);
        $userRole = Role::firstOrCreate(['name' => 'User']);

        $adminRole->syncPermissions(Permission::all());

        $managerPermissions = Permission::whereIn('id', [3, 7])->get();
        $managerRole->syncPermissions($managerPermissions);

        $userRole->syncPermissions([]);

        $admin = User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
        ]);
        $admin->assignRole($adminRole);
        $admin->syncPermissions(Permission::all());

        $manager = User::factory()->create([
            'name' => 'Manager User',
            'email' => 'manager@example.com',
        ]);
        $manager->assignRole($managerRole);
        $manager->syncPermissions($managerPermissions);

        $user = User::factory()->create([
            'name' => 'Regular User',
            'email' => 'user@example.com',
        ]);
        $user->assignRole($userRole);
        $user->syncPermissions([]);

        $this->command->info('Permissions, Roles, and Users seeded successfully!');
    }
}

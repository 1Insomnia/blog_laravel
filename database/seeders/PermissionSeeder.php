<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            'post_read',
            'post_create',
            'post_edit',
            'post_show',
            'post_delete',
        ];

        $user_permissions = [
            'post_read',
            'post_show',
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }

         $admin = Role::create(['name' => 'admin']);
         $user = Role::create(['name' => 'user']);

        foreach ($user_permissions as $permission) {
            $user->givePermissionTo($permission);
        }

        foreach ($permissions as $permission) {
            $admin->givePermissionTo($permission);
        }

    }
}
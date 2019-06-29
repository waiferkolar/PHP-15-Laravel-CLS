<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run()
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        Permission::create(['name' => 'PHP Tutorial']);
        Permission::create(['name' => 'Java Tutorial']);
        Permission::create(['name' => 'C# Tutorial']);
        Permission::create(['name' => 'C++ Tutorial']);
        Permission::create(['name' => 'Python Tutorial']);

        Role::create(['name' => 'Admin']);
        Role::create(['name' => 'Manager']);
        Role::create(['name' => 'User']);
        Role::create(['name' => 'Guest']);


    }
}
<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // this can be done as separate statements
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'spv']);
        Role::create(['name' => 'manager']);
        Role::create(['name' => 'authorized_manager']);
        Role::create(['name' => 'security']);

    }
}

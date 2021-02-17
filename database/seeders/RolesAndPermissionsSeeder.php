<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        $this->createPermissions();

        $this->createRoles();
    }

    /**
     * @return void
     */
    protected function createPermissions(): void
    {
        // Permissions
    }

    /**
     * @return void
     */
    protected function createRoles()
    {
        Role::create(['name' => 'admin'])
            ->syncPermissions([]);

        Role::create(['name' => 'user'])
            ->syncPermissions([]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
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

        // create permissions
        Permission::create(['name' => 'create petugas']);
        Permission::create(['name' => 'edit petugas']);
        Permission::create(['name' => 'delete petugas']);

        Permission::create(['name' => 'create pasien']);
        Permission::create(['name' => 'edit pasien']);
        Permission::create(['name' => 'delete pasien']);

        Permission::create(['name' => 'create antrian']);
        Permission::create(['name' => 'edit antrian']);
        Permission::create(['name' => 'delete antrian']);

        Permission::create(['name' => 'create nakes']);
        Permission::create(['name' => 'edit nakes']);
        Permission::create(['name' => 'delete nakes']);

        // create roles and assign created permissions

        // this can be done as separate statements
        $role = Role::create(['name' => 'admin']);
        $role->givePermissionTo(['create petugas', 'edit petugas', 'delete petugas']);

        $role = Role::create(['name' => 'petugas']);
        $role->givePermissionTo(['create pasien', 'edit pasien', 'delete pasien',
                                 'create antrian', 'edit antrian', 'delete antrian',
                                 'create nakes', 'edit nakes', 'delete nakes']);

        $role = Role::create(['name' => 'pasien']);
        $role->givePermissionTo(['create antrian', 'delete antrian']);
    }
}

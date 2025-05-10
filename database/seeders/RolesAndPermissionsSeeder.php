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
    public function run(): void
    {
        // Limpa cache de permissões
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // Permissões
        $permissions = [
            'view_weapons', 'create_weapons', 'edit_weapons', 'delete_weapons',
            'view_ammunitions', 'create_ammunitions', 'edit_ammunitions', 'delete_ammunitions',
            'view_vests', 'create_vests', 'edit_vests', 'delete_vests',
            'view_badges', 'create_badges', 'edit_badges', 'delete_badges',
            'view_misc_equipments', 'create_misc_equipments', 'edit_misc_equipments', 'delete_misc_equipments',
            'view_radios', 'create_radios', 'edit_radios', 'delete_radios',
            'view_movements', 'create_movements', 'edit_movements', 'delete_movements',
            'view_audits',
            'manage_users', 'manage_roles', 'manage_permissions',
        ];

        foreach ($permissions as $name) {
            Permission::firstOrCreate(['name' => $name, 'guard_name' => 'web']);
        }

        // Papéis
        $roles = [
            'admin', 'manager', 'operator', 'viewer'
        ];

        foreach ($roles as $role) {
            Role::firstOrCreate(['name' => $role, 'guard_name' => 'web']);
        }

        // Atribuir permissões aos papéis
        Role::findByName('admin')->givePermissionTo(Permission::all());
        Role::findByName('manager')->givePermissionTo([
            'view_weapons', 'create_weapons', 'edit_weapons',
            'view_ammunitions', 'create_ammunitions', 'edit_ammunitions',
            'view_vests', 'create_vests', 'edit_vests',
            'view_badges', 'create_badges', 'edit_badges',
            'view_misc_equipments', 'create_misc_equipments', 'edit_misc_equipments',
            'view_radios', 'create_radios', 'edit_radios',
            'view_movements', 'create_movements', 'edit_movements',
            'view_audits',
        ]);
        Role::findByName('operator')->givePermissionTo([
            'view_weapons', 'create_weapons',
            'view_ammunitions', 'create_ammunitions',
            'view_vests', 'create_vests',
            'view_badges', 'create_badges',
            'view_misc_equipments', 'create_misc_equipments',
            'view_radios', 'create_radios',
            'view_movements', 'create_movements',
        ]);
        Role::findByName('viewer')->givePermissionTo([
            'view_weapons',
            'view_ammunitions',
            'view_vests',
            'view_badges',
            'view_misc_equipments',
            'view_radios',
            'view_movements',
        ]);
    }
}

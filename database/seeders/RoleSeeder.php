<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role_admin = Role::create(['name'=>'admin']);
        $role_editor = Role::create(['name'=>'editor']);

        $permission_create_rol = Permission::create(['name' => 'create roles']);
        $permission_read_rol = Permission::create(['name' => 'read roles']);
        $permission_update_rol = Permission::create(['name' => 'update roles']);
        $permission_delete_rol = Permission::create(['name' => 'delete roles']);

        $permission_create_lesson = Permission::create((['name' => 'create lesson']));
        $permission_read_lesson = Permission::create((['name' => 'read lesson']));
        $permission_update_lesson = Permission::create((['name' => 'update lesson']));
        $permission_delete_lesson = Permission::create((['name' => 'delete lesson']));

        $permission_create_category = Permission::create((['name' => 'create category']));
        $permission_read_category = Permission::create((['name' => 'read category']));
        $permission_update_category = Permission::create((['name' => 'update category']));
        $permission_delete_category = Permission::create((['name' => 'delete category']));

        $permission_admin = [$permission_create_rol,$permission_read_rol,$permission_update_rol,$permission_delete_rol,$permission_create_lesson,$permission_read_lesson,
            $permission_update_lesson,$permission_delete_lesson,$permission_create_category,$permission_read_category,$permission_update_category,$permission_delete_category];

        $permission_editor = [$permission_create_lesson,$permission_read_lesson,$permission_update_lesson,$permission_delete_lesson,$permission_create_category,
            $permission_read_category,$permission_update_category,$permission_delete_category];
        
        
        $role_admin->syncPermissions($permission_admin);
        $role_editor->syncPermissions($permission_editor);

    }
}

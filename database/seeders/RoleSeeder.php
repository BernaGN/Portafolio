<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Role::create(['name' => 'Administrador']);
        $editor = Role::create(['name' => 'Editor']);

        Permission::create([
            'name' => 'home.index',
            'description' => 'Ver Dashboard',
        ])->syncRoles([$admin, $editor]);

        Permission::create([
            'name' => 'usuarios.index',
            'description' => 'Ver Usuarios',
        ])->syncRoles([$admin, $editor]);
        Permission::create([
            'name' => 'usuarios.store',
            'description' => 'Agregar Usuarios',
        ])->syncRoles([$admin]);
        Permission::create([
            'name' => 'usuarios.update',
            'description' => 'Editar Usuarios',
        ])->syncRoles([$admin]);
        Permission::create([
            'name' => 'usuarios.destroy',
            'description' => 'Eliminar Usuarios',
        ])->syncRoles([$admin]);

        Permission::create([
            'name' => 'roles.index',
            'description' => 'Ver Rol',
        ])->syncRoles([$admin, $editor]);
        Permission::create([
            'name' => 'roles.store',
            'description' => 'Agregar Rol',
        ])->syncRoles([$admin]);
        Permission::create([
            'name' => 'roles.update',
            'description' => 'Editar Rol',
        ])->syncRoles([$admin]);
        Permission::create([
            'name' => 'roles.destroy',
            'description' => 'Eliminar Rol',
        ])->syncRoles([$admin]);

        Permission::create([
            'name' => 'auditorias.index',
            'description' => 'Ver Auditorias',
        ])->syncRoles([$admin]);

        Permission::create([
            'name' => 'permisos.index',
            'description' => 'Ver Permiso',
        ])->syncRoles([$admin, $editor]);
        Permission::create([
            'name' => 'permisos.store',
            'description' => 'Agregar Permiso',
        ])->syncRoles([$admin]);
        Permission::create([
            'name' => 'permisos.update',
            'description' => 'Editar Permiso',
        ])->syncRoles([$admin]);
        Permission::create([
            'name' => 'permisos.destroy',
            'description' => 'Eliminar Permiso',
        ])->syncRoles([$admin]);

        Permission::create([
            'name' => 'clientes.index',
            'description' => 'Ver Clientes',
        ])->syncRoles([$admin, $editor]);
        Permission::create([
            'name' => 'clientes.store',
            'description' => 'Agregar Clientes',
        ])->syncRoles([$admin]);
        Permission::create([
            'name' => 'clientes.update',
            'description' => 'Editar Clientes',
        ])->syncRoles([$admin]);
        Permission::create([
            'name' => 'clientes.destroy',
            'description' => 'Eliminar Clientes',
        ])->syncRoles([$admin]);

        Permission::create([
            'name' => 'etiquetas.index',
            'description' => 'Ver Etiquetas',
        ])->syncRoles([$admin, $editor]);
        Permission::create([
            'name' => 'etiquetas.store',
            'description' => 'Agregar Etiquetas',
        ])->syncRoles([$admin]);
        Permission::create([
            'name' => 'etiquetas.update',
            'description' => 'Editar Etiquetas',
        ])->syncRoles([$admin]);
        Permission::create([
            'name' => 'etiquetas.destroy',
            'description' => 'Eliminar Etiquetas',
        ])->syncRoles([$admin]);

        Permission::create([
            'name' => 'habilidades.index',
            'description' => 'Ver Habilidades',
        ])->syncRoles([$admin, $editor]);
        Permission::create([
            'name' => 'habilidades.store',
            'description' => 'Agregar Habilidades',
        ])->syncRoles([$admin]);
        Permission::create([
            'name' => 'habilidades.update',
            'description' => 'Editar Habilidades',
        ])->syncRoles([$admin]);
        Permission::create([
            'name' => 'habilidades.destroy',
            'description' => 'Eliminar Habilidades',
        ])->syncRoles([$admin]);

        Permission::create([
            'name' => 'servicios.index',
            'description' => 'Ver Servicios',
        ])->syncRoles([$admin, $editor]);
        Permission::create([
            'name' => 'servicios.store',
            'description' => 'Agregar Servicios',
        ])->syncRoles([$admin]);
        Permission::create([
            'name' => 'servicios.update',
            'description' => 'Editar Servicios',
        ])->syncRoles([$admin]);
        Permission::create([
            'name' => 'servicios.destroy',
            'description' => 'Eliminar Servicios',
        ])->syncRoles([$admin]);

        Permission::create([
            'name' => 'categorias.index',
            'description' => 'Ver Categorias',
        ])->syncRoles([$admin, $editor]);
        Permission::create([
            'name' => 'categorias.store',
            'description' => 'Agregar Categorias',
        ])->syncRoles([$admin]);
        Permission::create([
            'name' => 'categorias.update',
            'description' => 'Editar Categorias',
        ])->syncRoles([$admin]);
        Permission::create([
            'name' => 'categorias.destroy',
            'description' => 'Eliminar Categorias',
        ])->syncRoles([$admin]);

        Permission::create([
            'name' => 'proyectos.index',
            'description' => 'Ver Proyectos',
        ])->syncRoles([$admin, $editor]);
        Permission::create([
            'name' => 'proyectos.store',
            'description' => 'Agregar Proyectos',
        ])->syncRoles([$admin]);
        Permission::create([
            'name' => 'proyectos.update',
            'description' => 'Editar Proyectos',
        ])->syncRoles([$admin]);
        Permission::create([
            'name' => 'proyectos.destroy',
            'description' => 'Eliminar Proyectos',
        ])->syncRoles([$admin]);
    }
}

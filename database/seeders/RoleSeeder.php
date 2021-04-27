<?php

namespace Database\Seeders;

use App\Models\User;
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
        //Creacion de los roles
        $RoleAdmin = Role::create(['name' => 'admin']);
        $RoleProveedor = Role::create(['name' => 'distribuidor']);
        $RoleCliente = Role::create(['name' => 'cliente']);

        //Creacion de los permisos

        //Asignando Rol al user
        $user = User::find(1);
        $user->assignRole($RoleAdmin);
    }
}

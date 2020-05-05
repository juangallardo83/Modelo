<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
// agregamos asociacion de roles permisos y usuarios
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\User;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // creación de permisos usuarios (19 abr)
   Permission::create(['name' => 'create user']);
   Permission::create(['name' => 'read user']);
   Permission::create(['name' => 'update user']);
   Permission::create(['name' => 'delete user']);

   // creación permisos roles (19 abr)
   Permission::create(['name' => 'create role']);
   Permission::create(['name' => 'read roles ']);
   Permission::create(['name' => 'update role']);
   Permission::create(['name' => 'delete role']);

   // creación permisos  (19 abr)
   Permission::create(['name' => 'create permission']);
   Permission::create(['name' => 'read permissions ']);
   Permission::create(['name' => 'update permission']);
   Permission::create(['name' => 'delete permission']);

   // creación de roles y asignar permisos

   $role = Role::create(['name' => 'roladmin']);
   $role->givePermissionTo(Permission::all());

   $role = Role::create(['name' => 'rolmicro']);
   $role->givePermissionTo('update user');

   $role = Role::create(['name' => 'rolpequeña']);
   $role->givePermissionTo('update user');

   $role = Role::create(['name' => 'rolmediana']);
   $role->givePermissionTo('update user');

    //creamos el usuario admin
    $admin = User::create([
        'name' => 'admin',
        'apellido'=> 'apellido1',
        'empresa'=> 'admin',
        'email' => 'admin@admin.cl',
        'password' => bcrypt('12345678'),
    ]);

    // asignamos el rol admin

    $admin->assignRole('roladmin');

       //creamos el usuario microempresa
    $micro = User::create([
        'name' => 'micro',
        'apellido'=> 'apellido2',
        'empresa'=> 'micro',
        'email' => 'micro@micro.cl',
        'password' => bcrypt('12345678'),
    ]);

    // asignamos el rol microempresa

    $micro->assignRole('rolmicro');

      //creamos el usuario pequeñaempresa
      $pequeña = User::create([
        'name' => 'pequeña',
        'apellido'=> 'apellido3',
        'empresa'=> 'pequeña',
        'email' => 'pequeña@pequeña.cl',
        'password' => bcrypt('12345678'),
    ]);

     // asignamos el rol pequeñaempresa

     $pequeña->assignRole('rolpequeña');

     //creamos el usuario medianaempresa
     $mediana = User::create([
       'name' => 'mediana',
       'apellido'=> 'apellido3',
       'empresa'=> 'mediana',
       'email' => 'mediana@mediana.cl',
       'password' => bcrypt('12345678'),
   ]);

   // asignamos el rol mediana empresa

   $mediana->assignRole('rolmediana');
      
    }
}

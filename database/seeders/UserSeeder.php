<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    // Ajout des données Utilisateur dans la base de données 
    public function run()
    {
        $user_list = Permission::create(['name'=>'users.list']);
        $user_view = Permission::create(['name'=>'users.view']);
        $user_create = Permission::create(['name'=>'users.create']);
        $user_update = Permission::create(['name'=>'users.update']);
        $user_delete = Permission::create(['name'=>'users.delete']);

        $admin_role = Role::create(['name' => 'admin'] );
        $admin_role->givePermissionTo([
            $user_create,
            $user_list,
            $user_update,
            $user_delete

        ]);

        $admin = User::create([
              'name' => 'Admin',
              'email' => 'admin@admin.com',
              'password' => bcrypt('password'),
              'contact1' =>'77 511 45 67',
              'contact2' =>'77 611 85 07',
              'photo'  =>'https://thumbs.dreamstime.com/b/homme-d-affaires-noir-dans-l-ic-ne-d-avatar-de-lien-de-chemise-95853326.jpg',
              'agence_id' =>1
        ]);
        $admin->assignRole($admin_role);
        $admin->givePermissionTo([
            $user_create,
            $user_list,
            $user_update,
            $user_delete    
        ]);

          $user = User::create([
              'name' => 'user',
              'email' => 'user@user.com',
              'password' => bcrypt('password'),
              'contact1' =>'78 001 45 67',
              'contact2' =>'77 651 85 07',
              'photo'  =>'https://thumbs.dreamstime.com/b/homme-d-affaires-noir-dans-l-ic-ne-d-avatar-de-lien-de-chemise-95853326.jpg',
              'agence_id' =>1
        ]);
        $user_role = Role::create(['name' => 'user']);
        $user->assignRole($user_role);
        $user->givePermissionTo([
            $user_create,
            $user_list,
            $user_update
               
        ]);
        
        $user_role->givePermissionTo([
            $user_create,
            $user_list,
            $user_update
               
        ]);
    }
}

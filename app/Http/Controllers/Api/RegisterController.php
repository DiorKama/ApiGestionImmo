<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use App\Http\Helpers\Helper;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use App\Http\Resources\UserRessource;
use App\Http\Requests\RegisterRequest;

class RegisterController extends Controller
{
    // fonction pour enregistrer un utilisateur
    public function register(RegisterRequest  $request)
    {
      
       //register user
       $user = User::create([
        'name'        => $request->name,
        'email'       =>$request->email,
        'password'    => bcrypt($request->password),
        'contact1'   =>$request->contact1,
        'contact2'   =>$request->contact2,
        'photo'      =>$request->photo,
        'agence_id'  =>$request->agence_id
       ]);

       //assign role
       $user_role = Role::where(['name' => 'user'])->first();
       if($user_role){
        $user->assignRole($user_role);
       }
       //send response
       return new UserRessource($user);
    }
}

<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserRessource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'user_id' => $this->id,
            'name'    =>$this->name,
            'email'  =>$this->email,
            'contact1' =>$this->contact1,
            'contact2' =>$this->contact2,
            'photo'  =>$this->photo,
            'agence_id' =>$this->role_id,
            'token'  =>$this->createToken("Token")->plainTextToken,
            'roles'  =>$this->roles->pluck('name') ?? [],
            'roles.permissions' =>$this->getPermissionsViaRoles()->pluck(['name']) ?? [],
            'permissions'=>$this->permissions->pluck('name') ?? []
        ];
    }
}

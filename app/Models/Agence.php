<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Agence extends Model
{
    use HasFactory;
    protected $table = 'agences';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];

    public function user(){
        return $this->hasMany(User::class);
    }
}

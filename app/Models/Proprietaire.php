<?php

namespace App\Models;

use App\Models\Propriete;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Proprietaire extends Model
{
    use HasFactory;
    protected $table = 'proprietaires';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];

    public function propriete(){
        return $this->hasMany(Propriete::class);
    }
}

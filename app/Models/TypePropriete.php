<?php

namespace App\Models;

use App\Models\Bien;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TypePropriete extends Model
{
    use HasFactory;
    protected $table = 'type_proprietes';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];

  
    public function proprietes(){
        return $this->belongsTo(Propriete::class);
        }
    public function bien(){
        return $this->hasMany(Bien::class);
        }
}

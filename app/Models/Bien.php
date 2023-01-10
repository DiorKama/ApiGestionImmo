<?php

namespace App\Models;

use App\Models\Locataire;
use App\Models\TypePropriete;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Bien extends Model
{
    use HasFactory;
    protected $table = 'biens';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];

  
    public function typePropriete(){
        return $this->belongsTo(TypePropriete::class);
        }
        
    public function locataire(){
        return $this->hasMany(Locataire::class);
        }
}

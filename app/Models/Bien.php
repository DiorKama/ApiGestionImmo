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

  
     // la table bien reçoit l'id  de la table typePropriete
    public function typePropriete(){
        return $this->belongsTo(TypePropriete::class);
        }
       
        // L'ID bien migre vers la table locataire
    public function locataire(){
        return $this->hasMany(Locataire::class);
        }
}

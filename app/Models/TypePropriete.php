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

  // la table typePropriete reçoit l'id  de la table propriete
    public function proprietes(){
        return $this->belongsTo(Propriete::class);
        }
        // L'ID typePropriete migre vers la table biens
    public function bien(){
        return $this->hasMany(Bien::class);
        }
}

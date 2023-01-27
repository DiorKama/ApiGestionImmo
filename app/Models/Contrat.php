<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contrat extends Model
{
    use HasFactory;
    protected $table = 'contrats';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];

  
     // la table contrat reçoit l'id  de la table locataire
    public function locataire(){
        return $this->belongsTo(Locataire::class);
        }
}

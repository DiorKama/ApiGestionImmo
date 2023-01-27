<?php

namespace App\Models;

use App\Models\Locataire;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Facture extends Model
{
    use HasFactory;
    protected $table = 'factures';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];

  
     // la table facture reçoit l'id  de la table locataire
    public function locataires(){
        return $this->belongsTo(Locataire::class);
        }
}

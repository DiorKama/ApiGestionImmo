<?php

namespace App\Models;

use App\Models\Bien;
use App\Models\Contrat;
use App\Models\Facture;
use App\Models\Reglement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Locataire extends Model
{
    use HasFactory;
    protected $table = 'locataires';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];

  
    // la table locataire reçoit l'id  de la table biens
    public function biens(){
        return $this->belongsTo(Bien::class);
        }
     // L'ID locataire migre vers la table reglement   
    public function reglement(){
        return $this->hasMany(Reglement::class);
        }
        // L'ID locataire migre vers la table contrat
    public function contrat(){
        return $this->hasMany(Contrat::class);
        }

        // L'ID locataire migre vers la table facture
    public function facture(){
        return $this->hasMany(Facture::class);
        }
}

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

  
    public function biens(){
        return $this->belongsTo(Bien::class);
        }
    public function reglement(){
        return $this->hasMany(Reglement::class);
        }
    public function contrat(){
        return $this->hasMany(Contrat::class);
        }

    public function facture(){
        return $this->hasMany(Facture::class);
        }
}

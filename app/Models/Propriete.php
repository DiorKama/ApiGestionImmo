<?php

namespace App\Models;

use App\Models\User;
use App\Models\Maintenance;
use App\Models\Proprietaire;
use App\Models\TypePropriete;
use App\Models\ChargeLocative;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Propriete extends Model
{
    use HasFactory;
    protected $table = 'proprietes';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];

  // la table Propriete reçoit l'id  de la table proprietaire
    public function proprietaire(){
    return $this->belongsTo(Proprietaire::class);
    }
    // la table Propriete reçoit l'id  de la table User
    public function user(){
        return $this->belongsTo(User::class);
        }
        // L'ID propriete migre vers la table chargeLocative
    public function chargeLocative(){
        return $this->hasMany(ChargeLocative::class);
        }
        // L'ID propriete migre vers la table maintenance
    public function maintenance(){
        return $this->hasMany(Maintenance::class);
        }
        // L'ID propriete migre vers la table typePropriete
    public function typePropriete(){
        return $this->hasMany(TypePropriete::class);
        }
}

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

  
    public function proprietaire(){
    return $this->belongsTo(Proprietaire::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
        }
    public function chargeLocative(){
        return $this->hasMany(ChargeLocative::class);
        }
    public function maintenance(){
        return $this->hasMany(Maintenance::class);
        }
    public function typePropriete(){
        return $this->hasMany(TypePropriete::class);
        }
}

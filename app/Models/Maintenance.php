<?php

namespace App\Models;

use App\Models\Propriete;
use App\Models\TypeService;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Maintenance extends Model
{
    use HasFactory;
    protected $table = 'maintenances';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];

  
    // la table maintenance reçoit l'id  de la table propriete
    public function proprietes(){
        return $this->belongsTo(Propriete::class);
        }
        // L'ID maintenance migre vers la table typeService
    public function typeService(){
        return $this->hasMany(TypeService::class);
        }
}

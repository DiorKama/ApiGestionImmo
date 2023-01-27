<?php

namespace App\Models;

use App\Models\TypeService;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fournisseur extends Model
{
    use HasFactory;
    protected $table = 'fournisseurs';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];

  
     // la table fournisseur reçoit l'id  de la table typeService
    public function typeService(){
        return $this->belongsTo(TypeService::class);
        }
}

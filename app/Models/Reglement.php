<?php

namespace App\Models;

use App\Models\Locataire;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Reglement extends Model
{
    use HasFactory;
    protected $table = 'reglements';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];

  
    public function locataire(){
        return $this->belongsTo(Locataire::class);
        }
}

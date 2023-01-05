<?php

namespace App\Models;

use App\Models\Fournisseur;
use App\Models\Maintenance;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TypeService extends Model
{
    use HasFactory;
    protected $table = 'type_services';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];

  
    public function maintenance(){
        return $this->belongsTo(Maintenance::class);
        }
    public function fournisseur(){
        return $this->hasMany(Fournisseur::class);
        }
}

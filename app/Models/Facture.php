<?php

namespace App\Models;

use App\Models\Propriete;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Facture extends Model
{
    use HasFactory;
    protected $table = 'factures';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];

  
    public function proprietes(){
        return $this->belongsTo(Propriete::class);
        }
}

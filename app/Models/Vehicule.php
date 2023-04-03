<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicule extends Model
{
    use HasFactory;
    protected $fillable = ['type','marque','modele','image','proprietaire_id','plaque'];

    public function Proprietaire()
    {

        return $this->belongsTo(Proprietaire::class);
    }
   
}

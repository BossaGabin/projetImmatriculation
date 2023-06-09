<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proprietaire extends Model
{
    use HasFactory;
   protected $fillable =['nomComplet','email','adresse','telephone','pieceIdentite','nip'];

   public function Vehicule(){

   return $this->hasMany(Vehicule::class, 'proprietaire_id');
   }
}

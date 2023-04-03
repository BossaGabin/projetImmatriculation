<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utilisateur extends Model
{
    use HasFactory;
   protected $fillable =['nomComplet','username','motDePasse','email'];
   public function Utilisateur(){

    return $this->hasMany(Vehicule::class, 'utilisateur_id');
    }

}

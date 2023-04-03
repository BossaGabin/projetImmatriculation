<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\authentification;
use App\Models\Proprietaire;
use App\Models\Utilisateur;
use App\Models\Vehicule;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // Proprietaire::factory(100)->create();
        // Utilisateur::factory(10)->create();
        //Vehicule::factory(10)->create();
        //authentification::factory(5)->create();
        Admin::factory(5)->create();
    }
}

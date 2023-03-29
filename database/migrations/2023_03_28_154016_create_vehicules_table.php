<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiculesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicules', function (Blueprint $table) {
            $table->id();
            $table->string("type");
            $table->string("marque");
            $table->string("modele");
            $table->string("image");
            $table->foreignId("proprietaire_id")->constrained("proprietaires");
            $table->foreignId("utilisateur_id")->constrained("utilisateurs");
            $table->timestamps();
        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('proprietaires', function (Blueprint $table) {
            $table->dropConstrainedForeignId("proprietaire_id");
        });
        Schema::table('utilisateurs', function (Blueprint $table) {
            $table->dropForeign("utilisateur_id");
        });
        Schema::dropIfExists('vehicules');
    }
}

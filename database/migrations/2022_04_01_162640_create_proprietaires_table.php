<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proprietaires', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->date('datedenaissance');
            $table->string('lieudenaissance');
            $table->string('nationalite');
            $table->string('adresse');
            $table->string('telephone');
            $table->string('photo');
            $table->string('cni');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proprietaires');
    }
};

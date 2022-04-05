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
        Schema::disableForeignKeyConstraints();
        Schema::create('proprietes', function (Blueprint $table) {
            $table->id();
            $table->string('numero');
            $table->string('photo');
            $table->string('adresse');
            $table->integer('loyer');
            $table->foreignId('proprietaire_id')
            ->constrained()
            ->onUpdate('restrict')
            ->onDelete('restrict');
            $table->foreignId('quartier_id')
            ->constrained()
            ->onUpdate('restrict')
            ->onDelete('restrict'); 
            $table->foreignId('typepropriete_id')
            ->constrained()
            ->onUpdate('restrict')
            ->onDelete('restrict');  
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
        Schema::dropIfExists('proprietes');
    }
};

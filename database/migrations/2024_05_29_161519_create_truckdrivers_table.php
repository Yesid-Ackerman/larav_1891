<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('truckdrivers', function (Blueprint $table) {
            $table->id();
            //Atributos
            $table->string('name');
            $table->string('pobl');
            $table->integer('tele');
            $table->string('dire');
            $table->integer('code');
            $table->string('sala');
            //Foraneas
            $table->unsignedBigInteger('package_id')->nullable();
            $table->unsignedBigInteger('trucks_id')->nullable();
            //referencia Paquete
            $table->foreign('package_id')->references('id')->on('packages')->onDelete('cascade');
            //Referencia Camnion
            $table->foreign('truck_id')->references('id')->on('truck')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('truckdrivers');
    }
};

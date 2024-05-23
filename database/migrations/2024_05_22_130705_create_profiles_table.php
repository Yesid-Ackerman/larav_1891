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
        Schema::create('profiles', function (Blueprint $table) {
            $table->string('title',45);
            $table->text('biografia');
            $table->string('website',45);
            //creamos el campo para albergar la llave foranea
            $table->unsignedBigInteger('user_id')->unique();
             //asociamos el user_id al id de la tabla user
             $table->foreign('user_id')
             ->references('id')
             ->on('users')
             ->onDelete('cascade')//el otro estado es SET_NULL
             ->onUpdate('cascade');;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};

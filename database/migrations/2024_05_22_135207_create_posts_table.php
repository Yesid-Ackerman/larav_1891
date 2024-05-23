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
        Schema::create('posts', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->text('body');
                //Atributos foraneos
                $table->unsignedBigInteger('user_id')->nullable();
                $table->unsignedBigInteger('category_id')->nullable();
               //referenciando la tabla users
                $table->foreign('user_id')
                    ->references('id')
                    ->on('users')->onDelete('set null');
                //referenciando la tabla categorias
                $table->foreign('category_id')
                ->references('id')
                ->on('categories')->onDelete('set null');

                $table->timestamps();
            });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};

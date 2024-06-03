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
        Schema::create('truck_drivers', function (Blueprint $table) {
            $table->id();
            $table->string('dni');
            $table->string('name');
            $table->string('phone');
            $table->string('adress');
            $table->string('population');
            $table->string('salary');

            //foranea package
            $table->unsignedBigInteger('package_id')->nullable();
            //referencia package
            $table->foreign('package_id')
            ->references('id')
            ->on('packages')
            ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('truck_drivers');
    }
};

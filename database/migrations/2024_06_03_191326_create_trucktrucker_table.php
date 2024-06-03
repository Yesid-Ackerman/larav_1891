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
        Schema::create('trucktrucker', function (Blueprint $table) {
            $table->id();

            //foranea truck
            $table->unsignedBigInteger('truck_id')->nullable();
            //referencia truck
            $table->foreign('truck_id')
            ->references('id')
            ->on('trucks')
            ->onDelete('cascade');

            //foranea truck_drive
            $table->unsignedBigInteger('truck_driver_id')->nullable();
            //referencia truck_drive
            $table->foreign('truck_driver_id')
            ->references('id')
            ->on('truck_drivers')
            ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trucktrucker');
    }
};

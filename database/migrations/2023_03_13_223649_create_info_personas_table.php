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
        Schema::create('info_personas', function (Blueprint $table) {
            $table->id();
            $table->string('Name');
            $table->string('Lastname');
            $table->string('idVehiculo');
            $table->string('address');
            $table->string('gender');
            $table->date('birthdate');
            $table->bigInteger('identification');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_info_personas');
    }
};

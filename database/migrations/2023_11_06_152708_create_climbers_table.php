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
        Schema::create('climbers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('coach');
            $table->string('level');

            $table->foreignId('club_id');
            
            $table->foreign('club_id')->references('id')->on('clubs')->onUpdate('cascade')->onDelete('restrict');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('climbers');
    }
};

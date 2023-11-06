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
        Schema::create('climbers_routes', function (Blueprint $table) {
            $table->id();

            $table->string('climber_id');
            $table->foreignId('climber_id');
            $table->string('route_id');
            $table->foreignId('route_id');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('climbers_routes');
    }
};

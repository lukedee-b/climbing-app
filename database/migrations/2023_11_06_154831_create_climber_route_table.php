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
        Schema::create('climber_route', function (Blueprint $table) {
            $table->id();

            $table->foreignId('climber_id');
            $table->foreignId('route_id');
            
            $table->foreign('climber_id')->references('id')->on('climbers')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('route_id')->references('id')->on('routes')->onUpdate('cascade')->onDelete('restrict');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Schema::dropIfExists('climbers_routes');
    }
};

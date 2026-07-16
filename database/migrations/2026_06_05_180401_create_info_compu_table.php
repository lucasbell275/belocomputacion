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
        Schema::create('info_compu', function (Blueprint $table) {
            $table->id();

            $table->foreignId('computadora_id')->constrained('computadoras')->onDelete('cascade');
            $table->string('nombre');
            $table->string('valor');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('info_compu');
    }
};

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
        Schema::table('nosotros', function (Blueprint $table) {

            $table->text('introduccion')->nullable();
            
            $table->string('card_1_titulo')->nullable();
            $table->text('card_1_texto')->nullable()
            ;
            $table->string('card_2_titulo')->nullable();
            $table->text('card_2_texto')->nullable();

            $table->string('card_3_titulo')->nullable();
            $table->text('card_3_texto')->nullable();
            $table->text('cierre')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('nosotros', function (Blueprint $table) {
            //
        });
    }
};

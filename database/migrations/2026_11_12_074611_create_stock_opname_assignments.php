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
        Schema::create('stock_opname_assignments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('stock_opname_id')
                  ->constrained('stock_opnames')
                  ->onDelete('restrict');
            $table->foreign('location_id')
                  ->constrained('locations')
                  ->onDelete('restrict');
            $table->foreign('user_id')
                  ->constrained('users')
                  ->onDelete('restrict');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stock_opname_assignments');
    }
};

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
        Schema::create('assets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('item_id')
                  ->constrained('items')
                  ->onDelete('restrict');
            $table->foreignId('location_id')
                  ->constrained('locations')
                  ->onDelete('restrict');
            $table->string('inventory_code')->unique();
            $table->enum('condition', ['baik', 'rusak_ringan', 'rusak_berat'])->default('baik');
            $table->date('purchase_date')->nullable();
            $table->string('funding_source');
            $table->enum('status', ['ada', 'tidak_ada', 'hilang'])->default('ada');
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assets');
    }
};

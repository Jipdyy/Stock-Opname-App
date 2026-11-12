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
        Schema::create('stock_opname_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('stock_opname_id')
                  ->constrained('stock_opnames')
                  ->onDelete('cascade');
            $table->foreignId('inventory_id')
                  ->constrained('assets')
                  ->nullable()
                  ->onDelete('restrict');
            $table->foreignId('item_id')
                  ->constrained('items')
                  ->onDelete('restrict');
            $table->foreign('location_id')
                  ->constrained('locations')
                  ->onDelete('restrict');
            $table->unsignedInteger('qty_system');
            $table->unsignedInteger('qty_physical');
            $table->enum('finding_status', ['match', 'shotage', 'surplus', 'missing', 'not_found'])->default('match');
            $table->enum('condition_found', ['good', 'minor_damage', 'heavy_damage'])->default('good');
            //misal ditemukan di ruangan lain(dipindah)
            $table->foreignId('found_location_id')
                  ->nullable()
                  ->constrained('locations')
                  ->onDelete('restrict');
            $table->text('notes')->nullable();
            $table->string('photo')->nullable();
            $table->foreignId('checked_by')
                  ->constrained('users')
                  ->onDelete('restrict');
            $table->timestamp('checked_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stock_opname_items');
    }
};

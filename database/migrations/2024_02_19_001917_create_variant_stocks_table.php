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
        Schema::create('variant_stocks', function (Blueprint $table) {
            $table->id('variant_stock_id');
            $table->integer('stock_quantity');
            $table->text('warehouse_location');

            $table->foreignId('variant_id')
                ->constrained('variants', 'variant_id')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreignId('store_id')
                ->constrained('stores', 'store_id')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('variant_stocks');
    }
};

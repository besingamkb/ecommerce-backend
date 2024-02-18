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
        Schema::create('products', function (Blueprint $table) {
            $table->id('product_id');
            $table->string('product_name')->index();
            $table->text('description')->nullable();
            $table->decimal('base_price', 10, 2)->index();

            $table->foreignId('category_id')
                ->constrained('categories', 'category_id')
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
        Schema::dropIfExists('products');
    }
};

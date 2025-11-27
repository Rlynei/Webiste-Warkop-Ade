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
        Schema::create('items', function (Blueprint $table) {
        $table->integer('id_product')->unsigned();
        $table->text('product_name');
        $table->bigInteger('unit_price');
        $table->bigInteger('quantity');
        $table->bigInteger('subtotal');

        // Foreign Key
        $table->foreign('id_product')
              ->references('id_product')->on('product')
              ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};

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
        Schema::create('orders', function (Blueprint $table) {
        $table->increments('id_order');
        $table->dateTime('order_date');
        $table->integer('total_amount');
        $table->bigInteger('total_price');
        $table->text('table_number');
        $table->text('order_number');
        $table->integer('items')->unsigned();
        $table->enum('status_order', ['pending', 'done']);
        $table->bigInteger('visitor_count');

        // Foreign Key
        $table->foreign('items')
              ->references('id_product')->on('items')
              ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};

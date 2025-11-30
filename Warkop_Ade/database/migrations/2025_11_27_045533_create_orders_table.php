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
        $table->id();
        $table->dateTime('order_date');
        $table->integer('total_amount');
        $table->bigInteger('total_price');
        $table->string('table_number');
        $table->string('order_number');
        $table->foreignId('item_id')->constrained('items')->onDelete('cascade');
        $table->enum('status_order', ['pending', 'done']);
        $table->bigInteger('visitor_count');
        $table->timestamps();
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

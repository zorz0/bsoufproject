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
        Schema::create('order_details', function (Blueprint $table) {
            $table->increments("id");
            $table->integer("order_id")->unsigned();
            $table->foreign("order_id")->references("id")->on("orders");
            $table->integer("product_size_id")->unsigned();
            $table->foreign("product_size_id")->references("id")->on("product_size");
            $table->integer("quantity");
            $table->decimal("price",8,2)->nullable();
            $table->decimal("discount",8,2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_details');
    }
};

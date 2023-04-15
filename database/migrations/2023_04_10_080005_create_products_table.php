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
            $table->increments("id");
            $table->string("name");
            $table->longText("description");
            $table->string("image");
            $table->decimal("price",8,2)->nullable();
            $table->decimal("discount_price",8,2)->nullable();
            $table->integer("category_id")->unsigned();
            $table->foreign("category_id")->references("id")->on("categories")->onDelete("cascade")->onUpdate("cascade");
            $table->softDeletes();
            $table->timestamps();
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

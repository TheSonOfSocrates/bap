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
            $table->id();
            $table->string('title');
            $table->string('image');
            $table->double('current_price');
            $table->bigInteger('user_id')->index();
            $table->bigInteger('category_brand_id')->index();
            $table->bigInteger('category_product_id')->index();
            $table->longText('description')->nullable();
            $table->longText('options');
            $table->bigInteger('likes')->default(0);
            $table->bigInteger('views')->default(0);
            $table->boolean('public')->default(true);
            $table->boolean('on_sale')->default(true);
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

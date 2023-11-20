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
        Schema::create('cosmetics', function (Blueprint $table) {
            $table->id();
            $table->integer('productId');
            $table->string('gender');
            $table->string('category');
            $table->string('subCategory')->nullable();
            $table->string('name');
            $table->float('price');
            $table->float('discount_price')->nullable();
            $table->string('color')->nullable();
            $table->string('descriptionTitle');
            $table->text('description');
            $table->text('specification')->nullable();
            $table->string('thumbnail');
            $table->string('allImages');
            $table->unsignedBigInteger('brand_id');
            $table->foreign('brand_id')->references('id')->on('brands');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cosmetics');
    }
};

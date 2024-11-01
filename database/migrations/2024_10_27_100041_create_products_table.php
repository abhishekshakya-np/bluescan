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
            $table->string('product_name');
            $table->text('product_description');
            $table->string('image_url')->nullable();
            $table->integer('quantity');
            $table->string('code');
            $table->string('codeType');
            $table->string('region');
            $table->string('item_form')->nullable();
            $table->float('liquid_volume')->nullable();
            $table->string('scent')->nullable();
            $table->string('category');
            $table->string('category_path')->nullable();
            $table->string('upc')->unique();
            $table->string('ean')->unique();
            $table->string('barcode_url')->nullable();
            $table->timestamp('added_date')->default(now());
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

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string("name")->unique();
            $table->double('quantity')->default(0);
            $table->double('buy_price')->unsigned()->default(0);
            $table->double('sell_price')->unsigned()->default(0);
            $table->double('rent_price')->unsigned()->nullable();
            $table->text('description')->nullable();
            $table->string('image')->default('assets/images/no_img.png');
            $table->bigInteger("category_id")->unsigned();
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
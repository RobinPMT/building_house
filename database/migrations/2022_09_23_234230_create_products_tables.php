<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('avatar_design')->nullable();
            $table->unsignedDouble('price')->default(0);
            $table->tinyInteger('active')->default(1)->index();
            $table->tinyInteger('hot')->default(0)->index();
            $table->bigInteger('category_id')->nullable();
            $table->longText('description')->nullable();
            $table->longText('arr_image')->nullable();
            $table->string('slug')->index();
            $table->bigInteger('author_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}

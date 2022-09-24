<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttributeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attributes', function (Blueprint $table) {
            $table->id();
            $table->string('title')->unique();
            $table->string('type')->nullable();
            $table->bigInteger('author_id')->nullable();
            $table->bigInteger('room_id')->nullable();
            $table->longText('avatar')->nullable();
            $table->tinyInteger('active')->default(1)->index();
            $table->longText('arr_value')->nullable();
            $table->longText('arr_image')->nullable();
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
        Schema::dropIfExists('attributes');
    }
}

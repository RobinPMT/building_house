<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateProductRoomTableAddProductIdAttribute extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_rooms', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('product_id')->nullable();
            $table->bigInteger('room_id')->nullable();
            $table->timestamps();
        });
        Schema::table('attributes', function (Blueprint $table) {
            $table->bigInteger('product_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_rooms');
        Schema::table('attributes', function (Blueprint $table) {
            $table->dropColumn('product_id');
        });
    }
}

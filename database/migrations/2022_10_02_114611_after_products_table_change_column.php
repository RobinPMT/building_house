<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AfterProductsTableChangeColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->unsignedFloat('longs')->default(0)->change();
            $table->unsignedFloat('width')->default(0)->change();
            $table->unsignedFloat('height')->default(0)->change();
            $table->unsignedFloat('area')->default(0)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->bigInteger('longs')->nullable()->change();
            $table->bigInteger('width')->nullable()->change();
            $table->bigInteger('height')->nullable()->change();
            $table->bigInteger('area')->nullable()->change();
        });
    }
}

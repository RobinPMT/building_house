<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AfterAddOrder extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->bigInteger('order')->default(0)->nullable();
        });
        Schema::table('projects', function (Blueprint $table) {
            $table->bigInteger('order')->default(0)->nullable();
        });
        Schema::table('products', function (Blueprint $table) {
            $table->bigInteger('order')->default(0)->nullable();
        });
        Schema::table('categories', function (Blueprint $table) {
            $table->bigInteger('order')->default(0)->nullable();
        });
        Schema::table('settings', function (Blueprint $table) {
            $table->bigInteger('order')->default(0)->nullable();
        });
        Schema::table('libraries', function (Blueprint $table) {
            $table->bigInteger('order')->default(0)->nullable();
        });
        Schema::table('housings', function (Blueprint $table) {
            $table->bigInteger('order')->default(0)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->dropColumn('order');
        });
        Schema::table('projects', function (Blueprint $table) {
            $table->dropColumn('order');
        });
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('order');
        });
        Schema::table('categories', function (Blueprint $table) {
            $table->dropColumn('order');
        });
        Schema::table('settings', function (Blueprint $table) {
            $table->dropColumn('order');
        });
        Schema::table('libraries', function (Blueprint $table) {
            $table->dropColumn('order');
        });
        Schema::table('housings', function (Blueprint $table) {
            $table->dropColumn('order');
        });
    }
}

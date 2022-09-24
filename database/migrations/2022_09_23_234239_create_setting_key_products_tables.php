<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingKeyProductsTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('setting_key_products_tables', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('setting_key_id')->nullable();
            $table->longText('value')->nullable();
            $table->bigInteger('setting_key_able_id')->nullable();
            $table->string('setting_key_able_type')->nullable();
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
        Schema::dropIfExists('setting_key_products_tables');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFiltersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('filters', function (Blueprint $table) {
            $table->id();
            $table->longText('title')->nullable();
            $table->bigInteger('from')->nullable();
            $table->bigInteger('to')->nullable();
            $table->bigInteger('value')->nullable();
            $table->bigInteger('order')->nullable();
            $table->string('type')->default('area')->nullable();
            $table->tinyInteger('active')->default(1)->index();
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
        Schema::dropIfExists('filters');
    }
}

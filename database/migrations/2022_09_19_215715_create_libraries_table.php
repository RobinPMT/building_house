<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLibrariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libraries', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('avatar')->nullable();
            $table->LongText('arr_image')->nullable();
            $table->tinyInteger('active')->default(1)->index();
            $table->tinyInteger('freedom')->default(1)->index();
            $table->tinyInteger('banner_home')->default(0)->index();
            $table->tinyInteger('banner_product')->default(0)->index();
            $table->string('author_id')->nullable();
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
        Schema::dropIfExists('libraries');
    }
}

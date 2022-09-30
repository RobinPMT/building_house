<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable()->unique();
            $table->string('slug')->index();
            $table->longText('content')->nullable();
            $table->tinyInteger('active')->nullable()->default(1);
            $table->tinyInteger('hot')->nullable()->default(0);
            $table->string('author_id')->nullable();
            $table->string('avatar')->nullable();
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
        Schema::dropIfExists('projects');
    }
}

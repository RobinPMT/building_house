<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable()->unique();
            $table->string('slug')->index();
            $table->longText('description')->nullable();
            $table->longText('content')->nullable();
            $table->tinyInteger('active')->nullable()->default(1);
            $table->tinyInteger('hot')->nullable()->default(1);
            $table->string('author_id')->nullable();
            $table->string('description_seo')->nullable();
            $table->string('title_seo')->nullable();
            $table->string('avatar')->nullable();
            $table->integer('view')->default(0);
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
        Schema::dropIfExists('posts');
    }
}

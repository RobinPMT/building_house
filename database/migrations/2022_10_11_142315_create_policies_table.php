<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePoliciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('policies', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable()->unique();
            $table->string('slug')->index();
            $table->longText('content')->nullable();
            $table->tinyInteger('active')->nullable()->default(1);
            $table->tinyInteger('order')->nullable();
            $table->longText('title_seo')->nullable();
            $table->longText('description_seo')->nullable();
            $table->longText('keyword_seo')->nullable();
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
        Schema::dropIfExists('policies');
    }
}

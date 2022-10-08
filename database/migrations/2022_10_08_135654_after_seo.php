<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AfterSeo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->longText('title_seo')->nullable();
            $table->longText('description_seo')->nullable();
            $table->longText('keyword_seo')->nullable();
        });
        Schema::table('posts', function (Blueprint $table) {
            $table->longText('keyword_seo')->nullable();
        });
        Schema::table('projects', function (Blueprint $table) {
            $table->longText('title_seo')->nullable();
            $table->longText('description_seo')->nullable();
            $table->longText('keyword_seo')->nullable();
        });
        Schema::table('libraries', function (Blueprint $table) {
            $table->longText('title_seo')->nullable();
            $table->longText('description_seo')->nullable();
            $table->longText('keyword_seo')->nullable();
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
            $table->dropColumn('title_seo', 'description_seo', 'keyword_seo');
        });
        Schema::table('posts', function (Blueprint $table) {
            $table->dropColumn('keyword_seo');
        });
        Schema::table('projects', function (Blueprint $table) {
            $table->dropColumn('title_seo', 'description_seo', 'keyword_seo');
        });
        Schema::table('libraries', function (Blueprint $table) {
            $table->dropColumn('title_seo', 'description_seo', 'keyword_seo');
        });
    }
}

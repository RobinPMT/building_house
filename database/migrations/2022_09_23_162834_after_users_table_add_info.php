<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AfterUsersTableAddInfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->tinyInteger('active')->default(1)->index();
            $table->char('phone')->nullable();
            $table->string('avatar')->nullable();
            $table->string('address')->nullable();
            $table->string('code_active')->nullable();
            $table->timestamp('time_code_active')->nullable();
            $table->string('code_reset')->nullable();
            $table->timestamp('time_code_reset')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('address', 'avatar', 'phone', 'active', 'code_active', 'time_code_active', 'code_reset', 'time_code_reset');
        });
    }
}

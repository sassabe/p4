<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ConnectRunsAndUsersTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('runs', function (Blueprint $table) {

      $table->integer('user_id')->unsigned();

      $table->foreign('user_id')->references('id')->on('users');

      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('runs', function (Blueprint $table) {

      # ref: http://laravel.com/docs/migrations#dropping-indexes
      # combine tablename + fk field name + the word "foreign"
      $table->dropForeign('runs_user_id_foreign');

      $table->dropColumn('user_id');
      });
    }
}

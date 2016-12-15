<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ConnectRunsAndShoes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('runs', function (Blueprint $table) {

        $table->integer('shoe_id')->unsigned();

        $table->foreign('shoe_id')->references('id')->on('shoes');

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
        $table->dropForeign('runs_shoe_id_foreign');

        $table->dropColumn('shoe_id');
        });
    }
}

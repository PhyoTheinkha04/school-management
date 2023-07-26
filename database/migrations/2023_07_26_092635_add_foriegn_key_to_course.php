<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForiegnKeyToCourse extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

            Schema::table('courses', function (Blueprint $table) {
                $table->unsignedBigInteger('level_id');

                $table->foreign('level_id')->references('id')->on('levels')->onUpdate('cascade')->onDelete('restrict');
            });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */

    public function down()
    {

            Schema::table('courses', function (Blueprint $table) {
                $table->dropForeign('level_id');
                $table->ropForeign('level_id');

            });

    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForiegnKeyToBatch extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('batches', function (Blueprint $table) {
                $table->unsignedBigInteger('course_id');

                $table->foreign('course_id')->references('id')->on('courses')->onUpdate('cascade')->onDelete('restrict');
            });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('batches', function (Blueprint $table) {

                $table->dropForeign('course_id');
                $table->ropForeign('course_id');



        });
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateDateColumnsInBatchesTable extends Migration
{
    public function up()
    {
        Schema::table('batches', function (Blueprint $table) {
            $table->string('start_at')->change();
            $table->string('end_at')->change();
        });
    }

    public function down()
    {
        // You can define a rollback logic here if needed
    }
}

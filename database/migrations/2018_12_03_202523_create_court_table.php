<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreateCourtTable extends Migration
{

    public function up()
    {
        Schema::create('Court', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            // Schema declaration
            // Constraints declaration

        });
    }

    public function down()
    {
        Schema::drop('Court');
    }
}

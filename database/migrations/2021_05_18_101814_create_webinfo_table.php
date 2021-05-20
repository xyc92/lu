<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebinfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('WebInfo', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('userId')->default(1);
            $table->text('contactInfo');
            $table->text('reportInfo');
            $table->text('selfhelpInfo');
            $table->timestamp('modified');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('WebInfo');
    }
}

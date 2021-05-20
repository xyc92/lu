<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDownloadinfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('DownloadInfo', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('userId')->default(1);
            $table->string('first');
            $table->string('second');
            $table->string('third');
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
        Schema::dropIfExists('DownloadInfo');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSermonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sermons', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('topic');
            $table->string('audio_id');
            $table->string('speaker');   //preacher name
            $table->bigInteger('category_id')->unsigned();

            $table->foreign('category_id')->references('id')->on('sermon_categories');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sermons');
    }
}

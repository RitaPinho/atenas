<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTopicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news_topics', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('news_id');
            $table->unsignedBigInteger('topic_id');
            $table->unique(['news_id', 'topic_id']);
            $table->foreign('news_id')->references('id')->on('news')->onDelete('cascade');
            $table->foreign('topic_id')->references('id')->on('topics')->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news_topics');
    }
}

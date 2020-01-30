<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news_users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('news_id');
            $table->unsignedBigInteger('user_id');
            $table->unique(['news_id', 'user_id']);
            $table->foreign('news_id')->references('id')->on('news')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('news_users');
    }
}

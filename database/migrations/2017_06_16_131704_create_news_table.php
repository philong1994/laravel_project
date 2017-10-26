<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('author');
            $table->string('origin')->nullable();
            $table->text('intro');
            $table->text('content')->nullable();
            $table->text('foot')->nullable();
            $table->integer('access');
            $table->string('target_open');
            $table->string('meta_robot');
            $table->integer('viewed')->default(100);
            $table->string('youtube')->nullable();
            $table->string('image')->nullable();
            $table->string('alt')->nullable();
            $table->string('status');
            $table->string('featured');
            $table->string('slug');
            $table->string('title_tag');
            $table->string('meta_keywords_tag');
            $table->string('meta_description_tag');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news');
    }
}

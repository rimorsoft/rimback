<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('user_id')->unsigned();

            //general
            $table->string('name');
            $table->string('slug');

            $table->mediumText('excerpt')->nullable();
            $table->longText('body');

            $table->enum('type', config('rimback.posts.type')); //page, post

            $table->string('image')->nullable(); //url absolute
            $table->string('tooltip')->nullable();
            $table->string('alternative')->nullable();
            
            $table->integer('order')->default(0);

            $table->bigInteger('view')->default(0);
            $table->bigInteger('comment_count')->default(0);
            $table->enum('comment_status', ['OPEN', 'CLOSED'])->default('OPEN');

            $table->enum('status', ['PUBLISHED', 'DRAFT', 'ARCHIVED'])->default('DRAFT');
            
            $table->string('meta_title', 128);
            $table->string('meta_description', 256)->nullable();

            $table->timestamps();
            
            //relation
            $table->foreign('user_id')->references('id')->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');  
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}

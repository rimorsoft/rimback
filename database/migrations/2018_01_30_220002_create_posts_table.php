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
            $table->string('slug')->unique();

            $table->text('excerpt')->nullable();
            $table->text('body');

            $table->enum('type', config('rimback.posts.type')); //page, post

            $table->string('image')->nullable(); //url absolute
            $table->string('tooltip')->nullable();
            $table->string('alternative')->nullable();
            
            $table->integer('parent_id')->default(0); 

            $table->bigInteger('view')->default(0);
            $table->bigInteger('comment_count')->default(0);
            $table->enum('comment_status', ['OPEN', 'CLOSED'])->default('OPEN');

            $table->enum('status', ['PUBLISHED', 'DRAFT', 'ARCHIVED'])->default('DRAFT');
            
            $table->text('meta_title');
            $table->text('meta_description')->nullable();

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

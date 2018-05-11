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
            $table->string('name', 128);
            $table->string('slug', 128)->unique();

            $table->text('excerpt')->nullable();
            $table->text('body');

            $table->enum('type', config('rimback.posts.type')); //page, post

            $table->string('image', 128)->nullable(); //url absolute
            $table->string('tooltip', 128)->nullable();
            $table->string('alternative', 128)->nullable();
            
            $table->integer('parent_id')->default(0); 

            $table->bigInteger('view')->default(0);
            
            $table->boolean('comment_status')->default(true);

            $table->enum('status', ['PUBLISHED', 'DRAFT'])->default('DRAFT');
            
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

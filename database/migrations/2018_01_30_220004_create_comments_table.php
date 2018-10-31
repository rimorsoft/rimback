<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('parent_id')->default(0); 
            $table->unsignedInteger('user_id')->nullable();
            $table->unsignedInteger('post_id')->nullable();

            $table->string('ip');
            $table->string('agent');

            $table->mediumText('comment');
            $table->enum('status', ['APPROVED', 'PENDING', 'SPAM'])->default('APPROVED');

            $table->timestamps();
            
            //relation
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('post_id')
                ->references('id')
                ->on('posts')
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
        Schema::dropIfExists('comments');
    }
}

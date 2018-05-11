<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTermsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('terms', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('parent_id')->default(0); 

            $table->enum('taxonomy', ['TAG', 'CATEGORY']);
            $table->string('name', 128);
            $table->string('slug', 128)->unique();
            $table->string('body', 128)->nullabled();

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
        Schema::dropIfExists('terms');
    }
}

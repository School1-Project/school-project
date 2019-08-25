<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
           $table->bigIncrements('id');
            $table->integer('user_id')->unsigned();
            $table->string('address');
            $table->string('gender');
            $table->string('contact');
            $table->float('salary');
            $table->integer('bonus_id');
            $table->date('date_of_joining');
            $table->timestamps();
             $table->foreign('user_id')->references('id')->on('users')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teachers');
    }
}

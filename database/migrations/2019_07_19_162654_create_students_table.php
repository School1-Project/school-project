<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id')->unsigned();
            $table->string('address');
            $table->integer('parent_id');
            $table->integer('class_id');
            $table->integer('section_id');
            $table->integer('rank');
            $table->string('gender');
            $table->integer('scholarship_criteria_id');
            $table->boolean('is_hostel');
            $table->boolean('is_bus');
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
        Schema::dropIfExists('students');
    }
}

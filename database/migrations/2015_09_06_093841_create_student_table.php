<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student', function (Blueprint $table) {
            $table->integer('std_id')->unique();
            $table->string('std_name',30);
            $table->string('email',20)->unique();
            
            $table->integer('dept_code');
            $table->string('dept_name',30);
            $table->integer('course_no');
            $table->integer('building_no');
            
            $table->string('con_no')->unique();
            $table->string('term',10);
            $table->string('year',10);
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
        Schema::drop('student');
    }
}

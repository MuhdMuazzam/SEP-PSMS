<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('topstudents', function (Blueprint $table) {
            $table->increments('id');
            $table->string('student_ID');
            $table->string('student_name');
            $table->string('project_title');
            $table->string('category');
            $table->double('mark1');
            $table->double('mark2');
            $table->double('mark3');
            $table->double('totalmark');
            $table->date('date');
            $table->time('time');
            $table->integer('selection');
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
        Schema::dropIfExists('topstudents');
    }
};

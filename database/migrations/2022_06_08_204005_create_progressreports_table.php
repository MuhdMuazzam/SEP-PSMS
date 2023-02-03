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
        Schema::create('progressreports', function (Blueprint $table) {
            $table->string('student_ID');
            $table->string('student_name');
            $table->string('supervisor_ID');
            $table->string('supervisor_name');
            $table->string('project_title');
            $table->double('project_mark');
            $table->string('project_review');
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
        Schema::dropIfExists('progressreports');
    }
};

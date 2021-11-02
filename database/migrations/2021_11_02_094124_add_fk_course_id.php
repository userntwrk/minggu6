<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFkCourseId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('students', function(Blueprint $table){
      $table->unsignedBigInteger('course_id')->nullable()->after('class_id');
      $table->foreign('course_id')->references('id')->on('students');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('students', function(Blueprint $table){
        $table->dropForeign(['class_id']);
        });
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {

            $table->increments('id');
            $table->string('firstName');
            $table->string('lastName');
            $table->string('fatherName');
            $table->string('motherName');
            $table->string('gender');
            $table->bigInteger('mobile');
            $table->bigInteger('nid');
            $table->date('birthOfDate');
            $table->unsignedInteger('presentDivision_id');
            $table->unsignedInteger('presentDistrict_id');
            $table->unsignedInteger('presentUpozilla_id');
            $table->string('presentPostOffice');
            $table->bigInteger('presentPostCode');
            $table->string('village');
            $table->unsignedInteger('branch_id');
            $table->unsignedInteger('course_id');
            $table->unsignedInteger('duration_id');
            $table->string('checkAddress')->nullable();   
            $table->unsignedInteger('permanentDivision_id')->nullable();
            $table->unsignedInteger('permanentDistrict_id')->nullable();
            $table->unsignedInteger('permanentUpozilla_id')->nullable();
            $table->string('permanentPostOffice')->nullable();
            $table->bigInteger('permanentPostCode')->nullable();
            $table->string('photo');
            $table->string('signature');
            $table->string('qualification');
            $table->bigInteger('registrationNum')->nullable();
            $table->string('transectionId');
            $table->bigInteger('bikas_number');
            $table->bigInteger('status');

            $table->timestamps();

            $table->foreign('presentDivision_id')->references('id')->on('divisions')->onDelete('cascade');
            $table->foreign('presentDistrict_id')->references('id')->on('districts')->onDelete('cascade');
            $table->foreign('presentUpozilla_id')->references('id')->on('upozillas')->onDelete('cascade');
            $table->foreign('branch_id')->references('id')->on('branches')->onDelete('cascade');
            $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');
            $table->foreign('duration_id')->references('id')->on('durations')->onDelete('cascade');
            $table->foreign('permanentDivision_id')->references('id')->on('divisions')->onDelete('cascade');
            $table->foreign('permanentDistrict_id')->references('id')->on('districts')->onDelete('cascade');
            $table->foreign('permanentUpozilla_id')->references('id')->on('upozillas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('members');
    }
}

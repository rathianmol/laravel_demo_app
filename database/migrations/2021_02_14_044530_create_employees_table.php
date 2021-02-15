<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->bigIncrements('id');
            /** CSV VALUES START */
            $table->unsignedInteger('employee_id');
            $table->string('name_prefix');
            $table->string('first_name');
            $table->char('middle_initial');
            $table->string('last_name');
            $table->enum('gender', ['M', 'F']);
            $table->string('email')->unique();
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('mother_maiden_name');
            $table->string('date_of_birth');
            $table->string('date_of_joining');
            $table->integer('salary');
            $table->string('ssn');
            $table->string('phone_no');
            $table->string('city');
            $table->char('state', 2);
            $table->integer('zip_code');
            /** CSV VALUES END*/
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
        Schema::dropIfExists('employees');
    }
}

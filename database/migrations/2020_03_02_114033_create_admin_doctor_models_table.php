<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminDoctorModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_doctor_models', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('admin')->default('doctor');
            $table->string('gender');
            $table->string('department');
            $table->string('specilization');
            $table->string('servicecharge');
            $table->string('permanent_address');
            $table->string('present_address');
            $table->string('phone_number');
            $table->string('dob');
            $table->string('avatar')->default('default.png');
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
        Schema::dropIfExists('admin_doctor_models');
    }
}

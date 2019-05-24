<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            // $table->string('civil_status');
            // $table->date('date_of_birth');
            // $table->integer('mobile_number');
            // $table->string('gender');
            // $table->string('present_address');
            // $table->string('permanent_address');
            // $table->integer('tax_identification_number');
            // $table->string('position');
            // $table->string('department');
            // $table->date('date_of_employment');
            // $table->integer('salary');
            // $table->string('address_of_employer');
            // $table->string('other_sources_income');
            // $table->integer('number_of_dependents');
            // $table->string('referred_by');
            // $table->string('full_name');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}

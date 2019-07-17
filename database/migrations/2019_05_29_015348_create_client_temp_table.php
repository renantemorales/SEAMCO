<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientTempTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_temp', function (Blueprint $table) {
            $table->increments('id');
            $table->string('FName')->nullable();
            $table->string('LName')->nullable();
            $table->string('MName')->nullable();
            $table->date('DateOfBirth')->nullable();
            $table->unsignedTinyInteger('Gender')->nullable();
            $table->unsignedTinyInteger('CivilStatus')->nullable();
            $table->string('TINNum')->nullable();
            $table->string('CellNum')->nullable();
            $table->string('OtherContactNum')->nullable();
            $table->string('EmailAddress')->nullable();
            $table->unsignedTinyInteger('MailingAddress')->nullable();
            $table->string('ResAddStreet')->nullable();
            $table->string('ResAddBarangay')->nullable();
            $table->string('ResAddCity')->nullable();
            $table->string('ResAddZipCode')->nullable();
            $table->string('BusJobTitle')->nullable();
            $table->string('BusName')->nullable();
            $table->string('BusOtherSourceOfIncome')->nullable();
            $table->integer('Rating')->nullable();
            $table->string('BusProfession')->nullable();
            $table->date('BusDateHired')->nullable();
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
        Schema::dropIfExists('client_temp');
    }
}

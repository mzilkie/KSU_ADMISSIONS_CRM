<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInformationSheetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('information_sheets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id')->unique();
            $table->string('firstName');
            $table->string('lastName');
            $table->string('streetAddress');
            $table->string('streetAddress2');
            $table->string('city');
            $table->string('state');
            $table->integer('zipcode');
            $table->string('country');
            $table->string('sex');
            $table->dateTime('birthday');
            $table->string('email');
            $table->string('secondary_school');
            $table->string('start_month');
            $table->integer('start_year');
            $table->boolean('college_credit')->nullable();
            $table->string('college_name')->nullable();
            $table->string('primary_major');
            $table->string('secondary_major')->nullable();
            $table->string('other_interests')->nullable();
            $table->string('hear_about_us');
            $table->string('other_hear')->nullable();
            $table->string('contact');
            $table->timestamps();

            $table->foreign('user_id')
                  ->references('user_id')
                  ->on('users')
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
        Schema::dropIfExists('information_sheets');
    }
}
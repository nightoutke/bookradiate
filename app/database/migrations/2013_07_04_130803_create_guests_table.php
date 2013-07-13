<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGuestsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guests', function(Blueprint $table) {
            $table->increments('id');
            $table->string('firstname');
			$table->string('lastname');
			$table->string('email');
			$table->string('password');
			$table->string('repeat_password');
			$table->string('terms');
			$table->string('school');
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
        Schema::drop('guests');
    }

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCountriesTable extends Migration {

	public function up()
	{
		Schema::create('countries', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name', 50);
			$table->string('abreviation', 5);
			$table->string('Phone_number_code', 5);
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('countries');
	}
}
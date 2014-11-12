<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEmployersTable extends Migration {

	public function up()
	{
		Schema::create('employers', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name', 20);
			$table->text('description')->nullable();
			$table->string('phone', 20);
			$table->string('address', 50)->nullable();
			$table->string('city', 20);
			$table->integer('pobox')->nullable();
			$table->string('logo', 200);
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('employers');
	}
}
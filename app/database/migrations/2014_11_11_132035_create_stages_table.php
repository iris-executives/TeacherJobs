<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStagesTable extends Migration {

	public function up()
	{
		Schema::create('stages', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name', 20);
			$table->integer('parent_id')->unsigned();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('stages');
	}
}
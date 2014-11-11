<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEmployerMembersTable extends Migration {

	public function up()
	{
		Schema::create('employer_members', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('employer_id')->unsigned();
			$table->integer('user_id')->unsigned();
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('employer_members');
	}
}
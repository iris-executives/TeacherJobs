<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEmployerMembersTasksTable extends Migration {

	public function up()
	{
		Schema::create('employer_members_tasks', function(Blueprint $table) {
			$table->increments('id');
			$table->string('title', 50);
			$table->text('content')->nullable();
			$table->integer('user_assigned_by')->unsigned();
			$table->integer('user_assigned_to')->unsigned();
			$table->date('deadline')->nullable();
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('employer_members_tasks');
	}
}
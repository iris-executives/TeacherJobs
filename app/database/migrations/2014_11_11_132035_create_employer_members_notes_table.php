<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEmployerMembersNotesTable extends Migration {

	public function up()
	{
		Schema::create('employer_members_notes', function(Blueprint $table) {
			$table->increments('id');
			$table->string('title', 50);
			$table->text('content');
			$table->integer('job_application_id')->unsigned();
			$table->integer('stage_id')->unsigned();
			$table->integer('member_id')->unsigned();
			$table->boolean('is_private')->default(0);
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('employer_members_notes');
	}
}
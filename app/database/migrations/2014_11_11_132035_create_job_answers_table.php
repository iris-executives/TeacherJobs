<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateJobAnswersTable extends Migration {

	public function up()
	{
		Schema::create('job_answers', function(Blueprint $table) {
			$table->increments('id');
			$table->text('content');
			$table->integer('job_application_id')->unsigned();
			$table->integer('job_question_id')->unsigned();
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('job_answers');
	}
}
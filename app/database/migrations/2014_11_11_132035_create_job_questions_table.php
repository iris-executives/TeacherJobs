<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateJobQuestionsTable extends Migration {

	public function up()
	{
		Schema::create('job_questions', function(Blueprint $table) {
			$table->increments('id');
			$table->text('content');
			$table->integer('job_post_id')->unsigned();
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('job_questions');
	}
}
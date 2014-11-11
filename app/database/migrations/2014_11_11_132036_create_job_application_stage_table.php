<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateJobApplicationStageTable extends Migration {

	public function up()
	{
		Schema::create('job_application_stage', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('job_application_id')->unsigned();
			$table->integer('stage_id')->unsigned();
			$table->boolean('is_current')->default(1);
		});
	}

	public function down()
	{
		Schema::drop('job_application_stage');
	}
}
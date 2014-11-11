<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateJobApplicationsTable extends Migration {

	public function up()
	{
		Schema::create('job_applications', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('job_post_id')->unsigned();
			$table->integer('jobseeker_id')->unsigned();
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('job_applications');
	}
}
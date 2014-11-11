<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateJobStatusTable extends Migration {

	public function up()
	{
		Schema::create('job_status', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name', 20);
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('job_status');
	}
}
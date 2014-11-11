<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateJobPostsTable extends Migration {

	public function up()
	{
		Schema::create('job_posts', function(Blueprint $table) {
			$table->increments('id');
			$table->string('title', 20);
			$table->boolean('is_uae_only');
			$table->text('description');
			$table->string('min_education_level_required', 20)->nullable();
			$table->string('min_certification', 50)->nullable();
			$table->smallInteger('min_years_experience')->default('0');
			$table->string('location', 50);
			$table->string('contract_type', 20);
			$table->string('work_timing', 20);
			$table->integer('salary');
			$table->integer('employer_member_id')->unsigned();
			$table->integer('status_id')->unsigned();
			$table->integer('type_id')->unsigned();
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('job_posts');
	}
}
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateJobseekersTable extends Migration {

	public function up()
	{
		Schema::create('jobseekers', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('user_id')->unsigned();
			$table->enum('gender', array('male', 'female'));
			$table->string('residence', 50);
			$table->string('city_live_in', 50);
			$table->string('city_work_in', 50);
			$table->string('mobile1', 20);
			$table->string('mobile2', 20)->nullable();
			$table->date('dob');
			$table->string('primary_language', 20);
			$table->string('secondary_language', 20)->nullable();
			$table->boolean('will_relocate')->default(0);
			$table->boolean('is_anonyous')->default(0);
			$table->string('picture', 200)->nullable();
			$table->string('employment_status', 20);
			$table->integer('work_experience');
			$table->string('sector_most_experience', 50);
			$table->string('other_sector1', 50)->nullable();
			$table->string('other_sector2', 50)->nullable();
			$table->text('awards')->nullable();
			$table->text('achievements')->nullable();
			$table->text('recognitions');
			$table->string('education_level', 50);
			$table->date('graduation_date')->nullable();
			$table->string('ongoing_education', 50)->nullable();
			$table->date('graduation_date2')->nullable();
			$table->text('pro_certifications')->nullable();
			$table->text('ongoing_certifications')->nullable();
			$table->boolean('has_managed_others')->nullable()->default(0);
			$table->integer('notice_period')->default('1');
			$table->boolean('is_registered')->default(0);
			$table->boolean('is_subscribed_newsletter')->default(0);
			$table->timestamps();
			$table->softDeletes();
			$table->integer('country_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('jobseekers');
	}
}
<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call("CountrySeeder");
                $this->call("EmployerSeeder");
                $this->call("EmployerMemberNoteSeeder");
                $this->call("EmployerMemberTaskSeeder");
                $this->call("EmployerSeeder");
                $this->call("JobAlertSeeder");
                $this->call("JobAnswerSeeder");
                $this->call("JobApplicationSeeder");
                $this->call("JobApplicationStageSeeder");
                $this->call("JobCategorySeeder");
                $this->call("JobPostSeeder");
                $this->call("JobQuestionSeeder");
                $this->call("JobSeekerSeeder");
                $this->call("JobStatusSeeder");
                $this->call("JobTypeSeeder");
                $this->call("PermissionRoleSeeder");
                $this->call("PermissionSeeder");
                $this->call("StageSeeder");
                $this->call("UserRoleSeeder");
                $this->call("UserSeeder");
	}
}

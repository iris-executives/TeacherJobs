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
                DB::statement('SET FOREIGN_KEY_CHECKS = 0');
		$this->call("CountrySeeder");
                $this->call("UserSeeder");
                $this->call("EmployerSeeder");
                $this->call("JobTypeSeeder");
                $this->call("JobStatusSeeder");
                $this->call("JobCategorySeeder");
                $this->call("EmployerSeeder");
                $this->call("JobSeekerSeeder");
                $this->call("StageSeeder"); 
                $this->call("JobPostSeeder");
                $this->call("JobApplicationSeeder");
                $this->call("JobQuestionSeeder"); 
                $this->call("JobApplicationStageSeeder");
                $this->call("JobAnswerSeeder");
                $this->call("PermissionSeeder");
                $this->call("PermissionRoleSeeder");
                $this->call("UserRoleSeeder");
                $this->call("JobAlertSeeder");
                $this->call("EmployerMemberNoteSeeder");
                $this->call("EmployerMemberTaskSeeder");
                DB::statement('SET FOREIGN_KEY_CHECKS = 1');
                
	}
}

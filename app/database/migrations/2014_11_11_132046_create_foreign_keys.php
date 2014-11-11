<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('users', function(Blueprint $table) {
			$table->foreign('user_role_id')->references('id')->on('user_roles')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('permission_role', function(Blueprint $table) {
			$table->foreign('role_id')->references('id')->on('user_roles')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('permission_role', function(Blueprint $table) {
			$table->foreign('permission_id')->references('id')->on('permissions')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('jobseekers', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('jobseekers', function(Blueprint $table) {
			$table->foreign('country_id')->references('id')->on('countries')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('job_applications', function(Blueprint $table) {
			$table->foreign('job_post_id')->references('id')->on('job_posts')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('job_applications', function(Blueprint $table) {
			$table->foreign('jobseeker_id')->references('id')->on('jobseekers')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('job_answers', function(Blueprint $table) {
			$table->foreign('job_application_id')->references('id')->on('job_applications')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('job_answers', function(Blueprint $table) {
			$table->foreign('job_question_id')->references('id')->on('job_questions')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('employer_members', function(Blueprint $table) {
			$table->foreign('employer_id')->references('id')->on('employers')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('employer_members', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('employer_members_notes', function(Blueprint $table) {
			$table->foreign('job_application_id')->references('id')->on('job_application_stage')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('employer_members_notes', function(Blueprint $table) {
			$table->foreign('stage_id')->references('id')->on('job_application_stage')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('employer_members_notes', function(Blueprint $table) {
			$table->foreign('member_id')->references('id')->on('employer_members')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('employer_members_tasks', function(Blueprint $table) {
			$table->foreign('user_assigned_by')->references('id')->on('employer_members')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('employer_members_tasks', function(Blueprint $table) {
			$table->foreign('user_assigned_to')->references('id')->on('employer_members')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('job_posts', function(Blueprint $table) {
			$table->foreign('employer_member_id')->references('id')->on('employer_members')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('job_posts', function(Blueprint $table) {
			$table->foreign('status_id')->references('id')->on('job_status')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('job_posts', function(Blueprint $table) {
			$table->foreign('type_id')->references('id')->on('job_types')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('job_questions', function(Blueprint $table) {
			$table->foreign('job_post_id')->references('id')->on('job_posts')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('job_alerts', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('stages', function(Blueprint $table) {
			$table->foreign('parent_id')->references('id')->on('stages')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('job_application_stage', function(Blueprint $table) {
			$table->foreign('job_application_id')->references('id')->on('job_applications')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('job_application_stage', function(Blueprint $table) {
			$table->foreign('stage_id')->references('id')->on('stages')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
	}

	public function down()
	{
		Schema::table('users', function(Blueprint $table) {
			$table->dropForeign('users_user_role_id_foreign');
		});
		Schema::table('permission_role', function(Blueprint $table) {
			$table->dropForeign('permission_role_role_id_foreign');
		});
		Schema::table('permission_role', function(Blueprint $table) {
			$table->dropForeign('permission_role_permission_id_foreign');
		});
		Schema::table('jobseekers', function(Blueprint $table) {
			$table->dropForeign('jobseekers_user_id_foreign');
		});
		Schema::table('jobseekers', function(Blueprint $table) {
			$table->dropForeign('jobseekers_country_id_foreign');
		});
		Schema::table('job_applications', function(Blueprint $table) {
			$table->dropForeign('job_applications_job_post_id_foreign');
		});
		Schema::table('job_applications', function(Blueprint $table) {
			$table->dropForeign('job_applications_jobseeker_id_foreign');
		});
		Schema::table('job_answers', function(Blueprint $table) {
			$table->dropForeign('job_answers_job_application_id_foreign');
		});
		Schema::table('job_answers', function(Blueprint $table) {
			$table->dropForeign('job_answers_job_question_id_foreign');
		});
		Schema::table('employer_members', function(Blueprint $table) {
			$table->dropForeign('employer_members_employer_id_foreign');
		});
		Schema::table('employer_members', function(Blueprint $table) {
			$table->dropForeign('employer_members_user_id_foreign');
		});
		Schema::table('employer_members_notes', function(Blueprint $table) {
			$table->dropForeign('employer_members_notes_job_application_id_foreign');
		});
		Schema::table('employer_members_notes', function(Blueprint $table) {
			$table->dropForeign('employer_members_notes_stage_id_foreign');
		});
		Schema::table('employer_members_notes', function(Blueprint $table) {
			$table->dropForeign('employer_members_notes_member_id_foreign');
		});
		Schema::table('employer_members_tasks', function(Blueprint $table) {
			$table->dropForeign('employer_members_tasks_user_assigned_by_foreign');
		});
		Schema::table('employer_members_tasks', function(Blueprint $table) {
			$table->dropForeign('employer_members_tasks_user_assigned_to_foreign');
		});
		Schema::table('job_posts', function(Blueprint $table) {
			$table->dropForeign('job_posts_employer_member_id_foreign');
		});
		Schema::table('job_posts', function(Blueprint $table) {
			$table->dropForeign('job_posts_status_id_foreign');
		});
		Schema::table('job_posts', function(Blueprint $table) {
			$table->dropForeign('job_posts_type_id_foreign');
		});
		Schema::table('job_questions', function(Blueprint $table) {
			$table->dropForeign('job_questions_job_post_id_foreign');
		});
		Schema::table('job_alerts', function(Blueprint $table) {
			$table->dropForeign('job_alerts_user_id_foreign');
		});
		Schema::table('stages', function(Blueprint $table) {
			$table->dropForeign('stages_parent_id_foreign');
		});
		Schema::table('job_application_stage', function(Blueprint $table) {
			$table->dropForeign('job_application_stage_job_application_id_foreign');
		});
		Schema::table('job_application_stage', function(Blueprint $table) {
			$table->dropForeign('job_application_stage_stage_id_foreign');
		});
	}
}
{{ Form::open(array('route' => 'route.name', 'method' => 'POST')) }}
	<ul>
		<li>
			{{ Form::label('user_id', 'User_id:') }}
			{{ Form::text('user_id') }}
		</li>
		<li>
			{{ Form::label('gender', 'Gender:') }}
			{{ Form::text('gender') }}
		</li>
		<li>
			{{ Form::label('residence', 'Residence:') }}
			{{ Form::text('residence') }}
		</li>
		<li>
			{{ Form::label('city_live_in', 'City_live_in:') }}
			{{ Form::text('city_live_in') }}
		</li>
		<li>
			{{ Form::label('city_work_in', 'City_work_in:') }}
			{{ Form::text('city_work_in') }}
		</li>
		<li>
			{{ Form::label('mobile1', 'Mobile1:') }}
			{{ Form::text('mobile1') }}
		</li>
		<li>
			{{ Form::label('mobile2', 'Mobile2:') }}
			{{ Form::text('mobile2') }}
		</li>
		<li>
			{{ Form::label('dob', 'Dob:') }}
			{{ Form::text('dob') }}
		</li>
		<li>
			{{ Form::label('primary_language', 'Primary_language:') }}
			{{ Form::text('primary_language') }}
		</li>
		<li>
			{{ Form::label('secondary_language', 'Secondary_language:') }}
			{{ Form::text('secondary_language') }}
		</li>
		<li>
			{{ Form::label('will_relocate', 'Will_relocate:') }}
			{{ Form::text('will_relocate') }}
		</li>
		<li>
			{{ Form::label('is_anonyous', 'Is_anonyous:') }}
			{{ Form::text('is_anonyous') }}
		</li>
		<li>
			{{ Form::label('picture', 'Picture:') }}
			{{ Form::text('picture') }}
		</li>
		<li>
			{{ Form::label('employment_status', 'Employment_status:') }}
			{{ Form::text('employment_status') }}
		</li>
		<li>
			{{ Form::label('work_experience', 'Work_experience:') }}
			{{ Form::text('work_experience') }}
		</li>
		<li>
			{{ Form::label('sector_most_experience', 'Sector_most_experience:') }}
			{{ Form::text('sector_most_experience') }}
		</li>
		<li>
			{{ Form::label('other_sector1', 'Other_sector1:') }}
			{{ Form::text('other_sector1') }}
		</li>
		<li>
			{{ Form::label('other_sector2', 'Other_sector2:') }}
			{{ Form::text('other_sector2') }}
		</li>
		<li>
			{{ Form::label('awards', 'Awards:') }}
			{{ Form::textarea('awards') }}
		</li>
		<li>
			{{ Form::label('achievements', 'Achievements:') }}
			{{ Form::textarea('achievements') }}
		</li>
		<li>
			{{ Form::label('recognitions', 'Recognitions:') }}
			{{ Form::textarea('recognitions') }}
		</li>
		<li>
			{{ Form::label('education_level', 'Education_level:') }}
			{{ Form::text('education_level') }}
		</li>
		<li>
			{{ Form::label('graduation_date', 'Graduation_date:') }}
			{{ Form::text('graduation_date') }}
		</li>
		<li>
			{{ Form::label('ongoing_education', 'Ongoing_education:') }}
			{{ Form::text('ongoing_education') }}
		</li>
		<li>
			{{ Form::label('graduation_date2', 'Graduation_date2:') }}
			{{ Form::text('graduation_date2') }}
		</li>
		<li>
			{{ Form::label('pro_certifications', 'Pro_certifications:') }}
			{{ Form::textarea('pro_certifications') }}
		</li>
		<li>
			{{ Form::label('ongoing_certifications', 'Ongoing_certifications:') }}
			{{ Form::textarea('ongoing_certifications') }}
		</li>
		<li>
			{{ Form::label('has_managed_others', 'Has_managed_others:') }}
			{{ Form::text('has_managed_others') }}
		</li>
		<li>
			{{ Form::label('notice_period', 'Notice_period:') }}
			{{ Form::text('notice_period') }}
		</li>
		<li>
			{{ Form::label('is_registered', 'Is_registered:') }}
			{{ Form::text('is_registered') }}
		</li>
		<li>
			{{ Form::label('is_subscribed_newsletter', 'Is_subscribed_newsletter:') }}
			{{ Form::text('is_subscribed_newsletter') }}
		</li>
		<li>
			{{ Form::label('country_id', 'Country_id:') }}
			{{ Form::text('country_id') }}
		</li>
		<li>
			{{ Form::submit() }}
		</li>
	</ul>
{{ Form::close() }}
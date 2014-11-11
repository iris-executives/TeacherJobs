{{ Form::open(array('route' => 'route.name', 'method' => 'POST')) }}
	<ul>
		<li>
			{{ Form::label('title', 'Title:') }}
			{{ Form::text('title') }}
		</li>
		<li>
			{{ Form::label('is_uae_only', 'Is_uae_only:') }}
			{{ Form::text('is_uae_only') }}
		</li>
		<li>
			{{ Form::label('description', 'Description:') }}
			{{ Form::textarea('description') }}
		</li>
		<li>
			{{ Form::label('min_education_level_required', 'Min_education_level_required:') }}
			{{ Form::text('min_education_level_required') }}
		</li>
		<li>
			{{ Form::label('min_certification', 'Min_certification:') }}
			{{ Form::text('min_certification') }}
		</li>
		<li>
			{{ Form::label('min_years_experience', 'Min_years_experience:') }}
			{{ Form::text('min_years_experience') }}
		</li>
		<li>
			{{ Form::label('location', 'Location:') }}
			{{ Form::text('location') }}
		</li>
		<li>
			{{ Form::label('contract_type', 'Contract_type:') }}
			{{ Form::text('contract_type') }}
		</li>
		<li>
			{{ Form::label('work_timing', 'Work_timing:') }}
			{{ Form::text('work_timing') }}
		</li>
		<li>
			{{ Form::label('salary', 'Salary:') }}
			{{ Form::text('salary') }}
		</li>
		<li>
			{{ Form::label('employer_member_id', 'Employer_member_id:') }}
			{{ Form::text('employer_member_id') }}
		</li>
		<li>
			{{ Form::label('status_id', 'Status_id:') }}
			{{ Form::text('status_id') }}
		</li>
		<li>
			{{ Form::label('type_id', 'Type_id:') }}
			{{ Form::text('type_id') }}
		</li>
		<li>
			{{ Form::submit() }}
		</li>
	</ul>
{{ Form::close() }}
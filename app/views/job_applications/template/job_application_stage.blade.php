{{ Form::open(array('route' => 'route.name', 'method' => 'POST')) }}
	<ul>
		<li>
			{{ Form::label('job_application_id', 'Job_application_id:') }}
			{{ Form::text('job_application_id') }}
		</li>
		<li>
			{{ Form::label('stage_id', 'Stage_id:') }}
			{{ Form::text('stage_id') }}
		</li>
		<li>
			{{ Form::label('is_current', 'Is_current:') }}
			{{ Form::text('is_current') }}
		</li>
		<li>
			{{ Form::submit() }}
		</li>
	</ul>
{{ Form::close() }}
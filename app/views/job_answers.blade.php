{{ Form::open(array('route' => 'route.name', 'method' => 'POST')) }}
	<ul>
		<li>
			{{ Form::label('content', 'Content:') }}
			{{ Form::textarea('content') }}
		</li>
		<li>
			{{ Form::label('job_application_id', 'Job_application_id:') }}
			{{ Form::text('job_application_id') }}
		</li>
		<li>
			{{ Form::label('job_question_id', 'Job_question_id:') }}
			{{ Form::text('job_question_id') }}
		</li>
		<li>
			{{ Form::submit() }}
		</li>
	</ul>
{{ Form::close() }}
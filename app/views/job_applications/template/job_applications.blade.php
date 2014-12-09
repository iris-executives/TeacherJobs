{{ Form::open(array('route' => 'route.name', 'method' => 'POST')) }}
	<ul>
		<li>
			{{ Form::label('job_post_id', 'Job_post_id:') }}
			{{ Form::text('job_post_id') }}
		</li>
		<li>
			{{ Form::label('jobseeker_id', 'Jobseeker_id:') }}
			{{ Form::text('jobseeker_id') }}
		</li>
		<li>
			{{ Form::submit() }}
		</li>
	</ul>
{{ Form::close() }}
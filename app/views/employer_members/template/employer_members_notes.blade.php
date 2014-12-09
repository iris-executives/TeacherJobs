{{ Form::open(array('route' => 'route.name', 'method' => 'POST')) }}
	<ul>
		<li>
			{{ Form::label('title', 'Title:') }}
			{{ Form::text('title') }}
		</li>
		<li>
			{{ Form::label('content', 'Content:') }}
			{{ Form::textarea('content') }}
		</li>
		<li>
			{{ Form::label('job_application_id', 'Job_application_id:') }}
			{{ Form::text('job_application_id') }}
		</li>
		<li>
			{{ Form::label('stage_id', 'Stage_id:') }}
			{{ Form::text('stage_id') }}
		</li>
		<li>
			{{ Form::label('member_id', 'Member_id:') }}
			{{ Form::text('member_id') }}
		</li>
		<li>
			{{ Form::label('is_private', 'Is_private:') }}
			{{ Form::text('is_private') }}
		</li>
		<li>
			{{ Form::submit() }}
		</li>
	</ul>
{{ Form::close() }}
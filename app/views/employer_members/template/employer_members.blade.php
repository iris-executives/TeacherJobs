{{ Form::open(array('route' => 'route.name', 'method' => 'POST')) }}
	<ul>
		<li>
			{{ Form::label('employer_id', 'Employer_id:') }}
			{{ Form::text('employer_id') }}
		</li>
		<li>
			{{ Form::label('user_id', 'User_id:') }}
			{{ Form::text('user_id') }}
		</li>
		<li>
			{{ Form::submit() }}
		</li>
	</ul>
{{ Form::close() }}
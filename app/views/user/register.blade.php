{{ Form::open(array('route' => 'route.name', 'method' => 'POST')) }}
	<ul>
		<li>
			{{ Form::label('username', 'Username:') }}
			{{ Form::text('username') }}
		</li>
		<li>
			{{ Form::label('password', 'Password:') }}
			{{ Form::text('password') }}
		</li>
		<li>
			{{ Form::label('email', 'Email:') }}
			{{ Form::text('email') }}
		</li>
		<li>
			{{ Form::label('first_name', 'First_name:') }}
			{{ Form::text('first_name') }}
		</li>
		<li>
			{{ Form::label('surname', 'Surname:') }}
			{{ Form::text('surname') }}
		</li>
		<li>
			{{ Form::hidden('user_role_id', 2) }} <!-- 1: employer, 2:jobseeker ? -->
		</li>
		<li>
			{{ Form::submit() }}
		</li>
	</ul>
{{ Form::close() }}
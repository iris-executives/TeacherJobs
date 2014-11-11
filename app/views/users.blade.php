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
			{{ Form::label('user_role_id', 'User_role_id:') }}
			{{ Form::text('user_role_id') }}
		</li>
		<li>
			{{ Form::submit() }}
		</li>
	</ul>
{{ Form::close() }}
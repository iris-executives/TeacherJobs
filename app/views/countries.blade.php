{{ Form::open(array('route' => 'route.name', 'method' => 'POST')) }}
	<ul>
		<li>
			{{ Form::label('name', 'Name:') }}
			{{ Form::text('name') }}
		</li>
		<li>
			{{ Form::label('abreviation', 'Abreviation:') }}
			{{ Form::text('abreviation') }}
		</li>
		<li>
			{{ Form::label('Phone_number_code', 'Phone_number_code:') }}
			{{ Form::text('Phone_number_code') }}
		</li>
		<li>
			{{ Form::submit() }}
		</li>
	</ul>
{{ Form::close() }}
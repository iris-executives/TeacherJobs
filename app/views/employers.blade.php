{{ Form::open(array('route' => 'route.name', 'method' => 'POST')) }}
	<ul>
		<li>
			{{ Form::label('name', 'Name:') }}
			{{ Form::text('name') }}
		</li>
		<li>
			{{ Form::label('description', 'Description:') }}
			{{ Form::textarea('description') }}
		</li>
		<li>
			{{ Form::label('phone', 'Phone:') }}
			{{ Form::text('phone') }}
		</li>
		<li>
			{{ Form::label('address', 'Address:') }}
			{{ Form::text('address') }}
		</li>
		<li>
			{{ Form::label('city', 'City:') }}
			{{ Form::text('city') }}
		</li>
		<li>
			{{ Form::label('pobox', 'pobox:') }}
			{{ Form::text('pobox') }}
		</li>
		<li>
			{{ Form::label('logo', 'Logo:') }}
			{{ Form::text('logo') }}
		</li>
		<li>
			{{ Form::submit() }}
		</li>
	</ul>
{{ Form::close() }}
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
			{{ Form::label('user_assigned_by', 'User_assigned_by:') }}
			{{ Form::text('user_assigned_by') }}
		</li>
		<li>
			{{ Form::label('user_assigned_to', 'User_assigned_to:') }}
			{{ Form::text('user_assigned_to') }}
		</li>
		<li>
			{{ Form::label('deadline', 'Deadline:') }}
			{{ Form::text('deadline') }}
		</li>
		<li>
			{{ Form::submit() }}
		</li>
	</ul>
{{ Form::close() }}
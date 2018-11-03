@extends('layouts.app')

@section('content')

<h2>Create Staff Member</h2>

<div id="form" >
	
	<ul>
	    @foreach($errors->all() as $error)
	        <li>{{{ $error }}}</li>
	    @endforeach
	</ul>
	
	{!! Form::model(array('action' => 'StaffMemberController@store')) !!}
		
		@include('staff_member._form')
		
		<div class="row buttons">
		{!! Form::submit('Create') !!}
		</div>
		
	{!! Form::close() !!}
	
</div><!-- form -->

@endsection
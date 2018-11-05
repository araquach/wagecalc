@extends('layouts.app')

@section('content')

<h2>Create Staff Member</h2>



<div id="form" >
	
	@if(Session::has('message'))
	    <div>
	    	{{{ Session::get('message') }}}
	    </div>
	@endif

	{!! Form::model(array(
		'action' => 'StaffMemberController@store'
	)) !!}

	@if (count($errors) > 0)

		<div class="errorSummary">
			<p>Please fix the following input errors:</p>
			<ul>
		   		 @foreach($errors->all() as $error)
		        <li>{{{ $error }}}</li>
		    	@endforeach
			</ul>
		</div>
	   
	@endif
		
		@include('staff_member._form')
		
		<div class="row buttons">
		{!! Form::submit('Create') !!}
		</div>
		
	{!! Form::close() !!}
	
</div><!-- form -->

@endsection
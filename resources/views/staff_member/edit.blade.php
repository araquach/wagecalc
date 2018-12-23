@extends('layouts.app')

@section('content')

<div class="container">

	<h2 class="title is-3">Update Staff Member</h2>

	@if(Session::has('message'))
	    <div class="applicationSuccess">
	    {{{ Session::get('message') }}}
	    </div>
	@endif

	<div id="form" >
		
		<ul>
		    @foreach($errors->all() as $error)
		        <li>{{{ $error }}}</li>
		    @endforeach
		</ul>
		
		{!! Form::model($staff, ['method' => 'PATCH', 'action' => ['StaffMemberController@update', $staff->id]]) !!}
			
			@include('staff_member._form')
			
			<div class="row buttons">
			{!! Form::submit('Update') !!}
			</div>
			
		{!! Form::close() !!}
		
	</div><!-- form -->

</div>

@endsection
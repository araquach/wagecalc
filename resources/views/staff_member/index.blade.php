@extends('layouts.app')

@section('content')

<h1>Staff Members</h1>

<table class="table">
	<tr>
		<th>Stylist</th>
		<th>Birth date</th>
		<th>Salon</th>
		<th>Position</th>
		<th>Holiday Entitlement</th>
		<th>Basic Wage</th>
		<th>Hours P/D</th>
		<th>Days P/W</th>
		<th>Target Multiplier</th>
		<th>Commission Value</th>
	</tr>	
	@foreach($staffMembers as $staffMember)
	<tr>
		<td>{{ $staffMember->first_name }} {{ $staffMember->last_name }}</td>
		<td>{{ $staffMember->birth_date }}</td>
		<td>{{ $staffMember->salon }}</td>
		<td>{{ $staffMember->position }}</td>
		<td>{{ $staffMember->holiday_entitlement }}</td>
		<td>{{ $staffMember->basic_wage }}</td>
		<td>{{ $staffMember->hours_pd }}</td>
		<td>{{ $staffMember->days_pw }}</td>
		<td>{{ $staffMember->target_multiplier }}</td>
		<td>{{ $staffMember->commission_value }}</td>
	</tr>

	@endforeach

</table>



@endsection
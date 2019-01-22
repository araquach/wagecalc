@extends('layouts.app')

@section('content')
<div class="container">
	<h1 class="title is-3">Staff Members</h1>
	

	@if(count($staffMembersJAK) > 0)

	<h2 class="title is-5">Jakata</h2>

	<table class="table">
		<thead>
			<tr>
				<th>Stylist</th>
				<!-- <th>Birth date</th> -->
				<th>Salon</th>
				<th>Position</th>
				<th>Holidays</th>
				<th>Basic Wage</th>
				<th>Hours P/D</th>
				<th>Days P/W</th>
				<th>Commission Value</th>
			</tr>
		</thead>
		<tbody>	
			@foreach($staffMembersJAK as $staffJAK)
			<tr>
				<td><a href="/staff/{{ $staffJAK->id }}/edit">{{ $staffJAK->first_name }} {{ $staffJAK->last_name }}</a></td>
				<!-- <td>{{ $staffJAK->birth_date }}</td> -->
				<td>{{ $staffJAK->salon }}</td>
				<td>{{ $staffJAK->position }}</td>
				<td>{{ $staffJAK->holiday_entitlement }}</td>
				<td>£{{ $staffJAK->basic_wage }}</td>
				<td>{{ $staffJAK->hours_pd }}</td>
				<td>{{ $staffJAK->days_pw }}</td>
				<td>{{ $staffJAK->percentage_return }}%</td>
			</tr>
			@endforeach
		</tbody>

	</table>

	@else

	<p>There are no Jakata Staff members added</p>
	<a href="staff/create">Add staff member</a>


	@endif

	@if(count($staffMembersPK) > 0)

	<h2 class="title is-5">PK</h2>

	<table class="table">
		<thead>
			<tr>
				<th>Stylist</th>
				<!-- <th>Birth date</th> -->
				<th>Salon</th>
				<th>Position</th>
				<th>Holidays</th>
				<th>Basic Wage</th>
				<th>Hours P/D</th>
				<th>Days P/W</th>
				<th>Commission Value</th>
			</tr>	
		</thead>
		<tbody>
		@foreach($staffMembersPK as $staffPK)
			<tr>
				<td><a href="/staff/{{ $staffPK->id }}/edit">{{ $staffPK->first_name }} {{ $staffPK->last_name }}</a></td>
				<!-- <td>{{ $staffPK->birth_date }}</td> -->
				<td>{{ $staffPK->salon }}</td>
				<td>{{ $staffPK->position }}</td>
				<td>{{ $staffPK->holiday_entitlement }}</td>
				<td>£{{ $staffPK->basic_wage }}</td>
				<td>{{ $staffPK->hours_pd }}</td>
				<td>{{ $staffPK->days_pw }}</td>
				<td>{{ $staffPK->percentage_return }}%</td>
			</tr>
		@endforeach
		</tbody>
	</table>

	@else

	<p>There are no PK Staff members added</p>
	<a href="staff/create">Add staff member</a>

	@endif

</div>



@endsection
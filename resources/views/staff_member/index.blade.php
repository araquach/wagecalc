@extends('layouts.app')

@section('content')
<div class="container">
	<h1 class="heading">Staff Members</h1>

	<h2 class="heading">Jakata</h2>

	<table class="table">
		<thead>
			<tr>
				<th>Stylist</th>
				<th>Birth date</th>
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
				<td><a href="/">{{ $staffJAK->first_name }} {{ $staffJAK->last_name }}</a></td>
				<td>{{ $staffJAK->birth_date }}</td>
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

	<h2 class="heading">PK</h2>

	<table class="table">
		<thead>
			<tr>
				<th>Stylist</th>
				<th>Birth date</th>
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
				<td><a href="">{{ $staffPK->first_name }} {{ $staffPK->last_name }}</a></td>
				<td>{{ $staffPK->birth_date }}</td>
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
</div>

@endsection
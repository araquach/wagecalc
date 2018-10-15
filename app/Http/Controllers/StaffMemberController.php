<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StaffMember;

class StaffMemberController extends Controller
{
    /** 
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
    public function index()
	{
		$staffMembersPK = StaffMember::where('salon', 'PK')->get();
		$staffMembersJAK = StaffMember::where('salon', 'Jakata')->get();

		return view('staff_member.index', compact('staffMembersPK', 'staffMembersJAK'));
		
		// return dd($staffMembersPK);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show(StaffMember $staffMember)
	{
		return view('staff_member.show', compact('staffMember'));
	}

	public function calculate(StaffMember $staffMember)
	{
		return view('staff_member.calculate', compact('staffMember'));
	}

}

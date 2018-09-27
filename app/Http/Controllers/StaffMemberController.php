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
		$staffMembers = StaffMember::all();
		
		return view('staff_member.index', compact('staffMembers'));
		
		// return dd($staffMembers);
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

}

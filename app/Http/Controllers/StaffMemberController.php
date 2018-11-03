<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StaffMember;

class StaffMemberController extends Controller
{

	public function __construct(StaffMember, $staff)
	{
	    $this->staff = $staff;

	    $this->middleware('auth');
	}

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

	public function create()
	{
		return view('staff_member.create');
	}

	public function store(StaffMemberFormRequest $request)
	{
		StaffMember::create($input);

		return redirect()->back()->with('message', 'Staff Member Created');
	}
	
	public function edit(StaffMember $staff)
	{
		return view('staff_member.edit', compact 'staff');
	}

	public function update(StaffMemberFormRequest $request, StaffMember $staff)
	{
		$staff->update($request->all());

		return redirect()->back()->with('message', 'The staff member has been updated');
	}

	public function staff()
	{
		$staffMembers = StaffMember::all();

		return $staffMembers->toJson();
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

	public function test()
	{
		return view('staff_member.test');
	}

}

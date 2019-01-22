<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StaffMember;
use App\Http\Requests\StaffMemberFormRequest;

class StaffMemberController extends Controller
{

	public function __construct(StaffMember $staff)
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
	}

	/** 
	 * Create a new resource
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('staff_member.create');
	}

	/**
	 *Store the new StaffMemner
	 * 
	 * @param  StaffMemberFormRequest
	 * @return [type]
	 */
	public function store(StaffMemberFormRequest $request)
	{
		$input = $request->all();
		
	    StaffMember::create($input);

		return redirect()->back()->with('message', 'Staff Member Created');
	}
	
	/**
	 * Edit StaffMember
	 * @param  StaffMember
	 * @return [type]
	 */
	public function edit(StaffMember $staff)
	{
		return view('staff_member.edit', compact('staff'));
	}

	/**
	 * Updates the StaffMember in the database
	 * @param  StaffMemberFormRequest
	 * @param  StaffMember
	 * @return [type]
	 */
	public function update(StaffMemberFormRequest $request, StaffMember $staff)
	{
		$staff->update($request->all());

		return redirect()->back()->with('message', 'The staff member has been updated');
	}

	/**
	 * Show all the StaffMember instances
	 * @return [type]
	 */
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

	/**
	 * Runs the calculations
	 * @param  StaffMember
	 * @return [type]
	 */
	public function calculate(StaffMember $staffMember)
	{
		return view('staff_member.calculate', compact('staffMember'));
	}

	/**
	 * Test page to try out code
	 * @return [type]
	 */
	public function test()
	{
		return view('staff_member.test');
	}

}

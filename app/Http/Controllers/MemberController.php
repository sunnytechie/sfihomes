<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia::render('Members/New', [
            
        ]);
    }

    public function new($tenant)
    {
        $tenantIDforThisMember = $tenant;
        return Inertia::render('Members/New', [
           'tenantIDforThisMember' => $tenantIDforThisMember,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $tenantID = $request->tenant_id;

        $member = New Member;
        $member->tenant_id = $request->tenant_id;
        $member->household_member_photo = $request->household_member_photo;
        $member->household_member_fullname = $request->household_member_fullname;
        $member->household_member_relationship = $request->household_member_relationship;
        $member->household_member_sex = $request->household_member_sex;
        $member->household_member_birth = $request->household_member_birth;
        $member->household_member_phone = $request->household_member_phone;
        $member->household_member_state = $request->household_member_state;
        $member->household_member_lga = $request->household_member_lga;
        $member->household_member_disability = $request->household_member_disability;
        $member->save();

        return Redirect::route('tenants.show', $tenantID)->with('message', 'New member has been added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Detail;
use App\Models\Tenant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class DetailController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $tenant)
    {
        //validate
        dd($tenant);
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
        return Inertia::render('Details/Edit', [
            'detail_id' => $id,
        ]);
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
        //dd($request->all());
        $detail = Detail::find($id);
        $detail->next_kin_photo = $request->next_kin_photo;
        $detail->next_kin_fullname = $request->next_kin_fullname;
        $detail->next_kin_relationship = $request->next_kin_relationship;
        $detail->next_kin_address = $request->next_kin_address;
        $detail->next_kin_postcode = $request->next_kin_postcode;
        $detail->next_kin_state = $request->next_kin_state;
        $detail->next_kin_city = $request->next_kin_city;
        $detail->next_kin_phone = $request->next_kin_phone;
        $detail->next_kin_email = $request->next_kin_email;
        $detail->referee_fullname = $request->referee_fullname;
        $detail->referee_city = $request->referee_city;
        $detail->referee_state = $request->referee_state;
        $detail->referee_lga = $request->referee_lga;
        $detail->referee_phone = $request->referee_phone;
        $detail->referee_relationship = $request->referee_relationship;
        $detail->referee_address = $request->referee_address;
        $detail->referee_occupation = $request->referee_occupation;
        $detail->referee_age = $request->referee_age;
        $detail->save();
        
        $tenantID = $detail->tenant_id;
        //redirect to profile to continue adding other info.
        return Redirect::route('tenants.show', $tenantID);
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

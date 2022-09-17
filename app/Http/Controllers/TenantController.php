<?php

namespace App\Http\Controllers;

use App\Models\Asset;
use Inertia\Inertia;
use App\Models\Tenant;
use App\Models\Building;
use App\Models\Department;
use App\Models\Detail;
use App\Models\Item;
use App\Models\Member;
use App\Models\Security;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class TenantController extends Controller
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
        $departments = Department::get();
        $buildings = Building::get();
        return Inertia::render('Tenants/New', [
            'departments' => $departments,
            'buildings' => $buildings,
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
        //validate
        $this->validate($request, [
            'tenant_photo' => 'required',
            'building_id' => 'required',
            'department_id' => 'required',
            'tenant_title' => 'required',
            'tenant_surname' => 'required',
            'tenant_middle_name' => '',
            'tenant_last' => 'required',
            'tenant_sex' => 'required',
            'tenant_birth_date' => 'required',
            'tenant_relationship_status' => 'required',
            'tenant_state_origin' => 'required',
            'tenant_city' => 'required',
            'tenant_lga' => 'required',
            'tenant_postcode' => 'required',
            'tenant_resident_address' => '',
            'tenant_number_of_kids' => '',
            'tenant_disability' => '',
            'tenant_home_number' => '',
            'tenant_office_number' => '',
            'tenant_email' => '',
            'tenant_mobile_phone' => 'required',
        ]);

        $nil = "Nil";

        $tenant = New Tenant;
        $tenant->tenant_photo = $request->tenant_photo;
        $tenant->building_id = $request->building_id;
        $tenant->department_id = $request->department_id;
        $tenant->tenant_title = $request->tenant_title;
        $tenant->tenant_surname = $request->tenant_surname;
        $tenant->tenant_middle_name = $request->tenant_middle_name;
        $tenant->tenant_last = $request->tenant_last;
        $tenant->tenant_sex = $request->tenant_sex;
        $tenant->tenant_birth_date = $request->tenant_birth_date;
        $tenant->tenant_relationship_status = $request->tenant_relationship_status;
        $tenant->tenant_state_origin = $request->tenant_state_origin;
        $tenant->tenant_city = $request->tenant_city;
        $tenant->tenant_lga = $request->tenant_lga;
        $tenant->tenant_postcode = $request->tenant_postcode;
        $tenant->tenant_resident_address = $request->tenant_resident_address;
        $tenant->tenant_number_of_kids = $request->tenant_number_of_kids;
        $tenant->tenant_disability = $request->tenant_disability;
        $tenant->tenant_home_number = $request->tenant_home_number;
        $tenant->tenant_office_number = $request->tenant_office_number;
        $tenant->tenant_email = $request->tenant_email;
        $tenant->tenant_mobile_phone = $request->tenant_mobile_phone;
        $tenant->save();

        $tenantID = $tenant->id;

        $detail = New Detail;
        $detail->tenant_id = $tenantID;
        $detail->next_kin_photo = "Nil";
        $detail->next_kin_fullname = "Nil";
        $detail->next_kin_relationship = "Nil";
        $detail->next_kin_address = "Nil";
        $detail->next_kin_postcode = "Nil";
        $detail->next_kin_state = "Nil";
        $detail->next_kin_city = "Nil";
        $detail->next_kin_phone = "Nil";
        $detail->next_kin_email = "Nil";
        $detail->referee_photo = "Nil";
        $detail->referee_fullname = "Nil";
        $detail->referee_city = "Nil";
        $detail->referee_state = "Nil";
        $detail->referee_lga = "Nil";
        $detail->referee_phone = "Nil";
        $detail->referee_relationship = "Nil";
        $detail->referee_address = "Nil";
        $detail->referee_occupation = "Nil";
        $detail->referee_age = "Nil";
        $detail->save();

        $detailID = $detail->id;

        return Redirect::route('details.edit', $detailID);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tenant = Tenant::find($id);
        $detail = Detail::where('tenant_id', $id)->first();
        $assets = Asset::where('tenant_id', $id)->get();
        $items = Item::where('tenant_id', $id)->get();
        $securities = Security::where('tenant_id', $id)->get();
        $members = Member::where('tenant_id', $id)->get();
        //dd($detail);
        return Inertia::render('Tenants/Show', [
            'tenant' => $tenant,
            'detail' => $detail,
            'assets' => $assets,
            'items' => $items,
            'securities' => $securities,
            'members' => $members,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //validate

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
        //validate

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

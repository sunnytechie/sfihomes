<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Tenant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class NextOfKinController extends Controller
{
    public function edit($tenant) {
        $tenant = Tenant::find($tenant);
        $tenantID = $tenant->id;
        return Inertia::render('NextOfKin/New', [
            'tenantID' => $tenantID,
        ]);
    }

    public function update(Request $request) {
        
        

        dd($request->all());


        //$tenant = Tenant::find($tenant);
        //$tenant->next_kin_photo = $request->next_kin_photo;
        //$tenant->next_kin_fullname = $request->next_kin_fullname;
        //$tenant->next_kin_relationship = $request->next_kin_relationship;
        //$tenant->next_kin_address = $request->next_kin_address;
        //$tenant->next_kin_postcode = $request->next_kin_postcode;
        //$tenant->next_kin_state = $request->next_kin_state;
        //$tenant->next_kin_city = $request->next_kin_city;
        //$tenant->next_kin_phone = $request->next_kin_phone;
        //$tenant->next_kin_email = $request->next_kin_email;
        //$tenant->save();

        //$tenantID = $tenant->id;

        //return Redirect::route('edit.referee', $tenantID);
    }
}

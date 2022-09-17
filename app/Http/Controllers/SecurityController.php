<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Tenant;
use App\Models\Security;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class SecurityController extends Controller
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $security = Security::find($id);
        $details = $security->security_details;
        return Inertia::render('Security/Show', [
            'security' => $security,
            'details' => $details,
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
        $security = Security::find($id);
        $details = $security->security_details;
        $tenantID = $security->tenant_id;
        $tenantDetails = Tenant::where('id', $tenantID)->first();
        //dd($tenantDetails);
        return Inertia::render('Security/Edit', [
            'security' => $security,
            'details' => $details,
            'tenantDetails' => $tenantDetails,
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
        $security = Security::find($id);
        $security->security_details = $request->security_details;
        $security->security_file = $request->security_file;
        $security->save();

        return Redirect::route('securities.edit', $id)->with('message', 'Updated successfully.');
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

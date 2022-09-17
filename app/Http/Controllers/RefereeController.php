<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Tenant;
use Illuminate\Http\Request;

class RefereeController extends Controller
{

    public function edit($tenant) {
        $tenant = Tenant::find($tenant);
        $tenantID = $tenant->id;
        return Inertia::render('NextOfKin/New', [
            'tenantID' => $tenantID,
        ]);
    }

    public function update() {
        
    }
}

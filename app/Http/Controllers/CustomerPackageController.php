<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerPackageController extends Controller
{
    //
    public function show(Request $request)
    {
        //Get the package tracking code from the request
        $tracking_code = $request->input('tracking_code');

        //Get the package from the database
        $package = \App\Models\Package::where('tracking_code', $tracking_code)->first();
        if(!$package)
        {
            $transits = [];
        }
        else
        {
            //Get the transit history of the package
            $transits = \App\Models\Transit::where('package_id', $package->id)->get();
        }

        return view('package', compact('package', 'transits'));
    }


}

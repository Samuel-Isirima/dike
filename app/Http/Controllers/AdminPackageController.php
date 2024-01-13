<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPackageController extends Controller
{
    //
    public function index(Request $request)
    {
        //Get all the packages from the database
        $packages = \App\Models\Package::all();

        return view('admin.packages', compact('packages'));
    }

    public function create(Request $request)
    {
        //Validate the request
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'status' => 'required',
            'mode' => 'required',
            'sender_name' => 'required',
            'sender_address' => 'required',
            'sender_city' => 'required',
            'sender_state' => 'required',
            'sender_country' => 'required',
            'sender_phone' => 'required',
            'recipient_name' => 'required',
            'recipient_address' => 'required',
            'recipient_city' => 'required',
            'recipient_state' => 'required',
            'recipient_country' => 'required',
            'recipient_phone' => 'required',
        ]);

        //generate a random 10 character tracking code
        $tracking_code = substr(md5(time()), 0, 10);

        //Create the package
        $package = \App\Models\Package::create([
            'tracking_code' => $tracking_code,
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'status' => $request->input('status'),
            'mode' => $request->input('mode'),
            'sender_name' => $request->input('sender_name'),
            'sender_address' => $request->input('sender_address'),
            'sender_city' => $request->input('sender_city'),
            'sender_state' => $request->input('sender_state'),
            'sender_country' => $request->input('sender_country'),
            'sender_phone' => $request->input('sender_phone'),
            'recipient_name' => $request->input('recipient_name'),
            'recipient_address' => $request->input('recipient_address'),
            'recipient_city' => $request->input('recipient_city'),
            'recipient_state' => $request->input('recipient_state'),
            'recipient_country' => $request->input('recipient_country'),
            'recipient_phone' => $request->input('recipient_phone'),
        ]);

      //Redirect to the package details page
        return redirect()->route('admin.package.show', ['tracking_code' => $package->tracking_code]);
    }


    public function show(Request $request)
    {
        //Get the package tracking code from the request
        $tracking_code = $request->input('tracking_code');

        //Get the package from the database
        $package = \App\Models\Package::where('tracking_code', $tracking_code)->first();

        //Get the transit history of the package
        $transits = \App\Models\Transit::where('package_id', $package->id)->get();

        return view('admin.package', compact('package', 'transits'));
    }

    
    public function updatePackage(Request $request)
    {
        //Get the package tracking code from the request
        $tracking_code = $request->input('tracking_code');

        //Get the package from the database
        $package = \App\Models\Package::where('tracking_code', $tracking_code)->first();

        //Update the package
        $package->update([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'status' => $request->input('status'),
            'mode' => $request->input('mode'),
            'sender_name' => $request->input('sender_name'),
            'sender_address' => $request->input('sender_address'),
            'sender_city' => $request->input('sender_city'),
            'sender_state' => $request->input('sender_state'),
            'sender_country' => $request->input('sender_country'),
            'sender_phone' => $request->input('sender_phone'),
            'recipient_name' => $request->input('recipient_name'),
            'recipient_address' => $request->input('recipient_address'),
            'recipient_city' => $request->input('recipient_city'),
            'recipient_state' => $request->input('recipient_state'),
            'recipient_country' => $request->input('recipient_country'),
            'recipient_phone' => $request->input('recipient_phone'),
        ]);

       //Return back with a success message
        return back()->with('success', 'Package updated successfully');
    }

    public function deletePackage(Request $request)
    {
        //Get the package tracking code from the request
        $tracking_code = $request->input('tracking_code');

        //Get the package from the database
        $package = \App\Models\Package::where('tracking_code', $tracking_code)->first();

        //Delete the package
        $package->delete();

        //Return back with a success message
        return back()->with('success', 'Package deleted successfully');
    }

    public function getPackagesJSON(Request $request)
    {
        //Get all the packages from the database
        $packages = \App\Models\Package::all();

        //Return the packages as JSON
        return response()->json($packages);
    }
}

 
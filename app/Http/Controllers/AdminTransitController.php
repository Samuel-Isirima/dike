<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminTransitController extends Controller
{


    //

    public function showCreate(Request $request)
    {
        //Get the package id from the request
        $package_id = $request->input('package_id');
        $package = \App\Models\Package::where('id', $package_id)->first();

        return view('admin.create-transit', compact('package_id', 'package'));
    }

    public function create(Request $request)
    {
        //Validate the request
        $request->validate([
            'package_id' => 'required',
            'mode' => 'required',
            'expected_date_of_arrival' => 'required',
            'date_sent' => 'required',
            'depature_city' => 'required',
            'depature_state' => 'required',
            'depature_country' => 'required',
            'arrival_city' => 'required',
            'arrival_state' => 'required',
            'arrival_country' => 'required',
            'status' => 'required',
            'description' => 'required',
        ]);

        //Create the transit
        $transit = \App\Models\Transit::create([
            'package_id' => $request->input('package_id'),
            'mode' => $request->input('mode'),
            'expected_date_of_arrival' => $request->input('expected_date_of_arrival'),
            'date_sent' => $request->input('date_sent'),
            'depature_city' => $request->input('depature_city'),
            'depature_state' => $request->input('depature_state'),
            'depature_country' => $request->input('depature_country'),
            'arrival_city' => $request->input('arrival_city'),
            'arrival_state' => $request->input('arrival_state'),
            'arrival_country' => $request->input('arrival_country'),
            'status' => $request->input('status'),
            'description' => $request->input('description'),
        ]);

        //Get the package from the database
        $package = \App\Models\Package::where('id', $request->input('package_id'))->first();
        //Redirect to the package details page
        return redirect('/admin/package?tracking_code='. $package->tracking_code);
    }

    public function showEdit(Request $request)
    {
        //Get the transit id from the request
        $id = $request->input('transit_id');

        //Get the transit from the database
        $transit = \App\Models\Transit::where('id', $id)->first();

        //Get the package from the database
        $package = \App\Models\Package::where('id', $transit->package_id)->first();

        return view('admin.edit-transit', compact('transit', 'package'));
    }

    public function edit(Request $request)
    {
        //Validate the request
        $request->validate([
            'id' => 'required',
            // 'package_id' => 'required',
            'mode' => 'required',
            'expected_date_of_arrival' => 'required',
            'date_sent' => 'required',
            'depature_city' => 'required',
            'depature_state' => 'required',
            'depature_country' => 'required',
            'arrival_city' => 'required',
            'arrival_state' => 'required',
            'arrival_country' => 'required',
            'status' => 'required',
            'description' => 'required',
        ]);

        //Update the transit
        $transit = \App\Models\Transit::where('id', $request->input('id'))->update([
            // 'package_id' => $request->input('package_id'),
            'mode' => $request->input('mode'),
            'expected_date_of_arrival' => $request->input('expected_date_of_arrival'),
            'date_sent' => $request->input('date_sent'),
            'depature_city' => $request->input('depature_city'),
            'depature_state' => $request->input('depature_state'),
            'depature_country' => $request->input('depature_country'),
            'arrival_city' => $request->input('arrival_city'),
            'arrival_state' => $request->input('arrival_state'),
            'arrival_country' => $request->input('arrival_country'),
            'status' => $request->input('status'),
            'description' => $request->input('description'),
        ]);

        //Redirect to the package details page
        return redirect('/admin/packages/' . $request->input('package_id'));
    }

    public function delete(Request $request)
    {
        //Validate the request
        $request->validate([
            'id' => 'required',
        ]);

        //Delete the transit
        $transit = \App\Models\Transit::where('id', $request->input('id'))->delete();

       return back()->with('success', 'Transit deleted successfully');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminTransitController extends Controller
{


    //

    public function show_create(Request $request)
    {
        //Get the package id from the request
        $package_id = $request->input('package_id');

        return view('admin.create-transit', compact('package_id'));
    }

    public function create(Request $request)
    {
        //Validate the request
        $request->validate([
            'package_id' => 'required',
            'mode' => 'required',
            'date_arrived' => 'required',
            'date_sent' => 'required',
            'depature_city' => 'required',
            'depature_state' => 'required',
            'depature_country' => 'required',
            'arrival_city' => 'required',
            'arrival_state' => 'required',
            'arrival_country' => 'required',
            'status' => 'required',
            'description' => 'required',
            'title' => 'required',
        ]);

        //Create the transit
        $transit = \App\Models\Transit::create([
            'package_id' => $request->input('package_id'),
            'mode' => $request->input('mode'),
            'date_arrived' => $request->input('date_arrived'),
            'date_sent' => $request->input('date_sent'),
            'depature_city' => $request->input('depature_city'),
            'depature_state' => $request->input('depature_state'),
            'depature_country' => $request->input('depature_country'),
            'arrival_city' => $request->input('arrival_city'),
            'arrival_state' => $request->input('arrival_state'),
            'arrival_country' => $request->input('arrival_country'),
            'status' => $request->input('status'),
            'description' => $request->input('description'),
            'title' => $request->input('title'),
        ]);

        //Redirect to the package details page
        return redirect('/admin/packages/' . $request->input('package_id'));
    }


    public function edit(Request $request)
    {
        //Validate the request
        $request->validate([
            'id' => 'required',
            'package_id' => 'required',
            'mode' => 'required',
            'date_arrived' => 'required',
            'date_sent' => 'required',
            'depature_city' => 'required',
            'depature_state' => 'required',
            'depature_country' => 'required',
            'arrival_city' => 'required',
            'arrival_state' => 'required',
            'arrival_country' => 'required',
            'status' => 'required',
            'description' => 'required',
            'title' => 'required',
        ]);

        //Update the transit
        $transit = \App\Models\Transit::where('id', $request->input('id'))->update([
            'package_id' => $request->input('package_id'),
            'mode' => $request->input('mode'),
            'date_arrived' => $request->input('date_arrived'),
            'date_sent' => $request->input('date_sent'),
            'depature_city' => $request->input('depature_city'),
            'depature_state' => $request->input('depature_state'),
            'depature_country' => $request->input('depature_country'),
            'arrival_city' => $request->input('arrival_city'),
            'arrival_state' => $request->input('arrival_state'),
            'arrival_country' => $request->input('arrival_country'),
            'status' => $request->input('status'),
            'description' => $request->input('description'),
            'title' => $request->input('title'),
        ]);

        //Redirect to the package details page
        return redirect('/admin/packages/' . $request->input('package_id'));
    }

    public function delete(Request $request)
    {
        //Validate the request
        $request->validate([
            'id' => 'required',
            'package_id' => 'required',
        ]);

        //Delete the transit
        $transit = \App\Models\Transit::where('id', $request->input('id'))->delete();

       return back()->with('success', 'Transit deleted successfully');
    }
}

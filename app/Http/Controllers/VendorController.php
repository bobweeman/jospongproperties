<?php

namespace App\Http\Controllers;

use App\City;
use App\Country;
use App\Vendor;
use Illuminate\Http\Request;

class VendorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //show a list of all vendors

        $vendors = Vendor::with('myCountry','myCity')->latest()->orderBy('created_at','desc')->get();
        return view('ListVendor',compact('vendors','myCountry','myCity'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //add a new vendor detail
        //get city and country and ship to view
        $cities = City::latest()->orderBy('name','desc')->pluck('name','id');
//        dd($cities);
        $countries = Country::latest()->orderBy('name','desc')->pluck('name','id');
        return view('vendor',compact('cities','countries'));
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
       // dd($request->all());
        Vendor::create($request->all());
        \Session::flash('success','Entry created successfully!');
        return redirect(route('vendor.index'));
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

        $cities = City::latest()->orderBy('name','desc')->pluck('name','id');
//      dd($cities);
        $countries = Country::latest()->orderBy('name','desc')->pluck('name','id');

        $vendor=Vendor::with('myCity','myCountry')->find($id);
//        dd($vendor);
        return view('EditVendor',compact('vendor','cities','countries'));

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
        Vendor::find($id)->update($request->all());
        \Session::flash('success','Entry updated successfully!');
        return redirect(route('vendor.index'));
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
        Vendor::destroy($id);
        \Session::flash('info','Entry deleted successfully!');
        return redirect(route('vendor.index'));
    }
}

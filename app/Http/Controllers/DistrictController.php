<?php

namespace App\Http\Controllers;

use App\District;
use App\Http\Requests\DistrictRequest;
use App\RegionState;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class DistrictController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //get district with region relationship
        $districts = District::latest()->orderBy('created_at','desc')->with('foo')->get();
// dd($districts);
        return view('ListDistrict',compact('districts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //get available regions
        $regions = RegionState::pluck('name','id');
        return view('district',compact('regions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DistrictRequest $request)
    {

        $a = new District();
        $a->name = Input::get('name');
        $a->region_state_id = Input::get('region_state_id');
        $a->save();
        \Session::flash('success','New District entry created!');
        return redirect(route('district.index'));

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
        //
        $regions = RegionState::pluck('name','id');
        $district = District::with('foo')->find($id);
//        dd($district);
        return view('EditDistrict',compact('district','regions'));
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
       $a= District::find($id);
        $a->name = Input::get('name');
        $a->region_state_id = Input::get('region_state_id');
        $a->update();

        \Session::flash('success','District updated successfully!');
        return redirect(route('district.index'));
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
        District::destroy($id);
        \Session::flash('info','District deleted successfully!');
        return redirect(route('district.index'));

    }
}

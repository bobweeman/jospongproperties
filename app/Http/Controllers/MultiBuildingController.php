<?php

namespace App\Http\Controllers;

use App\City;
use App\Country;
use App\District;
use App\Http\Requests\MultiBuildingRequest;
use App\MultiBuilding;
use App\RegionState;
use Illuminate\Http\Request;
Use Session;

class MultiBuildingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $buildings = MultiBuilding::latest()->orderBy('created_at','desc')->with('units','city','district','country')->get();
//dd($buildings);
        return view('ListMultiBuilding',compact('buildings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $cities = City::latest()->orderBy('name','desc')->pluck('name','id');
        $districts = District::latest()->orderBy('name','desc')->pluck('name','id');
        $regions = RegionState::latest()->orderBy('name','desc')->pluck('name','id');
        $countries = Country::latest()->orderBy('name','desc')->pluck('name','id');
        return view('multibuilding',compact('cities','districts','countries','regions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MultiBuildingRequest $request)
    {
        //
       $current= MultiBuilding::create($request->all());
        $generator = "multi".MultiBuilding::all()->count();
        $current->real_id = $generator;
        $current->update();
        Session::flash('success','New multi building created successfully');
        return redirect(route('multi_unit_building.index'));
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
        $cities = City::latest()->orderBy('name','desc')->pluck('name','id');
        $districts = District::latest()->orderBy('name','desc')->pluck('name','id');
        $countries = Country::latest()->orderBy('name','desc')->pluck('name','id');
        $regions = RegionState::latest()->orderBy('name','desc')->pluck('name','id');
        $building = MultiBuilding::with('country','city','district','region')->find($id);
//        dd($building);
        return view('EditMultiBuilding',compact('cities','districts','countries','building','regions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MultiBuildingRequest $request, $id)
    {
        //
        MultiBuilding::find($id)->update($request->all());
        Session::flash('info','Multi building updated successfully');
        return redirect(route('multi_unit_building.index'));
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
        MultiBuilding::destroy($id);
        Session::flash('error','Multi building updated successfully');
        return redirect(route('multi_unit_building.index'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegionStateRequest;
use App\RegionState;
use Illuminate\Http\Request;

class RegionStateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $regions = RegionState::latest()->orderBy('created_at','desc')->get();
        return view('ListRegionState',compact('regions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('region_state');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RegionStateRequest $request)
    {
        //
        RegionState::create($request->all());
        \Session::flash('success','New Region/State created!');
        return redirect(route('region_state.index'));
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
        $region_state = RegionState::find($id);
        return view('EditRegionState',compact('region_state'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RegionStateRequest $request, $id)
    {
        //
        RegionState::find($id)->update($request->all());
        \Session::flash('success','Region/State updated!');
        return redirect(route('region_state.index'));
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

        RegionState::destroy($id);
        \Session::flash('info','New Region/State deleted!');
        return redirect(route('region_state.index'));
    }
}

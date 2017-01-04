<?php

namespace App\Http\Controllers;

use App\Http\Requests\UnitRequest;
use App\MultiBuilding;
use App\Tenant;
use App\TenantCommercial;
use App\Unit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UnitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //get all units with tenants and belonging Building
        $units = Unit::latest()->orderBy('name','asc')->with('building','tenant','tenantCom')->get();

        return view('ListUnit',compact('units'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        //serve view with tenants
//        $com = TenantCommercial::all()->pluck('full_name','id'); //commercial tenants
//        $res  = Tenant::all()->pluck('full_name','id'); //residential tenants
        $units = Unit::latest()->orderBy('name','asc')->pluck('name','id');
        $buildings = MultiBuilding::latest()->orderBy('name','asc')->pluck('name','id');
        return view('unit',compact('units','buildings'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UnitRequest $request)
    {
        //
        Unit::create($request->all());
        Session::flash('success','Unit Created succussfully');
        return redirect(route('building_unit.index'));
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
        $unit=Unit::with('building')->find($id);
        $buildings = MultiBuilding::latest()->orderBy('name','asc')->pluck('name','id');

//        dd($unit);
        return view('EditUnit',compact('unit','buildings'));

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
        Unit::find($id)->update($request->all());
        Session::flash('success','Unit updated successfully');
        return redirect(route('building_unit.index'));

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
        Unit::destroy($id);
        Session::flash('error','Unit deleted successfully');
        return redirect(route('building_unit.index'));
    }
}

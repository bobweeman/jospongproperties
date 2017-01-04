<?php

namespace App\Http\Controllers;

use App\Http\Requests\SingleUnitResidentialTenantRequest;
use App\SingleBuilding;
use App\Tenant;
use Illuminate\Http\Request;
use Session;

class SingelUnitResidentialTenantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //get all the tenants for a single building unit
        $buildings = SingleBuilding::latest()->orderBy('name','asc')->with('tenant','city','country')->get();
        return view('ListSingleUnitResidentialTenant',compact('buildings'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $buildings = SingleBuilding::latest()->orderBy('name','asc')->pluck('name','id');
        $tenants = Tenant::latest()->orderBy('first_name','acs')->pluck('first_name','id');

        return view('single_unit_residential_tenant',compact('buildings','tenants'));


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SingleUnitResidentialTenantRequest $request)
    {


//        dd($request->building_id);
        $building = SingleBuilding::find($request->building_id)->update($request->all());
        Session::flash('success','Tenant added to building successfully');
        return redirect(route('tenant_res.index'));

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
    }
}

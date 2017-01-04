<?php

namespace App\Http\Controllers;

use App\City;
use App\Country;
use App\District;
use App\Http\Requests\SingleBuildingRequest;
use App\SingleBuilding;
use App\Tenant;
use App\TenantCommercial;
use Illuminate\Http\Request;
use Session;
class SingleBuildingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $buildings = SingleBuilding::with('country','district','tenant','city')->latest()->orderBy('created_at','desc')->get();
        return view('ListSingleBuilding',compact('buildings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //serve view with tenants
        $com = TenantCommercial::all()->pluck('full_name','id')->toArray(); //commercial tenants
        $res  = Tenant::all()->pluck('full_name','id')->toArray(); //residential tenants
        $tenants = array_merge($com,$res); //merge both tenants groups
        $cities = City::latest()->orderBy('name','desc')->pluck('name','id');
        $districts = District::latest()->orderBy('name','desc')->pluck('name','id');
        $countries = Country::latest()->orderBy('name','desc')->pluck('name','id');
        return view('single_building',compact('tenants','cities','countries','districts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SingleBuildingRequest $request)
    {
        //

//        dd($request->all());
        SingleBuilding::create($request->all());
        Session::flash('success','Building created successfully');

        return redirect(route('single_building.index'));
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
        $com = TenantCommercial::all()->pluck('full_name','id')->toArray(); //commercial tenants
        $res  = Tenant::all()->pluck('full_name','id')->toArray(); //residential tenants
        $tenants = array_merge($com,$res); //merge both tenants groups
        $cities = City::latest()->orderBy('name','desc')->pluck('name','id');
        $districts = District::latest()->orderBy('name','desc')->pluck('name','id');
        $countries = Country::latest()->orderBy('name','desc')->pluck('name','id');
        $building=SingleBuilding::with('city','tenant','district')->find($id);
        return view('EditSingleBuilding',compact('building','tenants','cities','countries','districts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SingleBuildingRequest $request, $id)
    {
        //
        SingleBuilding::find($id)->update($request->all());
        Session::flash('success','Building created successfully');

        return redirect(route('single_building.index'));

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
        SingleBuilding::destroy($id);

        Session::flash('error','Building deleted successfully');

        return redirect(route('single_building.index'));
    }
}

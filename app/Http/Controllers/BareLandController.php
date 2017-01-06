<?php

namespace App\Http\Controllers;

use App\BareLand;
use App\City;
use App\Country;
use App\District;
use App\Http\Requests\BareLandRequest;
use App\Tenant;
use App\TenantCommercial;
use Illuminate\Http\Request;
use Session;

class BareLandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $buildings = BareLand::with('country','district','tenant','city')->latest()->orderBy('created_at','desc')->get();
        return view('ListBareLand',compact('buildings'));
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
        $countries = Country::latest()->orderBy('name','desc')->pluck('name','id');
        return view('bare_land',compact('cities','districts','countries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BareLandRequest $request)
    {
        //
        BareLand::create($request->all());
        Session::flash('success','Bare-land created successfully');
        return redirect(route('bare_land.index'));
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
        $building=BareLand::with('city','tenant','district')->find($id);
        return view('EditBareLand',compact('building','tenants','cities','countries','districts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BareLandRequest $request, $id)
    {
        //
        BareLand::find($id)->update($request->all());
        Session::flash('info','Bare-land updated successfully');
        return redirect(route('bare_land.index'));

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
        BareLand::destroy($id);
        Session::flash('error','Bare-land deleted successfully');
        return redirect(route('bare_land.index'));

    }
}

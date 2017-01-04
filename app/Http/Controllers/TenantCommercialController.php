<?php

namespace App\Http\Controllers;

use App\City;
use App\Country;
use App\Http\Requests\TenantCommercialRequest;
use App\TenantCommercial;
use Illuminate\Http\Request;
use Session;

class TenantCommercialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tenant_com = TenantCommercial::with('build','unit','country','city')->latest()->orderBy('created_at','desc')->get();
        return view('ListTenantCommercial',compact('tenant_com'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $countries = Country::latest()->orderBy('name','asc')->pluck('name','id');
        $cities = City::latest()->orderBy('name','asc')->pluck('name','id');
        return view('tenant_com',compact('cities','countries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TenantCommercialRequest $request)
    {

//        dd($request->all());
        TenantCommercial::create($request->all());

        \Session::flash('success','New commercial tenant created successfully');
        return redirect(route('tenant_com.index'));
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
        $countries = Country::latest()->orderBy('name','asc')->pluck('name','id');
        $cities = City::latest()->orderBy('name','asc')->pluck('name','id');
        $tenant=TenantCommercial::with('build','unit','country','city')->find($id);
//        dd($tenant);
        return view('EditTenantCommercial',compact('tenant','countries','cities'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TenantCommercialRequest $request, $id)
    {
        //
        TenantCommercial::find($id)->update($request->all());
        Session::flash('success','Tenant data updated successfully');
        return redirect(route('tenant_com.index'));
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
        TenantCommercial::destroy($id);
        Session::flash('info','Tenant data deleted successfully');
        return redirect(route('tenant_com.index'));
    }
}

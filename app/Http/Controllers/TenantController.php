<?php

namespace App\Http\Controllers;

use App\City;
use App\Country;
use App\Http\Requests\TenantRequest;
use App\Tenant;
use Illuminate\Http\Request;

class TenantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //get a list of all tenants
        $tenants = Tenant::latest()->orderBy('created_at','desc')->with('city','country','building','unit')->get();
        return view('ListTenant',compact('tenants'));
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
        return view('tenant',compact('cities','countries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TenantRequest $request)
    {
        //
//        dd("lol");
        Tenant::create($request->all());
        \Session::flash('success','New tenant created successfully');
        return redirect(route('tenant.index'));
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
        $tenant = Tenant::find($id);
        $countries = Country::latest()->orderBy('name','asc')->pluck('name','id');
        $cities = City::latest()->orderBy('name','asc')->pluck('name','id');
        return view('EditTenant',compact('tenant','countries','cities'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TenantRequest $request, $id)
    {
        //
        Tenant::find($id)->update($request->all());
        \Session::flash('success','Tenant updated successfully');
        return redirect(route('tenant.index'));

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
        Tenant::destroy($id);
        \Session::flash('info','New deleted created successfully');
        return redirect(route('tenant.index'));

    }
}

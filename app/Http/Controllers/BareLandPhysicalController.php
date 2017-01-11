<?php

namespace App\Http\Controllers;

use App\BareLand;
use App\Http\Requests\PhysicalRequest;
use App\Physical;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Session;

class BareLandPhysicalController extends Controller
{
    public function index()
    {
        //
        $physicals = Physical::with('BareLand')->latest()->orderBy('created_at','desc')->get();
//        dd($physicals);
        return view('ListBareLandPhysical',compact('physicals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $buildings = BareLand::orderBy('name','asc')->pluck('name','id');
        return view('physical_bareland',compact('buildings'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PhysicalRequest $request)
    {
        //
        Physical::create($request->all());
        Session::flash('success','Physical details for bare land created succcessfully');
        return redirect(route('bare_land_physical.index'));
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
        $physical = Physical::with('BareLand')->find($id);
//        dd($physical);
        return view('EditBareLandPhysical',compact('physical'));
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
//        dd($request->all());
        Physical::find($id)->update($request->all());
        $a=Physical::find($id);
//        dd(Input::get('encroached'));
        if(Input::get('fenced')=='no'){
            $a->fence_type =0;
            $a->update();
        }
        if(Input::get('gated')=='no'){
            $a->gate_type =0;
            $a->update();
        }
        if(Input::get('encroached')=='no'){
            $a->encroach_details ='';
            $a->update();
        }

//
        Session::flash('info','Physical details for bare land updated succcessfully');
        return redirect(route('bare_land_physical.index'));
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
        Physical::destroy($id);

        Session::flash('error','Physical details for bare land deleted succcessfully');
        return redirect(route('bare_land_physical.index'));
    }
}

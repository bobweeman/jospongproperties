<?php

namespace App\Http\Controllers;

use App\Http\Requests\PhysicalRequest;
use App\Physical;
use App\SingleBuilding;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Session;

class SingleBuildingPhysicalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $physicals = Physical::with('SingleBuilding')->latest()->orderBy('created_at','desc')->get();
//        dd($physicals);
        return view('ListSingleBuildingPhysical',compact('physicals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $buildings = SingleBuilding::orderBy('name','asc')->pluck('name','real_id');
        return view('phyiscal_single',compact('buildings'));
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
        Session::flash('success','Physical details for single unit building created succcessfully');
        return redirect(route('single_physical.index'));
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
        $physical = Physical::with('SingleBuilding')->find($id);
//        dd($physical);
        return view('EditSingleBuildingPhysical',compact('physical'));
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
        Session::flash('info','Physical details for single unit building updated succcessfully');
        return redirect(route('single_physical.index'));
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

        Session::flash('error','Physical details for single unit building deleted succcessfully');
        return redirect(route('single_physical.index'));
    }
}

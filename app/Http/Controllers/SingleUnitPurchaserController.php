<?php

namespace App\Http\Controllers;

use App\SingleBuilding;
use App\Subsidiary;
use Illuminate\Http\Request;
use Session;

class SingleUnitPurchaserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $buildings = SingleBuilding::with('country','district','tenant','city','purchaser')->latest()->orderBy('created_at','desc')->get();
        return view('ListPurchaserSingleBuilding',compact('buildings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $buildings = SingleBuilding::with('country','district','tenant','city')->latest()->orderBy('created_at','desc')->get();
        return view('PurchaserSingleBuilding',compact('buildings'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //get single unit id and present view with all available subsidiaries(purchasers)
        $singleUnit = SingleBuilding::find($id);
        $purchasers = Subsidiary::all()->pluck('name','id');
        return view('single_unit_purchaser',compact('singleUnit','purchasers','id'));
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
        SingleBuilding::find($id)->update($request->all());
        Session::flash('info','Purchaser addition to Single Unit Building successful');
        return redirect(route('single_building_purchaser.index'));

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
        $a= SingleBuilding::find($id);
        $a->purchaser_id =0;
        $a->update();
        Session::flash('error','Purchaser deleted from Single Unit Building!');
        return redirect(route('single_building_purchaser.index'));

    }
}

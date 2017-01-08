<?php

namespace App\Http\Controllers;

use App\BareLand;
use App\Http\Requests\BareLandPurchaserRequest;
use App\Subsidiary;
use Illuminate\Http\Request;
use Session;

class BareLandPurchaserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $barelands =BareLand::with('purchaser')->latest()->orderBy('name','asc')->get();
        return view('ListBareLandPurchaser',compact('barelands'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $buildings = BareLand::latest()->orderBy('name','asc')->pluck('name','id');
        $purchasers = Subsidiary::latest()->orderBy('name','asc')->pluck('name','id');
        return view('bare_land_purchaser',compact('buildings','purchasers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BareLandPurchaserRequest $request)
    {
        //
        BareLand::find($request->building_id)->update($request->all());
        Session::flash('info','Purchaser added to Bare Land Successfully');
        return redirect(route('bare_land_purchaser.index'));

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
        $a = BareLand::find($id);
        $a->purchaser_id =0;
        $a->update();
        Session::flash('error','Purchaser of bare land deleted successfully');
        return redirect(route('bare_land_purchaser.index'));
    }
}

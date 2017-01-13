<?php

namespace App\Http\Controllers;

use App\Http\Requests\LegalRequest;
use App\Http\Requests\LegalUpdateRequest;
use App\Legal;
use App\SingleBuilding;
use Illuminate\Http\Request;
use Session;

class SingleLegalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $singlebuildings = SingleBuilding::with('legal')->latest()->orderBy('created_at','desc')->get();
        return view('ListSingleBuildingLegal',compact('singlebuildings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $buildings = SingleBuilding::latest()->orderBy('name', 'asc')->pluck('name','real_id');
        return view('single_legal',compact('buildings'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LegalRequest $request)
    {
        //

        $legal=Legal::create($request->all());

        if ($request->hasFile('copy_conveyance')){ //get newly created conveyance and add file upload location
            $conveyance=request()->file('copy_conveyance')->store('conveyance');
            $merge=Legal::find($legal->id);
            $merge->copy_conveyance =$conveyance;
            $merge->update();
        }
        if ($request->hasFile('copy_signed_indenture')){ //get newly created signed indenture and add file upload location
            $indenture=request()->file('copy_signed_indenture')->store('indenture');
            $merge=Legal::find($legal->id);
            $merge->copy_signed_indenture =$indenture;
            $merge->update();
        }

        Session::flash('success','Legal details for single unit created successfully');
        return redirect(route('single_legal.index'));
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
        $legal = Legal::with('SingleBuilding')->find($id);
        return view('EditSingleBuildingLegal',compact('legal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(LegalUpdateRequest $request, $id)
    {
        //
        Legal::find($id)->update($request->all());

        if ($request->hasFile('copy_conveyance')){ //get newly created conveyance and add file upload location
            $conveyance=request()->file('copy_conveyance')->store('conveyance');
            $merge=Legal::find($id);
            $merge->copy_conveyance =$conveyance;
            $merge->update();
        }
        if ($request->hasFile('copy_signed_indenture')){ //get newly created signed indenture and add file upload location
            $indenture=request()->file('copy_signed_indenture')->store('indenture');
            $merge=Legal::find($id);
            $merge->copy_signed_indenture =$indenture;
            $merge->update();
        }

        Session::flash('info','Legal details for single unit updated successfully');
        return redirect(route('single_legal.index'));
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
        Legal::destroy($id);
        Session::flash('error','Legal details for single unit deleted successfully');
        return redirect(route('single_legal.index'));

    }
}

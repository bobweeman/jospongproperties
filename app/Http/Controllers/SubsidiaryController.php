<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubsidiaryRequest;
use App\Subsidiary;
use Illuminate\Http\Request;
use Session;

class SubsidiaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $subsidiaries = Subsidiary::latest()->orderBy('name','asc')->get();
        return view('ListSubsidiary',compact('subsidiaries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('subsidiary');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SubsidiaryRequest $request)
    {
        //
        Subsidiary::create($request->all());
        Session::flash('success','New Subsidiary created successfully');
        return redirect(route('subsidiary.index'));

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
        $subsidiary = Subsidiary::find($id);
        return view('Editsubsidiary',compact('subsidiary'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SubsidiaryRequest $request, $id)
    {
        //
        Subsidiary::create($request->all());
        \Session::flash('success','Subsidiary updated successfully');
        return redirect(route('subsidiary.index'));
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
        Subsidiary::destroy($id);
        \Session::flash('error','Subsidiary deleted successfully');
        return redirect(route('subsidiary.index'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\PaymentTypeRequest;
use App\PaymentType;
use Illuminate\Http\Request;

class PaymentTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //get payment types
        $payments = PaymentType::latest()->orderBy('created_at','desc')->get();
        return view('ListPaymentType', compact('payments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // create a new payment type
        return view('paymentType');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PaymentTypeRequest $request)
    {
        //
        PaymentType::create($request->all());

        \Session::flash('success','New Account Type entry created!');
        return redirect(route('payment_type.index'));
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
        $payment=PaymentType::find($id);
        return view('EditpaymentType',compact('payment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PaymentTypeRequest $request, $id)
    {
        //
        PaymentType::find($id)->update($request->all());
        \Session::flash('success','Update Successfully!');
        return redirect(route('payment_type.index'));
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
        PaymentType::destroy($id);
        \Session::flash('info','Entry deleted successfully!');
        return redirect(route('payment_type.index'));
    }
}

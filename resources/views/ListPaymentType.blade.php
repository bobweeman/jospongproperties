@extends('layouts.app')

@section('content')
    <div class="">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Payment Types List</div>

                    <div class="panel-body">
                        <div class="table-responsive">

                        <table class="table-responsive table-hover table-striped col-md-12">
                          <thead>
                            <th>#</th>
                            <th>Name</th>

                            <th>Description</th>

                            <th></th>
                            <th></th>
                          </thead>
                          <tbody>
                          @foreach($payments as $payment)
                              <tr>
                                  <td></td>
                                  <td>{{$payment->name}}</td>
                                  <td>{{$payment->description}}</td>

                                  <td><a href="{{route('payment_type.edit',$payment->id)}}" ><span class="fa fa-edit"></span></a></td>
                                  <td>
                                      <form method="POST" action="{{route('payment_type.destroy',$payment->id)}}">
                                          <input type="hidden" name="_method" value="DELETE">
                                          <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                          <button class="btn btn-danger btn-sm" type="submit"><i class="fa fa-trash-o"></i></button>
                                      </form>
                              </tr>
                          @endforeach
                          </tbody>
                      </table>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

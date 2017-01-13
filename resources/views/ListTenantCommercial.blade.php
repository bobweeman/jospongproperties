@extends('layouts.app')

@section('content')
    <div class="">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Tenants List (Commercial)</div>

                    <div class="panel-body">
                        <div class="table-responsive">

                        <table class="table-condensed table-hover table-striped col-md-12">
                          <thead class="">

                            <th>Contact Name</th>
                            <th>Phone Number</th>
                            <th>Company Name</th>
                            <th>Company Phone</th>
                            <th>Unit</th>
                            <th>Building</th>
                            <th>City</th>
                            <th>Country</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Status</th>
                          </thead>
                          <tbody>
                          {{--<pre>--}}
                              {{--{{$tenant_com->toJson()}}--}}
                          {{--</pre>--}}
                          @foreach($tenant_com as $tenant)
                              <tr>
                                  <td>{{$tenant->contact_name}} {{$tenant->last_name}}</td>
                                  <td>{{$tenant->phone_number}}</td>
                                  <td>{{$tenant->company_name}}</td>
                                  <td>{{$tenant->company_number}}</td>
                                  @if($tenant->unit !=null)
                                  <td>{{$tenant->unit->name}}</td>
                                  @else
                                      <td class="text-danger">No data found</td>
                                  @endif
                                  @if($tenant->build !=null)
                                      <td>{{$tenant->build->name}}</td>
                                      @else
                                      <td class="text-danger">No data found</td>
                                  @endif
                                  @if($tenant->city !=null)
                                      <td>{{$tenant->city->name}}</td>
                                  @else
                                      <td class="text-danger">No data found</td>
                                  @endif
                                  @if($tenant->country !=null)
                                      <td>{{$tenant->country->name}}</td>
                                  @else
                                      <td class="text-danger">No data found</td>
                                  @endif
                                      <td>{{$tenant->email}}</td>
                                      <td>{{$tenant->address}}</td>
                                      <td>{{$tenant->status}}</td>


                                  <td><a href="{{route('tenant_com.edit',$tenant->id)}}" ><span class="fa fa-edit fa-2x"></span></a></td>
                                  <td>
                                      <form method="POST" action="{{route('tenant_com.destroy',$tenant->id)}}">
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

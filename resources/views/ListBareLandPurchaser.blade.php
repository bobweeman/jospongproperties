@extends('layouts.app')

@section('content')
    <div class="">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Bare-Land Purchaser List</div>

                    <div class="panel-body">
                      <table class="table-responsive table-condensed table-hover table-striped col-md-12">
                          <thead>
                            <th>Name</th>
                            <th>Address</th>
                            <th>City</th>
                            <th>Country</th>
                            <th>Tenant</th>
                            <th>District</th>
                            <th>Purchase Price</th>
                            <th>Property Tax</th>
                            <th>Square Feet</th>
                            <th>Status</th>
                            <th>Zoning</th>
                            <th>Purchaser</th>

                            
                          </thead>
                          <tbody>


                          @foreach($barelands as $bareland)


                              <tr>
                                  <td>{{$bareland->name}}</td>
                                  <td>{{$bareland->address}}</td>
                                  @if($bareland->city !=null)
                                  <td>{{$bareland->city->name}}</td>
                                      @else
                                      <td class="text-danger">No data</td>
                                  @endif
                                  @if($bareland->country !=null)
                                  <td>{{$bareland->country->name}}</td>
                                  @else
                                      <td class="text-danger">No data</td>
                                  @endif

                                  @if($bareland->tenant !=null)
                                  <td>{{$bareland->tenant->fullname}}</td>
                                  @elseif($bareland->tenantCom !=null)
                                      <td>{{$bareland->tenant->contact_name}}</td>
                                  @else
                                      <td class="text-danger">No data</td>
                                  @endif
                                  @if($bareland->district !=null)
                                      <td>{{$bareland->district->name}}</td>
                                  @else
                                      <td class="text-danger">No data</td>
                                  @endif

                                  <td>{{$bareland->purchase_price}}</td>

                                  <td>{{$bareland->property_tax}}</td>

                                  <td>{{$bareland->square_feet}}</td>
                                  <td>{{$bareland->status}}</td>
                                  <td>{{$bareland->zoning}}</td>
                                  @if($bareland->purchaser !=null)
                                  <td>{{$bareland->purchaser->name}}</td>
                                  @else
                                      <td class="text-danger">No data</td>
                                  @endif


                                  <td>
                                      <form method="POST" action="{{route('bare_land_purchaser.destroy',$bareland->id)}}">
                                          <input type="hidden" name="_method" value="DELETE">
                                          <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                          <button class="btn btn-danger btn-sm" type="submit"><i class="fa fa-trash-o"></i> Delete Purchaser</button>
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
@endsection

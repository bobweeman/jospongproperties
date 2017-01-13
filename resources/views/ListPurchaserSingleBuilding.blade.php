@extends('layouts.app')

@section('content')
    <div class="">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Single Building Purchaser List</div>

                    <div class="panel-body">
                        <div class="table-responsive">

                        <table class="table-condensed table-hover table-striped col-md-12">
                          <thead>
                            <th>#</th>
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
                            <th>Purchaser</th>
                            <th>Delete Purchaser</th>

                            
                          </thead>
                          <tbody>


                          @foreach($buildings as $building)


                              <tr>
                                  <td></td>
                                  <td>{{$building->name}}</td>
                                  <td>{{$building->address}}</td>
                                  @if($building->city !=null)
                                  <td>{{$building->city->name}}</td>
                                      @else
                                      <td class="text-danger">No data</td>
                                  @endif
                                  @if($building->country !=null)
                                  <td>{{$building->country->name}}</td>
                                  @else
                                      <td class="text-danger">No data</td>
                                  @endif

                                  @if($building->tenant !=null)
                                  <td>{{$building->tenant->fullname}}</td>
                                  @elseif($building->tenantCom !=null)
                                      <td>{{$building->tenant->contact_name}}</td>
                                  @else
                                      <td class="text-danger">No data</td>
                                  @endif
                                  @if($building->district !=null)
                                      <td>{{$building->district->name}}</td>
                                  @else
                                      <td class="text-danger">No data</td>
                                  @endif

                                  <td>{{$building->purchase_price}}</td>

                                  <td>{{$building->property_tax}}</td>

                                  <td>{{$building->square_feet}}</td>
                                  <td>{{$building->status}}</td>
                                  @if($building->purchaser !=null)
                                      <td>{{$building->purchaser->name}}</td>
                                  @else
                                      <td class="text-danger">No data</td>
                                  @endif

                                  @if($building->purchaser !=null)
                                  <td>
                                      <form method="POST" action="{{route('single_building_purchaser.destroy',$building->id)}}">
                                          <input type="hidden" name="_method" value="DELETE">
                                          <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                          <button class="btn btn-danger btn-sm" type="submit"><i class="fa fa-trash-o fa-2x"></i></button>
                                      </form>
                                  </td>
                                  @else
                                      <td class="text-danger"><button class="btn btn-danger btn-sm disabled" type="submit"><i class="fa fa-trash-o fa-2x"></i></button>
                                      </td>
                                   @endif
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

@extends('layouts.app')

@section('content')
    <div class="">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Multi Unit Building List</div>

                    <div class="panel-body">
                        <div class="table-responsive">

                        <table class="table-condensed table-hover table-striped col-md-12">
                          <thead>
                            <th>#</th>
                            <th>Name</th>
                            <th>Address</th>
                            <th>City</th>
                            <th>Country</th>
                            <th>Number of Units</th>
                            <th>District</th>
                            <th>Purchase Price</th>
                            <th>Property Tax</th>
                            <th>Square Feet</th>
                            <th>Status</th>
                            <th></th>

                            
                          </thead>
                          <tbody>
                            {{--<pre>--}}
                                {{--{{$buildings->toJson()}}--}}
                            {{--</pre>--}}

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

                                  @if($building->units !=null)
                                  <td>{{$building->units->count()}}</td>
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


                                  <td><a href="{{route('multi_unit_building.edit',$building->id)}}" ><span class="fa fa-edit fa-2x"></span></a></td>
                                  <td>
                                      <form method="POST" action="{{route('multi_unit_building.destroy',$building->id)}}">
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

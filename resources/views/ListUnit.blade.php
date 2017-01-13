@extends('layouts.app')

@section('content')
    <div class="">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Building Unit List</div>

                    <div class="panel-body">
                        <div class="table-responsive">

                        <table class="table-hover table-striped col-md-12">
                          <thead>
                            <th>#</th>
                            <th>Name</th>
                            <th>Building</th>
                            <th>Tenant</th>
                            <th>Status</th>

                            
                          </thead>
                          <tbody>
                          @foreach($units as $unit)
                              <tr>
                                  <td></td>
                                  <td>{{$unit->name}}</td>
                                  @if($unit->building !=null)
                                      <td>{{$unit->building->name}}</td>
                                  @else
                                      <td class="text-danger">No data found</td>
                                  @endif
                                  @if($unit->tenant !=null)
                                      <td>{{$unit->tenant->name}}</td>
                                  @elseif($unit->tenantCom !=null)
                                      <td>{{$unit->tenantCom->contact_name}}</td>
                                  @else
                                      <td class="text-danger">No data found</td>
                                  @endif
                                  <td>{{$unit->status}}</td>

                                  <td><a href="{{route('building_unit.edit',$unit->id)}}" ><span class="fa fa-edit fa-2x"></span></a></td>
                                  <td>
                                      <form method="POST" action="{{route('building_unit.destroy',$unit->id)}}">
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

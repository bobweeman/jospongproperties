@extends('layouts.app')

@section('content')
    <div class="">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Physical Details Bare Land</div>

                    <div class="panel-body">
                      <table class="table-responsive table-condensed table-hover table-striped col-md-12">
                          <thead>

                            <th>Land Name</th>
                            <th>Fenced</th>
                            <th>Fence Type</th>
                            <th>Gated</th>
                            <th>Gate Type</th>
                            <th>Encroach ?</th>
                            <th>Encroachment Details</th>
                            <th>Current Occupier</th>
                            <th>Physical Vulnerabilities</th>

                          </thead>
                          <tbody>


                          @foreach($barelands as $bareland)


                              <tr>
                                  <td>{{$bareland->name}}</td>
                                  <td>{{$bareland->physical->fenced}}</td>
                                  @if($bareland->physical->fence_type !='0')
                                  <td>{{$bareland->physical->fence_type}}</td>
                                      @else
                                      <td class="text-danger">No data</td>
                                  @endif
                                  <td>{{$bareland->physical->gated}}</td>
                                  @if($bareland->physical->gate_type !='0')
                                  <td>{{$bareland->physical->gate_type}}</td>
                                  @else
                                      <td class="text-danger">No data</td>
                                  @endif
                                  <td>{{$bareland->physical->encroached}}</td>
                                  @if($bareland->physical->encroach_details !=null)
                                  <td>{{$bareland->physical->encroach_details}}</td>
                                  @else
                                      <td class="text-danger">No data</td>
                                  @endif

                                  <td>{{$bareland->physical->occupier}}</td>

                                  <td>{{$bareland->physical->vulnerability}}</td>




                                  <td><a href="{{route('bare_land_physical.edit',$bareland->physical->id)}}" ><span class="fa fa-edit fa-2x"></span></a></td>
                                  <td>
                                      <form method="POST" action="{{route('bare_land_physical.destroy',$bareland->physical->id)}}">
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
@endsection

@extends('layouts.app')

@section('content')
    <div class="">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Physical Details Multi Unit Building</div>

                    <div class="panel-body">
                        <div class="table-responsive">

                        <table class="table-condensed table-hover table-striped col-md-12">
                          <thead>

                            <th>Building Name</th>
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


                          @foreach($multibuildings as $multibuilding)


                              <tr>
                                  @if($multibuilding->physical == null)
                                      <td class="text-danger">no data</td>
                                      <td class="text-danger">no data</td>
                                      <td class="text-danger">no data</td>
                                      <td class="text-danger">no data</td>
                                      <td class="text-danger">no data</td>
                                      <td class="text-danger">no data</td>
                                      <td class="text-danger">no data</td>
                                      <td class="text-danger">no data</td>
                                  @else
                                  <td>{{$multibuilding->physical->MultiBuilding->name}}</td>
                                  <td>{{$multibuilding->physical->fenced}}</td>
                                  @if($multibuilding->physical->fence_type !='0')
                                  <td>{{$multibuilding->physical->fence_type}}</td>
                                      @else
                                      <td class="text-danger">No data</td>
                                  @endif
                                  <td>{{$multibuilding->physical->gated}}</td>
                                  @if($multibuilding->physical->gate_type !='0')
                                  <td>{{$multibuilding->physical->gate_type}}</td>
                                  @else
                                      <td class="text-danger">No data</td>
                                  @endif
                                  <td>{{$multibuilding->physical->encroached}}</td>
                                  @if($multibuilding->physical->encroach_details !=null)
                                  <td>{{$multibuilding->physical->encroach_details}}</td>
                                  @else
                                      <td class="text-danger">No data</td>
                                  @endif

                                  <td>{{$multibuilding->physical->occupier}}</td>

                                  <td>{{$multibuilding->physical->vulnerability}}</td>




                                  <td><a href="{{route('multi_unit_physical.edit',$multibuilding->physical->id)}}" ><span class="fa fa-edit fa-2x"></span></a></td>
                                  <td>
                                      <form method="POST" action="{{route('multi_unit_physical.destroy',$multibuilding->physical->id)}}">
                                          <input type="hidden" name="_method" value="DELETE">
                                          <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                          <button class="btn btn-danger btn-sm" type="submit"><i class="fa fa-trash-o"></i></button>
                                      </form>
                                  </td>
                                      
                              </tr>
                              @endif
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

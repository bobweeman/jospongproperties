@extends('layouts.app')

@section('content')
    <div class="">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Physical Details Single Building</div>

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


                          @foreach($singlebuildings as $singlebuilding)
                              @if($singlebuilding->physical == null)
                                  <td class="text-danger">no data</td>
                                  <td class="text-danger">no data</td>
                                  <td class="text-danger">no data</td>
                                  <td class="text-danger">no data</td>
                                  <td class="text-danger">no data</td>
                                  <td class="text-danger">no data</td>
                                  <td class="text-danger">no data</td>
                                  <td class="text-danger">no data</td>
                              @else

                              <tr>
                                  <td>{{$singlebuilding->name}}</td>
                                  <td>{{$singlebuilding->physical->fenced}}</td>
                                  @if($singlebuilding->physical->fence_type !='0')
                                  <td>{{$singlebuilding->physical->fence_type}}</td>
                                      @else
                                      <td class="text-danger">No data</td>
                                  @endif
                                  <td>{{$singlebuilding->physical->gated}}</td>
                                  @if($singlebuilding->physical->gate_type !='0')
                                  <td>{{$singlebuilding->physical->gate_type}}</td>
                                  @else
                                      <td class="text-danger">No data</td>
                                  @endif
                                  <td>{{$singlebuilding->physical->encroached}}</td>
                                  @if($singlebuilding->physical->encroach_details !=null)
                                  <td>{{$singlebuilding->physical->encroach_details}}</td>
                                  @else
                                      <td class="text-danger">No data</td>
                                  @endif

                                  <td>{{$singlebuilding->physical->occupier}}</td>

                                  <td>{{$singlebuilding->physical->vulnerability}}</td>




                                  <td><a href="{{route('single_physical.edit',$singlebuilding->physical->id)}}" ><span class="fa fa-edit fa-2x"></span></a></td>
                                  <td>
                                      <form method="POST" action="{{route('single_physical.destroy',$singlebuilding->physical->id)}}">
                                          <input type="hidden" name="_method" value="DELETE">
                                          <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                          <button class="btn btn-danger btn-sm" type="submit"><i class="fa fa-trash-o"></i></button>
                                      </form>
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

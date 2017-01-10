@extends('layouts.app')

@section('content')
    <div class="">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Physical Details Single Building</div>

                    <div class="panel-body">
                      <table class="table-responsive table-condensed table-hover table-striped col-md-12">
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


                          @foreach($physicals as $physical)


                              <tr>
                                  <td>{{$physical->SingleBuilding->name}}</td>
                                  <td>{{$physical->fenced}}</td>
                                  @if($physical->fence_type !='0')
                                  <td>{{$physical->fence_type}}</td>
                                      @else
                                      <td class="text-danger">No data</td>
                                  @endif
                                  <td>{{$physical->gated}}</td>
                                  @if($physical->gate_type !='0')
                                  <td>{{$physical->gate_type}}</td>
                                  @else
                                      <td class="text-danger">No data</td>
                                  @endif
                                  <td>{{$physical->encroached}}</td>
                                  @if($physical->encroach_details !=null)
                                  <td>{{$physical->encroach_details}}</td>
                                  @else
                                      <td class="text-danger">No data</td>
                                  @endif

                                  <td>{{$physical->occupier}}</td>

                                  <td>{{$physical->vulnerability}}</td>




                                  <td><a href="{{route('single_physical.edit',$physical->id)}}" ><span class="fa fa-edit fa-2x"></span></a></td>
                                  <td>
                                      <form method="POST" action="{{route('single_physical.destroy',$physical->id)}}">
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

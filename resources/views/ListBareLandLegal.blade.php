@extends('layouts.app')

@section('content')
    <div class="">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Legal Details Bare Land</div>

                    <div class="panel-body">
                      <table class="table-responsive table-condensed table-hover table-striped col-md-12">
                          <thead>

                            <th>Land Name</th>
                            <th>Plotted</th>
                            <th>Stamp Duty</th>
                            <th>Registered Deed</th>
                            <th>Registered Title ?</th>
                            <th>Litigation Status</th>
                            <th>Constestant Name</th>
                            <th>Head Conveyance</th>
                            <th>Signed Indenture</th>
                            <th>Lodgement By</th>
                            <th>Lodgement To</th>
                            <th>Land Title</th>
                            <th>Land Status</th>
                            <th class="text-warning">Edit</th>
                            <th class="text-warning">More</th>
                            <th class="text-warning">Delete</th>

                          </thead>
                          <tbody>


                          @foreach($barelands as $$bareland)

                              <tr>
                                  <td>{{$bareland->name}}</td>
                                  @if($bareland->physical == null)
                                      <td class="text-danger">no data</td>
                                      <td class="text-danger">no data</td>
                                      <td class="text-danger">no data</td>
                                      <td class="text-danger">no data</td>
                                      <td class="text-danger">no data</td>
                                      <td class="text-danger">no data</td>
                                      <td class="text-danger">no data</td>
                                      <td class="text-danger">no data</td>
                                      <td class="text-danger">no data</td>
                                      <td class="text-danger">no data</td>
                                      <td class="text-danger">no data</td>
                                      <td class="text-danger">no data</td>
                                      <td class="text-danger">N/A</td>
                                      <td class="text-danger">N/A</td>
                                      <td class="text-danger">N/A</td>
                                  @else

                                  <td>{{$bareland->physical->plotted}}</td>
                                  <td>{{$bareland->physical->stamp_duty}}</td>
                                  <td>{{$bareland->physical->registered_deed}}</td>
                                  @if($bareland->physical->registered_title !=null)
                                  <td>{{$bareland->physical->registered_title}}</td>
                                  @else
                                      <td class="text-danger">no data</td>
                                  @endif
                                  <td>{{$bareland->physical->litigation_status}}</td>
                                  @if($bareland->physical->contestant_name !="")
                                      <td>{{$bareland->physical->contestant_name}}</td>
                                  @else
                                      <td class="text-danger">no data</td>
                                  @endif
                                  @if($bareland->physical->head_conveyance !="")
                                      <td>{{$bareland->physical->head_conveyance}}</td>
                                  @else
                                      <td class="text-danger">no data</td>
                                  @endif
                                  <td>{{$bareland->physical->signed_indenture}}</td>
                                  @if($bareland->physical->lodgement_by !="")
                                      <td>{{$bareland->physical->lodgement_by}}</td>
                                  @else
                                      <td class="text-danger">no data</td>
                                  @endif
                                  @if($bareland->physical->lodgement_to !="")
                                      <td>{{$bareland->physical->lodgement_to}}</td>
                                  @else
                                      <td class="text-danger">no data</td>
                                  @endif
                                  <td>{{$bareland->physical->land_title}}</td>
                                  @if($bareland->physical->land_status !="")
                                      <td>{{$bareland->physical->land_status}}</td>
                                  @else
                                      <td class="text-danger">no data</td>
                                  @endif




                                  <td><a href="{{route('single_legal.edit',$bareland->physical->id)}}" ><span class="fa fa-edit fa-2x"></span></a></td>
                                  <td><a href="" ><span class="fa fa-spin fa-arrows-alt fa-2x text-warning"></span></a></td>
                                  <td>
                                      <form method="POST" action="{{route('single_legal.destroy',$bareland->physical->id)}}">
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
@endsection

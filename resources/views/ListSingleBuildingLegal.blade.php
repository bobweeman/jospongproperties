@extends('layouts.app')

@section('content')
    <div class="">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Legal Details Single Building</div>

                    <div class="panel-body">
                      <table class="table-responsive table-condensed table-hover table-striped col-md-12">
                          <thead>

                            <th>Building Name</th>
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


                          @foreach($legals as $legal)


                              <tr>
                                  <td>{{$legal->SingleBuilding->name}}</td>
                                  <td>{{$legal->plotted}}</td>
                                  <td>{{$legal->stamp_duty}}</td>
                                  <td>{{$legal->registered_deed}}</td>
                                  @if($legal->registered_title !=null)
                                  <td>{{$legal->registered_title}}</td>
                                  @else
                                      <td class="text-danger">no data</td>
                                  @endif
                                  <td>{{$legal->litigation_status}}</td>
                                  @if($legal->contestant_name !="")
                                      <td>{{$legal->contestant_name}}</td>
                                  @else
                                      <td class="text-danger">no data</td>
                                  @endif
                                  @if($legal->head_conveyance !="")
                                      <td>{{$legal->head_conveyance}}</td>
                                  @else
                                      <td class="text-danger">no data</td>
                                  @endif
                                  <td>{{$legal->signed_indenture}}</td>
                                  @if($legal->lodgement_by !="")
                                      <td>{{$legal->lodgement_by}}</td>
                                  @else
                                      <td class="text-danger">no data</td>
                                  @endif
                                  @if($legal->lodgement_to !="")
                                      <td>{{$legal->lodgement_to}}</td>
                                  @else
                                      <td class="text-danger">no data</td>
                                  @endif
                                  <td>{{$legal->land_title}}</td>
                                  @if($legal->land_status !="")
                                      <td>{{$legal->land_status}}</td>
                                  @else
                                      <td class="text-danger">no data</td>
                                  @endif




                                  <td><a href="{{route('single_legal.edit',$legal->id)}}" ><span class="fa fa-edit fa-2x"></span></a></td>
                                  <td><a href="" ><span class="fa fa-spin fa-arrows-alt fa-2x text-warning"></span></a></td>
                                  <td>
                                      <form method="POST" action="{{route('single_legal.destroy',$legal->id)}}">
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

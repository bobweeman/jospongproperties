@extends('layouts.app')

@section('content')
    <div class="">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Subsidiaries List</div>

                    <div class="panel-body">
                      <table class="table-responsive table-condensed table-hover table-striped col-md-12">
                          <thead>

                            <th>Name</th>
                            <th>Address</th>
                            <th>Web (url)</th>
                            <th>Telephone</th>

                            <th>Email</th>



                          </thead>
                          <tbody>
                          @foreach($subsidiaries as $subsidiary)
                              <tr>
                                  <td>{{$subsidiary->name}} {{$subsidiary->last_name}}</td>

                                  <td>{{$subsidiary->address}}</td>
                                  <td>{{$subsidiary->web}}</td>

                                  <td>{{$subsidiary->telephone}}</td>
                                  <td>{{$subsidiary->email}}</td>

                                  <td><a href="{{route('subsidiary.edit',$subsidiary->id)}}" ><span class="fa fa-edit fa-2x"></span></a></td>
                                  <td>
                                      <form method="POST" action="{{route('subsidiary.destroy',$subsidiary->id)}}">
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

@extends('layouts.app')

@section('content')
    <div class="">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Region/State List</div>

                    <div class="panel-body">
                      <table class="table-responsive table-hover table-striped col-md-12">
                          <thead>
                            <th>#</th>
                            <th>Name</th>


                            <th></th>
                            <th></th>
                          </thead>
                          <tbody>
                          @foreach($regions as $region)
                              <tr>
                                  <td></td>
                                  <td>{{$region->name}}</td>


                                  <td><a href="{{route('region_state.edit',$region->id)}}" ><span class="fa fa-edit"></span></a></td>
                                  <td>
                                      <form method="POST" action="{{route('region_state.destroy',$region->id)}}">
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

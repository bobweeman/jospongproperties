@extends('layouts.app')

@section('content')
    <div class="">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">City List</div>

                    <div class="panel-body">
                      <table class="table-responsive table-hover table-striped col-md-12">
                          <thead>
                            <th>#</th>
                            <th>District</th>
                            <th>Region</th>
                            <th></th>

                            
                          </thead>
                          <tbody>
                          @foreach($districts as $district)

                              {{--<pre>--}}
                                  {{--{{$district->toJson()}}--}}
                              {{--</pre>--}}
                              <tr>
                                  <td></td>
                                  <td>{{$district->name}}</td>
                                  <td>{{$district->foo->name}}</td>

                                  <td><a href="{{route('district.edit',$district->id)}}" ><span class="fa fa-edit fa-2x"></span></a></td>
                                  <td>
                                      <form method="POST" action="{{route('district.destroy',$district->id)}}">
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

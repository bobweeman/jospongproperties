@extends('layouts.app')

@section('content')
    <div class="">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Category List</div>

                    <div class="panel-body">
                      <table class="table-responsive table-hover table-striped col-md-12">
                          <thead>
                            <th>#</th>
                            <th>Name</th>

                            <th>Description</th>
                            <th>Type</th>
                            <th></th>
                            <th></th>
                          </thead>
                          <tbody>
                          @foreach($categories as $category)
                              <tr>
                                  <td></td>
                                  <td>{{$category->name}}</td>
                                  <td>{{$category->type}}</td>
                                  <td>{{$category->description}}</td>

                                  <td><a href="{{route('category.edit',$category->id)}}" ><span class="fa fa-edit"></span></a></td>
                                  <td>
                                      <form method="POST" action="{{route('category.destroy',$category->id)}}">
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

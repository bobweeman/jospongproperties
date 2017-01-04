@extends('layouts.app')

@section('content')
    <div class="">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Tenants (Residential) List</div>

                    <div class="panel-body">
                      <table class="table-responsive table-condensed table-hover table-striped">
                          <thead>
                            <th>#</th>
                            <th>Full Name</th>
                            <th>Building</th>
                            <th>Address</th>
                            <th>Cell Phone</th>

                            <th>Email</th>
                            <th>Status</th>


                          </thead>
                          <tbody>
                          @foreach($tenants as $tenant)
                              <tr>
                                  <td></td>
                                  <td>{{$tenant->first_name}} {{$tenant->last_name}}</td>
                                  @if($tenant->building !=null )
                                      <td>{{$tenant->building->name}} </td>
                                      @else
                                      <td class="text-danger">No data</td>
                                  @endif
                                  <td>{{$tenant->address}}</td>

                                  <td>{{$tenant->cell_phone}}</td>
                                  <td>{{$tenant->email}}</td>
                                  <td>{{$tenant->status}}</td>

                                  <td><a href="{{route('tenant.edit',$tenant->id)}}" ><span class="fa fa-edit fa-2x"></span></a></td>
                                  <td>
                                      <form method="POST" action="{{route('tenant.destroy',$tenant->id)}}">
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

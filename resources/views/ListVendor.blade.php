@extends('layouts.app')

@section('content')
    <div class="">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Vendor List</div>

                    <div class="panel-body">
                        <table class=" table table-responsive table-hover table-striped col-md-12">
                            <thead>
                            <th>#</th>
                            <th>Name</th>
                            <th>Contact Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>City</th>
                            <th>Country</th>
                            <th></th>
                            <th></th>
                            </thead>
                            <tbody>
                            {{--<pre>--}}
                                {{--{{$vendors->toJson()}}--}}
                            {{--</pre>--}}
                            @foreach($vendors as $vendor)
                                <tr>
                                    <td></td>
                                    <td>{{$vendor->name}}</td>
                                    <td>{{$vendor->contact_name}}</td>
                                    <td>{{$vendor->phone}}</td>
                                    <td>{{$vendor->email}}</td>
                                    <td>{{$vendor->address}}</td>
                                    <td>{{$vendor->myCity->name}}</td>
                                    <td>{{$vendor->myCountry->name}}</td>

                                    <td><a href="{{route('vendor.edit',$vendor->id)}}" ><span class="fa fa-edit fa-3x"></span></a></td>
                                    <td>
                                        <form method="POST" action="{{route('vendor.destroy',$vendor->id)}}">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <button class="btn btn-danger" type="submit"><i class="fa fa-trash-o"></i></button>
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

@extends('layouts.app')

@section('content')
<div class="">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">New Vendor Entry</div>

                <div class="panel-body">
                    {!! Form::open(['route'=>'vendor.store','class'=>'form-horizontal'])!!}


                            <input type="hidden" name="_method" value="POST">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                       

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input type="text" id="name"  class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('contact_name') ? ' has-error' : '' }}">
                            <label for="contact name" class="col-md-4 control-label">Contact Name</label>

                            <div class="col-md-6">
                                <input type="text" id="contact_name"  class="form-control"  name="contact_name" value="{{ old('contact_name') }}" required autofocus>

                                @if ($errors->has('contact_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('contact_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    <div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
                        {{Form::label('type',null,['class'=>'col-md-4 control-label'])}}


                        <div class="col-md-6">
                            {{Form::select('type',["other"=>"Other",'stool'=>'Stool','state'=>'State',
                            'family'=>'family','company'=>'Company','private'=>'Private'],null,['class'=>'form-control'])}}
                            @if ($errors->has('type'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('type') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('institution') ? ' has-error' : '' }}">
                        <label for="contact name" class="col-md-4 control-label">Contact Name</label>

                        <div class="col-md-6">
                            <input type="text" id="institution"  class="form-control"  name="institution" value="{{ old('institution') }}" required autofocus>

                            @if ($errors->has('institution'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('institution') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                        <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                            <label for="phone" class="col-md-4 control-label">Phone Number</label>

                            <div class="col-md-6">
                                <textarea id="phone" type="text" class="form-control" name="phone" value="{{ old('phone') }}" required autofocus></textarea>

                                @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Email</label>

                            <div class="col-md-6">
                                <input email="text" id="email"  class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                            <label for="address" class="col-md-4 control-label">Address</label>

                            <div class="col-md-6">
                                <textarea id="address"  class="form-control" name="address" value="{{ old('address') }}" required autofocus></textarea>

                                @if ($errors->has('address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('city_id') ? ' has-error' : '' }}">
                            <label for="city" class="col-md-4 control-label">City</label>

                            <div class="col-md-6">
                                {{--<input type="text" id="city"  class="form-control" name="city" value="{{ old('city') }}" required autofocus>--}}
                                {!! Form::select('city_id',$cities,null,['class'=>'form-control'])!!}

                                @if ($errors->has('city_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('city_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('country_id') ? ' has-error' : '' }}">
                            <label for="country" class="col-md-4 control-label">Country</label>

                            <div class="col-md-6">
                                {!! Form::select('country_id',$countries,null,['class'=>'form-control'])!!}


                                @if ($errors->has('country_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('country_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-offset-5">
                            <input type="submit" value="Submit" class="btn btn-primary">
                            <input type="reset" value="Clear All" class="btn btn-warning">
                        </div>


                {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

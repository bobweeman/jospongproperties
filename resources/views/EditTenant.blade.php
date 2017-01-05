@extends('layouts.app')

@section('content')
<div class="">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Existing Tenant (Residential)</div>

                <div class="panel-body">

                    {!! Form::model($tenant, array('route'=>['tenant.update',$tenant->id],'class'=>'form-horizontal'))!!}
                    <input type="hidden" name="_method" value="PATCH">


                    <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                        {{Form::label('first_name',null,['class'=>'col-md-4 control-label'])}}


                        <div class="col-md-6">
                            {{Form::text('first_name',null,['class'=>'form-control'])}}
                            @if ($errors->has('first_name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('first_name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                        {{Form::label('last_name',null,['class'=>'col-md-4 control-label'])}}


                        <div class="col-md-6">
                            {{Form::text('last_name',null,['class'=>'form-control'])}}
                            @if ($errors->has('last_name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('last_name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                        {{Form::label('address',null,['class'=>'col-md-4 control-label'])}}


                        <div class="col-md-6">
                            {{Form::textarea('address',null,['class'=>'form-control'])}}
                            @if ($errors->has('address'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('address') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('city_id') ? ' has-error' : '' }}">
                        {{Form::label('city',null,['class'=>'col-md-4 control-label'])}}


                        <div class="col-md-6">
                            {{Form::select('city_id',$cities,null,['class'=>'form-control'])}}
                            @if ($errors->has('city_id'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('city_id') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('country_id') ? ' has-error' : '' }}">
                        {{Form::label('country',null,['class'=>'col-md-4 control-label'])}}


                        <div class="col-md-6">
                            {{Form::select('country_id',$countries,null,['class'=>'form-control'])}}
                            @if ($errors->has('country_id'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('country_id') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('home_phone') ? ' has-error' : '' }}">
                        {{Form::label('home_phone',null,['class'=>'col-md-4 control-label'])}}


                        <div class="col-md-6">
                            {{Form::text('home_phone',null,['class'=>'form-control'])}}
                            @if ($errors->has('home_phone'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('home_phone') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('work_phone') ? ' has-error' : '' }}">
                        {{Form::label('work_phone',null,['class'=>'col-md-4 control-label'])}}


                        <div class="col-md-6">
                            {{Form::text('work_phone',null,['class'=>'form-control'])}}
                            @if ($errors->has('work_phone'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('work_phone') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('cell_phone') ? ' has-error' : '' }}">
                        {{Form::label('cell_phone',null,['class'=>'col-md-4 control-label'])}}


                        <div class="col-md-6">
                            {{Form::text('cell_phone',null,['class'=>'form-control'])}}
                            @if ($errors->has('cell_phone'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('cell_phone') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        {{Form::label('email',null,['class'=>'col-md-4 control-label'])}}


                        <div class="col-md-6">
                            {{Form::text('email',null,['class'=>'form-control'])}}
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
                        {{Form::label('Status',null,['class'=>'col-md-4 control-label'])}}


                        <div class="col-md-6">
                            {{Form::select('status',['current'=>'Current','potential'=>'Potential','evicted'=>'Evicted','non-potential'=>
                        'Non potential','past'=>'Past'],null,['class'=>'form-control'])}}
                            @if ($errors->has('status'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('status') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('dob') ? ' has-error' : '' }}">
                        {{Form::label('Date of Birth',null,['class'=>'col-md-4 control-label'])}}


                        <div class="col-md-6">
                            {{Form::date('dob',null,['class'=>'form-control'])}}
                            @if ($errors->has('dob'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('dob') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <input type="submit" value="Update" class="btn btn-primary btn-block">

                        </div>
                    </div>




                    {!! Form::close()!!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

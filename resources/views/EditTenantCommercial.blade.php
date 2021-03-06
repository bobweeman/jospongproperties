@extends('layouts.app')

@section('content')
<div class="">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Existing Tenant (Commercial)</div>

                <div class="panel-body">
                    {{--{{$tenant->toJson()}}--}}

                    {{ Form::model($tenant, array('route' => ['tenant_com.update', $tenant->id],'class'=>'form-horizontal')) }}
                    <input type="hidden" name="_method" value="PATCH">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="form-group{{ $errors->has('company_name') ? ' has-error' : '' }}">
                        {{Form::label('company_name',null,['class'=>'col-md-4 control-label'])}}


                        <div class="col-md-6">
                            {{Form::text('company_name',null,['class'=>'form-control'])}}
                            @if ($errors->has('company_name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('company_name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('contact_name') ? ' has-error' : '' }}">
                        {{Form::label('contact_name',null,['class'=>'col-md-4 control-label'])}}


                        <div class="col-md-6">
                            {{Form::text('contact_name',null,['class'=>'form-control'])}}
                            @if ($errors->has('contact_name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('contact_name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    {{--<div class="form-group{{ $errors->has('building_id') ? ' has-error' : '' }}">--}}
                        {{--{{Form::label('building',null,['class'=>'col-md-4 control-label'])}}--}}


                        {{--<div class="col-md-6">--}}
                            {{--{{Form::text('building_id',null,['class'=>'form-control'])}}--}}
                            {{--@if ($errors->has('building_id'))--}}
                                {{--<span class="help-block">--}}
                                    {{--<strong>{{ $errors->first('building_id') }}</strong>--}}
                                {{--</span>--}}
                            {{--@endif--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="form-group{{ $errors->has('unit_id') ? ' has-error' : '' }}">--}}
                        {{--{{Form::label('Unit',null,['class'=>'col-md-4 control-label'])}}--}}


                        {{--<div class="col-md-6">--}}
                            {{--{{Form::text('unit_id',null,['class'=>'form-control'])}}--}}
                            {{--@if ($errors->has('unit_id'))--}}
                                {{--<span class="help-block">--}}
                                    {{--<strong>{{ $errors->first('unit_id') }}</strong>--}}
                                {{--</span>--}}
                            {{--@endif--}}
                        {{--</div>--}}
                    {{--</div>--}}
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
                            {{Form::select('city_id',$cities,$tenant->city->id,['class'=>'form-control'])}}
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
                            {{Form::select('country_id',$countries,$tenant->country->id,['class'=>'form-control'])}}
                            @if ($errors->has('country_id'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('country_id') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('phone_number') ? ' has-error' : '' }}">
                        {{Form::label('phone_number',null,['class'=>'col-md-4 control-label'])}}


                        <div class="col-md-6">
                            {{Form::text('phone_number',null,['class'=>'form-control'])}}
                            @if ($errors->has('phone_number'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('phone_number') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('fax_number') ? ' has-error' : '' }}">
                        {{Form::label('fax_number',null,['class'=>'col-md-4 control-label'])}}


                        <div class="col-md-6">
                            {{Form::text('fax_number',null,['class'=>'form-control'])}}
                            @if ($errors->has('fax_number'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('fax_number') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('company_number') ? ' has-error' : '' }}">
                        {{Form::label('company_number',null,['class'=>'col-md-4 control-label'])}}


                        <div class="col-md-6">
                            {{Form::text('company_number',null,['class'=>'form-control'])}}
                            @if ($errors->has('company_number'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('company_number') }}</strong>
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

                    <div class="form-group">

                        <div class="col-md-6 col-md-offset-4">
                            {{Form::submit('Submit',['class'=>'btn btn-primary btn-block'])}}

                        </div>
                    </div>
                    {{Form::close()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

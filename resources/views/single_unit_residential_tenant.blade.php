@extends('layouts.app')

@section('content')
<div class="">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">New Residential Tenant - Single Building Entry</div>

                <div class="panel-body">
                    {!! Form::open(['route'=>'tenant_comm.store','class'=>'form-horizontal'])!!}
                    <div class="form-group{{ $errors->has('building_id') ? ' has-error' : '' }}">
                        {{Form::label('Building name',null,['class'=>'col-md-4 control-label'])}}


                        <div class="col-md-6">
                            {{Form::select('building_id',$buildings,null,['class'=>'form-control'])}}
                            @if ($errors->has('building_id'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('building_id') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                        <div class="form-group{{ $errors->has('tenant_id') ? ' has-error' : '' }}">
                            {{Form::label('tenant name',null,['class'=>'col-md-4 control-label'])}}


                            <div class="col-md-6">
                                {{Form::select('tenant_id',$tenants,null,['class'=>'form-control'])}}
                                @if ($errors->has('tenant_id'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('tenant_id') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                    <div class="form-group">

                        <div class="col-md-6 col-md-offset-4">
                            {{Form::submit('Submit',['class'=>'btn btn-primary btn-block'])}}

                        </div>
                    </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

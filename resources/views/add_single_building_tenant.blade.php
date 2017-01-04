@extends('layouts.app')

@section('content')
<div class="">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">New Single Building Tenant</div>

                <div class="panel-body">
                    {!! Form::open(['route'=>'single_building.store','class'=>'form-horizontal'])!!}
                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        {{Form::label('Building',null,['class'=>'col-md-4 control-label'])}}


                        <div class="col-md-6">
                            {{Form::select('building_id',$singles,['class'=>'form-control'])}}
                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                        <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                            {{Form::label('address',null,['class'=>'col-md-4 control-label'])}}


                            <div class="col-md-6">
                                {{Form::select('address',$tenants,['class'=>'form-control'])}}
                                @if ($errors->has('address'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('address') }}</strong>
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

@extends('layouts.app')

@section('content')
    <div class="">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">New Building Unit Entry</div>

                    <div class="panel-body">
                        {!! Form::open(['route'=>'building_unit.store','class'=>'form-horizontal'])!!}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            {{Form::label('Unit Name',null,['class'=>'col-md-4 control-label'])}}


                            <div class="col-md-6">
                                {{Form::text('name',null,['class'=>'form-control'])}}
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('building_id') ? ' has-error' : '' }}">
                            {{Form::label('building (multi-only)',null,['class'=>'col-md-4 control-label'])}}


                            <div class="col-md-6">
                                {{Form::select('building_id',$buildings,null,['class'=>'form-control'])}}
                                @if ($errors->has('building_id'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('building_id') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
                            {{Form::label('status',null,['class'=>'col-md-4 control-label'])}}


                            <div class="col-md-6">
                                {{Form::select('status',['current'=>'Current','potential'=>'Potential',
                                'non-potential'=>'Non-potential','sold'=>'Sold'],null,['class'=>'form-control'])}}
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
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

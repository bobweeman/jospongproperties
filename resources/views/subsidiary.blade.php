@extends('layouts.app')

@section('content')
<div class="">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">New Subsidiary Entry</div>

                <div class="panel-body">
                    {!! Form::open(['route'=>'subsidiary.store','class'=>'form-horizontal'])!!}
                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        {{Form::label('Name',null,['class'=>'col-md-4 control-label'])}}


                        <div class="col-md-6">
                            {{Form::text('name',null,['class'=>'form-control'])}}
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
                                {{Form::textarea('address',null,['class'=>'form-control'])}}
                                @if ($errors->has('address'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('address') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('web') ? ' has-error' : '' }}">
                            {{Form::label('web',null,['class'=>'col-md-4 control-label'])}}


                            <div class="col-md-6">
                                {{Form::text('web',null,['class'=>'form-control'])}}
                                @if ($errors->has('web'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('web') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('telephone') ? ' has-error' : '' }}">
                            {{Form::label('telephone',null,['class'=>'col-md-4 control-label'])}}


                            <div class="col-md-6">
                                {{Form::text('telephone',null,['class'=>'form-control'])}}
                                @if ($errors->has('telephone'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('telephone') }}</strong>
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

@extends('layouts.app')

@section('content')
    <div class="">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">New Country Entry</div>

                    <div class="panel-body">
                        {!! Form::open(['route'=>'country.store','class'=>'form-horizontal'])!!}
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            {{Form::label('name',null,['class'=>'col-md-4 control-label'])}}


                            <div class="col-md-6">
                                {{Form::text('name',null,['class'=>'form-control'])}}
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
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


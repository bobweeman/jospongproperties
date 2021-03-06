@extends('layouts.app')

@section('content')
<div class="">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">New Bare Land - Purchaser</div>

                <div class="panel-body">
                    {!! Form::open(['route'=>'bare_land_purchaser.store','class'=>'form-horizontal'])!!}
                    <div class="form-group{{ $errors->has('building_id') ? ' has-error' : '' }}">
                        {{Form::label('Bare Land Name',null,['class'=>'col-md-4 control-label'])}}


                        <div class="col-md-6">
                            {{Form::select('building_id',$buildings,null,['class'=>'form-control'])}}
                            @if ($errors->has('building_id'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('building_id') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                        <div class="form-group{{ $errors->has('purchaser_id') ? ' has-error' : '' }}">
                            {{Form::label('Purchaser',null,['class'=>'col-md-4 control-label'])}}


                            <div class="col-md-6">
                                {{Form::select('purchaser_id',$purchasers,null,['class'=>'form-control'])}}
                                @if ($errors->has('purchaser_id'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('purchaser_id') }}</strong>
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

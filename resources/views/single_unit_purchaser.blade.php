@extends('layouts.app')

@section('content')
    <div class="">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">New Single Building Purchaser</div>

                    <div class="panel-body">
                        {!! Form::open(array('route'=>['single_building_purchaser.update',$id]),['class'=>'form-horizontal'])!!}
                        <input type="hidden" name="_method" value="PATCH">
                        <div class="form-group{{ $errors->has('building_id') ? ' has-error' : '' }}">
                            {{Form::label('Building name',null,['class'=>'col-md-4 control-label'])}}


                            <div class="col-md-6">
                                {{Form::text('building_id',$singleUnit->name,['class'=>'form-control disabled'])}}
                                @if ($errors->has('building_id'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('building_id') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('purchaser_id') ? ' has-error' : '' }}">
                            {{Form::label('Purchaser Name',null,['class'=>'col-md-4 control-label'])}}


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

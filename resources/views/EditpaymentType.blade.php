@extends('layouts.app')

@section('content')
<div class="">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Existing Payment Type </div>

                <div class="panel-body">

                    {!! Form::model($payment, array('route'=>['payment_type.update',$payment->id],'class'=>'form-horizontal'))!!}
                    <input type="hidden" name="_method" value="PATCH">


                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label for="name" class="col-md-4 control-label">Name</label>

                        <div class="col-md-6">
                            {!! Form::text('name',null,['class'=>'form-control','required'])!!}
                            @if ($errors->has('name'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div><br>
                    <div class="clearfix"></div>
                    <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                        <label for="description" class="col-md-4 control-label">Description</label>

                        <div class="col-md-6">
                            {!! Form::text('description',null,['class'=>'form-control','required'])!!}
                            @if ($errors->has('description'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="row form-group"><br>
                        <div class="row col-md-6 col-md-offset-5">
{{--                            {!! Form::button('Create',null,['class'=>'btn btn-primary'])!!}--}}
                            <input type="submit" value="Update" class="btn btn-primary">
                        </div>

                    </div>


                   {!! Form::close()!!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

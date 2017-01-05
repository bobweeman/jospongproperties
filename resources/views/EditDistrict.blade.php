@extends('layouts.app')

@section('content')
    <div class="">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit District Entry</div>

                    <div class="panel-body">
                        {{ Form::model($district, array('route' => ['district.update', $district->id],'class'=>'form-horizontal')) }}
                             <input type="hidden" name="_method" value="PATCH">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">


                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Name</label>

                                <div class="col-md-6">
                                    {{Form::text('name',null,['class'=>'form-control','required autofocus'])}}
                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                        <div class="form-group{{ $errors->has('region_state_id') ? ' has-error' : '' }}">
                            <label for="region_state_id" class="col-md-4 control-label">Region/State</label>

                            <div class="col-md-6">
                                {{Form::select('region_state_id',$regions,$district->foo->name,['class'=>'form-control','required autofocus'])}}
                                @if ($errors->has('region_state_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('region_state_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group">

                            <div class="col-md-6 col-md-offset-4">
                                {{Form::submit('Update',['class'=>'btn btn-primary btn-block'])}}

                            </div>
                        </div>
                          </div>

                      {{Form::close()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

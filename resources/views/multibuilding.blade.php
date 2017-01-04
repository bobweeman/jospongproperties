@extends('layouts.app')

@section('content')
    <div class="">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">New Multi-Building Entry</div>

                    <div class="panel-body">
                        {!! Form::open(['route'=>'multi_unit_building.store','class'=>'form-horizontal'])!!}
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

                        <div class="form-group{{ $errors->has('district_id') ? ' has-error' : '' }}">
                            {{Form::label('district',null,['class'=>'col-md-4 control-label'])}}


                            <div class="col-md-6">
                                {{Form::select('district_id',$districts,null,['class'=>'form-control'])}}
                                @if ($errors->has('district_id'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('district_id') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('city_id') ? ' has-error' : '' }}">
                            {{Form::label('city',null,['class'=>'col-md-4 control-label'])}}


                            <div class="col-md-6">
                                {{Form::select('city_id',$cities,null,['class'=>'form-control'])}}
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
                                {{Form::select('country_id',$countries,null,['class'=>'form-control'])}}
                                @if ($errors->has('country_id'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('country_id') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('purchase_price') ? ' has-error' : '' }}">
                            {{Form::label('purchase_price',null,['class'=>'col-md-4 control-label'])}}


                            <div class="col-md-6">
                                {{Form::text('purchase_price',null,['class'=>'form-control'])}}
                                @if ($errors->has('purchase_price'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('purchase_price') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('property_tax') ? ' has-error' : '' }}">
                            {{Form::label('property_tax',null,['class'=>'col-md-4 control-label'])}}


                            <div class="col-md-6">
                                {{Form::text('property_tax',null,['class'=>'form-control'])}}
                                @if ($errors->has('property_tax'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('property_tax') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('square_feet') ? ' has-error' : '' }}">
                            {{Form::label('square_feet',null,['class'=>'col-md-4 control-label'])}}


                            <div class="col-md-6">
                                {{Form::text('square_feet',null,['class'=>'form-control'])}}
                                @if ($errors->has('square_feet'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('square_feet') }}</strong>
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


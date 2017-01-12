@extends('layouts.app')

@section('content')
    <div class="">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit Single Building Entry</div>

                    <div class="panel-body">

                        {{ Form::model($building, array('route' => ['single_building.update', $building->id],'class'=>'form-horizontal')) }}
                        <input type="hidden" name="_method" value="PATCH">
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
                        <div class="form-group{{ $errors->has('district_id') ? ' has-error' : '' }}">
                            {{Form::label('district',null,['class'=>'col-md-4 control-label'])}}


                            <div class="col-md-6">
                                {{Form::select('district_id',$districts, $building->district->id,['class'=>'form-control'])}}
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
                                {{Form::select('city_id',$cities,$building->city->id,['class'=>'form-control'])}}
                                @if ($errors->has('city_id'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('city_id') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('region_id') ? ' has-error' : '' }}">
                            {{Form::label('Region/State',null,['class'=>'col-md-4 control-label'])}}


                            <div class="col-md-6">
                                {{Form::select('region_id',$regions,$building->region->id,['class'=>'form-control'])}}
                                @if ($errors->has('region_id'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('region_id') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('country_id') ? ' has-error' : '' }}">
                            {{Form::label('country',null,['class'=>'col-md-4 control-label'])}}


                            <div class="col-md-6">
                                {{Form::select('country_id',$countries,$building->country->id,['class'=>'form-control'])}}
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
                        <div class="form-group{{ $errors->has('zoning') ? ' has-error' : '' }}">
                            {{Form::label('zoning',null,['class'=>'col-md-4 control-label'])}}


                            <div class="col-md-6">
                                {{Form::select('zoning',['residential'=>'Residential','industrial'=>'Industrial','commercial'=>'Commercial',
                                'agriculture'=>'Agriculture','civic-culture'=>'Civic Culture'],null,['class'=>'form-control'])}}
                                @if ($errors->has('zoning'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('zoning') }}</strong>
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

                            <div class="col-md-6 col-md-offset-4">
                                {{Form::submit('Update',['class'=>'btn btn-primary btn-block'])}}

                            </div>
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

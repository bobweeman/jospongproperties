@extends('layouts.app')

@section('content')
<div class="">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">New Legal Details Entry (Multi Unit Buildings)</div>

                <div class="panel-body">
                    {!! Form::open(['route'=>'multi_building_legal.store','class'=>'form-horizontal','enctype'=>'multipart/form-data'])!!}

                    <div class="form-group{{ $errors->has('building_id') ? ' has-error' : '' }}">
                        {{Form::label('building (multi-unit)',null,['class'=>'col-md-4 control-label'])}}


                        <div class="col-md-6">
                            {{Form::select('building_id',$buildings,null,['class'=>'form-control'])}}
                            @if ($errors->has('building_id'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('building_id') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('plotted') ? ' has-error' : '' }}">
                        {{Form::label('plotted?',null,['class'=>'col-md-4 control-label'])}}


                        <div class="col-md-6">
                            {{Form::select('plotted',['yes'=>'Yes','no'=>'No'],['no'],['class'=>'form-control','id'=>'plotted'])}}
                            @if ($errors->has('plotted'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('plotted') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('plot_details') ? ' has-error' : '' }}" id="plot_details">
                        {!! Form::label('plot_details',null,['class'=>'col-md-4 control-label'])!!}


                        <div class="col-md-6">
                            {{Form::textarea('plot_details',null,['class'=>'form-control'])}}
                            @if ($errors->has('plot_details'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('plot_details') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('stamp_duty') ? ' has-error' : '' }}">
                        {{Form::label('stamp_duty?',null,['class'=>'col-md-4 control-label'])}}


                        <div class="col-md-6">
                            {{Form::select('stamp_duty',['yes'=>'Yes','no'=>'No'],['no'],['class'=>'form-control','id'=>'stamp_duty'])}}
                            @if ($errors->has('stamp_duty'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('stamp_duty') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('stamp_duty_details') ? ' has-error' : '' }}" id="stamp_duty_details">
                        {!! Form::label('stamp_duty_details',null,['class'=>'col-md-4 control-label'])!!}


                        <div class="col-md-6">
                            {{Form::textarea('stamp_duty_details',null,['class'=>'form-control'])}}
                            @if ($errors->has('stamp_duty_details'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('stamp_duty_details') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('registered_deed') ? ' has-error' : '' }}">
                        {{Form::label('registered_deed?',null,['class'=>'col-md-4 control-label'])}}


                        <div class="col-md-6">
                            {{Form::select('registered_deed',['yes'=>'Yes','no'=>'No'],['no'],['class'=>'form-control','id'=>'registered_deed'])}}
                            @if ($errors->has('registered_deed'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('registered_deed') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('registered_deed_details') ? ' has-error' : '' }}" id="registered_deed_details">
                        {!! Form::label('registered_deed_details',null,['class'=>'col-md-4 control-label'])!!}


                        <div class="col-md-6">
                            {{Form::textarea('registered_deed_details',null,['class'=>'form-control'])}}
                            @if ($errors->has('registered_deed_details'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('registered_deed_details') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('registered_title') ? ' has-error' : '' }}">
                        {{Form::label('registered_title',null,['class'=>'col-md-4 control-label'])}}


                        <div class="col-md-6">
                            {{Form::select('registered_title',['yes'=>'Yes','no'=>'No'],['no'],['class'=>'form-control','id'=>'registered_title'])}}
                            @if ($errors->has('registered_title'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('registered_title') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('registered_title_details') ? ' has-error' : '' }}" id="registered_title_details">
                        {!! Form::label('registered_title_details',null,['class'=>'col-md-4 control-label'])!!}


                        <div class="col-md-6">
                            {{Form::textarea('registered_title_details',null,['class'=>'form-control'])}}
                            @if ($errors->has('registered_title_details'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('registered_title_details') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('litigation_status') ? ' has-error' : '' }}">
                        {{Form::label('litigation_status?',null,['class'=>'col-md-4 control-label'])}}


                        <div class="col-md-6">
                            {{Form::select('litigation_status',['yes'=>'Yes','no'=>'No'],['no'],['class'=>'form-control','id'=>'litigation_status'])}}
                            @if ($errors->has('litigation_status'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('litigation_status') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('litigation_status_details') ? ' has-error' : '' }}" id="litigation_status_details">
                        {!! Form::label('litigation_status_details',null,['class'=>'col-md-4 control-label'])!!}


                        <div class="col-md-6">
                            {{Form::textarea('litigation_status_details',null,['class'=>'form-control'])}}
                            @if ($errors->has('litigation_status_details'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('litigation_status_details') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('contestant_name') ? ' has-error' : '' }}">
                        {{Form::label('contestant_name',null,['class'=>'col-md-4 control-label'])}}


                        <div class="col-md-6">
                            {{Form::text('contestant_name',null,['class'=>'form-control','id'=>'contestant_name'])}}
                            @if ($errors->has('contestant name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('contestant_name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('head_conveyance') ? ' has-error' : '' }}" >
                        {!! Form::label('head_conveyance',null,['class'=>'col-md-4 control-label'])!!}


                        <div class="col-md-6">
                            {{Form::text('head_conveyance',null,['class'=>'form-control','id'=>'head_conveyance'])}}
                            @if ($errors->has('head_conveyance'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('head_conveyance') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('copy_conveyance') ? ' has-error' : '' }}" id='copy_conveyance'>
                        {{Form::label('copy_of_conveyance',null,['class'=>'col-md-4 control-label'])}}


                        <div class="col-md-6">
                            {{Form::file('copy_conveyance',null,['class'=>'form-control'])}}
                            @if ($errors->has('copy_conveyance'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('copy_conveyance') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('signed_indenture') ? ' has-error' : '' }}">
                        {{Form::label('signed_indenture',null,['class'=>'col-md-4 control-label'])}}


                        <div class="col-md-6">
                            {{Form::select('signed_indenture',['yes'=>'Yes','no'=>'No'],['no'],['class'=>'form-control','id'=>'signed_indenture'])}}
                            @if ($errors->has('signed_indenture'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('signed_indenture') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('copy_signed_indenture') ? ' has-error' : '' }}" id='copy_signed_indenture'>
                        {{Form::label('copy_signed_indenture?',null,['class'=>'col-md-4 control-label'])}}


                        <div class="col-md-6">
                            {{Form::file('copy_signed_indenture',null,['class'=>'form-control'])}}
                            @if ($errors->has('copy_signed_indenture'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('copy_signed_indenture') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('lodgement_by') ? ' has-error' : '' }}">
                        {{Form::label('lodgement_by?',null,['class'=>'col-md-4 control-label'])}}


                        <div class="col-md-6">
                            {{Form::text('lodgement_by',null,['class'=>'form-control','id'=>'lodgement_by'])}}
                            @if ($errors->has('lodgement_by'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('lodgement_by') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('lodgement_to') ? ' has-error' : '' }}">
                        {{Form::label('lodgement_to?',null,['class'=>'col-md-4 control-label'])}}


                        <div class="col-md-6">
                            {{Form::select('lodgement_to',['No data'=>'','pvlmd'=>'PVLMD','land title'=>'LAND TITLE'],['No data'],['class'=>'form-control','id'=>'lodgement_to'])}}
                            @if ($errors->has('lodgement_to'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('lodgement_to') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('bar_coded_site_plan') ? ' has-error' : '' }}">
                        {{Form::label('bar_coded_site_plan?',null,['class'=>'col-md-4 control-label'])}}


                        <div class="col-md-6">
                            {{Form::text('bar_coded_site_plan',null,['class'=>'form-control','id'=>'bar_coded_site_plan'])}}
                            @if ($errors->has('bar_coded_site_plan'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('bar_coded_site_plan') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('land_title') ? ' has-error' : '' }}">
                        {{Form::label('land_title?',null,['class'=>'col-md-4 control-label'])}}


                        <div class="col-md-6">
                            {{Form::select('land_title',['yes'=>'Yes','no'=>'No'],['no'],['class'=>'form-control','id'=>'land_title'])}}
                            @if ($errors->has('land_title'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('land_title') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('land_status') ? ' has-error' : '' }}">
                        {{Form::label('land_status',null,['class'=>'col-md-4 control-label'])}}


                        <div class="col-md-6">
                            {{Form::text('land_status',null,['class'=>'form-control','id'=>'land_status'])}}
                            @if ($errors->has('land_status'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('land_status') }}</strong>
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
{{--<script src="/js/physical_hide.js" type="text/javascript"></script>--}}
@endsection

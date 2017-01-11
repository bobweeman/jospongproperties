@extends('layouts.app')

@section('content')
<div class="">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">New Physical Details Entry (Bare Land)</div>

                <div class="panel-body">
                    {!! Form::open(['route'=>'bare_land_physical.store','class'=>'form-horizontal'])!!}

                    <div class="form-group{{ $errors->has('building_id') ? ' has-error' : '' }}">
                        {{Form::label('building',null,['class'=>'col-md-4 control-label'])}}


                        <div class="col-md-6">
                            {{Form::select('building_id',$buildings,null,['class'=>'form-control'])}}
                            @if ($errors->has('building_id'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('building_id') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('fenced') ? ' has-error' : '' }}">
                        {{Form::label('fenced?',null,['class'=>'col-md-4 control-label'])}}


                        <div class="col-md-6">
                            {{Form::select('fenced',['yes'=>'Yes','no'=>'No'],['no'],['class'=>'form-control','id'=>'fenced'])}}
                            @if ($errors->has('fenced'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('fenced') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('fence_type') ? ' has-error' : '' }}" id="fenced_id">
                        {!! Form::label('fence_type',null,['class'=>'col-md-4 control-label'])!!}


                        <div class="col-md-6">
                            {{Form::select('fence_type',['wire mesh','Wire Mesh','sandcrate block'=>'Sandcrate Block',
                            'concrete wall'=>'Concrete Wall','other'=>'Other'],['no'],['class'=>'form-control'])}}
                            @if ($errors->has('fence_type'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('fence_type') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('gated') ? ' has-error' : '' }}">
                        {{Form::label('gated?',null,['class'=>'col-md-4 control-label'])}}


                        <div class="col-md-6">
                            {{Form::select('gated',['yes'=>'Yes','no'=>'No'],['no'],['class'=>'form-control','id'=>"gated"])}}
                            @if ($errors->has('gated'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('gated') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('gate_type') ? ' has-error' : '' }}" id="gate_type">
                        {{Form::label('gate_type',null,['class'=>'col-md-4 control-label'])}}


                        <div class="col-md-6">
                            {{Form::select('gate_type',['wooden','Wooden','glaze glass door'=>'Glaze Glass Door',
                            'metal aluminum fabrication'=>'Metal Aluminum Fabrication'],null,['class'=>'form-control'])}}
                            @if ($errors->has('gate_type'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('gate_type') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('encroached') ? ' has-error' : '' }}">
                        {{Form::label('encroached?',null,['class'=>'col-md-4 control-label'])}}


                        <div class="col-md-6">
                            {{Form::select('encroached',['yes'=>'Yes','no'=>'No'],['no'],['class'=>'form-control','id'=>"encroach"])}}
                            @if ($errors->has('encroached'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('encroached') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('encroach_details') ? ' has-error' : '' }} "id=encroach_details>
                        {{Form::label('encroachment_details',null,['class'=>'col-md-4 control-label'])}}


                        <div class="col-md-6">
                            {{Form::textarea('encroach_details',null,['class'=>'form-control'])}}
                            @if ($errors->has('encroach_details'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('encroach_details') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('occupier') ? ' has-error' : '' }}">
                        {{Form::label('current_occupier',null,['class'=>'col-md-4 control-label'])}}


                        <div class="col-md-6">
                            {{Form::text('occupier',null,['class'=>'form-control'])}}
                            @if ($errors->has('occupier'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('occupier') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('vulnerability') ? ' has-error' : '' }}">
                        {{Form::label('phyiscal_vulnerabilities',null,['class'=>'col-md-4 control-label'])}}


                        <div class="col-md-6">
                            {{Form::textarea('vulnerability',null,['class'=>'form-control'])}}
                            @if ($errors->has('vulnerability'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('vulnerability') }}</strong>
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

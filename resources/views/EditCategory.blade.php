@extends('layouts.app')

@section('content')
    <div class="">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit Category Entry</div>

                    <div class="panel-body">
                        {{ Form::model($category, array('route' => ['category.update', $category->id],'class'=>'form-horizontal')) }}
                             <input type="hidden" name="_method" value="PATCH">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">


                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Name</label>

                                <div class="col-md-6">
                                    {{--<input type="text" id="name"  class="form-control" name="name" value="{{ old('name') }}" required autofocus>--}}
                                    {{Form::text('name',null,['class'=>'form-control','required autofocus'])}}
                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>



                            <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                                <label for="description" class="col-md-4 control-label">Description</label>

                                <div class="col-md-6">
                                    {{--<textarea id="description" type="text" class="form-control" name="description" value="{{ old('description') }}" required autofocus></textarea>--}}
                                    {{Form::textarea('description',null,['class'=>'form-control','required autofocus'])}}
                                    @if ($errors->has('description'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
                                <label for="type" class="col-md-4 control-label">Type of Account</label>

                                <div class="col-md-6">
                                    {{--<input type="text" id="type"  class="form-control" name="type" value="{{ old('type') }}" required autofocus>--}}
                                    {{Form::text('type',null,['class'=>'form-control','required autofocus'])}}
                                    @if ($errors->has('type'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('type') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group col-md-4 pull-right">
                                <input type="submit" value="Update" class="btn btn-primary">
                            </div>


                      {{Form::close()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

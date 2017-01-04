@extends('layouts.app')

@section('content')
<div class="">
    <div class="row">
        <div class="col-md-9 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">New Account Entry</div>

                <div class="panel-body">
                    <form method="POST" class="form-horizontal" role="form" action="{{route('account.store')}}">
                            <input type="hidden" name="_method" value="POST">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                       

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input type="text" id="name"  class="form-control" name="name" value="{{ old('name') }}" required autofocus>

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
                                <textarea id="description" type="text" class="form-control" name="description" value="{{ old('description') }}" required autofocus></textarea>

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
                                <input type="text" id="type"  class="form-control" name="type" value="{{ old('type') }}" required autofocus>

                                @if ($errors->has('type'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('type') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('financial_institution') ? ' has-error' : '' }}">
                            <label for="financial_institution" class="col-md-4 control-label">Financial Institution</label>

                            <div class="col-md-6">
                                <input type="text" id="financial_institution"  class="form-control" name="financial_institution" value="{{ old('financial_institution') }}" required autofocus>

                                @if ($errors->has('financial_institution'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('financial_institution') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-offset-5">
                            <input type="submit" value="Submit" class="btn btn-primary">
                            <input type="reset" value="Clear All" class="btn btn-warning">
                        </div>


                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

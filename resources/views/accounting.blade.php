@extends('layouts.app')

@section('content')
<div class="">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">New Accounting Entry</div>

                <div class="panel-body">
                    <form method="POST" class="form-horizontal" role="form" action="{{route('accounting.store')}}">
                        <input type="hidden" value="{{csrf_token()}}">
                        <div class="form-group{{ $errors->has('date_due') ? ' has-error' : '' }}">
                            <label for="date_due" class="col-md-4 control-label">Date Due</label>

                            <div class="col-md-6">
                                <input id="date_due" type="date" class="form-control" name="date_due" value="{{ old('date_due') }}" required autofocus>

                                @if ($errors->has('date_due'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('date_due') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('date_paid') ? ' has-error' : '' }}">
                            <label for="date_due" class="col-md-4 control-label">Date Paid</label>

                            <div class="col-md-6">
                                <input id="date_paid" type="date" class="form-control" name="date_paid" value="{{ old('date_paid') }}" required autofocus>

                                @if ($errors->has('date_paid'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('date_paid') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                            <label for="description" class="col-md-4 control-label">Description</label>

                            <div class="col-md-6">
                                <textarea id="description"  class="form-control" name="date_due" value="{{ old('description') }}" required autofocus></textarea>

                                @if ($errors->has('description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('amount_owed') ? ' has-error' : '' }}">
                            <label for="amount_owed" class="col-md-4 control-label">Amount Owed</label>

                            <div class="col-md-6">
                                <input id="amount_owed" type="text" class="form-control" name="date_due" value="{{ old('amount_owed') }}" required autofocus>

                                @if ($errors->has('amount_owed'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('amount_owed') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('amount_paid') ? ' has-error' : '' }}">
                            <label for="amount_paid" class="col-md-4 control-label">Amount Paid</label>

                            <div class="col-md-6">
                                <input id="amount_paid" type="text" class="form-control" name="date_due" value="{{ old('amount_paid') }}" required autofocus>

                                @if ($errors->has('amount_paid'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('amount_paid') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        //get account types
                        //get payment type
                        //get category type
                        //get vendor
                        //tenant
                        //building with unit
                        <div class="form-group{{ $errors->has('comment') ? ' has-error' : '' }}">
                            <label for="comment" class="col-md-4 control-label">Comment</label>

                            <div class="col-md-6">
                                <textarea id="comment" type="text" class="form-control" name="comment" value="{{ old('comment') }}" required autofocus></textarea>

                                @if ($errors->has('comment'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('comment') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        





                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

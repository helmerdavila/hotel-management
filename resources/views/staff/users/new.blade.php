@extends('layouts.app')
@section('content')
    <div class="container spark-screen">

        @include('partials._users_bread')

        <div class="panel panel-primary">
            <div class="panel panel-heading">
                <h3 class="panel-title">{{ trans('strings.label.createUser') }}</h3>
            </div>
            <div class="panel-body">
                @include('common.error-alert', ['form' => 'default'])

                <form action="{{ LaravelLocalization::getLocalizedURL(null, '/users') }}" role="form" method="POST" class="form-horizontal">
                    {!! csrf_field() !!}

                    <div class="form-group {{ active_class($errors->has('name'), 'has-error') }}">
                        <label for="name" class="col-md-2 control-label">
                            {{ trans('strings.label.name') }} <span class="new-text-danger">*</span>
                        </label>
                        <div class="col-sm-9">
                            <input type="text" name="name" class="form-control">

                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group {{ active_class($errors->has('lastname'), 'has-error') }}">
                        <label for="lastname" class="col-sm-2 control-label">
                            {{ trans('strings.label.lastname') }} <span class="new-text-danger">*</span>
                        </label>
                        <div class="col-sm-9">
                            <input type="text" name="lastname" class="form-control">

                            @if ($errors->has('lastname'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('lastname') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group {{ active_class($errors->has('email'), 'has-error') }}">
                        <label for="email" class="col-sm-2 control-label">
                            {{ trans('strings.label.email') }} <span class="new-text-danger">*</span>
                        </label>
                        <div class="col-sm-9">
                            <input type="email" name="email" class="form-control">

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group {{ active_class($errors->has('document'), 'has-error') }}">
                        <label for="document" class="col-sm-2 control-label">
                            {{ trans('strings.label.document') }}
                        </label>

                        <div class="col-sm-4">
                            <input type="text" name="document" class="form-control">

                            @if ($errors->has('document'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('document') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="more_data" class="col-sm-2 control-label">
                            {{ trans('strings.label.moreData') }}
                        </label>
                        <div class="col-sm-9">
                            <textarea name="more_data" id="" class="form-control" rows="6"></textarea>

                            @if ($errors->has('more_data'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('more_data') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-primary">{{ trans('strings.label.saveAndReserve') }} &raquo;</button>
                            <button type="submit" class="btn btn-primary">{{ trans('strings.label.saveOnly') }}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop

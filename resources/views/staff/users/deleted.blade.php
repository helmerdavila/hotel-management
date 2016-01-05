@extends('layouts.app')
@section('content')
    <div class="container">

        @include('partials._users_bread')

        <div class="panel panel-primary">
            <div class="panel panel-heading">
                <h3 class="panel-title">{{ trans('strings.label.deleted') }}</h3>
            </div>
            <div class="panel panel-body">
                <div class="table-responsive">
                    <table class="table table-condensed">
                        <thead>
                            <tr>
                                <th>{{ trans('strings.label.name') }}</th>
                                <th>{{ trans('strings.label.lastname') }}</th>
                                <th>{{ trans('strings.label.email') }}</th>
                                <th>{{ trans('strings.label.document') }}</th>
                                <th class="text-center"><i class="fa fa-gear"></i></th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($users as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->lastname }}</td>
                                <td>{{ $user->email or '--' }}</td>
                                <td>{{ $user->document or '--' }}</td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            {{ trans('strings.label.actions') }} <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Restore</a></li>
                                            <li role="separator" class="divider"></li>
                                            <li><a href="#">Destroy</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr><td colspan="5" class="text-center">{{ trans('strings.label.emptyUsersDeleted') }}</td></tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                {!! $users->render() !!}
            </div>
        </div>

    </div>
@stop

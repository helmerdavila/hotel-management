<h1>{{ trans('strings.manage.users') }}</h1>
<hr/>

<ul class="nav nav-pills nav-justified">
    <li class="{{ active_class(if_uri([Lang::getLocale(). '/users/create'])) }}">
        <a href="{{ url(Lang::getLocale() .'/users/create') }}">{{ trans('strings.label.create') }}</a>
    </li>
    <li class="{{ active_class(if_uri([Lang::getLocale() . '/users'])) }}">
        <a href="{{ url(Lang::getLocale() . '/users') }}">{{ trans('strings.label.list') }}</a>
    </li>
    <li class="{{ active_class(if_route(['users.deleted'])) }}">
        <a href="{{ route('users.deleted') }}">{{ trans('strings.label.deleted') }}</a>
    </li>
</ul>
<hr/>

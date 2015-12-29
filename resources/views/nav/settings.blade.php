<li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
        <i class="fa fa-user"></i> {{ auth()->user()->name }} <span class="caret"></span>
    </a>

    <ul class="dropdown-menu" role="menu">

        <li class="dropdown-header">{{ trans('strings.settings') }}</li>

        <li>
            <a href="/settings">
                <i class="fa fa-btn fa-fw fa-cog"></i>{{ trans('strings.yourSettings') }}
            </a>
        </li>

        <li class="divider"></li>

        <li class="dropdown-header">{{ trans('strings.language.select') }}</li>

        <li>
            <a href="{{ LaravelLocalization::getLocalizedURL('en') }}">
                <i class="fa fa-btn fa-fw fa-language"></i>{{ trans('strings.language.english') }}
            </a>
        </li>

        <li>
            <a href="{{ LaravelLocalization::getLocalizedURL('es') }}">
                <i class="fa fa-btn fa-fw fa-language"></i>{{ trans('strings.language.spanish') }}
            </a>
        </li>

        <li class="divider"></li>

        <li>
            <a href="/logout">
                <i class="fa fa-btn fa-fw fa-sign-out"></i>{{ trans('strings.logout') }}
            </a>
        </li>
    </ul>
</li>

<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">

            {{-- Collapsed Hamburger --}}
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#spark-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            {{-- Branding Image --}}
            <a class="navbar-brand" href="{{ route('dashboard') }}">
                <i class="fa fa-building-o"></i> {{ env('APPLICATION_NAME', 'Hotel') }}
            </a>
        </div>

        <div class="collapse navbar-collapse" id="spark-navbar-collapse">
            {{-- Left Side Of Navbar --}}
            <ul class="nav navbar-nav">
                <li>
                    <a href="{{ route('dashboard') }}">
                        <i class="fa fa-home"></i> {{ trans('strings.homeDashboard') }}
                    </a>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                       <i class="fa fa-users"></i> {{ trans('strings.users') }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="dropdown">
                        <li><a href="/customers/create">{{ trans('strings.manage.customers') }}</a></li>
                        <li><a href="/users/create">{{ trans('strings.manage.users') }}</a></li>
                    </ul>
                </li>

                <li>
                    <a href="#">
                        <i class="fa fa-cutlery"></i> {{ trans('strings.services') }}
                    </a>
                </li>

                <li>
                    <a href="#">
                        <i class="fa fa-bed"></i> {{ trans('strings.rooms') }}
                    </a>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        <i class="fa fa-bar-chart"></i> {{ trans('strings.reports') }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="dropdown">
                        <li><a href="#">{{ trans('strings.income') }}</a></li>
                        <li><a href="#">{{ trans('strings.expenses') }}</a></li>
                    </ul>
                </li>

                <li>
                    <a href="#">
                        <i class="fa fa-calendar"></i> Planning
                    </a>
                </li>
            </ul>

            {{-- Right Side Of Navbar --}}
            <ul class="nav navbar-nav navbar-right">
                @include('nav.settings')
            </ul>
        </div>
    </div>
</nav>

<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#spark-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ LaravelLocalization::getLocalizedURL(null, '/') }}">
                <i class="fa fa-building-o"></i> {{ env('APPLICATION_NAME', 'Hotel') }}
            </a>
        </div>

        <div class="collapse navbar-collapse" id="spark-navbar-collapse">
            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Login / Registration Links -->
                <li>
                    <a href="{{ LaravelLocalization::getLocalizedURL(null, '/login') }}">
                        <i class="fa fa-key"></i>
                        {{ trans('strings.loginButton') }}
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

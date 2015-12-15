
<li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
        {{ auth()->user()->name }} <span class="caret"></span>
    </a>

    <ul class="dropdown-menu" role="menu" v-if="user">
        <!-- Settings -->
        <li class="dropdown-header">Settings</li>

        <li>
            <a href="/settings">
                <i class="fa fa-btn fa-fw fa-cog"></i>Your Settings
            </a>
        </li>

        <!-- Logout -->
        <li class="divider"></li>

        <li>
            <a href="/logout">
                <i class="fa fa-btn fa-fw fa-sign-out"></i>Logout
            </a>
        </li>
    </ul>
</li>

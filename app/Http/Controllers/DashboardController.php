<?php

namespace Hotel\Http\Controllers;

use Hotel\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function home()
    {
        return view('dashboard.home');
    }
}

<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        return view('back.dashboard');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $_SESSION["menuActive"] = 'dashboard';
    }
    public function index(): object
    {
        return view('dashboard.index');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\FedexAuth;
use Carbon\Carbon;

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

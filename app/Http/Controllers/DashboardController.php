<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Constants\ViewConstants;

class DashboardController extends Controller
{
    public function index()
    {
        return view(ViewConstants::DASHBOARD_VIEW);
    }
}

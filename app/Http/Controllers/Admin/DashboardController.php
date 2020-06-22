<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Auth\Middleware\CheckLogin;

class DashboardController extends Controller
{
    function index(){
    return view('admin.dashboard');
    }
}

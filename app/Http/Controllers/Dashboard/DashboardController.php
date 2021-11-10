<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Return the dashboard view
     *
     * @return \Illuminate\Support\Facades\View
     */
    public function index()
    {
        return view('dashboard');
    }

    /**
     * Return the account management page
     *
     * @return \Illuminate\Support\Facades\View
     */
    public function account()
    {
        $user = Auth::user();
        return view('account', ['user' => $user]);
    }
}

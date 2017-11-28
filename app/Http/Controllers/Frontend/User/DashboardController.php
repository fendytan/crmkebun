<?php

namespace App\Http\Controllers\Frontend\User;

use App\Vehicle;
use App\Http\Controllers\Controller;

/**
 * Class DashboardController.
 */
class DashboardController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $vehicles = Vehicle::all();

        return view('frontend.user.dashboard', compact('vehicles'));
    }
}

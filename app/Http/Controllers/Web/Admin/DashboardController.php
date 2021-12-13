<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use App\Models\CreditActivity;
use App\Models\PointsActivity;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard.index');
    }

    public function pointsActivity()
    {
        $points = PointsActivity::orderBy('timestamp','DESC')->paginate(25);
        return view('admin.users.points_activity.index',compact('points'));
    }
    public function creditsActivity()
    {
        $credits = CreditActivity::orderBy('timestamp','DESC')->paginate(25);
        return view('admin.users.credit_activity.index',compact('credits'));
    }
}

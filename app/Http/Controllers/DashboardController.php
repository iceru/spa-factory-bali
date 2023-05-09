<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Client;
use App\Models\Products;
use Illuminate\Http\Request;
use Spatie\Analytics\Facades\Analytics;
use Spatie\Analytics\Period;

class DashboardController extends Controller
{
    public function index()
    {
        $totalVisitors = Analytics::fetchTotalVisitorsAndPageViews(Period::days(7));
        $mostVisited = Analytics::fetchVisitorsAndPageViews(Period::days(7));
        $topReferrers = Analytics::fetchTopReferrers(Period::days(7), 7);
        $userDevice = Analytics::fetchUserTypes(Period::days(7));
        return view('admin.dashboard', compact('totalVisitors', 'mostVisited', 'topReferrers', 'userDevice'));
    }
}

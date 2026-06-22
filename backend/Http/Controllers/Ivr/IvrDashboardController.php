<?php

namespace App\Http\Controllers\Ivr;

use App\Http\Controllers\Controller;
use App\Services\Ivr\DashboardStatsService;
use Inertia\Inertia;
use Inertia\Response;

class IvrDashboardController extends Controller
{
    public function __construct(
        private readonly DashboardStatsService $dashboardStats,
    ) {}

    public function index(): Response
    {
        return Inertia::render('Ivr/Dashboard', [
            'dashboard' => $this->dashboardStats->getDashboardData(),
        ]);
    }
}

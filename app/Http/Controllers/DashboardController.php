<?php

namespace App\Http\Controllers;

use App\Models\Vaccination;

class DashboardController extends Controller
{
    public function index()
    {
        $title = 'Bakuna Tracker – Purok Braulio';
        $schedules = Vaccination::orderBy('scheduled_at')->get();
        $stats = [
            ['label' => 'Total', 'value' => $schedules->count()],
            ['label' => 'Done', 'value' => $schedules->where('status', 'Done')->count()],
            ['label' => 'Scheduled', 'value' => $schedules->where('status', 'Scheduled')->count()],
            ['label' => 'Overdue', 'value' => $schedules->where('status', 'Overdue')->count()],
        ];
        $alerts = $schedules->where('status', 'Overdue');
        $next = $schedules->where('status', 'Scheduled')->first();

        // vaccines the health center ran out of
        $outOfStock = ['Anti-Flu'];

        return view('dashboard.index', compact('title', 'stats', 'schedules', 'alerts', 'outOfStock', 'next'));
    }

    public function schedule()
    {
        $schedules = Vaccination::orderBy('scheduled_at')->get();

        return view('dashboard.schedule', compact('schedules'));
    }
}

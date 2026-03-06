<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Attendance;
use App\Models\Rest;

class AttendanceListController extends Controller
{
    public function index(Request $request)
    {
        $displayMonth = $request->input('display_month', date('Y-m'));
        $date = \Carbon\Carbon::parse($displayMonth);

        $prevMonth = $date->copy()->subMonth()->format('Y-m');
        $nextMonth = $date->copy()->addMonth()->format('Y-m');

        $attendances = Attendance::with('rests')
            ->where('user_id', Auth::id())
            ->whereYear('created_at', $date->year)
            ->whereMonth('created_at', $date->month)
            ->get();

        return view('attendance.list', compact('attendances', 'displayMonth', 'prevMonth', 'nextMonth'));
    }
}

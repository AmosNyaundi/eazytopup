<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Charts\UserChart;

class Dashboard extends Controller
{
    public function dashboard()
    {
        if(Auth::check())
        {

            $user = auth()->user()->username;

            $agents = DB::table('agents')
                        ->count(DB::raw('DISTINCT uniqueId'));

            $sales = DB::table('purchase')
                        ->where(['astatus' => 200])
                        ->whereMonth('created_at', Carbon::now()->month)
                        ->sum('Amount');

            $lastm1 = DB::table('purchase')
                        ->where(['astatus' => 200])
                        ->whereMonth('created_at', Carbon::now()->subMonth()->month)
                        ->sum('Amount');

            $thism2 = DB::table('purchase')
                        ->where(['astatus' => 200])
                        ->whereMonth('created_at', Carbon::now()->subMonth(2)->month)
                        ->sum('Amount');

            $profit = $sales - $lastm1;

            $prev =    DB::table('purchase')
                        ->where(['astatus' => 200])
                        ->whereBetween('created_at',[Carbon::now()->subWeek()->startOfWeek(), Carbon::now()->subWeek()->endOfWeek()])
                        ->sum('Amount');

            $last =     DB::table('purchase')
                        ->where(['astatus' => 200])
                        ->whereBetween('created_at',[Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])
                        ->sum('Amount');

            $week2 =  DB::table('purchase')
                        ->where(['astatus' => 200])
                        ->select(
                            DB::raw('sum(Amount) as sum'),
                            DB::raw("DATE_FORMAT(created_at,'%W') as day")
                        )
                        ->whereBetween('created_at',[Carbon::now()->subWeek()->startOfWeek(), Carbon::now()->subWeek()->endOfWeek()])
                        ->groupBy('day')
                        ->get();

            $week1 = DB::table('purchase')
                        ->where(['astatus' => 200])
                        ->select(
                            DB::raw('sum(Amount) as sum'),
                            DB::raw("DATE_FORMAT(created_at,'%W') as day")
                        )
                        ->whereBetween('created_at',[Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])
                        ->groupBy('day')
                        ->get();


            $days = array('Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday');
            $thisweek = array();
            $lastweek = array();
            foreach ($days as $day)
            {
                $r = $week1->where('day', $day)->first();
                $count = isset($r) ? $r->sum : 0;
                array_push($thisweek, $count);

                $s = $week2->where('day', $day)->first();
                $countS = isset($s) ? $s->sum : 0;
                array_push($lastweek, $countS);
            }

            $chart = new UserChart();
            $chart->labels($days);

            $chart->dataset("This Week", "line", $thisweek)
                ->color("rgb(255, 99, 132)")
                ->backgroundcolor("rgb(255, 99, 132)")
                ->fill(FALSE)
                ->linetension(0.5);

            $chart->dataset("Last Week", "line", $lastweek)
                ->color("rgb(66,133,244)")
                ->backgroundcolor("rgb(66,133,244)")
                ->fill(FALSE)
                ->linetension(0.5);

            $chart->displayLegend(true);


            return view('pages.home', compact('prev','last','week1','week2','chart','agents','sales','profit','lastm1','thism2'));

        }

        return redirect()->route('login');
    }


}

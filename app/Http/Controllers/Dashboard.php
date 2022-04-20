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

            $bal = DB::table('mpesa_txn')
                    ->latest()
                    ->first();

            $total_trans = DB::table('air_txn')
                        ->where(['responseStatus' => 200])
                        ->whereMonth('created_at', Carbon::now()->week)
                        ->count();

            $total_air = DB::table('mpesa_txn')
                        ->where('ResultCode', '=', 0)
                        ->whereMonth('TransactionDate', Carbon::now()->month)
                        ->sum('Amount');

            $trans =    DB::table('mpesa_txn')
                        ->where(['ResultCode' => 0])
                        ->whereDate('TransactionDate', Carbon::today())
                        ->count();

            $air =      DB::table('mpesa_txn')
                        ->where('ResultCode', '=', 0)
                        ->whereDate('TransactionDate', Carbon::today())
                        ->sum('Amount');


            $week2 =  DB::table('purchase')
                        ->select(DB::raw('sum(amount) as sum'))
                        ->where(['astatus' => 200])
                        ->whereBetween('created_at',[Carbon::now()->subWeek()->startOfWeek(), Carbon::now()->subWeek()->endOfWeek()])
                    //->get();
                        // ->select(
                        //     DB::raw('COUNT(*) as sum'),
                        //     DB::raw("DATE_FORMAT(created_at,'%M') as month")
                        // )
                        // ->groupBy('month')
                        ->sum('amount');
                        //->get();
            $week1 = DB::table('purchase')
                        ->select(DB::raw('sum(amount) as sum'))
                        ->where(['astatus' => 200])
                        ->whereBetween('created_at',[Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])
                        ->sum('amount');

            $txn =  DB::table('mpesa_txn')
                        ->where(['ResultCode' => 0])
                        ->select(
                            DB::raw('sum(Amount) as sum'),
                            DB::raw("DAY(created_at) as day")
                        )
                        ->groupBy('day')
                        ->get();



            //$months = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
            $weeks = array('Mon','Tue','Wed','Thu','Fri','Sart','Sun');
            $thisweek = array();
            $lastweek = array();
            foreach ($weeks as $week)
            {
                // $r = $week1->where('day', $week)->first();
                // $count = isset($r) ? $r->sum : 0;
                // array_push($thisweek, $count);

                $s = $txn->where('day', $week)->first();
                $countS = isset($s) ? $s->sum : 0;
                array_push($lastweek, $countS);
            }

            $chart = new UserChart();
            $chart->labels($weeks);
            $chart->dataset("This Week", "line", $thisweek)
                ->color('#1e3d73')
                ->backgroundcolor('#1e3d73)')
                ->fill(FALSE)
                ->linetension(0.1);
            $chart->dataset("Last Week", "line",$lastweek)
                ->color("#fe517e")
                ->backgroundcolor("#fe517e")
                ->fill(FALSE)
                ->linetension(0.1);

            $chart->displayLegend(true);


            return view('pages.home', compact('total_trans','trans','week1','week2','air','chart','bal'));

        }

        return redirect()->route('login');
    }


}

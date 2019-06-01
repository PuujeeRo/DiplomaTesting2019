<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;
use App\User;
use App\Projects;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $u_count = \DB::table('users')->where('is_admin', 0)->count('id');
        $u_is_active = \DB::table('users')->where([['is_active','=','1'],['is_admin','=', '0']])->count('id');
        $u_is_deactive = \DB::table('users')->where([['is_active','=','0'],['is_admin','=', '0']])->count('id');
        $u_total;
        if ($u_is_active == 0 ) {            $u_total = 0;        }
        elseif ($u_is_deactive == 0) {            $u_total = 100;        }
        else {            $u_total = ( $u_is_active / $u_is_deactive ) * 100;        }
        //
        $p_count = \DB::table('projects')->count('id');
        $p_raised = \DB::table('projects')->sum('raised');
        $p_amount = \DB::table('projects')->sum('amount');
        $p_is_active = \DB::table('projects')->where('is_active', true)->count('id');
        $p_is_deactive = \DB::table('projects')->where('is_active', false)->count('id');
        $p_total = 0;
        if ($p_is_active == 0 ) {            $p_total = 0;        }
        elseif ($p_is_deactive == 0) {            $p_total = 100;        }
        else {            $p_total = 100 - (( $p_is_deactive / $p_is_active ) * 100);        }
        $p_precent = (int)(($p_raised / $p_amount) * 100); 
        //
        $data = [
            'u_count' => $u_count,
            'u_is_active' => $u_is_active,
            'u_is_deactive' => $u_is_deactive,
            'u_total' => $u_total,

            'p_count' => $p_count,
            'p_precent' => $p_precent,
            'p_amount' => $p_amount,
            'p_raised' => $p_raised,
            'p_is_active' => $p_is_active,
            'p_is_deactive' => $p_is_deactive,
            'p_total' => $p_total
            ];
        return view('admin.dashboard', ['data' => $data]);
    }
}

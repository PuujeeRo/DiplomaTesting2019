<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Projects;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('homeindex');
    }

    public function check_out($id)
    {
        $project = Projects::find($id);
        // Redirect to user list if updating user wasn't existed
        if ($project == null || empty($project)) {
            return redirect()->intended('/');
        }
        return view('check_out', ['project' => $project]);
    }

    public function update(Request $request)
    {

        if($user = Auth::user())
        {
            
        }

        $project = Projects::find($request->id);
        // Redirect to user list if updating user wasn't existed
        $am = $project->raised;
        $am += $request->donate;

        Projects::where('id', $project->id)
            ->update(['raised' => $am]);

        return redirect()->back() ->with('alert', 'donated!!!');
    }
    
    public function get_stats(){
        return view('stats');
    }
}

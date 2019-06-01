<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Projects;
use DataTables;


class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('homeindex', ['projects' => $projects]);
    }

    public function newest()
    {
        //
        $projects = Projects::paginate(6)->sortByDesc('id');
        //$projects.addColumn('am');
        foreach ($projects as $project) {
            $r = $project->raised;
            $p = $project->amount;
            if ($r != 0) {
                $am = ($r / $p) * 100;
            }
            else {
                $am = 0;
            }
            $project->am = $am;
        }
        
        return view('homeindex', ['projects' => $projects]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $project = Projects::find($id);
        $r = $project->raised;
        $a = $project->amount;
        $am;
            
            if ($r != 0) {
                $am = ($r / $a) * 100;
            }
            else {
                $am = 0;
            }
            $project->am = $am;
        return view('single', ['project' => $project], ['am' => $am]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Response;
use App\Projects;
use App\User;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $projects = Projects::paginate(5);

        return view('user.myprojects', ['projects' => $projects]);
        //$users = User::paginate(5);

        //return view('user.myprojects', ['users' => $users]);
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

    public function userProject($id)
    {   
        //$projects = Projects::where('owner_id', $id)->get();
        //$projects = DB::table('projects')->where('owner_id', '=', $id)->get();
        $projects = Projects::All();
        //$projects = DB::table('projects')->get();
        //$projects = DB::select(DB::raw("SELECT * FROM projects WHERE 'owner_id' = 5"));
        return view('user.myprojects', ['projects' => $projects]);
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
        //$this->validateInput($request);
        $title = $request->input('title');
        $summary = $request->input('summary');
        $challenge = $request->input('challenge');
        $url = $request->input('url');
        $videourl = $request->input('videourl');
        //upload lmages
        $file = $request->file('projectimage');
        $filename = $file->getClientOriginalName();
        $success = $file->move('public/img/',$filename);
        $imgpath = 'public/img'.$filename;
        //
        $amount =  $request->input('amount');
        $start_date = $request->input('start');
        $end_date = $request->input('end');
        $project_owner = $request->input('projectowner');
        $info = $request->input('info');
        $projectdoc = $request->input('projectdoc');
        $url1 = $request->input('url1');
        $url2 = $request->input('url2');
        $url3 = $request->input('url3');
        $url4 = $request->input('url4');
        $owner_id = $request->input('user_id');
        $shortsummary = substr($request->input('summary'), 0, 50);

        $data = array('title'=>$title, 'summary'=>$summary, 'challenge_text'=>$challenge, 'url'=>$url, 'video_url'=>$videourl, 'img'=>$imgpath, 'amount'=>$amount, 'start_at'=>$start_date, 'end_at'=>$end_date, 'project_owner'=>$project_owner, 'info'=>$info, 'doc_url'=>$projectdoc, 'url1'=>$url1, 'url2'=>$url2, 'url3'=> $url3, 'url4'=>$url4, 'owner_id'=>$owner_id, 'shortsummary'=>$shortsummary);
        DB::table('projects')->insert($data);

        return redirect()->back() ->with('alert', 'inserted!');
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
        $project = Projects::find($id);
        // Redirect to user list if updating user wasn't existed
        if ($project == null || empty($project)) {
            return redirect()->intended('/user');
        }
        //$project->start_at = Carbon::createFromFormat('d/m/Y', $project->start_at);

        return view('user/project_edit', ['project' => $project]);
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
        $title = $request->input('title');
        $summary = $request->input('summary');
        $challenge = $request->input('challenge');
        $url = $request->input('url');
        $videourl = $request->input('videourl');
        //upload lmages
        $file = $request->file('projectimage');
        $filename = $file->getClientOriginalName();
        $success = $file->move('public/img/',$filename);
        $imgpath = 'public/img'.$filename;
        //
        $amount =  $request->input('amount');
        $start_date = $request->input('start');
        $end_date = $request->input('end');
        $project_owner = $request->input('projectowner');
        $info = $request->input('info');
        $projectdoc = $request->input('projectdoc');
        $url1 = $request->input('url1');
        $url2 = $request->input('url2');
        $url3 = $request->input('url3');
        $url4 = $request->input('url4');
        $owner_id = $request->input('id');
        //$shortsummary = substr($request->input('summary'), 0, 50);
        $data = array('title'=>$title, 'summary'=>$summary, 'challenge_text'=>$challenge, 'url'=>$url, 'video_url'=>$videourl, 'img'=>$imgpath, 'amount'=>$amount, 'start_at'=>$start_date, 'end_at'=>$end_date, 'project_owner'=>$project_owner, 'info'=>$info, 'doc_url'=>$projectdoc, 'url1'=>$url1, 'url2'=>$url2, 'url3'=> $url3, 'url4'=>$url4, 'owner_id'=>$owner_id);

        Projects::where('id', $id)->update($data);
        return redirect()->back() ->with('alert', 'updated!');
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
        Projects::where('id', $id)->delete();
        return redirect()->back() ->with('alert', 'Delete!');
    }
}

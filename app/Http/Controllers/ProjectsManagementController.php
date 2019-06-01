<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Projects;
use App\Project_detail;

class ProjectsManagementController extends Controller
{

    protected $redirectTo = '/projects-management';
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$projects = Projects::All()->where('is_active', true);
        $projects = Projects::All();
        return view('projects-mgmt/index', ['projects' => $projects]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        /*  $states = State::all();
        return view('system-mgmt/city/create', ['states' => $states]);
        */
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*State::findOrFail($request['state_id']);
        $this->validateInput($request);
         city::create([
            'name' => $request['name'],
            'state_id' => $request['state_id']
        ]);

        return redirect()->intended('system-management/city');
        */
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
        /*$city = city::find($id);
        // Redirect to city list if updating city wasn't existed
        if ($city == null || empty($city)) {
            return redirect()->intended('/system-management/city');
        }

        $states = State::all();
        return view('system-mgmt/city/edit', ['city' => $city, 'states' => $states]);
        */
        $project = Projects::find($id);
        // Redirect to user list if updating user wasn't existed
        if ($project == null || empty($project)) {
            return redirect()->intended('/projects-mgmt');
        }
        //$project->start_at = Carbon::createFromFormat('d/m/Y', $project->start_at);

        return view('projects-mgmt/edit', ['project' => $project]);
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

    public function is_active($id){
        $project = Projects::find($id);
        $data;

        if ($project->is_active == 0) {
             $data = array('is_active' => '1');   
        }
        else $data = array('is_active' => '0');
        
        Projects::where('id', $id)->update($data);
        return redirect()->back()->with('alert', 'is_active!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Projects::where('id', $id)->delete();
        return redirect()->back() ->with('alert', 'Delete!');
    }

    public function loadCities($stateId) {
        /*$cities = City::where('state_id', '=', $stateId)->get(['id', 'name']);

        return response()->json($cities);
        */
    }

    /**
     * Search city from database base on some specific constraints
     *
     * @param  \Illuminate\Http\Request  $request
     *  @return \Illuminate\Http\Response
     */
    public function search(Request $request) {
        /*$constraints = [
            'name' => $request['name']
            ];

       $cities = $this->doSearchingQuery($constraints);
       return view('system-mgmt/city/index', ['cities' => $cities, 'searchingVals' => $constraints]);
       */
    }
    
    private function doSearchingQuery($constraints) {
        /*$query = City::query();
        $fields = array_keys($constraints);
        $index = 0;
        foreach ($constraints as $constraint) {
            if ($constraint != null) {
                $query = $query->where( $fields[$index], 'like', '%'.$constraint.'%');
            }

            $index++;
        }
        return $query->paginate(5);
        */
    }
    private function validateInput($request) {
        /*$this->validate($request, [
        'name' => 'required|max:60|unique:city'
    ]);*/
    }
}

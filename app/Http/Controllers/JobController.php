<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;
use App\Entities\RegisterJob;
use Validator;
use App\Skill;
use App\Profession;
use DB;

class JobController extends Controller
{
    protected $jobs;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(RegisterJob $jobs)
    {
        $this->middleware('auth:admin');
        $this->jobs = $jobs;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $skills = DB::table('skills')
        ->leftJoin('jobs', 'skills.id', '=', 'jobs.skill_id')
        ->select('skill')
        ->get();
        $pas = DB::table('professions')
        ->leftJoin('jobs', 'professions.id', '=', 'jobs.profession_id')
        ->select('profession')
        ->get();
        $jobs = Job::all();
        return view('register-job.index',compact('jobs','skills','pas'));
    }

    
    public function create()
    {
        $pas = Profession::orderBy('profession')->pluck('profession','id');
        $skills = Skill::orderBy('skill')->pluck('skill','id');
        
        return view('register-job.create',compact('skills','pas'));
    }
    
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'slug' => 'required',
            'employment_type' => 'required',
            'description' => 'required',
            'price' => 'required',
            'name' => 'required',
            'skill_id' => 'required',
            'profession_id' => 'required',
            ]);

            $jobs = new Job;
            $jobs->title = $request->title;
            $jobs->slug = $request->slug;
            $jobs->employment_type = $request->employment_type;
            $jobs->description = $request->description;
            $jobs->price = $request->price;
            $jobs->name = $request->name;
            $jobs->skill_id = $request->skill_id;
            $jobs->profession_id = $request->profession_id;
            $jobs->save();
            
        return redirect()->route('show_job', $jobs->id);
    }


    public function show($id)
    {
        $skills = DB::table('skills')
        ->leftJoin('jobs', 'skills.id', '=', 'jobs.skill_id')
        ->select('skill')
        ->get();
        $pas = DB::table('professions')
        ->leftJoin('jobs', 'professions.id', '=', 'jobs.profession_id')
        ->select('profession')
        ->get();
        $jobs = Job::find($id);
        return view('register-job.show',compact('jobs','skills','pas'));
    }

 

    public function edit($id)
    {
        $pas = Profession::orderBy('profession')->pluck('profession','id');
        $skills = Skill::orderBy('skill')->pluck('skill','id');
        
        $jobs = Job::find($id);

        return view('register-job.edit', compact('jobs','skills','pas'));   
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'slug' => 'required',
            'employment_type' => 'required',
            'description' => 'required',
            'price' => 'required',
            'name' => 'required',
            'skill_id' => 'required',
            'profession_id' => 'required',
            ]); 

        $jobs = Job::find($id);
        
        $jobs->title = $request->input('title');
        $jobs->slug = $request->input('slug');
        $jobs->employment_type = $request->input('employment_type');
        $jobs->description = $request->input('description');
        $jobs->price = $request->input('price');
        $jobs->name = $request->input('name');
        $jobs->skill_id = $request->input('skill_id');
        $jobs->profession_id = $request->input('profession_id');

        $jobs->save();

        return redirect()->route('show_job', $jobs->id);
    }

    public function destroy($id)
    {
        $jobs = Job::find($id);
        $jobs->delete();

        return redirect()->route('list_all_jobs');
    }

}

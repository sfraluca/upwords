<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;
use App\Entities\RegisterJob;
use Validator;
use App\Skill;
use App\Profession;
use DB;
use App\User;
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
        
        $jobs = DB::table('jobs')
        ->join('skills', 'jobs.skill_id', '=', 'skills.id')
        ->join('professions', 'jobs.profession_id','=', 'professions.id' )
        ->select('jobs.*', 'skills.skill', 'professions.profession')
        ->get();
        // dd($jobs);
        return view('register-job.index',compact('jobs'));
    }

    
    public function create()
    {
        $pas = Profession::orderBy('profession')->pluck('profession','id');
        $skills = Skill::orderBy('skill')->pluck('skill','id');
        $users = User::orderBy('name')->pluck('name','id');
        
        return view('register-job.create',compact('skills','pas','users'));
    }
    
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'contact' => 'required',
            'slug' => 'required',
            'employment_type' => 'required',
            'description'=>'required',
            'price' => 'required',
            'name' => 'required',
            'skill_id' => 'required',
            'profession_id' => 'required',
            'user_id' => 'required',
            ]);
        
            $jobs = new Job;
            $jobs->title = $request->title;
            $jobs->contact = $request->contact;
            $jobs->slug = $request->slug;
            $jobs->employment_type = $request->employment_type;
            $jobs->description = $request->description;
            $jobs->price = $request->price;
            $jobs->name = $request->name;
            $jobs->skill_id = $request->skill_id;
            $jobs->profession_id = $request->profession_id;
            $jobs->user_id = $request->user_id;
            $jobs->save();
            
        return redirect()->route('show_job', [app()->getLocale(), $jobs->id]);
    }


    public function show($locale,$id)
    { 
        $jobs =  DB::table('jobs')
        ->join('skills', 'skills.id', '=', 'jobs.skill_id')
        ->join('professions', 'professions.id', '=', 'jobs.profession_id')
        ->select('jobs.*', 'skills.skill', 'professions.profession')
        ->where('jobs.id',$id)->get();
        foreach($jobs as $job)
        {
            $data = $job;
        }
       
        return view('register-job.show',compact('data'));
    }

 

    public function edit($locale,$id)
    {
        $pas = Profession::orderBy('profession')->pluck('profession','id');
        $skills = Skill::orderBy('skill')->pluck('skill','id');
        
        $jobs = Job::find($id);
        return view('register-job.edit', compact('jobs','skills','pas'));   
    }

    public function update($locale,Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'contact' => 'required',
            'slug' => 'required',
            'employment_type' => 'required',
            'price' => 'required',
            'name' => 'required',
            'skill_id' => 'required',
            'profession_id' => 'required',
            ]); 

        $jobs = Job::find($id);
        
        $jobs->title = $request->input('title');
        $jobs->contact = $request->input('contact');
        $jobs->slug = $request->input('slug');
        $jobs->employment_type = $request->input('employment_type');
        $jobs->description = $request->input('description');
        $jobs->price = $request->input('price');
        $jobs->name = $request->input('name');
        $jobs->skill_id = $request->input('skill_id');
        $jobs->profession_id = $request->input('profession_id');

        $jobs->save();

        return redirect()->route('show_job', [app()->getLocale() ,$jobs->id]);
    }

    public function destroy($locale,$id)
    {
        $jobs = Job::find($id);
        $jobs->delete();

        return redirect()->route('list_all_jobs',app()->getLocale());
    }

}

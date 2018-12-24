<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Skill;
use App\Profession;
use DB;
use App\Candidate;
use App\Job;
class HomeController extends Controller
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

     //index the vanacies to frontpage
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
        return view('home',compact('jobs','skills','pas'));
    }
    //choose 
    public function choose()
    {
        return view('profile_choose');
    }
    //register an user to freelancer
    public function registration()
    {
        $pas = Profession::orderBy('profession')->pluck('profession','id');
        $skills = Skill::orderBy('skill')->pluck('skill','id');

        return view('registration',compact('skills','pas'));
    }
    //register an user to job
    public function registrationJob()
    {
        $pas = Profession::orderBy('profession')->pluck('profession','id');
        $skills = Skill::orderBy('skill')->pluck('skill','id');

        return view('registration_job',compact('skills','pas'));
    }
    //save the data for candidate
    public function store(Request $request)
    {
        $data = $request->only('title', 'slug','employment_type','description','price','name','profession_id','skill_id');
        $jobs = Job::create($data);

        return redirect()->route('profile_candidate', $candidates->id);
    }
    
    //show the profile of candidate
    public function profileCandidate($id)
    {
        $skills = DB::table('skills')
        ->leftJoin('jobs', 'skills.id', '=', 'jobs.skill_id')
        ->select('skill')
        ->get();
        $pas = DB::table('professions')
        ->leftJoin('jobs', 'professions.id', '=', 'jobs.profession_id')
        ->select('profession')
        ->get();
        $candidates = Candidate::find($id);
        return view('profile.show_candidate',compact('candidates','skills','pas'));
    }
  
    //edit candidate
    public function editCandidate($id)
    {
        $pas = Profession::orderBy('profession')->pluck('profession','id');
        $skills = Skill::orderBy('skill')->pluck('skill','id');
        $candidates = Candidate::find($id);
        return view('profile.edit_candidate',compact('candidates','skills','pas'));
    }
    //update candidate
    public function updateCandidate(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'slug' => 'required',
            'emplyment_type' => 'required',
            'description' => 'required',
            'price' => 'required',
            'skill_id' => 'required',
            'profession_id' => 'required',
            ]); 

        $candidates = Candidate::find($id);
        
        $candidates->name = $request->input('name');
        $candidates->slug = $request->input('slug');
        $candidates->emplyment_type = $request->input('emplyment_type');
        $candidates->description = $request->input('description');
        $candidates->price = $request->input('price');
        $candidates->skill_id = $request->input('skill_id');
        $candidates->profession_id = $request->input('profession_id');

        $candidates->save();
       
        return redirect()->route('profile_candidate', $candidates->id);
    }
    //delete profile
    public function destroyCandidate($id)
    {
        $candidates = Candidate::find($id);
        $candidates->delete();

        return redirect()->route('registration');
    }
    //save the data for job
    public function storeJob(Request $request)
    {
        $data = $request->only('title', 'slug','employment_type','description','price','name','profession_id','skill_id');
        $jobs = Job::create($data);

        return redirect()->route('profile_job', $jobs->id);
    }
    //show vacancy
    public function profileJob($id)
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
        return view('profile.show_job',compact('jobs','skills','pas'));
    }
   //edit candidate
   public function editJob($id)
   {
       $pas = Profession::orderBy('profession')->pluck('profession','id');
       $skills = Skill::orderBy('skill')->pluck('skill','id');
       $jobs = Job::find($id);
       return view('profile.edit_vacancy',compact('jobs','skills','pas'));
   }
   //update candidate
   public function updateJob(Request $request, $id)
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
      
       return redirect()->route('profile.show_job', $jobs->id);
   }
  //list all jobs
    public function job()
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


        return view('job',compact('jobs','skills','pas'));
    }
    //list all freelancers
    public function freelancer()
    {
        $skills = DB::table('skills')
        ->leftJoin('jobs', 'skills.id', '=', 'jobs.skill_id')
        ->select('skill')
        ->get();
        $pas = DB::table('professions')
        ->leftJoin('jobs', 'professions.id', '=', 'jobs.profession_id')
        ->select('profession')
        ->get();
        $candidates = Candidate::all();
        return view('freelancer',compact('candidates','skills','pas'));
    }
    //compare
    public function compare($id)
    {
        $skills = DB::table('skills')
        ->leftJoin('jobs', 'skills.id', '=', 'jobs.skill_id')
        ->select('skill')
        ->get();
        $pas = DB::table('professions')
        ->leftJoin('jobs', 'professions.id', '=', 'jobs.profession_id')
        ->select('profession')
        ->get();
        $candidates = Candidate::find($id);
        $jobs = Job::find($id);
        return view('compare',compact('candidates','jobs','skills','pas'));
    }
   

}

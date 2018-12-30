<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Skill;
use App\Profession;
use DB;
use App\Candidate;
use App\Job;
use Carbon;
use Mail;
use Session;
use User;
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
        $profession =Profession::all();
        $jobs_recent = DB::table('jobs')->select("*")->whereBetween('created_at', [
            Carbon\Carbon::now()->startOfWeek(),
            Carbon\Carbon::now()->endOfWeek(),
        ])->paginate(6);
        return view('home',compact('jobs','skills','pas','profession','jobs_recent'));
    }
    //choose 
    public function choose()
    {
        return view('profile_choose');
    }
    //register an user to freelancer
    public function registration()
    {
        $this->authorize('create-candidate');
        $pas = Profession::orderBy('profession')->pluck('profession','id');
        $skills = Skill::orderBy('skill')->pluck('skill','id');

        return view('registration',compact('skills','pas'));
    }
    //register an user to job
    public function registrationJob()
    {
        $this->authorize('create-vacancy');
        $pas = Profession::orderBy('profession')->pluck('profession','id');
        $skills = Skill::orderBy('skill')->pluck('skill','id');

        return view('registration_job',compact('skills','pas'));
    }
    //save the data for candidate
    public function store(Request $request)
    {
        $data = $request->only('name','contact','emplyment_type','description','price','slug','profession_id','skill_id');
        $data['user_id'] = auth()->user()->id;

        $candidates = Candidate::create($data);

        return redirect()->route('profile_candidate', $candidates->id);
    }
    
    //show the profile of candidate
    public function profileCandidate($id)
    {
        $this->authorize('show-candidate');
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
        $this->authorize('update-candidate');
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
            'contact' => 'required',
            'slug' => 'required',
            'emplyment_type' => 'required',
            'description' => 'required',
            'price' => 'required',
            'skill_id' => 'required',
            'profession_id' => 'required',
            ]); 

        $candidates = Candidate::find($id);
        
        $candidates->name = $request->input('name');
        $candidates->contact = $request->input('contact');
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
        $this->authorize('delete-candidate');
        $candidates = Candidate::find($id);
        $candidates->delete();

        return redirect()->route('registration');
    }
    //save the data for job
    public function storeJob(Request $request)
    {
        $data = $request->only('title','contact', 'slug','employment_type','description','price','name','profession_id','skill_id');
        $data['user_id'] = auth()->user()->id;

        $jobs = Job::create($data);

        return redirect()->route('profile_job', $jobs->id);
    }
    //show vacancy
    public function profileJob($id)
    {
        $this->authorize('show-vacancy');
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
   //edit job
   public function editJob($id)
   {
    $this->authorize('update-vacancy');
       $pas = Profession::orderBy('profession')->pluck('profession','id');
       $skills = Skill::orderBy('skill')->pluck('skill','id');
       $jobs = Job::find($id);
       return view('profile.edit_vacancy',compact('jobs','skills','pas'));
   }
   //update job
   public function updateJob(Request $request, $id)
   {
    $validator = Validator::make($request->all(), [
        'title' => 'required',
        'slug' => 'required',
        'contact' => 'required',
        'employment_type' => 'required',
        'description' => 'required',
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
      
       return redirect()->route('profile_job', $jobs->id);
   }
   //delete profile
   public function destroyJob($id)
   {
    $this->authorize('delete-vacancy');
       $jobs = Job::find($id);
       $jobs->delete();

       return redirect()->route('home');
   }
  //list all jobs
    public function job()
    {
        $this->authorize('index-vacancy');
        $skills = DB::table('skills')
        ->leftJoin('jobs', 'skills.id', '=', 'jobs.skill_id')
        ->select('skill')
        ->get();
        $pas = DB::table('professions')
        ->leftJoin('jobs', 'professions.id', '=', 'jobs.profession_id')
        ->select('profession')
        ->get();

        $jobs = Job::paginate(10);


        return view('job',compact('jobs','skills','pas'));
    }
    //list all jobs
    public function week()
    {
        $this->authorize('index-vacancy');
        $skills = DB::table('skills')
        ->leftJoin('jobs', 'skills.id', '=', 'jobs.skill_id')
        ->select('skill')
        ->get();
        $pas = DB::table('professions')
        ->leftJoin('jobs', 'professions.id', '=', 'jobs.profession_id')
        ->select('profession')
        ->get();

        $jobs = DB::table('jobs')->select("*")->whereBetween('created_at', [
            Carbon\Carbon::now()->startOfWeek(),
            Carbon\Carbon::now()->endOfWeek(),
        ])->paginate(10);


        return view('week',compact('jobs','skills','pas'));
    }
    //list all jobs
    public function month()
    {
        $this->authorize('index-vacancy');
        $skills = DB::table('skills')
        ->leftJoin('jobs', 'skills.id', '=', 'jobs.skill_id')
        ->select('skill')
        ->get();
        $pas = DB::table('professions')
        ->leftJoin('jobs', 'professions.id', '=', 'jobs.profession_id')
        ->select('profession')
        ->get();

        $jobs = DB::table('jobs')->select("*")->whereBetween('created_at', [
            Carbon\Carbon::now()->startOfMonth(),
            Carbon\Carbon::now()->endOfMonth(),
        ])->paginate(10);


        return view('month',compact('jobs','skills','pas'));
    }
    //list all jobs
    public function day()
    {
        $this->authorize('index-vacancy');
        $skills = DB::table('skills')
        ->leftJoin('jobs', 'skills.id', '=', 'jobs.skill_id')
        ->select('skill')
        ->get();
        $pas = DB::table('professions')
        ->leftJoin('jobs', 'professions.id', '=', 'jobs.profession_id')
        ->select('profession')
        ->get();

        $jobs = DB::table('jobs')->select("*")->whereBetween('created_at', [
            Carbon\Carbon::now()->startOfDay(),
            Carbon\Carbon::now()->endOf(),
        ])->paginate(10);


        return view('day',compact('jobs','skills','pas'));
    }
    
    //list all freelancers
    public function freelancer()
    {
        $this->authorize('index-candidate');
        $skills = DB::table('skills')
        ->leftJoin('jobs', 'skills.id', '=', 'jobs.skill_id')
        ->select('skill')
        ->get();
        $pas = DB::table('professions')
        ->leftJoin('jobs', 'professions.id', '=', 'jobs.profession_id')
        ->select('profession')
        ->get();
        $candidates = Candidate::paginate(10);
        return view('freelancer',compact('candidates','skills','pas'));
    }
    //list all jobs
    public function weekFr()
    {
        $this->authorize('index-candidate');
        $skills = DB::table('skills')
        ->leftJoin('jobs', 'skills.id', '=', 'jobs.skill_id')
        ->select('skill')
        ->get();
        $pas = DB::table('professions')
        ->leftJoin('jobs', 'professions.id', '=', 'jobs.profession_id')
        ->select('profession')
        ->get();

        $candidates = DB::table('candidates')->select("*")->whereBetween('created_at', [
            Carbon\Carbon::now()->startOfWeek(),
            Carbon\Carbon::now()->endOfWeek(),
        ])->paginate(10);


        return view('weekfreelancer',compact('candidates','skills','pas'));
    }
    //list all jobs
    public function monthFr()
    {
        $this->authorize('index-candidate');
        $skills = DB::table('skills')
        ->leftJoin('jobs', 'skills.id', '=', 'jobs.skill_id')
        ->select('skill')
        ->get();
        $pas = DB::table('professions')
        ->leftJoin('jobs', 'professions.id', '=', 'jobs.profession_id')
        ->select('profession')
        ->get();

        $candidates = DB::table('candidates')->select("*")->whereBetween('created_at', [
            Carbon\Carbon::now()->startOfMonth(),
            Carbon\Carbon::now()->endOfMonth(),
        ])->paginate(10);


        return view('monthfreelancer',compact('candidates','skills','pas'));
    }
    //list all jobs
    public function dayFr()
    {
        $this->authorize('index-candidate');
        $skills = DB::table('skills')
        ->leftJoin('jobs', 'skills.id', '=', 'jobs.skill_id')
        ->select('skill')
        ->get();
        $pas = DB::table('professions')
        ->leftJoin('jobs', 'professions.id', '=', 'jobs.profession_id')
        ->select('profession')
        ->get();

        $candidates = DB::table('candidates')->select("*")->whereBetween('created_at', [
            Carbon\Carbon::now()->startOfDay(),
            Carbon\Carbon::now()->endOfDay(),
        ])->paginate(10);


        return view('dayfreelancer',compact('candidates','skills','pas'));
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


        
        require('C:\Users/Sferle Raluca/Documents/work/myprojects/upwords/vendor/paralleldots/apis/autoload.php');
        $sim = similarity($skills, $skills);
        $responseArray = json_decode($sim, true);
        $responseResultArray = $responseArray["actual_score"];
        $procentaj = $responseResultArray*100;


        $candidates = Candidate::find($id);
        $jobs = Job::find($id);
        return view('compare',compact('candidates','jobs','skills','pas','procentaj'));

    }
    public function contactCandidate($id)
    {
        $candidates = Candidate::find($id);
     
        return view('platform.cand_contact',compact('candidates'));
    }
    public function storeContactCandidate(Request $request, $id)
    {
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required',
            'subject'=>'required',
            'message'=>'required',
        ]);
      
       
       $emails = DB::table('candidates')                 
       ->select('contact')
       ->where('id','=',$id)
       ->get();  


            foreach($emails as $email){
            $contact = $email->contact;

            }
        $data = array(
            'email' => $request->email,
            'subject' => $request->subject,
            'bodyMessage' => $request->message,
            'contact'=>$contact
        );
      
        Mail::send('platform.email', $data, function($message) use ($data){
            $message->from($data['email']);
            $message->to($data['contact']);
            $message->subject($data['subject']);
        });
        Session::flash('success', 'Your email was sent!');

        return redirect()->route('home');
    }
    public function contactVacancy($id)
    {
        $jobs = Job::find($id); 
       
        return view('platform.vacancy_contact',compact('jobs'));
    }
    public function storeContactVacancy(Request $request, $id)
    {
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required',
            'subject'=>'required',
            'message'=>'required',
        ]);
       
        //    $user= $this->email();
         $emails = DB::table('jobs')
                        
                        ->select('contact')
                        ->where('id','=',$id)
                        ->get();  
                        foreach($emails as $email){
                            $contact = $email->contact;
                
                            }
            
        $data = array(
            'email' => $request->email,
            'subject' => $request->subject,
            'bodyMessage' => $request->message,
            'contact'=>$contact
        );
        
   
        Mail::send('platform.email', $data, function($message) use ($data){
            $message->from($data['email']);
            $message->to($data['contact']);
            $message->subject($data['subject']);
        });
        Session::flash('success', 'Your email was sent!');

        return redirect()->route('home');
    }
      
}

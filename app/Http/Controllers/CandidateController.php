<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Candidate;
use App\Entities\RegisterCandidate;
use Validator;
use DB;

use App\Skill;
use App\Profession;
class CandidateController extends Controller
{
    protected $candidates;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(RegisterCandidate $candidates)
    {
        $this->middleware('auth:admin');
        $this->candidates = $candidates;
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
        $candidates = Candidate::all();
        return view('register-candidate.index',compact('candidates','skills','pas'));
    }

    
    public function create()
    {
        $pas = Profession::orderBy('profession')->pluck('profession','id');
        $skills = Skill::orderBy('skill')->pluck('skill','id');

        return view('register-candidate.create',compact('skills','pas'));
    }
    
    public function store(Request $request)
    {
        //+pa skill
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'slug' => 'required',
            'emplyment_type' => 'required',
            'description' => 'required',
            'price' => 'required',
            'skill_id' => 'required',
            'profession_id' => 'required',
            ]);
            $candidates = new Candidate;
            $candidates->name = $request->name;
            $candidates->slug = $request->slug;
            $candidates->emplyment_type = $request->emplyment_type;
            $candidates->description = $request->description;
            $candidates->price = $request->price;
            $candidates->skill_id = $request->skill_id;
            $candidates->profession_id = $request->profession_id;
            $candidates->save();
            
        return redirect()->route('show_candidate', $candidates->id);
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
        $candidates = Candidate::find($id);
        return view('register-candidate.show',compact('candidates','skills','pas'));
    }

 

    public function edit($id)
    {
        $pas = Profession::orderBy('profession')->pluck('profession','id');
        $skills = Skill::orderBy('skill')->pluck('skill','id');
        $candidates = Candidate::find($id);

        return view('register-candidate.edit', compact('candidates','skills','pas'));   
    }

    public function update(Request $request, $id)
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

        return redirect()->route('show_candidate', $candidates->id);
    }

    public function destroy($id)
    {
        $candidates = Candidate::find($id);
        $candidates->delete();

        return redirect()->route('list_all_candidates');
    }
}

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
        $candidates = DB::table('candidates')
        ->join('skills', 'skills.id', '=', 'candidates.skill_id')
        ->join('professions', 'professions.id', '=', 'candidates.profession_id')
        ->get();
        return view('register-candidate.index',compact('candidates'));
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
            'contact' => 'required',
            'slug' => 'required',
            'emplyment_type' => 'required',
            'description' => 'required',
            'price' => 'required',
            'skill_id' => 'required',
            'profession_id' => 'required',
            ]);
            $candidates = new Candidate;
            $candidates->name = $request->name;
            $candidates->contact = $request->contact;
            $candidates->slug = $request->slug;
            $candidates->emplyment_type = $request->emplyment_type;
            $candidates->description = $request->description;
            $candidates->price = $request->price;
            $candidates->skill_id = $request->skill_id;
            $candidates->profession_id = $request->profession_id;
            $candidates->save();
            
        return redirect()->route('show_candidate', [app()->getLocale(),$candidates->id]);
    }


    public function show($locale,$id)
    {
        $candidates =  DB::table('candidates')
        ->join('skills', 'skills.id', '=', 'candidates.skill_id')
        ->join('professions', 'professions.id', '=', 'candidates.profession_id')
        ->select('*')->where('candidates.id','=',$id)->get();
        foreach($candidates as $candidate)
        {
            $data = $candidate;
        }
        return view('register-candidate.show',compact('data'));
    }

 

    public function edit($locale,$id)
    {
        $pas = Profession::orderBy('profession')->pluck('profession','id');
        $skills = Skill::orderBy('skill')->pluck('skill','id');
        $candidates = Candidate::find($id);

        return view('register-candidate.edit', compact('candidates','skills','pas'));   
    }

    public function update($locale,Request $request, $id)
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

        return redirect()->route('show_candidate', [app()->getLocale(),$candidates->id]);
    }

    public function destroy($id)
    {
        $candidates = Candidate::find($id);
        $candidates->delete();

        return redirect()->route('list_all_candidates');
    }
}

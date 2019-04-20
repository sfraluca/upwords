<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Skill;
use App\Entities\RegisterSkill;
use Validator;
use App\Job;
use App\Candidate;
class SkillController extends Controller
{
    protected $skills;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(RegisterSkill $skills)
    {
        $this->middleware('auth:admin');
        $this->skills = $skills;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $skills = Skill::all();
        return view('register-skill.index',compact('skills'));
    }

    
    public function create()
    {
        
        return view('register-skill.create');
    }
    
    public function store(Request $request)
    {
        
        $validator = Validator::make($request->all(), [
            'skill' => 'required',
            ]);

        $skills = $this->skills->register($request->all());
            
        return redirect()->route('show_skill', [app()->getLocale() ,$skills->id]);
    }


    public function show($locale,$id)
    {
        $skills = Skill::find($id);
        return view('register-skill.show',compact('skills'));
    }

 

    public function edit($ocale,$id)
    {
        $skills = Skill::find($id);

        return view('register-skill.edit', compact('skills'));   
    }

    public function update($locale,Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'skill' => 'required',
            ]); 

        $skills = Skill::find($id);
        
        $skills->skill = $request->input('skill');

        $skills->save();

        return redirect()->route('show_skill', [app()->getLocale() ,$skills->id]);
    }

    public function destroy($locale,$id)
    {
        $jobs = Job::where('skill_id', $id);
        $jobs->delete();
        $candidates = Candidate::where('skill_id', $id);
        $candidates->delete();
        $skill = Skill::find($id);

        $skill->delete();

        return redirect()->route('list_all_skills',app()->getLocale());
    }
}

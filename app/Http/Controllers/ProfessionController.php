<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profession;
use App\Entities\RegisterProfession;
use Validator;

class ProfessionController extends Controller
{
    protected $professions;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(RegisterProfession $professions)
    {
        $this->middleware('auth:admin');
        $this->professions = $professions;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $professions = Profession::all();
        return view('register-profession.index',compact('professions'));
    }

    
    public function create()
    {
        return view('register-profession.create');
    }
    
    public function store(Request $request)
    {
        
        $validator = Validator::make($request->all(), [
            'profession' => 'required',
            ]);
        $professions = $this->professions->register($request->all());
            
        return redirect()->route('show_profession', [app()->getLocale() ,$professions->id]);
    }


    public function show($locale,$id)
    {
        $professions = Profession::find($id);
        return view('register-profession.show',compact('professions'));
    }

 

    public function edit($locale,$id)
    {
        $professions = Profession::find($id);

        return view('register-profession.edit', compact('professions'));   
    }

    public function update($locale,Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'profession' => 'required',
            ]); 

        $professions = Profession::find($id);
        
        $professions->profession = $request->input('profession');

        $professions->save();

        return redirect()->route('show_profession', $professions->id);
    }

    public function destroy($locale,$id)
    {

        $professions = Profession::find($id);
        $professions->delete();

        return redirect()->route('list_all_professions');
    }

}

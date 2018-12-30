<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon;
use App\Job;
use App\Skill;
use App\Profession;
class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $candCount = DB::table('candidates')->select("id")->count();
        $jobCount = DB::table('jobs')->select("id")->count();
       
        $usersCount = DB::table('users')->select("id")->whereBetween('created_at', [
            Carbon\Carbon::now()->startOfDay(),
            Carbon\Carbon::now()->endOfDay(),
        ])->count();
        $users = DB::table('users')->select("*")->whereBetween('created_at', [
            Carbon\Carbon::now()->startOfWeek(),
            Carbon\Carbon::now()->endOfWeek(),
        ])->paginate(5);
        $candidates = DB::table('candidates')->select("*")->whereBetween('created_at', [
            Carbon\Carbon::now()->startOfWeek(),
            Carbon\Carbon::now()->endOfWeek(),
        ])->paginate(5);
        $skills = DB::table('skills')
        ->leftJoin('jobs', 'skills.id', '=', 'jobs.skill_id')
        ->select('skill')
        ->get();
        $pas = DB::table('professions')
        ->leftJoin('jobs', 'professions.id', '=', 'jobs.profession_id')
        ->select('profession')
        ->get();
        $profession = Profession::all();
        $jobs_recent = DB::table('jobs')->select("*")->whereBetween('created_at', [
            Carbon\Carbon::now()->startOfWeek(),
            Carbon\Carbon::now()->endOfWeek(),
        ])->paginate(6);

        return view('admin.admin',compact('candCount','jobCount','usersCount','users','candidates','skills','pas','jobs_recent'));
    }
}

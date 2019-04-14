<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon;
use App\Job;
use App\Skill;
use App\Profession;
use Charts;
use App\Candidate;
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
        $jobs_recent = DB::table('jobs')
                ->join('skills', 'skills.id', '=', 'jobs.skill_id')
                ->join('professions', 'professions.id', '=', 'jobs.profession_id')
                ->select("*")
                ->whereBetween('jobs.created_at', [
                    Carbon\Carbon::now()->startOfWeek(),
                    Carbon\Carbon::now()->endOfWeek(),
                ])->paginate(6);
        $jobs = Job::where(DB::raw("(DATE_FORMAT(created_at,'%Y'))"),date('Y'))->get();
        $cand = Candidate::where(DB::raw("(DATE_FORMAT(created_at,'%Y'))"),date('Y'))->get();
        $charts = Charts::database($jobs, 'bar', 'highcharts')

            ->title("Job count")

            ->elementLabel("Total jobs")

            ->dimensions(700, 350)

            ->responsive(false)

            ->groupByMonth(date('Y'), true);
        $pie = Charts::database($cand, 'pie', 'highcharts')

            ->title("Candidates count")

            ->elementLabel("Total candidates")

            ->dimensions(700, 350)

            ->responsive(false)

            ->groupByMonth(date('Y'), true);

        return view('admin.admin',compact('candCount','jobCount','usersCount','users','candidates','skills','pas','jobs_recent', 'profession','charts','pie'));
    }
}

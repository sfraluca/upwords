<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Candidate;
use Illuminate\Support\Facades\Gate;
use DB;
use Carbon;
use App\Skill;
use App\Profession;
use Mail;
use Session;
class WebController extends Controller
{
    public function web()
    {
        $freelancers = DB::table('candidates')->select("id")->count();
        $candidates = DB::table('candidates')->select("*")->whereBetween('created_at', [
            Carbon\Carbon::now()->startOfWeek(),
            Carbon\Carbon::now()->endOfWeek(),
        ])->paginate(6);
        $jobs = DB::table('jobs')
                ->join('skills', 'skills.id', '=', 'jobs.skill_id')
                ->join('professions', 'professions.id', '=', 'jobs.profession_id')
                ->select("*")
                ->whereBetween('jobs.created_at', [
                    Carbon\Carbon::now()->startOfWeek(),
                    Carbon\Carbon::now()->endOfWeek(),
                ])->paginate(6);
     
        return view('platform.webpage', compact('freelancers','candidates','jobs'));
    }
    public function about()
    {
       
        return view('platform.about');
    }
    public function contact()
    {
       
        return view('platform.contact');
    }
    public function storeContact(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required',
            'subject'=>'required',
            'message'=>'required',
        ]);

        $data = array(
            'email' => $request->email,
            'subject' => $request->subject,
            'bodyMessage' => $request->message
        );
           

        Mail::send('platform.email', $data, function($message) use ($data){
            $message->from($data['email']);
            $message->to('mailtr@mailtrap.io');
            $message->subject($data['subject']);
        });
        Session::flash('success', 'Your email was sent!');

        return redirect()->route('website',app()->getLocale());
    }
}
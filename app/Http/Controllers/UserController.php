<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use Illuminate\Support\Facades\Hash;
use App\Entities\RegisterUser;
use Validator;
use App\Http\Controllers\Controller;
class UserController extends Controller
{
    protected $users;
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
        $users = User::all();
        return view('register-user.index',compact('users'));
    }

    
    public function create()
    {

        $roles = Role::orderBy('name')->pluck('name','id');
        
        return view('register-user.create',compact('roles'));
    }
    
    public function store(Request $request)
    {
        
        $request->validate($request->all(),[
            'name' => 'required',
            'email' => 'required',
            'role' => 'required'
            ]);
            
            $user = $this->users->register($request->all());
            
        return redirect()->route('show_user', $user->id);
    }


    public function show($id)
    {
        $user = User::find($id);
        return view('register-user.show',compact('user'));
    }

 

    public function edit($id)
    {
        $this->authorize('update-admin');

        $roles = Role::orderBy('name')->pluck('name','id');
        $admins = Admin::find($id);

        return view('auth.register-admin.edit',compact('admins', 'roles'));   
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'job_title' => 'required',
            'role' => 'required'
            ]); 

        $admin = Admin::find($id);
        

        $admin->name = $request->input('name');
        $admin->email = $request->input('email');
        $admin->password = Hash::make($request->input('password'));
        $admin->job_title = $request->input('job_title');

        $admin->save();

        return redirect()->route('show_admin', $admin->id);
    }

    public function destroy($id)
    {
        $this->authorize('delete-admin');

        $admin = Admin::find($id);
        $admin->delete();

        return redirect()->route('list_all_admins');
    }

    
}

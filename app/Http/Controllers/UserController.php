<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use Illuminate\Support\Facades\Hash;
use App\Entities\RegisterUser;
use Validator;
class UserController extends Controller
{
   protected $users;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(RegisterUser $users)
    {
        $this->middleware('auth:admin');
        $this->users = $users;
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
        
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'role' => 'required'
            ]);
            $user = $this->users->register($request->all());
            
        return redirect()->route('show_user', [app()->getLocale() ,$user->id]);
    }


    public function show($locale,$id)
    {
        $user = User::find($id);
        return view('register-user.show',compact('user'));
    }

 

    public function edit($locale,$id)
    {

        $roles = Role::orderBy('name')->pluck('name','id');
        $users = User::find($id);

        return view('register-user.edit', compact('users', 'roles'));   
    }

    public function update($locale,Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'role' => 'required'
            ]); 

        $user = User::find($id);
        
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));

        $user->save();

        return redirect()->route('show_user', [app()->getLocale() ,$user->id]);
    }

    public function destroy($locale,$id)
    {

        $user = User::find($id);
        $user->delete();

        return redirect()->route('list_all_users',app()->getLocale() );
    }

}


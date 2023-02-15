<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin;
use Notification;
use App\Notifications\empnotification;
use App\Mail\welcomemail;
use Mail;
use session;
use Hash;
use Alert;

class adminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $data=new admin;
		$data->name=$request->name;
        $email=$data->email=$request->email;
		$data->password=Hash::make($request->password);

		$data->save();

        $data=['msg'=>"Registration Success", 'sub'=>"Welcome To Employee Management"];
		Mail::to($email)->send(new welcomemail($data));

		Alert::success('success', 'Register Success');
		return back();
    }

    function login(Request $request)
	{
		$email=$request->email;
		$data=admin::where('email','=',$email)->first();
		if($data)   // if(! $data || Hash::check($request->password,$data->password))
		{
			$chk=Hash::check($request->password,$data->password);
			if($chk)
			{
				
				
					session()->put('id',$data->id);
					session()->put('name',$data->name);
					session()->put('email',$data->email);
					Alert::success('Congrats', 'You\'ve Successfully Login');
					
					return redirect('/index');
				
			}
			else
			{
				Alert::error('Login Failed', 'Wrong Password');
				return redirect()->back();
			}
		}
		else
		{
			Alert::error('Login Failed', 'Wrong Email');
			return redirect()->back();
		}	
		
	}

    function logout()
	{
		session()->pull('id');
		session()->pull('email');
        session()->pull('name');
		Alert::success('Congrats', 'You\'ve Successfully Logout');
		return redirect('/index');
	}

    public function notification() {
        $adminSchema = admin::all();
  
        $ems = [ 
            'greeting' => 'Hi..!',
            'body' => 'Welcome To EMS...'
        ];
  
        Notification::send($adminSchema, new empnotification($ems));
   
       // dd('Task completed!');
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

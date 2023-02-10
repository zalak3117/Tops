<?php

namespace App\Http\Controllers;
use App\Models\admin;
use Hash;
use Alert;

use Illuminate\Http\Request;

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
    function admin_login()
	{
		return view('backend.login');
	}

    function admin_register()
	{
		return view('backend.register');
	}

    function dashboard()
	{
		return view('backend.dashboard');
	}

    public function register(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|alpha',
            'email' => 'required|email',
            'password' => 'required|min:5'
            ]);

        $data=new admin;
		$data->name=$request->name;
		$data->email=$request->email;
		$data->password=Hash::make($request->password);
    
		$data->save();
		Alert::success('success', 'Register Success');
		return back();
    }

    function adminlogin(Request $request)
	{
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:5'
            ]);
		$email=$request->email;
		$data=admin::where('email','=',$email)->first();
		if($data)   // if(! $data || Hash::check($request->password,$data->password))
		{
			$chk=Hash::check($request->password,$data->password);
			if($chk)
			{
				
				
					session()->put('admin_id',$data->id);
					session()->put('admin_name',$data->name);
					session()->put('email',$data->email);
					Alert::success('Congrats', 'You\'ve Successfully Login');
					
					return redirect('/dashboard');
				
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
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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

    function logout()
	{
		session()->pull('admin_id');
		session()->pull('admin_name');
		session()->pull('email');
		Alert::success('Congrats', 'You\'ve Successfully Logout');
		return redirect('/login');
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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\admin;
use Alert;
use Hash;

class adminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function signup(Request $request)
    {
        $data=new admin;
		$data->name=$request->name;
        $data->email=$request->email;
        $data->password=Hash::make($request->password);

        $data->save();
		Alert::success('success', 'Registration Successfully Done');
		return redirect('/signin');
    }

    function signin(Request $request)
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
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        //
    }
}

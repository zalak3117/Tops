<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\listener;
use App\Mail\welcomemail;
use Mail;
use Alert;
use Hash;

class listenerController extends Controller
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
    public function create(): Response
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function register(Request $request)
    {
        $data=new listener;
		$data->name=$request->name;
        $email= $data->email=$request->email;
        $data->password=Hash::make($request->password);

        $data->save();
        $data=['msg'=>"Registration Success", 'sub'=>"Welcome To Music"];
		
		Mail::to($email)->send(new welcomemail($data));

		Alert::success('success', 'Registration Successfully Done');
		return back();
    }

    function login(Request $request)
	{
		$email=$request->email;
		$data=listener::where('email','=',$email)->first();
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

    public function profile()
    {
        
        $data=listener::where("id",'=',session('id'))->first();
		return view('frontend.profile',['fetch'=>$data]);
    }

    public function edit_profile($id)
    {
        $data=listener::where("id",'=',$id)->first();
		return view('frontend.edit_profile',['fetch'=>$data]);
    }

    public function update_profile(Request $request, $id)
    {
        $data=listener::find($id);
		$data->name=$request->name;
        $data->email=$request->email;
        $data->mobile=$request->mobile;	

        $old_file=$data->image;
		if($request->hasFile('image'))
        {
            $image=$request->file('image');		
            $imagename=time().'_img.'.$request->file('image')->getClientOriginalExtension();
            $image->move('frontend/photo/',$imagename);  // use move for move image in public/images
            $data->image=$imagename; // name store in db
            //unlink('frontend/image/'.$old_file);
        }

        $data->update();

		Alert::success('success', 'Update Success');
		return redirect('/profile');

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

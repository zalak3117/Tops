<?php

namespace App\Http\Controllers;
use App\Models\customer;
use App\Mail\welcomemail;
use Mail;
use Hash;
use Alert;

use Illuminate\Http\Request;

class customerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
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
    function loginpage()
	{
		return view('frontend.login1');
	}

    function registrationpage()
	{
		return view('frontend.registration');
	}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $data=new customer;
		$data->name=$request->name;
        $email=$data->email=$request->email;
		$data->password=Hash::make($request->password);
        
        // $data->mobile=$request->mobile;
        // $data->address=$request->address;
		// $data->gender=$request->gender;
		// $data->lag=implode(",",$request->lag);
		// $data->birthdate =$request->birthdate ;
		
		
		// img upload
		// $img=$request->file('img');		
		// $imgname=time().'_img.'.$request->file('img')->getClientOriginalExtension();
		// $img->move('frontend/images/upload/',$imgname);  // use move for move image in public/images
		// $data->img=$imgname; // name store in db

		$data->save();

        $data=['msg'=>"Registration Success", 'sub'=>"Welcome To Cosmetic"];
		
		Mail::to($email)->send(new welcomemail($data));

		Alert::success('success', 'Register Success');
		return back();
    }

    public function profile()
    { 
        
        $data=customer::where("id",'=',session('cust_id'))->first();
		return view('frontend.profile1',['fetch'=>$data]);
    }

    public function update_profile(Request $request, $id)
    {
        $data=customer::find($id);
		$data->name=$request->name;
        $data->email=$request->email;
        $data->mobile=$request->mobile;
        $data->address=$request->address;
		$data->gender=$request->gender;
		$data->language=implode(",",$request->language);
		$data->birthdate =$request->birthdate ;
	

        $old_file=$data->image;
		if($request->hasFile('image'))
        {
            $image=$request->file('image');		
            $imagename=time().'_img.'.$request->file('image')->getClientOriginalExtension();
            $image->move('frontend/images/upload/',$imagename);  // use move for move image in public/images
            $data->image=$imagename; // name store in db
           // unlink('frontend/images/upload/'.$old_file);
        }

        $data->update();
		Alert::success('success', 'Update Success');
		return redirect('/profile1');

    }

    function login(Request $request)
	{
		$email=$request->email;
		$data=customer::where('email','=',$email)->first();
		if($data)   // if(! $data || Hash::check($request->password,$data->password))
		{
			$chk=Hash::check($request->password,$data->password);
			if($chk)
			{
				
				
					session()->put('cust_id',$data->id);
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

    public function edit_profile($id)
    {
       // $country=countrie::all();
        $data=customer::where("id",'=',$id)->first();
		return view('frontend.edit_profile',['fetch'=>$data]);
    }

    function logout()
	{
		session()->pull('cust_id');
		session()->pull('email');
		Alert::success('Congrats', 'You\'ve Successfully Logout');
		return redirect('/index');
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

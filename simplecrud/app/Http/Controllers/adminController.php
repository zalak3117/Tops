<?php

namespace App\Http\Controllers;
use App\Models\admin;
use Hash;
use session;

use Illuminate\Http\Request;

class adminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function register(Request $request)
    {
        $data=new admin;
		$data->name=$request->get('name');
        $data->email=$request->get('email');
		$data->password=Hash::make($request->get('password'));

		$data->save();

        echo "<h1> Data inserted </h1>";

		//return back();
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
					
                    echo "
							<script> alert('Login Success');
							window.location='profile';
							</script>";
                            return redirect('/show');
				
			}
			else
			{
				echo "
							<script> alert('password wrong');
							window.location='profile';
							</script>";
				return redirect()->back();
			}
		}
		else
		{
			echo "
							<script> alert('mail wrong');
							window.location='profile';
							</script>";
			return redirect()->back();
		}	
		
	}
    /**
     * Display the specified resource.
     */
    public function show()
    {
        $admin=admin :: all();
        return view ('show',['data'=>$admin]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data=admin::where("id",'=',$id)->first();
        return view('edit',['fetch'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data=admin::find($id);
        $data->name=$request->name;

        $data->update();
        echo "update success";
        return redirect ('/show');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data=admin::find($id);

        $data->delete();
        echo "delete success";
        return redirect ('/show');
    }
}

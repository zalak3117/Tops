<?php

namespace App\Http\Controllers;
use App\Models\employee;
use Alert;

use Illuminate\Http\Request;

class employeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.add_employee');
    }

    public function add_employee(Request $request)
    {
        $data=new employee;
		$data->name=$request->name;
        $data->address=$request->address;
        $data->mobile=$request->mobile;
        $data->email=$request->email;
        $data->gender=$request->gender;
        $data->language=implode(",",$request->language);
		$data->birthdate =$request->birthdate;
        
				
		// img upload
		$image=$request->file('image');		
		$imagename=time().'_img.'.$request->file('image')->getClientOriginalExtension();
		$image->move('backend/assets/upload',$imagename);  // use move for move image in public/images
		$data->image=$imagename; // name store in db

        $data->save();
		Alert::success('success', 'Register Success');
		return back();
    }

    function manage_employee()
	{
		//$employee=employee::all();
        $employee=employee::paginate(2);
        return view('backend.manage_employee',['fetch'=>$employee]);
	}

    public function edit_employee($id)
    {
        $data=employee::where("id",'=',$id)->first();
		return view('backend.edit_employee',['fetch'=>$data]);
    }

    public function update_employee(Request $request, $id)
    {
        $data=employee::find($id);
        $data->address=$request->address;
        $data->mobile=$request->mobile;
        $data->email=$request->email;
        $data->gender=$request->gender;
        $data->language=implode(",",$request->language);
		$data->birthdate =$request->birthdate;

        $old_file=$data->image;
		if($request->hasFile('image'))
        {
            $image=$request->file('image');		
            $imagename=time().'_img.'.$request->file('image')->getClientOriginalExtension();
            $image->move('backend/assets/upload/',$imagename);  // use move for move image in public/images
            $data->image=$imagename; // name store in db
            unlink('backend/assets/upload/'.$old_file);
        }

        $data->update();
		Alert::success('success', 'Update Success');
		return redirect('/manage_employee');

    }

    public function delete_employee($id)
    {
        $data=employee::find($id);
        $old_file=$data->image;
		$data->delete();
        unlink('backend/assets/upload/'.$old_file);
		Alert::success('success', 'Delete Success');
		return back();
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

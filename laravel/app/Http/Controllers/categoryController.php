<?php

namespace App\Http\Controllers;
use App\Models\category;
use Hash;
use Alert;

use Illuminate\Http\Request;

class categoryController extends Controller
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

    function add_categorypage()
	{
		return view('backend.add_category');
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
    public function add_category(Request $request)
    {
        $data=new category;
		$data->cate_name=$request->cate_name;
				
		// img upload
		$cate_image=$request->file('cate_image');		
		$cate_imagename=time().'_img.'.$request->file('cate_image')->getClientOriginalExtension();
		$cate_image->move('backend/assets/img/upload/',$cate_imagename);  // use move for move image in public/images
		$data->cate_image=$cate_imagename; // name store in db

		$data->save();
		Alert::success('success', 'Register Success');
		return back();
    }

    function manage_category()
	{
		$category=category::all();
        return view('backend.manage_category',['fetch'=>$category]);
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
    public function edit_category($id)
    {
       // $country=countrie::all();
        $data=category::where("id",'=',$id)->first();
		return view('backend.edit_category',['fetch'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update_category(Request $request, $id)
    {
        $data=category::find($id);
		$data->cate_name=$request->cate_name;
		
		// img upload
		$old_file=$data->cate_image;
		if($request->hasFile('cate_image'))// check file or not
		{
			$cate_image=$request->file('cate_image');		
			$cate_imagename=time().'_img.'.$request->file('cate_image')->getClientOriginalExtension();
			$cate_image->move('backend/assets/img/upload/',$cate_imagename);  // use move for move image in public/images
			$data->cate_image=$cate_imagename; // name store in db
			unlink('backend/assets/img/upload/'.$old_file);
		}

		$data->update();
		Alert::success('success', 'Update Success');
		return redirect('/manage_category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete_category($id)
    {
        $data=category::find($id);
        $old_file=$data->cate_image;
        $data->delete();
        unlink('backend/assets/img/upload/'.$old_file);
        Alert::success('success', 'Delete Success');
		return back();
    }
}

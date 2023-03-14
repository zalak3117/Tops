<?php

namespace App\Http\Controllers;
use App\Models\blog;
use Alert;
use Illuminate\Http\Request;

class blogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.add_blog');
    }

    public function add_blog(Request $request)
    {
        $data=new blog;
		$data->title=$request->title;
        $data->description=$request->description;
				
		// img upload
		$blog_image=$request->file('blog_image');		
		$blog_imagename=time().'_img.'.$request->file('blog_image')->getClientOriginalExtension();
		$blog_image->move('backend/assets/img/upload/blog',$blog_imagename);  // use move for move image in public/images
		$data->blog_image=$blog_imagename; // name store in db

		$data->save();
		Alert::success('success', 'Blog Inserted');
		return back();
    }

    function manage_blog()
	{
		$blog=blog::all();
        return view('backend.manage_blog',['fetch'=>$blog]);
	}

    public function edit_blog($id)
    {
       // $country=countrie::all();
        $data=blog::where("id",'=',$id)->first();
		return view('backend.edit_blog',['fetch'=>$data]);
    }

    public function update_blog(Request $request, $id)
    {
        $data=blog::find($id);
		$data->title=$request->title;
        $data->description=$request->description;
		
		// img upload
		$old_file=$data->blog_image;
		if($request->hasFile('blog_image'))// check file or not
		{
			$blog_image=$request->file('blog_image');		
			$blog_imagename=time().'_img.'.$request->file('blog_image')->getClientOriginalExtension();
			$blog_image->move('backend/assets/img/upload/blog/',$blog_imagename);  // use move for move image in public/images
			$data->blog_image=$blog_imagename; // name store in db
			unlink('backend/assets/img/upload/blog/'.$old_file);
		}

		$data->update();
		Alert::success('success', 'Update Success');
		return redirect('/manage_blog');
    }

    public function delete_blog($id)
    {
        $data=blog::find($id);
        $old_file=$data->blog_image;
        $data->delete();
        unlink('backend/assets/img/upload/blog/'.$old_file);
        Alert::success('success', 'Delete Success');
		return back();
    }

    public function viewall() 
    {        
	   $blog=blog::all();
       return view('frontend.blog',['data'=>$blog]);
    }

    public function detail_blog($id)
    {
            $data=blog::where("id",'=',$id)->first();
            $fetch=blog::inRandomOrder()->limit(3)->get();
            return view('frontend.detail_blog',['fetch'=>$data,'data'=>$fetch]);
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

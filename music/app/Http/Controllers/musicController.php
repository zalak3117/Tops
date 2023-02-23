<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\music;
use Alert;

class musicController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function add_music(Request $request)
    {
        $data=new music;
		$data->music_name=$request->music_name;
        $data->movie_album=$request->movie_album;
        $data->company_name=$request->company_name;
        $data->singer_name=$request->singer_name;        
				
		
		$music_file=$request->file('music_file');		
		$music_filename=time().'_music.'.$request->file('music_file')->getClientOriginalExtension();
		$music_file->move('backend/music',$music_filename);  
		$data->music_file=$music_filename;

        $music_img=$request->file('music_img');		
		$music_imgname=time().'_img.'.$request->file('music_img')->getClientOriginalExtension();
		$music_img->move('backend/musicimg',$music_imgname);  
		$data->music_img=$music_imgname; 

        $data->save();
		Alert::success('success', 'Music Added Successfully');
		return back();
    }

    function manage_music()
	{
		$music=music::all();
        return view('backend.manage_music',['fetch'=>$music]);
	}

    public function viewall()
    {    	 
       $music=music::all();	 
       return view('frontend.index',['data'=>$music]);
       
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

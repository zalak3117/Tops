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
				
		// img upload
		$music_file=$request->file('music_file');		
		$music_filename=time().'_music.'.$request->file('music_file')->getClientOriginalExtension();
		$music_file->move('backend/music',$music_filename);  // use move for move image in public/images
		$data->music_file=$music_filename; // name store in db

        $data->save();
		Alert::success('success', 'Music Added Successfully');
		return back();
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

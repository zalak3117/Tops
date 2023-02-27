@extends('backend.layout.main')

@section('main_section')

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                        <div class="col-lg-2">
                        </div>
                            
                            <div class="col-lg-8">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Add</strong> New Music
                                    </div>
                                    <form action="{{url('edit_music/'.$fetch->id)}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                                        @csrf
                                    <div class="card-body card-block">
                                        
                                            <div class="row form-group">
                                                <div class="col col-md-4">
                                                    <label for="text-input" class=" form-control-label">Music Name</label>
                                                </div>
                                                <div class="col-12 col-md-8">
                                                    <input type="text"  name="music_name" placeholder="Music Name" class="form-control" value="{{$fetch->music_name}}">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-4">
                                                    <label for="text-input" class=" form-control-label">Movie Name/ Album Name</label>
                                                </div>
                                                <div class="col-12 col-md-8">
                                                    <input type="text"  name="movie_album" placeholder="Movie Name/ Album Name" class="form-control"  value="{{$fetch->movie_album}}">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-4">
                                                    <label for="text-input" class=" form-control-label">Music Company Name</label>
                                                </div>
                                                <div class="col-12 col-md-8">
                                                    <input type="text" name="company_name" placeholder="Music Company Name" class="form-control" value="{{$fetch->company_name}}">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-4">
                                                    <label for="text-input" class=" form-control-label">Singer Name</label>
                                                </div>
                                                <div class="col-12 col-md-8">
                                                    <input type="text"  name="singer_name" placeholder="Singer Name" class="form-control" value="{{$fetch->singer_name}}">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-4">
                                                    <label for="file-input" class=" form-control-label">Music Image</label>
                                                </div>
                                                <div class="col-12 col-md-8">
                                                    <input type="file"  name="music_img" class="form-control">
                                                    <img class="" src="{{url('backend/musicimg/'.$fetch->music_img)}}" width="50px" alt="">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-4">
                                                    <label for="file-input" class=" form-control-label">Music File</label>
                                                </div>
                                                <div class="col-12 col-md-8">
                                                    <input type="file"  name="music_file" class="form-control">
                                                    <audio controls src="{{url('backend/music/'.$fetch->music_file)}}">
                                                </div>
                                            </div>
                                        
                                    </div>
                                    <div class="card-footer">
                                    <button class="btn btn-info" type="submit" name="submit">Update</button>                                     </button>
                                        <!-- <button type="reset" class="btn btn-danger btn-sm">
                                            <i class="fa fa-ban"></i> Reset
                                        </button> -->
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
@endsection
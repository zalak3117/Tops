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
                                    <div class="card-body card-block">
                                        <form action="{{url('/add_music')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                                        @csrf
                                            <div class="row form-group">
                                                <div class="col col-md-4">
                                                    <label for="text-input" class=" form-control-label">Music Name</label>
                                                </div>
                                                <div class="col-12 col-md-8">
                                                    <input type="text" id="text-input" name="music_name" placeholder="Music Name" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-4">
                                                    <label for="text-input" class=" form-control-label">Movie Name/ Album Name</label>
                                                </div>
                                                <div class="col-12 col-md-8">
                                                    <input type="text" id="text-input" name="movie_album" placeholder="Movie Name/ Album Name" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-4">
                                                    <label for="text-input" class=" form-control-label">Music Company Name</label>
                                                </div>
                                                <div class="col-12 col-md-8">
                                                    <input type="text" id="text-input" name="company_name" placeholder="Music Company Name" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-4">
                                                    <label for="text-input" class=" form-control-label">Singer Name</label>
                                                </div>
                                                <div class="col-12 col-md-8">
                                                    <input type="text" id="text-input" name="singer_name" placeholder="Singer Name" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-4">
                                                    <label for="file-input" class=" form-control-label">Add Music File</label>
                                                </div>
                                                <div class="col-12 col-md-8">
                                                    <input type="file" id="file-input" name="music_file" class="form-control">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary btn-sm" name="submit"> Submit
                                        </button>
                                        <!-- <button type="reset" class="btn btn-danger btn-sm">
                                            <i class="fa fa-ban"></i> Reset
                                        </button> -->
                                    </div>
                                </div>
                            </div>
                        </div>
@endsection
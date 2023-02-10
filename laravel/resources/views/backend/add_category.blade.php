@extends('backend.layout.main')

@section('main_section')
        <div class="content-wrapper">
            <!-- START PAGE CONTENT-->
            <div class="page-heading">
                <h1 class="page-title">Category</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html"><i class="la la-home font-20"></i></a>
                    </li>
                </ol>
            </div>
            <div class="page-content fade-in-up">
                <div class="row">
                    
                    <div class="col-md-12">
                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title">Add Category</div>
                                <div class="ibox-tools">
                                    <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                                    <a class="fullscreen-link"><i class="fa fa-expand"></i></a>
                                </div>
                            </div>
                            <div class="ibox-body">
                                <form class="form-horizontal" method="post" action="{{url('/add_category')}}" enctype="multipart/form-data">
                                @csrf
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Category Name</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" placeholder="Email address" name="cate_name">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Category Image</label>
                                        <div class="col-sm-10">
                                        <input type="file" class="form-control" id="cate_img" name="cate_image">
                                        <label class="form-label"  name="cate_img"></label>
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="form-group row">
                                        <div class="col-sm-10 ml-sm-auto">
                                            <button class="btn btn-info" type="submit">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                
                
            
            </div>
            <!-- END PAGE CONTENT-->
@endsection
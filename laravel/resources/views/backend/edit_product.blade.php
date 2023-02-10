@extends('backend.layout.main')

@section('main_section')
        <div class="content-wrapper">
            <!-- START PAGE CONTENT-->
            <div class="page-heading">
                <h1 class="page-title">Product</h1>
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
                                <div class="ibox-title">Edit Product</div>
                                <div class="ibox-tools">
                                    <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                                    <a class="fullscreen-link"><i class="fa fa-expand"></i></a>
                                </div>
                            </div>
                            <div class="ibox-body">
                                <form class="form-horizontal" method="post" action="{{url('edit_product/'.$fetch->id)}}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Category Name</label>
                                        <div class="col-sm-10">
                                            <select name="cate_id" class="form-control">
                                                <option>Select Category</option>                                                
										    @foreach($category as $c)
											@if($c->id==$fetch->cate_id)
											<option value="{{$c->id}}" selected>
														   {{$c->cate_name}}
											</option>
											@else
											<option value="{{$c->id}}">
														   {{$c->cate_name}}
											</option>
                                            @endif
                                            @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Product Name</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" name="prod_name" placeholder="Product Name" value="{{$fetch->prod_name}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Short Description</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" name="short_desc" placeholder="Short Description" value="{{$fetch->short_desc}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Long Description</label>
                                        <div class="col-sm-10">
                                        <textarea rows="3" class="form-control" name="long_desc">{{$fetch->long_desc}}
                                        </textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Product Image</label>
                                        <div class="col-sm-10">
                                        <input type="file" class="form-control" id="prod_image" name="prod_image">
                                        <img class="" src="{{url('backend/assets/img/upload/product/'.$fetch->prod_image)}}" width="50px" alt="">
                                        <label class="form-label"  name="prod_image"></label>
                                        </div>
                                    </div>
                                    <?php
                                    $multi_img=$fetch->multi_img;
                                    $arr_img=explode(',',$multi_img); 
                                    ?>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Product Multiple Image</label>
                                        <div class="col-sm-10">
                                        <input type="file" class="form-control" id="multi_img" name="multi_img[]" multiple/>
                                        @foreach ($arr_img as $multi_img)
                                        <img class="" src="{{url('backend/assets/img/upload/product/'.$multi_img)}}" width="50px" alt="">
                                        @endforeach
                                        <!-- <label class="form-label"  name="multi_img"></label> -->
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Main Price</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" name="main_price" placeholder="Email address" value="{{$fetch->main_price}}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Discount Price</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" name="dis_price" placeholder="Email address" value="{{$fetch->dis_price}}">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <div class="col-sm-10 ml-sm-auto">
                                            <button class="btn btn-info" type="submit">Update</button>
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
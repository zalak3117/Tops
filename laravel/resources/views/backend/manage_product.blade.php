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
            <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Manage Table</div>
                        <form action="{{url('/manage_product')}}">
                        <div class="input-group">
                          <input type="text" name="search" class="form-control" placeholder="Search" >
                          <div class="input-group-btn">
                            <button  type="submit" name="submit" class="btn btn-primary"><i class="fa fa-search" type="submit" value="submit" name="submit"></i></button>
                          </div>
                        </div>
                      </form>
                    </div>
                    
                    
                    <div class="ibox-body">
                        <div  style="overflow-x: auto;">
                            <table class="table">
                                <thead>
                                    <tr>
                                        
                                        <th>Product Id.</th>
                                        <th>Category Name</th>
                                        <th>Product Name</th>
                                        <th>Short Description</th>
                                        <th>Long Description</th>
                                        <th>Product Image</th>
                                        <th>Product Multiple Image</th>
                                        <th>Main Price</th>
                                        <th>Discounted Price</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>          
                                @foreach($fetch as $d)
                                    <tr>
                                        <td>{{$d->id}}</td>
                                        <td>{{$d->cate_name}}</td>
                                        <td>{{$d->prod_name}}</td>
                                        <td>{{$d->short_desc}}</td>
                                        <td>{{$d->long_desc}}</td>
                                        <td><img src="{{url('backend/assets/img/upload/product/'.$d->prod_image)}}" width="50px" alt=""></td>
                                        <td>
                                            <?php
                                            $multi_img=$d->multi_img;
                                            $multi_imgarr=explode(',',$multi_img);
                                            ?>
                                            @foreach($multi_imgarr as $multi_img)
                                                <img src="{{url('backend/assets/img/upload/product/'.$multi_img)}}" width="20px" alt="">  
                                            @endforeach
                                        </td>
                                        <td>{{$d->main_price}}</td>
                                        <td>{{$d->dis_price}}</td>
                                        <td>
											@if($d->status=="Stock")
											<a href="product_status/<?php echo $d->id?>" class="btn btn-success btn-xs"><i class="fa fa-check font-14"></i>{{$d->status}}</a></td> 
                                            @elseif($d->status=="Out of Stock")
											<a href="product_status/<?php echo $d->id?>" class="btn btn-danger btn-xs"><i class="fa fa-times font-14"></i>{{$d->status}}</a></td> 
                                            @endif                                
                                        </td>
                                        <td>
                                            <a href="edit_product/{{$d->id}}" class="btn btn-default btn-fix btn-xs m-r-5" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-pencil font-14"></i>
                                            Edit</a>
                                        
                                            <a href="delete_product/{{$d->id}}" class="btn btn-default btn-fix btn-xs" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash font-14"></i>
                                             Delete</a>
                                        
                                        </td>
                                        
                                    </tr>
                                    @endforeach
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                
            </div>


            <!-- END PAGE CONTENT-->
      @endsection
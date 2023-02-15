@extends('backend.layout.main')

@section('main_section')   
<div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Form Layout</h3>
                            <p class="text-subtitle text-muted">Multiple form layout you can use</p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Form Layout</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>

                <!-- Basic Horizontal form layout section start -->
                <section id="basic-horizontal-layouts">
                    <div class="row match-height">
                        <div class="col-md-12 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Horizontal Form</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form form-horizontal" method="post" action="{{url('edit_employee/'.$fetch->id)}}" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-md-1">
                                                        <label>Name</label>
                                                    </div>
                                                    <div class="col-md-11 form-group">
                                                        <input type="text" id="first-name" class="form-control"
                                                            name="name" placeholder="Name" value="{{$fetch->name}}">
                                                    </div>
                                                    <div class="col-md-1">
                                                        <label>Address</label>
                                                    </div>
                                                    <div class="col-md-11 form-group">
                                                    <textarea id="address"  class="form-control" name="address" rows="4" cols="50">{{$fetch->address}}
                                                    </textarea>
                                                    </div>
                                                    <div class="col-md-1">
                                                        <label>Email</label>
                                                    </div>
                                                    <div class="col-md-11 form-group">
                                                        <input type="email" id="email-id" class="form-control"
                                                            name="email" placeholder="Email" value="{{$fetch->email}}">
                                                    </div>
                                                    <div class="col-md-1">
                                                        <label>Mobile</label>
                                                    </div>
                                                    <div class="col-md-11 form-group">
                                                        <input type="text" id="contact-info" class="form-control"
                                                            name="mobile" placeholder="Mobile" value="{{$fetch->mobile}}">
                                                    </div>
                                                    <div class="col-md-1">
                                                        <label>Gender</label>
                                                    </div>
                                                    <div class="col-md-2 form-group">
                                                        <input class="form-check-input" type="radio" name="gender" value="Male" 
                                                            id="flexRadioDefault2" class="form-control" <?php 
                                            $gender=$fetch->gender;
                                            if($gender=="Male")
                                            {
                                                echo "checked";
                                            }
                                        ?>>Male
                                                    </div>
                                                    <div class="col-md-2 form-group">
                                                        <input class="form-check-input" type="radio" name="gender" value="Female"
                                                            id="flexRadioDefault2" class="form-control" <?php 
                                            $gender=$fetch->gender;
                                            if($gender=="Female")
                                            {
                                                echo "checked";
                                            }
                                        ?>>Female
                                                        
                                                    </div>
                                                    <div class="col-md-1">
                                                        <label>Languages: </label>
                                                    </div>
                                                    <div class="col-md-2 form-group">
                                                    <?php
                                                        $language=$fetch->language;
                                                        $lag_arr=explode(",",$language);
                                                    ?>
                                                        <div class="checkbox">
                                                            <input type="checkbox" class="form-check-input" name="language[]" value="English" <?php 
                                                
                                                if(in_array("English",$lag_arr))
                                                {
                                                    echo "checked";
                                                }
                                            ?> >
                                                            English
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 form-group">
                                                        <div class="checkbox">
                                                            <input type="checkbox" class="form-check-input" name="language[]" value="Hindi"
                                                            <?php 
                                                
                                                if(in_array("Hindi",$lag_arr))
                                                {
                                                    echo "checked";
                                                }
                                            ?> >
                                                            Hindi
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 form-group">
                                                        <div class="checkbox">
                                                            <input type="checkbox" class="form-check-input" name="language[]" value="Gujarati"
                                                            <?php 
                                                
                                                if(in_array("Gujarati",$lag_arr))
                                                {
                                                    echo "checked";
                                                }
                                            ?> >
                                                            Gujarati 
                                                        </div>
                                                    </div>

                                                    <div class="col-md-1">
                                                        <label>Birthdate</label>
                                                    </div>
                                                    <div class="col-md-11 form-group">
                                                        <input type="date" id="birthdate" class="form-control"
                                                            name="birthdate" placeholder="Birthdate" value="{{$fetch->birthdate}}">
                                                    </div>
                                                   
                                                    <div class="col-md-1">
                                                        <label>Image</label>
                                                    </div>
                                                    <div class="col-md-11 form-group">
                                                        <input class="form-control" type="file" id="formFile" name="image">
                                                        <img class="" src="{{url('backend/assets/upload/'.$fetch->image)}}" width="50px" alt="">
                                                    </div>

                                                    <div class="col-md-3 d-flex justify-content-end">
                                                        <button type="submit" name="submit"
                                                            class="btn btn-primary me-3 mb-1">Submit</button>
                                                        <button type="reset"
                                                            class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Basic Horizontal form layout section end -->
            </div>
@endsection
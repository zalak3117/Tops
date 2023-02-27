@extends('frontend.layout.main')

@section('main_section')
    <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img bg-overlay" style="background-image: url({{url('frontend/img/bg-img/breadcumb3.jpg')}});">
        <div class="bradcumbContent">
            <p>See what’s new</p>
            <h2>Register</h2>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Login Area Start ##### -->
    <section class="login-area section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <div class="login-content">
                        <h3>Welcome To One Sound</h3>
                        <!-- Login Form -->
                        <div class="login-form">
                            <form action="{{url('edit_profile/'.$fetch->id)}}" method="post" enctype="multipart/form-data">
                                @csrf
                            <div class="form-group">
                                    <label for="exampleInputEmail1">Name</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="name" aria-describedby="emailHelp" placeholder="Enter Name" value="{{$fetch->name}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter E-mail" value="{{$fetch->email}}" readonly>
                                    <small id="emailHelp" class="form-text text-muted"><i class="fa fa-lock mr-2"></i>We'll never share your email with anyone else.</small>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputMobile">Mobile</label>
                                    <input type="text" class="form-control" id="exampleInputMobile" name="mobile" placeholder="Mobile" value="{{$fetch->mobile}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPhoto">Image</label>
                                    <input type="file" class="form-control" name="image">
                                    <img class="" src="{{url('frontend/photo/'.$fetch->image)}}" width="50px" alt="">
                                </div>
                                <button type="submit" name="submit" class="btn oneMusic-btn mt-30">Update Profile</button>
                            </form>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Login Area End ##### -->
@endsection
@extends('frontend.layout.main')

@section('main_section')

    <div class="hero-wrap hero-bread" style="background-image: url({{url('frontend/images/back5.jpg')}});">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index">Home</a></span> <span>Contact us</span></p>
            <h1 class="mb-0 bread">Register</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section contact-section bg-light">
      <div class="container">
      	<!-- <div class="row d-flex mb-5 contact-info"> -->          
          
        <div class="row block-9">
          <div class="col-md-2">
</div>
          <div class="col-md-8 order-md-last d-flex">
            <form action="{{url('edit_profile/'.$fetch->id)}}" class="bg-white p-5 contact-form" method="post" enctype="multipart/form-data" style="background-image: url({{url('frontend/images/bgform1.jpg')}});">
            @csrf
              <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="Your Name" value="{{$fetch->name}}">
              </div>
              <div class="form-group">
                <input type="text" name="email" class="form-control" placeholder="Your Email" value="{{$fetch->email}}" readonly>
              </div>
              
              <!-- <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Your Password">
              </div> -->
              
              <div class="form-group">
                <input type="number" name="mobile" class="form-control" placeholder="Mobile" value="{{$fetch->mobile}}">
              </div>
              <div class="form-group">
              <input type="file" name="image" class="form-control" >
              <img class="" src="{{url('frontend/images/upload/'.$fetch->image)}}" width="50px" alt="">
                 </div>
                 <div class="form-group">
                        <label>Gender:</label><br>
                        <div class="form-check-inline">
                        <label class="form-check-label" for="radio1">
                        <input type="radio" class="form-check-input" id="radio1" name="gender" value="male" <?php 
                                            $gender=$fetch->gender;
                                            if($gender=="male")
                                            {
                                                echo "checked";
                                            }
                                        ?>>Male
                        </label>
                        </div>
                        <div class="form-check-inline">
                        <label class="form-check-label" for="radio2">
                        <input type="radio" class="form-check-input" id="radio2" name="gender" value="female" <?php 
                                            $gender=$fetch->gender;
                                            if($gender=="female")
                                            {
                                                echo "checked";
                                            }
                                        ?>>Female
                        </label>
                     </div>
                 </div>
                 <div class="form-group">
                 <label>Language:</label><br>
                 <?php
                 $language=$fetch->language;
                 $lag_arr=explode(",",$language);
                 ?>
                    Hindi: <input type="checkbox" name="language[]" value="Hindi" <?php 
                                                
                                                if(in_array("Hindi",$lag_arr))
                                                {
                                                    echo "checked";
                                                }
                                            ?> >&nbsp &nbsp
                    English: <input type="checkbox" name="language[]" value="English" <?php 
                                                
                                                if(in_array("English",$lag_arr))
                                                {
                                                    echo "checked";
                                                }
                                            ?>>&nbsp &nbsp
                    Gujarati: <input type="checkbox" name="language[]" value="Gujarati" <?php 
                                                
                                                if(in_array("Gujarati",$lag_arr))
                                                {
                                                    echo "checked";
                                                }
                                            ?>>
                    </div> 
                    <div class="form-group">
                <input type="date" name="birthdate" class="form-control" placeholder="BirthDate" value="{{$fetch->birthdate}}">
              </div>
              <div class="form-group">
                <textarea name="address"  cols="30" rows="4" class="form-control" placeholder="Address">{{$fetch->address}}</textarea>
              </div>
              <div class="form-group">
                <button type="submit" value="submit" name="submit" class="btn btn-primary py-2 px-4">Update</button>
              </div>
              
            </form>
          
          </div>

        </div>
      </div>
    </section>

    @endsection
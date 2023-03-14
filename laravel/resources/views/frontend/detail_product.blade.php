@extends('frontend.layout.main')

@section('main_section')

    <div class="hero-wrap hero-bread" style="background-image: url({{url('frontend/images/cover2.jpg')}});">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index">Home</a></span> <span class="mr-2"><a href="index">Product</a></span> <span>Product Single</span></p>
            <h1 class="mb-0 bread">Product Single</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-6 mb-5 ftco-animate">
				<form action="{{url('detail_product/'.$fetch->id)}}" class="bg-white p-5 contact-form" method="post" enctype="multipart/form-data">
            @csrf
			
    				<a href="{{url('backend/assets/img/upload/product/'.$fetch->prod_image)}}" class="image-popup"><img src="{{url('backend/assets/img/upload/product/'.$fetch->prod_image)}}" class="img-fluid" alt="Colorlib Template" width="400px"></a>
    			</div>
    			<div class="col-lg-6 product-details pl-md-5 ftco-animate">
    				<h3>{{$fetch->prod_name}}</h3>
					<h6>{{$fetch->short_desc}}</h6>
    				<div class="rating d-flex">
							<p class="text-left mr-4">
								<a href="#" class="mr-2">5.0</a>
								<a href="#"><span class="ion-ios-star-outline"></span></a>
								<a href="#"><span class="ion-ios-star-outline"></span></a>
								<a href="#"><span class="ion-ios-star-outline"></span></a>
								<a href="#"><span class="ion-ios-star-outline"></span></a>
								<a href="#"><span class="ion-ios-star-outline"></span></a>
							</p>
							<p class="text-left mr-4">
								<a href="#" class="mr-2" style="color: #000;">100 <span style="color: #bbb;">Rating</span></a>
							</p>
							<p class="text-left">
								<a href="#" class="mr-2" style="color: #000;">500 <span style="color: #bbb;">Sold</span></a>
							</p>
						</div>
						<div class="pricing">
		    						<p class="price">
										<span class="mr-2 price-dc" style="color: #bbb;"><s>₹{{$fetch->main_price}}</s></span>
										<span class="price-sale">₹{{$fetch->dis_price}}</span>
									</p>
		    					</div>
    				<!-- <p class="price"><span class="mr-2 price-dc">₹{{$fetch->main_price}}</span><span>₹{{$fetch->dis_price}}</span></p> -->
    				<p>{{$fetch->long_desc}}
						</p>
						<div class="row mt-4">
							<div class="col-md-6">
								<div class="form-group d-flex">
		              
		            </div>
							</div>
							<input type="hidden" id="cust_id" name="cust_id" value="{{session('cust_id')}}">
							<input type="hidden" id="prod_id" name="prod_id" value="{{$fetch->id}}">
							<div class="w-100"></div>
							<div class="input-group col-md-6 d-flex mb-3">
	             	<span class="input-group-btn mr-2">
	                	<button type="button" class="quantity-left-minus btn"  data-type="minus" data-field="">
	                   <i class="ion-ios-remove"></i>
	                	</button>
	            		</span>
	             	<input type="text" id="quantity" name="qty" class="form-control input-number" value="1" min="1" max="100">
	             	<span class="input-group-btn ml-2">
	                	<button type="button" class="quantity-right-plus btn" data-type="plus" data-field="">
	                     <i class="ion-ios-add"></i>
	                 </button>
	             	</span>
	          	</div>
	          	<div class="w-100"></div>
          	</div>
          	<div class="form-group">
                <input type="submit" value="Add To Cart" name="submit" class="btn btn-primary py-2 px-4">
              </div>
</form>
    			</div>
				
    		</div>
    	</div>
		<?php
							$multi_img=$fetch->multi_img;
							$multi_imgarr=explode(',',$multi_img);
							?>
							
							<div class="Product__Gallery">
							@foreach($multi_imgarr as $multi_img)
								<img src="{{url('backend/assets/img/upload/product/'.$multi_img)}}" width="50px" alt="">  
							@endforeach
							</div>
    </section>

    <section class="ftco-section">
    	<div class="container">
				<div class="row justify-content-center mb-3 pb-3">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<span class="subheading">Products</span>
            <h2 class="mb-4">Related Products</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
          </div>
        </div>   		
    	</div>
    	<div class="container">
    		<div class="row">
				@foreach($data as $d)
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
    					<a href="{{url('detail_product/'.$d->id)}}" class="img-prod"><img class="img-fluid" src="{{url('backend/assets/img/upload/product/'.$d->prod_image)}}" alt="Colorlib Template">
						
						
							@if($d->status=="Out of Stock")	
							<span class="status">{{$d->status}}</span>
							@endif
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="#">{{$d->prod_name}}</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span class="mr-2 price-dc">₹{{$d->main_price}}</span><span class="price-sale">₹{{$d->dis_price}}</span></p>
		    					</div>
	    					</div>
	    					<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
	    								<span><i class="ion-ios-menu"></i></span>
	    							</a>
	    							<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
	    								<span><i class="ion-ios-cart"></i></span>
	    							</a>
	    							<a href="#" class="heart d-flex justify-content-center align-items-center ">
	    								<span><i class="ion-ios-heart"></i></span>
	    							</a>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
				@endforeach
    		</div>
    	</div>
    </section>

		<section class="ftco-section ftco-no-pt ftco-no-pb py-5 bg-light">
      <div class="container py-4">
        <div class="row d-flex justify-content-center py-5">
          <div class="col-md-6">
          	<h2 style="font-size: 22px;" class="mb-0">Subcribe to our Newsletter</h2>
          	<span>Get e-mail updates about our latest shops and special offers</span>
          </div>
          <div class="col-md-6 d-flex align-items-center">
            <form action="#" class="subscribe-form">
              <div class="form-group d-flex">
                <input type="text" class="form-control" placeholder="Enter email address">
                <input type="submit" value="Subscribe" class="submit px-3">
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    @endsection
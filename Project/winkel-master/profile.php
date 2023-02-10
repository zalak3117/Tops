<?php
include_once('header.php');
?>
    <div class="hero-wrap hero-bread" style="background-image: url('images/bg3.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index">Home</a></span> 
          	 <span>Profile</span></p>
            <h1 class="mb-0 bread">Profile</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-6 mb-5 ftco-animate">
    				<a href="images/upload/<?php echo $fetch->image?>" class="image-popup"><img src="images/upload/<?php echo $fetch->image?> " class="img-fluid" alt="Colorlib Template"></a>
    			</div>
    			<div class="col-lg-6 product-details pl-md-5 ftco-animate">
    				<h3>Meet Your Self</h3>
    				
    				
    				<h3 class="title"> <?php echo $fetch->name ?></h3>
    				    				<div class="team-description">
                            <p class="pt-2">Name: <?php echo $fetch->name ?></p>
                            <p class="pt-2">Address: <?php echo $fetch->address ?></p>
                            <p class="pt-2">Mobile: <?php echo $fetch->mobile ?></p>
                            <p class="pt-2">Gender: <?php echo $fetch->gender ?></p>
                            <p class="pt-2">Language: <?php echo $fetch->language ?></p>
                            <p class="pt-2">Birthdate: <?php echo $fetch->birthdate ?></p>
                        </div>
                        <p><a href="edit-profile?btncust_id=<?php echo $fetch->cust_id?>" class="btn btn-black py-3 px-5">Edit Profile</a></p>
    			</div>

                         
                        </div>
                        
						
          	
    			</div>
    		</div>
    	</div>
    </section>

    

<?php
include_once('footer.php');
?>
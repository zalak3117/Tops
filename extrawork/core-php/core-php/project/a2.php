<!DOCTYPE html> 
<html>
<head>
  <style>
.error {color: #FF0000;}
</style>

  
	<title>bootstrap form</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>   
 <div class="container">
   <h2> horizontal form</h2>
       <?php 
       
        $productErr = "";
     $product = $product = "";
       
                 if (isset($_POST['submit'])) {
              if (empty($_POST["product"])) {
                 echo $productErr = "product is a required";
              }
             
            
            else{

             
           }


           

   }        

           //  function input_data($data){
           //     $data = stripcslashes($data);
           //     $data = htmlspecialchars($data);
           //     return $data;

           // }

    ?> 
    <!-- <a type="button" href="logout.php">Logout</a> -->
   <form class="form-horizontal" method="post" action="#">
   <div class=" form-group">
  <label class="control-label col-sm-2">Select</label>
    <div class="col-sm-10">
            <br>
            <input type="checkbox" name="product[]" value="laptop"> laptop <br>
            <input type="checkbox" name="product[]" value="computer"> compouter <br>
            <input type="checkbox" name="product[]" value="mobile"> mobile <br>
            <input type="checkbox" name="product[]" value="iphone"> iphone <br>
            <input type="checkbox" name="product[]" value="headspri"> headspri <br>
            <input type="checkbox" name="product[]" value="watch"> watch <br>
             <input type="checkbox" name="product[]" value="purse"> purse <br> 
             <span class="error">*<?php  echo $productErr;  ?></span>
            
   
    
       </div>
  </div>
      
   	 	
      

   	 <div class="form-group">
      	<div class=" col-sm-offset-2  col-sm-10">
   	<button type="submit" name="submit" class="btn btn-default"> submit </button>
   	</div>
   	</div> 
   	</div>  

   </form>
   
</body>
</html>

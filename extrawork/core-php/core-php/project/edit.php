<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
           <?php  

             include 'conn.php';
              $id = $_GET['id'];
             $sql = "SELECT * FROM student WHERE id = '$id'";
             //print_r($sql);
             $rs = $conn->query($sql);
             $rd =$rs->fetch_assoc();

                             // print_r($rd);

                 
             
           ?>

		<h2>edit form</h2>

    <form class="form-horizontal"  action="update.php"  method="post">
    	<div class=" form-group">
         	<label class="control-label col-sm-2" for="id">id</label>
         	<div class="col-sm-10">
         	<input type="text" name="id" value="<?php  echo $id;?>" readonly><br>
      		</div>
		   	</div>
		   	<div class=" form-group">
		         	<label class="control-label col-sm-2" for="name">name</label>
		         	<div class="col-sm-10">
		           <input type="text" name="name" value="<?php  echo $rd['name'] ;?>"><br>
		       </div>
		   </div>
		   	<div class=" form-group">
		      <label class="control-label col-sm-2" for="email">email</label>
			  <div class="col-sm-10">
			  	<input type="text" name="email" value="<?php  echo $rd['email'] ;?>"><br>
			  </div>
			</div>
				<div class=" form-group">
		      <label class="control-label col-sm-2" for="password">password</label>
		      <div class="col-sm-10">
			<input type="password" name="password" value="<?php echo $rd['password']; ?>"><br>
		</div>
		  </div>
		  <div class=" form-group">
		      <label class="control-label col-sm-2" for="mobile no">mobile no</label>
		       <div class="col-sm-10">
			<input type="mobile no" name="mobile_no" value="<?php  echo $rd['mobile_no'] ;?>"><br>
		</div>
		</div>
		<?php  $gen=$rd['gender'] ;?>
		<div class=" form-group">
		     <label class="control-label col-sm-2" for="gender">gender</label>
		       <div class="col-sm-10">
			<input type="radio" name="gender" id="gender" value="male" <?php echo ($gen=='male')?'checked':'' ?>> male
			<input type="radio" name="gender" id="gender" value="female" <?php echo ($gen=='female')?'checked':'' ?>> female <br>
		     </div>
		 </div>
		 </div>
		 <?php  $city=$rd['city'] ; ?>
		 <div class=" form-group">
		     <label class="control-label col-sm-2" for="city">city</label>
		           <div class="col-sm-10">
		          <select name="city"  id="city">
					    <option value="surat" <?php  if($city == "surat"){echo "selected";
					    
					    } ?>>surat</option>
					    <option value="ahmedabad" <?php  if($city == "ahmedabad"){echo "selected";
					    }?>>ahmedabad</option>
					    <option value="mumbai" <?php  if($city =="mumbai"){echo "selected";
					    }  ?>>mumbai</option>
					  </select> 
			</div>
		</div>
   	 <div class="form-group">
   	 	<?php

         print_r($rd['product']);
          $checkbox_array =	explode("," ,$rd['product']);



   	 	?>
          <label class="control-label col-sm-2">Select</label>
		       <div class="col-sm-10">

            <input type="checkbox" name="product[]" value="laptop" <?php  if (in_array("laptop", $checkbox_array)) {echo "checked";} ?>> laptop <br>
            <input type="checkbox" name="product[]" value="computer" <?php  if (in_array("computer", $checkbox_array)) {echo "checked";} ?>> compouter <br>
            <input type="checkbox" name="product[]" value="mobile" <?php  if (in_array("mobile", $checkbox_array)) {echo "checked";} ?>> mobile <br>
            <input type="checkbox" name="product[]" value="iphone" <?php  if (in_array("iphone", $checkbox_array)) {echo "checked";} ?>> iphone <br>
            <input type="checkbox" name="product[]" value="headspri" <?php  if (in_array("headspri", $checkbox_array)) {echo "checked";} ?>> headspri <br>
            <input type="checkbox" name="product[]" value="watch" <?php  if (in_array("watch", $checkbox_array)) {echo "checked";} ?>> watch <br>
            <input type="checkbox" name="product[]" value="purse" <?php  if (in_array("purse", $checkbox_array)) {echo "checked";} ?>> purse <br> 
       </div>
       <div class="form-group">
       	<div class=" col-sm-offset-2  col-sm-10">
       <input type="submit" name="submit" class ="btn btn-default" value="update">
       </div>
         </div>
        </div>
   </div>


     <br>
     
</form>
</body>
</html>
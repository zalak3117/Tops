<!-- inser form search -->
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="insert.php" method="post">

<label>name</label>
<input type="text" name="name"><br>
<label>email</label>
<input type="text" name="email"><br>
<label>address</label>
<textarea name="address" rols="12" cols="12"></textarea><br>
<label>gender</label><br>
<input type="radio" name="gender" value="male">male
<input type="radio" name="gender" value="female">female<br>
<label>mobile</label>
<input type="number" name="mobile"><br>
<button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html> 

<!-- 
 //search data record show  -->
 <!--
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="#" method="GET">
 <input type="text" name="reg_id" value="<?php if(isset($_GET['reg_id'])){echo $_GET['reg_id'];} ?>">
 <button type="submit" name="submit" class="btn btn-primary">Search</button>
 <?php 
                                    include 'conn.php';

                                    if(isset($_GET['reg_id']))
                                    {
                                        $reg_id = $_GET['reg_id'];

                                        $query = "SELECT * FROM register WHERE reg_id='$reg_id' ";
                                        $rs = $conn->query($query);
                                        if(mysqli_num_rows($rs) > 0)
                                        {
                                            foreach($rs as $row)
                                            {
                                        ?>
                                          <br>
                                          <label for="">Name</label><br>
                                          <input type="text"  name="name"value="<?= $row['name']; ?>" ><br>
                                         <label>address</label>
                                        <textarea name="address" rols="12" cols="12"><?= $row['address']; ?></textarea><br>
                                         <label>mobile</label>
                                         <input type="number" name="number" value="<?= $row['mobile']; ?>"> <br>
                                         <label>email</label>
                                         <input type="text" name="email" value="<?= $row['email']; ?>"><br>
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            echo "No Record Found";
                                        }
                                    }  
                                   
                                ?>

</form>
</body>
</html> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
    Name:
    <input type="text" name="name"><br>
    Address:
    <textarea name="address"></textarea><br>
    Email:
    <input type="email" name="email"><br>
    Password:
    <input type="text" name="password"><br>
    Mobile:
    <input type="text" name="mobile"><br>
    Gender:
    <input type="radio" name="gender" value="male">Male
    <input type="radio" name="gender" value="female">Female<br>
    Language:
    <input type="checkbox" name="language[]" value="english"> English
    <input type="checkbox" name="language[]" value="hindi"> Hindi
    <input type="checkbox" name="language[]" value="gujarati"> Gujarati<br>
    Birthdate:
    <input type="date" name="birthdate"><br>
    City:
    <select name="city">
        <option>Select City</option>
        <option value="ahmedabad">Ahmedabad</option>
        <option value="vadodara">vadodara</option>
        <option value="surat">surat</option>
        <option value="rajkot">rajkot</option>
        <option value="jamnagar">jamnagar</option>
    </select><br>
    Image:
    <input type="file" name="image"><br><br>
    <input type="submit" name="insert" value="Insert">&nbsp
    <input type="submit" name="display" value="Display">&nbsp
    </form>
</body>
</html>

<?php
    $conn=new mysqli("localhost","root","","php_crud");
    if (!$conn) 
    {
        echo "Connection failed...";
    }


    if(isset($_POST['insert']))
    {
        $name=$_POST['name'];
        $address=$_POST['address'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $mobile=$_POST['mobile'];
        $gender=$_POST['gender'];
        $language=implode(',',$_POST['language']);
        $birthdate=$_POST['birthdate'];
        $city=$_POST['city'];

        $image=$_FILES['image']['name'];  // get only input type="file"
        $path='php_crud/image/'.$image;   // PATH
        $tmp_image=$_FILES['image']['tmp_name']; // GET DUPLICATE IMG
        move_uploaded_file($tmp_image,$path); // MOVE DUP IMG IN PATH

        $sql="insert into customer(name, address, email, password, mobile, gender, language, birthdate, city, image) values 
        ('$name','$address','$email', '$password','$mobile','$gender','$language','$birthdate','$city','$image')";

        $result=mysqli_query($conn,$sql);
        
        if($result)
        {
            echo "Data inserted successfully";
        }
        else
        {
            echo "Data inserted Failed";
        }
    }
?>


<?php
    $conn=new mysqli("localhost","root","","php_crud");
    if (!$conn) 
    {
        echo "Connection failed...";
    }

    if(isset($_POST['display']))
    {
        $sql="select * from customer";
        $result=mysqli_query($conn,$sql); 
        
      
?>
<table border="1">
    <tr>
        <th> ID</th>
        <th> Name</th>
        <th> ADDRESS</th>
        <th> EMAIL</th>
        <th> MOBILE</th>
        <th> GENDER</th>
        <th> LANGUAGE</th>
        <th> BIRTHDATE</th>
        <th> IMAGE</th>
        <th> ACTION</th>
    </tr>
    <?php
    while($display=mysqli_fetch_array($result))
        {
            ?>
    <tr>
        <td><?php echo $display['id']; ?></td>
        <td><?php echo $display['name']; ?></td>
		<td><?php echo $display['address']; ?></td>
		<td><?php echo $display['email']; ?></td>
        <td><?php echo $display['mobile']; ?></td>
        <td><?php echo $display['gender']; ?></td>
        <td><?php echo $display['language'];?></td>
        <td><?php echo $display['birthdate'];?></td>
        <td><img src="php_crud/image/<?php echo $display['image'];?>" width="50px"></td>

        <td> 
            <button><a href="edit.php?id=<?php echo $display['id'] ?>"> Edit</a></button>&nbsp
            <button><a href="delete.php?id=<?php echo $display['id'] ?>"> Delete</a></button>&nbsp
        </td>
	</tr>
    <?php
        }
        ?>
</table>
        <?php
        
    }


?>

<?php
$conn=new mysqli("localhost","root","","php_crud");
if (!$conn) 
{
    echo "Connection failed...";
}


    if(isset($_POST['edit']))
    {
        $id = $_GET['id'];
        $sql="SELECT * FROM customer WHERE id = '$id'";
        $result=mysqli_query($conn,$sql); 

        $data=mysqli_fetch_assoc($result);
        
}


if(isset($_POST['update']))
    {
        $name=$_POST['name'];
        $address=$_POST['address'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $mobile=$_POST['mobile'];
     
        $sql="UPDATE customer set name='$name', mobile='$mobile', address='$address'" ;
        $result=mysqli_query($conn,$sql); 

       if($result)
       {
        echo "Update Success";
       }
       else
       {
        echo "update fail";
       }
}

if(isset($_POST['delete']))
{
    $id = $_GET['id'];
    $sql="DELETE from customer where id='$id'";
    $result=mysqli_query($conn,$sql); 

    if($result)
    {
     echo "delete Success";
    }
    else
    {
     echo "delete fail";
    }
    
}
?>
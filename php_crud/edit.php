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
    <select>
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
    <input type="submit" name="update" value="Update">&nbsp
    <input type="submit" name="delete" value="Delete">&nbsp
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
        $language=implod(',',$_POST['language']);
        $birthdate=$_POST['birthdate'];
        $city=$_POST['city'];
        
        $image=$_FILES['image']['name'];  // get only input type="file"
        $path='php/image/'.$image;   // PATH
        $tmp_image=$_FILES['image']['tmp_name']; // GET DUPLICATE IMG
        move_uploaded_file($tmp_image,$path); // MOVE DUP IMG IN PATH
    }


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>form page</h1>
	<form action="insert.php" method="post">
 <label> Name </label>
 <input type="text" name="name" id="name"><br>
 <label> email </label>
 <input type="text" name="email" id="email"><br>
 <label> password </label>
 <input type="password" name="password" id="password"><br>
 <label> Phone No </label>
 <input type="number" name="mobile_no" id="mobile_no"><br>
 <label> gender </label>
 <input type="radio" name="gender" id="gender" value="male">male
 <input type="radio" name="gender" id="gender" value="female">female<br>
 <label> city </label>
 <select name="city">
 	<option value="surat">surat</option>
 	<option value="ahmedabad">ahmedabad</option>
 	<option value="mumbai">mumbai</option>
 </select><br>
 <label> checkbox </label><br>
 <input type="checkbox" name="product[]"  value="laptop">laptop<br>
 <input type="checkbox" name="product[]"  value="computer">computer<br>
 <input type="checkbox" name="product[]"  value="mobile">mobile<br>
 <input type="checkbox" name="product[]"  value="iphone">iphone<br>
 <input type="checkbox" name="product[]"  value="headspri">headspri<br>
 <input type="checkbox" name="product[]"  value="watch">watch<br>
 <input type="checkbox" name="product[]"  value="purse">purse<br>
 
 <button type="submit" name="submit">Submit</button>
</form>
 </body>
</html>
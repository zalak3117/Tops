
<?php
  include 'conn.php';
if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `register` WHERE CONCAT(`reg_id`, `name`, `email`, `address`,`gender`,`mobile`) LIKE '%".$valueToSearch."%'";
    $rs = $conn->query($query);
   // $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `register`";
    $rs = $conn->query($query);
    //$search_result = filterTable($query);
}

// function to connect and execute the query
// function filterTable($query)
// {
//     $connect = mysqli_connect("localhost", "root", "", "test");
//     $filter_Result = mysqli_query($connect, $query);
//     return $filter_Result;
// }

?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP HTML TABLE DATA SEARCH</title>
        <style>
            table,tr,th,td
            {
                border: 1px solid black;
            }
        </style>
    </head>
    <body>
        
        <form action="#" method="post">
            <input type="text" name="valueToSearch" placeholder="Value To Search"><br><br>
            <input type="submit" name="search" value="Filter"><br><br>
            
            <table>
                <tr>
                    <th>Id</th>
                    <th> Name</th>
                    <th>email</th>
                    <th>Address</th>
                    <th>gender</th>
                    <th>mobile</th>
                </tr>

      <!-- populate table from mysql database -->
                <?php while($row = $rs->fetch_assoc()){
                	?>
                
                <tr>
                    <td><?php echo $row['reg_id'];?></td>
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo $row['email'];?></td>
                    <td><?php echo $row['address'];?></td>
                    <td><?php echo $row['gender'];?></td>
                    <td><?php echo $row['mobile'];?></td>
                </tr>
                <?php 
            };?>
            </table>
        </form>
        
    </body>
</html>

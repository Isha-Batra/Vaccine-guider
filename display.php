<?php 
 include 'conn.php';
 if(isset($_POST['done'])) {
     $name = $_POST['name'];
     $age = $_POST['age'];
     $gender = $_POST['gender'];
     $adhno = $_POST['adhno'];
     $locality = $_POST['locality'];
     $email = $_POST['email'];
     $phone = $_POST['phone'];

     $q = "select * from newdb";

     $query = mysqli_query($con,$q);
 }



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="display.css" class="css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <button> <a href="index.php"> Home Page</a>  </button>
<h1 class="top"> Registration details </h1>
     <div class="container">
    <div class="table">
    
      <table>
      <tr>
      <th> id </th>
      <th> Name </th>
      <th> Age </th> 
      <th> Gender </th>
      <th> Aadhar no </th>
      <th> Locality</th>
      <th> Email </th>
      <th> Phone </th>
      <th> Delete </th>
      </tr>
      <?php 
 include 'conn.php';
 
     $q = "select * from person_details";

     $query = mysqli_query($con,$q);
     
     while($res= mysqli_fetch_array($query)) {
  


?>
   <tr>
   <td> <?php echo $res['id']; ?> </td>
      <td> <?php echo $res['name']; ?> </td>
      <td> <?php echo $res['age']; ?> </td> 
      <td> <?php echo $res['gender']; ?> </td>
      <td> <?php echo $res['adhno']; ?> </td>
      <td> <?php echo $res['locality']; ?></td>
      <td> <?php echo $res['email']; ?> </td>
      <td> <?php echo $res['phone']; ?> </td>
      <td> <button class="btn"> <a href="delete.php?id=<?php echo $res['id']; ?>"> Delete: </a> </button> </td>
      
   
   </tr> 
   <?php
    }   
   ?>
      </table>



    </div>
    </div>
</body>
</html>
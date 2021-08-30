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

     $q = "INSERT INTO `person_details`( `name`, `age`, `gender`, `adhno`, `locality`, `email`, `phone`) VALUES ('$name','$age','$gender','$adhno','$locality','$email','$phone' )";

     $query = mysqli_query($con,$q);
 }

header("location:login.html");
?>
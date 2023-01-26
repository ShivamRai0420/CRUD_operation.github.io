<?php
include 'connected.php'; 
if(isset($_POST ['submit'])){
    $name=$_POST['name'];
    $gender=$_POST['gender'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    $sql = "INSERT INTO crud(name, gender,email,password)
    VALUES ('$name', '$gender','$email','$password')";
$result=mysqli_query($conn,$sql);

if($result){
    header('location:display.php');
}
else{
    die(mysqli_error($conn));
}
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>CRUD OPERATION</title>
  </head>
  <body>
  <div class="container my-5">
  <form method="post">
  <div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control"  
     placeholder="Enter your name" name="name" autocomplete="off">
    </div>
  <div class="form-group">
    <label>Gender</label>
    <input type="text" class="form-control"  
     placeholder="Enter your Gender" name="gender"autocomplete="off">
    </div>
  <div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control"  
     placeholder="Enter your email" name="email"autocomplete="off">
    </div>
  <div class="form-group">
    <label>Password</label>
    <input type="text" class="form-control"  
     placeholder="Enter your password" name="password"autocomplete="off">
    </div>
  
  <button type="submit" class="btn btn-primary"name="submit">Submit</button>
</form>
  </div>
  </body>
</html>
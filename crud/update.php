<?php
include 'connected.php'; 
$id=$_GET['updatedid'];

//auto save upon update
$sql="Select *from `crud` where id =$id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$gender=$row['gender'];
$email=$row['email'];
$password=$row['password'];

if(isset($_POST ['submit'])){
    $name=$_POST['name'];
    $gender=$_POST['gender'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    $sql = "UPDATE `crud` 
    set id=$id,name='$name',gender='$gender',email='$email',password='$password'
    WHERE id=$id";
$result=mysqli_query($conn,$sql);

if($result){
   // echo "updated";
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
     placeholder="Enter your name" name="name" autocomplete="off" value=<?php
     echo $name;?>>
    </div>
  <div class="form-group">
    <label>Gender</label>
    <input type="text" class="form-control"  
     placeholder="Enter your Gender" name="gender"autocomplete="off"value=<?php
     echo $gender;?>>
    </div>
  <div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control"  
     placeholder="Enter your email" name="email"autocomplete="off"value=<?php
     echo $email;?>>
    </div>
  <div class="form-group">
    <label>Password</label>
    <input type="text" class="form-control"  
     placeholder="Enter your password" name="password"autocomplete="off"value=<?php
     echo $password;?>>
    </div>
  
  <button type="submit" class="btn btn-primary"name="submit">update</button>
</form>
  </div>
  </body>
</html>
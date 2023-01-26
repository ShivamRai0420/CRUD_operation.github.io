<?php
include 'connected.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="DELETE from crud where id=$id";
    $result=mysqli_query($conn,$sql);

    if($result){
        // echo "deleted succefully";
        header('location:display.php');
    }
    else{
        die(mysqli_error($conn));
    }
}
?>
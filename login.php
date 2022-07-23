<?php

$con=new mysqli("localhost","root","","demoadmin") or die("Connection Failed!");

if(isset($_POST['submit'])){

    $uname=$_POST['username'];
    $password=$_POST['password'];

    $sql="select * from loginform where User='".$uname."'AND Pass='".$password."'";

    $result=mysqli_query($con,$sql);

    if(mysqli_num_rows($result)==1){
        header("Location:dashboard.html");
        exit();
    }
    else{
        echo "You Have Entered An Incorrect Password";
    }
}
?>
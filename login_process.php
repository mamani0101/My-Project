<?php
include "config.php";

if(isset($_POST['submit'])){

    $uname = mysqli_real_escape_string($con,$_POST['username']);
    $pass = mysqli_real_escape_string($con,$_POST['password']);

    if ($uname != "" && $pass != ""){

        $sql_query = "select count(*) as cntUser from users where username='".$uname."' and password='".$pass."'";
        $result = mysqli_query($con,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if($count > 0){
            $_SESSION['uname'] = $uname;
            header('Location:welcome.php');
        }else{
            echo "Invalid username and password";
        }

    }

}
<?php
/**
 * Created by PhpStorm.
 * User: MASWI MR
 * Date: 22-May-19
 * Time: 22:59
 */
session_start();

include 'config.php';

if ($_SERVER["REQUEST_METHOD"]=="POST"){

    $myusername=mysqli_real_escape_string($db, $_POST['jina']);
    $mypassword=mysqli_real_escape_string($db, $_POST['password']);

    $sql="SELECT sno FROM admins WHERE username='$myusername' and password='$mypassword'";
    $result=mysqli_query($db,$sql);
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    $active=$row['active'];

    $count=mysqli_num_rows($result);

    if ($count==1){
        
        $_SESSION['login_user']=$myusername;

        header("location:Home2.php");

    }
    else{
        header("location:Login.html");
        $error="Jina lako au neno la siri sio halipo kwenye taarifa zetu!";
        echo $error;
    }
}
if ($_SERVER["REQUEST_METHOD"]=="POST") {

    $myusername = mysqli_real_escape_string($db, $_POST['jina']);
    $mypassword = mysqli_real_escape_string($db, $_POST['password']);

    $sql = "SELECT sno FROM clients WHERE username='$myusername' and password='$mypassword'";
    $result = mysqli_query($db, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $active=$row['active'];

    $count = mysqli_num_rows($result);

    if ($count == 1) {
        //session_register("myusername");
        $_SESSION['login_user'] = $myusername;

        header("location:Home.php");

    }
}
?>
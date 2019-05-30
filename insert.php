<?php
/**
 * Created by PhpStorm.
 * User: MASWI MR
 * Date: 28-May-19
 * Time: 15:56
 */

include_once 'config.php';


elseif (isset($_POST['submit'])) {
    $jinaa = $_POST['jina'];
    $passowrd = $_POST['password'];
}

$sql  = "INSERT INTO clients(username, password) VALUES ('$jinaa', '$passowrd')";

mysqli_query($db, $sql);

header("location:Wafanyakazi.php");
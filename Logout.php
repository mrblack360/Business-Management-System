<?php
/**
 * Created by PhpStorm.
 * User: MASWI MR
 * Date: 6/13/2019
 * Time: 21:16
 */
session_start();
session_destroy();
header("location:login.html");
?>
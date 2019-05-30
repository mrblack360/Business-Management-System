<?php
/**
 * Created by PhpStorm.
 * User: MASWI MR
 * Date: 26-May-19
 * Time: 00:18
 */
define('DB_SERVER','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_DATABASE','bizmaster');
$db=mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
?>
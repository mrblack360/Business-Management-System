<?php
/**
 * Created by PhpStorm.
 * User: MASWI MR
 * Date: 26-May-19
 * Time: 13:13
 */
session_start();
include 'config.php';

if (!isset($_SESSION['login_user'])) {
    header("location:Login.html");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Matumizi</title>
    <link rel="stylesheet" type="text/css" href="BizMaster.css">
    <script src="UserHome.js" language="JavaScript"></script>
</head>
<body>
<div class="juu" onclick="coming()">
    Intergrated Business Management System
</div>                                                        <!--Part ya juu kabisa-->
<span class="userdetails" id="userdetails"></span>
<div class="kushoto" class="kushoto">
    <a href="Home2.php">
        <div class="vyandani">Nyumbani</div>
    </a>
    <a href="Mauzo2.php">
        <div class="vyandani">Mauzo</div>
    </a>
    <a href="Stock.php">
        <div class="vyandani">
            Stock
        </div>
    </a>
    <a href="Wafanyakazi.php">
        <div class="vyandani">
            Wafanyakazi
        </div>
    </a>
    <a href="Msaada2.html">
        <div class="vyandani" class="vyandani">Msaada</div>
    </a>
    <div class="nafasi"></div>
    <a href="Logout.php">
        <input type="submit" class="logout" value="Toka"/>
    </a>
</div>                                                          <!--Sidebar ya kushoto-->
<div class="main" id="main">
    <h2>
        Matumizi
    </h2>
    <hr>
    <form>
        <table>
            <tr>
                <th style="width: 5%">S/No</th>
                <th style="width: 60%">Particulars</th>
                <th style="width: 35%">Bei (Tshs)</th>
            </tr>

        </table>
        <br>
        <input type="submit" class="login" value="Ongeza Matumizi">
    </form>
</div>
<div class="footer">
    &copy;2019. All Rights Reserved.
</div>
</body>
</html>


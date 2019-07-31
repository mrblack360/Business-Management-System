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
    <a href="Home.php">
        <div class="vyandani">Nyumbani</div>
    </a>
    <a href="Mauzo.php">
        <div class="vyandani">Mauzo</div>
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
            <th style="width: 60%">Matumizi</th>
            <th style="width: 35%">Bei (Tshs)</th>
        </tr>
        <tr>
            <td>01</td>
            <td>
                <select style="width: 100%; font-size: 20px; font-family: 'Goudy Old Style'">
                    <option>Chagua Matumizi</option>
                    <option>Chakula</option>
                    <option>Usafiri</option>
                    <option>Umeme</option>
                    <option>Mengineyo (andika hapa chini)</option>
                </select>
            </td>
            <td rowspan="2"><input type="number" class="matumizi" style="height: 40px;"></td>
        </tr>
        <tr>
            <td>02</td>
            <td><input class="matumizi" type="text"  placeholder="Mengineyo (Andika hapa)" style="color: revert; font-size: 20px;background-color: white"></td>
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


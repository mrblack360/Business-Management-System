<?php
/**
 * Created by PhpStorm.
 * User: MASWI MR
 * Date: 22-May-19
 * Time: 22:59
 */
session_start();
include 'config.php';

$_SESSION['jina']=0;

if (!isset($_SESSION['login_user'])) {
    header("location:Login.html");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Wafanyakazi-BizMaster</title>
    <link rel="stylesheet" type="text/css" href="BizMaster.css">
    <script src="Mauzo.js" type="text/javascript"></script>
    <script src="UserHome.js" type="text/javascript"></script>
</head>
<body>
<div class="juu">
    Intergrated Business Management System
</div>                                                        <!--Part ya juu kabisa-->
<div class="kushoto">
    <a href="Home2.php">
        <div class="vyandani">Nyumbani</div>
    </a>
    <a href="Mauzo2.php">
        <div class="vyandani">
            Mauzo
        </div>
    </a>
    <a href="Matumizi2.php">
        <div class="vyandani">Matumizi</div>
    </a>
    <a href="Stock.php">
        <div class="vyandani">
            Stock
        </div>
    </a>
    <a href="Msaada2.html">
        <div class="vyandani" class="vyandani">Msaada</div>
    </a>
    <div class="nafasi"></div>
    <a href="Logout.php">
        <input type="submit" class="logout" value="Toka"/>
    </a>
</div>
<div class="main">
    <form style="float: right!important;" method="get" action="TafutaWafanyakazi.php">
        <input type="search" placeholder="tafuta mfanyakazi" style="width: 115px" name="client">
        <input type="submit" value="Tafuta" style="width: fit-content" name="tafuta">
    </form>
    <?php
//        if (isset($_GET['tafuta'])){
//            $_SESSION['jina']=$_GET['client'];
//        }
    ?>
    <h2>
        Wafanyakazi
    </h2>
    <hr>
    <h3>Wafanyakazi Waliopo</h3>
    <hr>
    <form name="mauzo">
        <table>
            <tr>
                <th style="width: 5%">S/No</th>
                <th style="width: 50%">Jina</th>
            </tr>
            <?php
            $sql="SELECT * FROM clients";

            $sno=1;

            $data=mysqli_query($db, $sql);
            while($zenyewe=mysqli_fetch_array($data, MYSQLI_ASSOC)){
                echo "<tr>";
                echo "<td>{$sno}</td>";$sno++;
                echo "<td>{$zenyewe['username']}</td>";
                echo "</tr>";
            }
            ?>

        </table>
    </form>
        <hr>
    <a href="insert.php">
        <input type="submit" name="submit" class="login" value="Ongeza Mfanyakazi">
    </a>
    <hr>
</div>
<div class="footer">
    &copy;2019. All Rights Reserved.
</div>
</body>
</html>

<?php
/**
 * Created by PhpStorm.
 * User: MASWI MR
 * Date: 6/27/2019
 * Time: 07:31
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
    <title>Stock-BizMaster</title>
    <link rel="stylesheet" type="text/css" href="BizMaster.css">
    <script src="Mauzo.js" type="text/javascript"></script>
    <script src="UserHome.js" type="text/javascript"></script>
</head>
<body>
<div class="juu" onclick="coming()">
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
</div>
<div class="main">
    </form>
    <h2>
        Stock
    </h2>
    <hr>
    <form name="mauzo" method="GET">
        <table>
            <tr>
                <th style="width: 5%">S/No</th>
                <th style="width: 35%">Bidhaa</th>
                <th style="width: 20%">Iliyouzwa</th>
                <th style="width: 25%">Zilizobaki</th>
                <th style="width: 15%">Bei (Ya Kila Moja)</th>
            </tr>
            <?php
            $sql="SELECT * FROM stock";
            $bei=0;
            $sno=1;

            $data=mysqli_query($db, $sql);
            while($zenyewe=mysqli_fetch_array($data, MYSQLI_ASSOC)){
                echo "<tr>";
                echo "<td>{$sno}</td>";$sno++;
                echo "<td>{$zenyewe['particulars']}</td>";
                echo "<td>{$zenyewe['qty']}</td>";
                $bei=$zenyewe['qty']*$zenyewe['price'];
                echo "<td>{$zenyewe['quantity']}</td>";
                echo "<td>{$zenyewe['price']}</td>";
                echo "</tr>";

                if (isset($_GET['idadi'])){
                    $idadi=($zenyewe['price'] * $_GET['idadi']);
                    echo "<td>$idadi</td>";
                }

            }
            echo "<tr>"
            ?>

        </table>

    </form>
    <a href="OngezaStock.php">
        <input type="submit" name="submit" class="login" value="Ongeza Stock">
    </a>
</div>
<div class="footer">
    &copy;2019. All Rights Reserved.
</div>
</body>
</html>
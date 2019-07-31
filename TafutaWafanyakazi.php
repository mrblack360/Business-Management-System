<?php
/**
 * Created by PhpStorm.
 * User: MASWI MR
 * Date: 22-May-19
 * Time: 22:59
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
    <title>Wafanyakazi-BizMaster</title>
    <link rel="stylesheet" type="text/css" href="BizMaster.csS">
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
    <h2>
        Wafanyakazi
    </h2>
    <hr>
    <h3>Tafuta</h3>
    <hr>
    <form name="mauzo">
        <table>
            <tr>
                <th style="width: 5%">S/No</th>
                <th style="width: 50%">Jina</th>
            </tr>
            <?php
            if ($_SERVER["REQUEST_METHOD"]=="GET") {
                //$jina=$_SESSION['jina'];
                $jina=$_GET['client'];

                $client = mysqli_real_escape_string($db, $jina);

                $sql = "SELECT * FROM clients WHERE username='$client'";

                $sno = 1;

                $data = mysqli_query($db, $sql);
                while ($zenyewe = mysqli_fetch_array($data, MYSQLI_ASSOC)) {
                    echo "<tr>";
                    echo "<td>{$sno}</td>";
                    $sno++;
                    echo "<td>{$zenyewe['username']}</td>";
                    echo "</tr>";
                }
            }
            ?>

        </table>
    </form>
    <hr>
    <a href="Wafanyakazi.php">
        <input type="submit" name="submit" class="login" value="Rudi Kwa Wafanyakazi">
    </a>
    <hr>
</div>
<div class="footer">
    &copy;2019. All Rights Reserved.
</div>
</body>
</html>
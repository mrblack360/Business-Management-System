<?php
/**
 * Created by PhpStorm.
 * User: MASWI MR
 * Date: 22-May-19
 * Time: 22:59
 */
include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mauzo-BizMaster</title>
    <link rel="stylesheet" type="text/css" href="BizMaster.css">
    <script src="Mauzo.js" type="text/javascript"></script>
    <script src="UserHome.js" type="text/javascript"></script>
</head>
<body>
<div class="juu" onclick="coming()">
    Intergrated Business Management System
</div>                                                        <!--Part ya juu kabisa-->
<div class="kushoto">
    <a href="Home.html">
        <div class="vyandani">Nyumbani</div>
    </a>
    <a href="Matumizi.php">
        <div class="vyandani">Matumizi</div>
    </a>
    <div class="vyandani" onclick="coming()">Msaada</div>
    <div class="nafasi"></div>
    <a href="Login.html">
        <input type="submit" class="logout" value="Toka"/>
    </a>
</div>
<div class="main">
    <h2>
        Mauzo
    </h2>
    <hr>
    <form name="mauzo" method="GET">
    <table>
        <tr>
            <th style="width: 5%">S/No</th>
            <th style="width: 50%">Particulars</th>
            <th style="width: 20%">Idadi</th>
            <th style="width: 25%">Bei (Tshs)</th>
        </tr>
        <?php
        $sql="SELECT * FROM stock";

        $sno=1;

        $data=mysqli_query($db, $sql);
        while($zenyewe=mysqli_fetch_array($data, MYSQLI_ASSOC)){
            echo "<tr>";
            echo "<td>{$sno}</td>";$sno++;
            echo "<td>{$zenyewe['particulars']}</td>";
            echo "<td><input name='idadi' type='number' value='1'></td>";
            if (isset($_GET['idadi'])){
            $idadi=($zenyewe['price'] * $_GET['idadi']);
            echo "<td>$idadi</td>";
            }
            echo "</tr>";
        }
        ?>

    </table>
        <button style="margin-left: 670px">Jumla</button>
    </form>
</div>
<div class="footer">
    &copy;2019. All Rights Reserved.
</div>
</body>
</html>
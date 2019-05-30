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
    <title>Wafanyakazi-BizMaster</title>
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
    <a href="">
        <div class="vyandani">
            Stock
        </div>
    </a>
    <div class="vyandani" onclick="coming()">Msaada</div>
    <div class="nafasi"></div>
    <a href="Login.html">
        <input type="submit" class="logout" value="Toka"/>
    </a>
</div>
<div class="main">
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
        <hr>
        <h3>Ongeza Mfanyakazi Mpya</h3>
        <center>
            <form method="POST" action="insert.php">
                <div class="label">Ingiza Jina La Mfanyakazi:</div>
                <input name="jina" placeholder="Ingiza Jina la Mfanyakazi" required><br>
                <div class="label">Ingiza Neno la siri la Mfanyakazi:</div>
                <input type="password" name="password" placeholder="Ingiza Neno la siri la Mfanyakazi" required><br><br>
                <input type="submit" name="submit" class="login" value="Ongeza Mfanyakazi">
            </form>
        </center>
    </form>
</div>
<div class="footer">
    &copy;2019. All Rights Reserved.
</div>
</body>
</html>
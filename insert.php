<?php
/**
 * Created by PhpStorm.
 * User: MASWI MR
 * Date: 28-May-19
 * Time: 15:56
 */

include 'config.php';
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
    <h3>Ongeza Mfanyakazi</h3>
    <hr>
    <center>
        <form method="POST" action="insert.php">
            <div class="label">Ingiza Jina La Mfanyakazi:</div>
            <input type="text" name="jina" placeholder="Ingiza Jina la Mfanyakazi" required><br>
            <div class="label">Ingiza Neno la siri la Mfanyakazi:</div>
            <input type="password" name="password" placeholder="Ingiza Neno la siri la Mfanyakazi" required><br><br>
            <input type="submit" name="submit" class="login" value="Ongeza Mfanyakazi">
        </form>
        <?php
        if(isset($_POST["submit"])){
            $client = $_POST["jina"];
            $pword = $_POST["password"];
            //$Hashed=password_hash($pword, PASSWORD_DEFAULT);


            $db1 = "select username  from clients where username = '$client'";
            $result1 = mysqli_query($db, $db1);
            $row = mysqli_num_rows($result1);

            if($row > 0){
                echo "Mfanyakazi amesajiriwa tayari!";
            }else{
                $db2 = "INSERT INTO clients(username, password) values('$client', '$pword')";
                $result = mysqli_query($db, $db2);
                if($result){
                    header("location:Wafanyakazi.php");
                }else{
                    echo "error : ".mysqli_error($db);
                }
            }
        }
        ?>
    </center>
</div>
<div class="footer">
    &copy;2019. All Rights Reserved.
</div>
</body>
</html>
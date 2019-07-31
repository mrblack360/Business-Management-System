<?php
/**
 * Created by PhpStorm.
 * User: MASWI MR
 * Date: 6/27/2019
 * Time: 02:39
 */


include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mauzo-BizMaster</title>
    <link rel="stylesheet" type="text/css" href="BizMaster.csS">
    <style type="text/css">
        select{
            width: 50%;
            font-size: 18px;
            font-family: "Goudy Old Style";
        }
    </style>
    <script src="Mauzo.js" type="text/javascript"></script>
    <script src="UserHome.js" type="text/javascript"></script>
</head>
<body>
<div class="juu" onclick="coming()">
    Intergrated Business Management System
</div>                                                        <!--Part ya juu kabisa-->
<div class="kushoto">
    <a href="Home.php">
        <div class="vyandani">Nyumbani</div>
    </a>
    <a href="Matumizi.php">
        <div class="vyandani">Matumizi</div>
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
        Ongeza Mauzo
    </h2>
    <center>

        <?php
        echo "<form method=\"POST\" action=\"OngezaMauzo.php\">
            <table>
            <tr>
                <th style=\"width: 5%\">S/No</th>
                <th style=\"width: 50%\">Bidhaa</th>
                <th style=\"width: 20%\">Idadi</th>
            </tr>
            <tr>
                <td>01</td><td>";
            $sql="SELECT * FROM stock";

            $quantity=0;

            $data=mysqli_query($db, $sql);
            echo "<select name='bidhaa'>";
            while($zenyewe=mysqli_fetch_array($data, MYSQLI_ASSOC)){
                echo "<option>{$zenyewe['particulars']}</option>";
            }

            echo "</td>
            <td><input type='number' name='idadi'></td>
            </tr></table>
            <input type=\"submit\" name=\"submit\" class=\"login\" value=\"Ongeza Mauzo\">
            </form>";
        if(isset($_POST["submit"])){
            $particular = $_POST["bidhaa"];
            $qty = $_POST["idadi"];

            $sql3="SELECT * FROM stock";

            $data=mysqli_query($db, $sql3);
            if($zenyewe=mysqli_fetch_array($data, MYSQLI_ASSOC)){
                $quantity=$zenyewe['qty']+$qty;
            }

            $db1 = "select sno  from stock where particular = '$particular'";
            $result1 = mysqli_query($db, $db1);
            $row = mysqli_num_rows($result1);

            if($row > 0){
                echo "Tuongeze wapi?";
            }else{
                $db2 = "UPDATE stock SET qty=$quantity";
                $result = mysqli_query($db, $db2);
                if($result){
                    header("location:Mauzo.php");
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

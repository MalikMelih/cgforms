<?php
    include("assets/db");
    session_start();
    if(isset($_POST["no"]) || isset($_GET["no"]))
    {
        if(isset($_POST["no"]))
        {
            $fno = $_POST['no'];
        }
        else
        {
            $fno = $_GET['no'];
        }
        echo $fno;
        $sql = "SELECT * FROM forms WHERE F_No = '$fno'";
    	$result = mysqli_query($db,$sql);
    	$row = mysqli_fetch_array($result);
        if(isset($row[1]))
        {
            $id = $row[1];
            $_SESSION['fdate'] = $row[2];
            $_SESSION['fperson'] = $row[4];
            $_SESSION['freceiver'] = $row[5];
            $_SESSION['feno'] = $row[7];
            $_SESSION['type'] = $row[6];
            header("location:index.php?pg=".$row[6]."&no=".$row[1]);
        }
        else
        {
            $_SESSION['err']="İstenilen Form Bulunamamıştır!";
            header("location:index.php");
        }
    }

?>

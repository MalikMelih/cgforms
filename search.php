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
            $_SESSION['fdate'] = $row[3];
            $_SESSION['fperson'] = $row[5];
            $_SESSION['freceiver'] = $row[6];
            $_SESSION['feno'] = $row[8];
            $_SESSION['type'] = $row[7];
            header("location:index.php?pg=".$row[7]."&no=".$row[1]);
        }
        else
        {
            $_SESSION['err']="İstenilen Form Bulunamamıştır!";
            header("location:index.php");
        }
    }

?>

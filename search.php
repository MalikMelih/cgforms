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
        $sql = "SELECT * FROM forms WHERE F_No = '$fno' OR F_ENo = '$fno' ORDER BY F_ID DESC LIMIT 1";
        $result = mysqli_query($db,$sql);
        $row = mysqli_fetch_array($result);
        if(isset($row[1]))
        {
            $id = $row[1];
            $_COOKIE['group'] = $row[2];
            $_SESSION['fdate'] = $row[3];
            $_SESSION['fstaff'] = $row[5];
            $_SESSION['fcustomer'] = $row[6];
            $_SESSION['type'] = $row[7];
            $_SESSION['feno'] = $row[8];
            $_SESSION['pdf'] = $row[10];
            header("location:index.php?pg=".$row[7]."&group=".$row[2]."&no=".$row[1]);
        }
        else
        {
            $_SESSION['err']="İstenilen Form Bulunamamıştır!";
            header("location:index.php");
        }
    }

?>

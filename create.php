<?php
include("requered.php");
$id = $_POST['id'];
$sel = $_POST['sel'];
$eno = $_POST['eno'];
$sno = $_POST['sno'];
$nick = $_POST['nick'];
$user = $_POST['user'];

$sql = "INSERT INTO forms (F_No, F_Company, F_Date, F_User, F_Type, F_ENo , F_SNo, F_Pdf, U_Nick) VALUES ('".$id."', '".$group."', '".date("d/m/Y")."', '".$user."', '".$sel."', '".$eno."', '".$sno."', 0, '".$nick."')";
if (mysqli_query($db, $sql)) {
    $sql = "INSERT INTO ".$sel." (F_No, F_Date, F_User, F_ENo, F_SNo) VALUES ('".$id."', '".$user."', '".$eno."', '".$sno."')";
    if (mysqli_query($db, $sql)) {
        header("location:index.php");
    }
    else {
        echo "Error: " . $sql . "<br>" . mysqli_error($db);
    }
}
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($db);
}
?>
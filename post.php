<?php
session_start();
include("alert.php");
include("assets/db");
if(isset($_POST['username']) && isset($_POST['password']))
{
    $nick=$_POST['username'];
    $pass=$_POST['password'];
    $sql = "SELECT U_ID FROM cgusers WHERE U_Nick = '$nick' and U_Pass = '$pass'";
    $result = mysqli_query($db,$sql);
    $count = mysqli_num_rows($result);
    
    if($count == 1) {
       $_SESSION['Nick'] = $nick;
       header("location: index.php");
    }else {
        $_SESSION['err'] = "Kullanıcı Adınız Veya Parolanız Hatalıdır!";
        header("location:login.php");
    }
}
else
{
    echo "HATA!";
}
?>
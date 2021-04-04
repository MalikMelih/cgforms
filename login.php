<?php
	session_start();
	include("alert.php");

	if(isset($_SESSION["err"]) && $_SESSION["err"]!=null)
	{
		errormsg($_SESSION['err']);
		$_SESSION['err']=null;
	}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login Page | Inventory Manager</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <script type="text/javascript" src="js/main.js"></script>
	<!-- Include Favicon -->
	<link rel="icon" type="image/png" href="assets/img/logo/logo.png">
</head>

<body>
    <a href="">
        <div style="width: 22px;height: 22px;position: absolute;bottom: 16px;left: 16px;background-image: url(img/forgot.svg);background-position: center;background-size: 20px;background-repeat: no-repeat;"></div>
    </a>

    <div style="float: left;width: 55%;height: 100%;background: linear-gradient(90deg, rgb(0,0,0,0.95) 50%, rgb(0,0,0,0.8));z-index: 2">
        <div style="
	    width: 70%;
	    height: 40%;
	    margin-top: 15%;
	    margin-left: 15%;
	">
            <div style="
	    float: left;
	    width: 100%;
	    height: 100%;
	    background-image: url(assets/img/logo/logo.png);
	    background-size: 20%;
	    background-repeat: no-repeat;
	    background-position: 5% center;
	"></div>
        </div>
        <div style="
	    width: 70%;
	    height: 60%;
	    margin-bottom: 15%;
	    margin-left: 15%;
	">
            <div style="
	    float: left;
	    width: 90%;
	    height: 10%;
	    padding: 5% 5%;
	    color: white;
	">
                <div style="font-size: 25px;font-weight: 600;">Giriş Yap</div>
                <div style="color: lightgray;">Hesabın Yok Mu? <a href="#" style="color: #3bb7e8;text-decoration: none;">Yöneticine Bildir</a></div>

            </div>
            <form action = "post.php" method = "post" style="float: left;width: 90%;height: 35%;">
                <div style="
	    float: left;
	    width: 80%;
	    height: 40%;
	    padding: 0 10%;
	">
                    <div style="
	    width: 100%;
	    height: 30%;
	    line-height: 30%;
	    color: lightgray;
	    font-size: 14px;
	">E-Mail Adresi &amp; Kullanıcı Adı</div>
                    <input name = "username" placeholder="Kullanıcı Adı" style="
	    max-width: 375px;
	    width: 90%;
	    height: 30%;
	    background-color: rgb(26,26,26,0.6);
	    border: none;
	    display: block;
	    color: #3bb7e8;
	    padding: 5px;
	    margin-left: 5%;
	    border-radius: 5px;
	">
                </div>
                <div style="
	    float: left;
	    width: 80%;
	    height: 40%;
	    padding: 0 10%;
	">
                    <div style="
	    width: 100%;
	    height: 30%;
	    line-height: 30%;
	    color: lightgray;
	    font-size: 14px;
	">Şifreniz</div>
                    <input name = "password" type="password" placeholder="Şifre" style="
	    max-width: 375px;
	    width: 90%;
	    height: 30%;
	    background-color: rgb(26,26,26,0.6);
	    border: none;
	    display: block;
	    color: #3bb7e8;
	    padding: 5px;
	    margin-left: 5%;
	    border-radius: 5px;
	">
                </div>
                <div style="
	    float: left;
	    width: 80%;
	    height: 20%;
	    padding: 0 10%;">
                        <button class="lgn-btn">Giriş Yap</button>
                </div>
            </form>
        </div>
    </div>
    <div style="position: fixed;top: 0;left: 0;background: url(img/raster.png);width: 100%;height: 100%;z-index:-2;"></div>
    <div style="float: left;width: 45%;height: 100%;background-color: rgb(0,0,0,0.8);"></div>
    <video style="height: 100vh;
    object-fit: cover;
    width: 100vw;
    position: fixed;
    top: 0;
    left: 0;
    z-index: -5;" autoplay muted loop id="myVideo">
  <source src="assets/videos/server.mp4" type="video/mp4">
</video>
</body>

</html>
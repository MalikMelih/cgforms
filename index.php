<?php
session_start();
include("requered.php");
date_default_timezone_set('Etc/GMT-3');
?>
<!DOCTYPE html>
<html>
<head class="noprint">
	<title>ÇorumGaz Form Management | Dashboard</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Include Favicon -->
	<link rel="icon" type="image/png" href="assets/img/logo/logo.png">

	<!-- Include Css Files -->
	<link rel="stylesheet" type="text/css" href="assets/css/main.css">

	<link rel="stylesheet" type="text/css" href="assets/thirdpart/fontawesome/css/all.css">
	<?php
		include("theme.php");
	?>
	<!-- Include Google Fonts -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC&display=swap" rel="stylesheet">
</head>
<body>
	<!--    Left Bar   -->
	<div class="fleft left-bar noprint" media="screen and (min-width: 900px)">
		<a href=".">
			<div class="fleft logo-bar logo"></div>
		</a>
		<div class="fleft fltop">
		<a>
			<div onclick="search('sb')" class="fas fa-search white lbbtns objcntr cgbluehvr bars" title="Arama Yap"></div>
			<div id="hsearch" style="display: none;width: 70%;height: 16px;background-color: white;padding: 0;border-radius: 16px;margin: 0 15%;font-size: 12px;margin-top: -14px;">Alt + S</div>
		</a>
			<form method="POST" action="search.php">
				<div id="sb" class="search-bar" style="left:-400px;">
					<a href="qrcode.php?pg=index">
						<div onmouseover="qr('qr')" onmouseout="qr('code')" class="fa fa-qrcode" id="sb-div"></div>
					</a>
					<input id="sb-input" name="no" placeholder="Barkod veya Form Numarasıyla Ara">
				</div>
			</form>
			<div style="float: left;width: 60%;height: 2px;margin: 0 20%;background-color: gray;border-radius: 25px;opacity: 0.2;"></div>
			<a href=".">
				<div class="fas fa-tachometer-alt white lbbtns objcntr cgbluehvr" title="Panele Dön"></div></a>
			<a href="?pg=formslist">
				<div class="fas fa-clipboard white lbbtns objcntr cgbluehvr" title="Oluşturulan Formlar"></div>
				<div id="hlist" style="display: none;width: 70%;height: 16px;background-color: white;padding: 0;border-radius: 16px;margin: 0 15%;font-size: 12px;margin-top: -14px;">Alt + L</div>
			</a>
			<a href=".">
				<div class="fas fa-calendar-alt white lbbtns objcntr cgbluehvr" title="Ajanda"></div></a>
				<div style="float: left;width: 60%;height: 2px;margin: 0 20%;background-color: gray;border-radius: 25px;opacity: 0.2;"></div>
			<a href="?pg=create&type=cargo">
				<div class="fas fa-truck-loading white lbbtns objcntr cgreenhvr" title="Ürün Gönderimi"></div>
				<div id="hcargo" style="display: none;width: 70%;height: 16px;background-color: white;padding: 0;border-radius: 16px;margin: 0 15%;font-size: 12px;margin-top: -14px;">Alt + 1</div>
			</a>
			<a href="?pg=create&type=services">
				<div class="fas fa-box-open white lbbtns objcntr cgreenhvr" title="Gelen Ürün"></div>
				<div id="hservices" style="display: none;width: 70%;height: 16px;background-color: white;padding: 0;border-radius: 16px;margin: 0 15%;font-size: 12px;margin-top: -14px;">Alt + 2</div>
			</a>
			<a href="?pg=create&type=delivery">
				<div class="fas fa-box white lbbtns objcntr cgreenhvr" title="Malzeme Teslim"></div>
				<div id="hdelivery" style="display: none;width: 70%;height: 16px;background-color: white;padding: 0;border-radius: 16px;margin: 0 15%;font-size: 12px;margin-top: -14px;">Alt + 3</div>
			</a>
			<a href="?pg=create&type=scrap">
				<div class="fas fa-dolly-flatbed white lbbtns objcntr cgreenhvr" title="Hurda Cihaz"></div>
				<div id="hscrap" style="display: none;width: 70%;height: 16px;background-color: white;padding: 0;border-radius: 16px;margin: 0 15%;font-size: 12px;margin-top: -14px;">Alt + 4</div>
			</a>
		</div>
		<div class="fleft flbottom noprint">
			<a href="?th=<?php echo $theme;?>">
				<div class="<?php echo $thicon; ?> white lbbtns objcntr cgbluehvr" title="<?php echo $thtext;?>"></div>
				<div id="htheme" style="display: none;width: 70%;height: 16px;background-color: white;padding: 0;border-radius: 16px;margin: 0 15%;font-size: 12px;margin-top: -14px;">Alt + T</div>
			</a>
			<a href="#">
				<div class="fas fa-cog white lbbtns objcntr cgbluehvr" title="Ayarları Düzenle"></div>
				<div id="hconf" style="display: none;width: 70%;height: 16px;background-color: white;padding: 0;border-radius: 16px;margin: 0 15%;font-size: 12px;margin-top: -14px;">Alt + C</div>
			</a>
			<a>
				<div onclick="search('ab')" class="fas fa-user-alt white lbbtns objcntr cgreenhvr bars" title="Hesabım"></div>
				<div id="huser" style="display: none;width: 70%;height: 16px;background-color: white;padding: 0;border-radius: 16px;margin: 0 15%;font-size: 12px;margin-top: -14px;">Alt + A</div>
			</a>
			<a href="logout.php">
				<div id="ab" style="left: -400px;" class="search-bar">Çıkış Yap</div></a>
				<div style="float: left;width: 60%;height: 2px;margin: 0 20%;background-color: gray;border-radius: 25px;opacity: 0.2;"></div>
			<a href="#">
				<div class="fas fa-cloud white lbbtns objcntr cgbluehvr" title="Bulut'a Yedekle"></div></a>
		</div>
	</div>
	<!--    Center    -->
	<div onclick() id="central" class="fleft printpg" style="width: calc( 100vw - 70px );height: 100vh;overflow: auto;">
		<?php 
		//include("createform2.php");
		if(isset($_GET['pg']))
		{
			include($_GET['pg']."form.php");
		}
		else
		{
			include("main.php");
		}
		?>
	</div>
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script type="text/javascript" src="assets/js/style.js"></script>
<script type="text/javascript" src="assets/js/jquery.js"></script>
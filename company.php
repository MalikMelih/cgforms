<?php
session_start();
?>
<html>
    <head>
    <title>Login Page | Inventory Manager</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&amp;display=swap" rel="stylesheet">
    <script type="text/javascript" src="js/main.js"></script>
	<!-- Include Favicon -->
	<link rel="icon" type="image/png" href="assets/img/logo/logo.png">
    <link rel="stylesheet" href="./assets/css/comp.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&amp;display=swap" rel="stylesheet"><link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&amp;display=swap" rel="stylesheet"></head><body><span id="warning-container"><i data-reactroot=""></i></span>

    <a href="">
        <div style="width: 22px;height: 22px;position: absolute;bottom: 16px;left: 16px;background-image: url(img/forgot.svg);background-position: center;background-size: 20px;background-repeat: no-repeat;"></div>
    </a>

    
    <div style="position: fixed;top: 0;left: 0;background: url(img/raster.png);width: 100%;height: 100%;z-index:-2;"></div>
    <div style="width: 100%;height: 100%;position: absolute;top: 0;left: 0;padding: 0 5%;background: rgb(0,0,0,0.9);">
    <div style="
    	padding: 10%;
    	color: white;
    	font-weight: bold;
    	font-size: 2vw;
    	text-align: center;
	">Lütfen Aşağıdan Bir Şirket Seçiniz</div>
	<div class="canvas-wrapper">
	<a href="login.php?c=corumgaz" class="canvas">
		<div class="canvas_border">
			<svg>
				<defs>
                    <linearGradient id="grad-orange" x1="0%" y1="0%" x2="100%" y2="0%">
                        <stop offset="0%" style="stop-color:rgb(255,255,255);stop-opacity:1"></stop>
                        <stop offset="100%" style="stop-color:rgb(255,255,255);stop-opacity:1"></stop>
                    </linearGradient>
                    <linearGradient id="grad-orange" x1="0%" y1="0%" x2="100%" y2="0%">
                        <stop offset="0%" stop-color="#D34F48"></stop>
                        <stop offset="100%" stop-color="#772522"></stop>
                    </linearGradient>
                </defs>
				<rect id="rect-grad" class="rect-gradient" fill="none" stroke="url(#grad-orange)" stroke-linecap="square" stroke-width="4" stroke-miterlimit="30" width="100%" height="100%"></rect>
			</svg>
		</div>
		<div class="canvas_img-wrapper">
			<img class="canvas_img" src="./assets/img/logo/logo.png" alt="">
		</div>
		<div class="canvas_copy canvas_copy--left">
			<span class="canvas_copy_subtitle">Firma Seçimi</span>
			<strong class="canvas_copy_title">Gaz</strong>
			<strong class="canvas_copy_title">Grubu</strong>
			<span class="canvas_copy_details">Form Yönetim Sistemi</span>
		</div>
	</a>
	<a href="login.php?c=holding" class="canvas">
		<div class="canvas_border">
			<svg>
				<defs><linearGradient id="grad-orange" x1="0%" y1="0%" x2="100%" y2="0%"><stop offset="0%" style="stop-color:rgb(253,137,68);stop-opacity:1"></stop><stop offset="100%" style="stop-color:rgb(153,75,23);stop-opacity:1"></stop></linearGradient><linearGradient id="grad-red" x1="0%" y1="0%" x2="100%" y2="0%"><stop offset="0%" stop-color="#D34F48"></stop><stop offset="100%" stop-color="#772522"></stop></linearGradient></defs>
				<rect id="rect-grad" class="rect-gradient" fill="none" stroke="url(#grad-orange)" stroke-linecap="square" stroke-width="4" stroke-miterlimit="30" width="100%" height="100%"></rect>
			</svg>
		</div>

		<div class="canvas_img-wrapper">
			<img alt="" src="./assets/img/logo/holding.png" class="canvas_img">
		</div>
		<div class="canvas_copy canvas_copy--left">
			<span class="canvas_copy_subtitle">Firma Seçimi</span>
			<strong class="canvas_copy_title">Holding</strong>
			<strong class="canvas_copy_title">Grubu</strong>
			<span class="canvas_copy_details">Form Yönetim Sistemi</span>
		</div>
	</a>
	<a href="login.php?c=otomotiv" class="canvas">
		<div class="canvas_border">
			<svg>
				<defs><linearGradient id="grad-orange" x1="0%" y1="0%" x2="100%" y2="0%"><stop offset="0%" style="stop-color:rgb(253,137,68);stop-opacity:1"></stop><stop offset="100%" style="stop-color:rgb(153,75,23);stop-opacity:1"></stop></linearGradient><linearGradient id="grad-red" x1="0%" y1="0%" x2="100%" y2="0%"><stop offset="0%" stop-color="#D34F48"></stop><stop offset="100%" stop-color="#772522"></stop></linearGradient></defs>
				<rect id="rect-grad" class="rect-gradient" fill="none" stroke="url(#grad-orange)" stroke-linecap="square" stroke-width="4" stroke-miterlimit="30" width="100%" height="100%"></rect>
			</svg>
		</div>
		<div class="canvas_img-wrapper">
			<img class="canvas_img" src="./assets/img/logo/otomotiv.png" alt="">
		</div>
		<div class="canvas_copy canvas_copy--left">
			<span class="canvas_copy_subtitle">Firma Seçimi</span>
			<strong class="canvas_copy_title">Otomotiv</strong>
			<strong class="canvas_copy_title">Grubu</strong>
			<span class="canvas_copy_details">Form Yönetim Sistemi</span>
		</div>
	</a>
	<a href="login.php?c=doviz" class="canvas">
		<div class="canvas_border">
			<svg>
				<defs><linearGradient id="grad-orange" x1="0%" y1="0%" x2="100%" y2="0%"><stop offset="0%" style="stop-color:rgb(253,137,68);stop-opacity:1"></stop><stop offset="100%" style="stop-color:rgb(153,75,23);stop-opacity:1"></stop></linearGradient><linearGradient id="grad-red" x1="0%" y1="0%" x2="100%" y2="0%"><stop offset="0%" stop-color="#D34F48"></stop><stop offset="100%" stop-color="#772522"></stop></linearGradient></defs>
				<rect id="rect-grad" class="rect-gradient" fill="none" stroke="url(#grad-orange)" stroke-linecap="square" stroke-width="4" stroke-miterlimit="30" width="100%" height="100%"></rect>
			</svg>
		</div>
		<div class="canvas_img-wrapper">
			<img class="canvas_img" src="./assets/img/logo/doviz.png" alt="">
		</div>
		<div class="canvas_copy canvas_copy--left">
			<span class="canvas_copy_subtitle">Firma Seçimi</span>
			<strong class="canvas_copy_title">Döviz</strong>
			<strong class="canvas_copy_title">Grubu</strong>
			<span class="canvas_copy_details">Form Yönetim Sistemi</span>
		</div>
	</a>
</div>
    </div>
    <video style="height: 100vh;
    object-fit: cover;
    width: 100vw;
    position: fixed;
    top: 0;
    left: 0;
    z-index: -5;" autoplay="" muted="" loop="" id="myVideo">
	<source src="assets/videos/server.mp4" type="video/mp4">
</video>

</body></html>
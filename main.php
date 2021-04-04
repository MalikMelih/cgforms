<?php
$sql = "SELECT COUNT(*) FROM forms WHERE F_Type='cargo'";
$result = mysqli_query($db,$sql);
$row = mysqli_fetch_array($result);
$cargo = $row[0];
$sql = "SELECT COUNT(*) FROM forms WHERE F_Type='services'";
$result = mysqli_query($db,$sql);
$row = mysqli_fetch_array($result);
$services = $row[0];
$sql = "SELECT COUNT(*) FROM forms WHERE F_Type='delivery'";
$result = mysqli_query($db,$sql);
$row = mysqli_fetch_array($result);
$delivery = $row[0];
$sql = "SELECT COUNT(*) FROM forms WHERE F_Type='scrap'";
$result = mysqli_query($db,$sql);
$row = mysqli_fetch_array($result);
$scrap = $row[0];
?>
<div class="black lbl-bar">
    <div class="lblb-bg">ÇorumGaz</div>
    <div class="lblb-ttl">ÇorumGaz</div>
    <div class="cggreen lblb-txt">Form Yönetim Sistemi</div>
    <a href="?pg=new">
        <button class="bg-cgblue lblb-btn">Hızlı Form Oluştur</button>
    </a>
</div>

<div style="
    position: absolute;
    bottom: 10%;
    width: 80%;
    height: 20vh;
    padding: 0 10vw;
">
    <a href="?pg=cargo">
        <div class="data-box">
            <div class="fas fa-truck-loading white" style="
                float: left;
                width: 100%;
                height: 50%;
                font-size: 3vh;
                text-align: center;
                line-height: 9vh;
            "></div><div style="
                float: left;
                width: 100%;
                height: 16%;
                text-align: center;
                font-size: 22px;
                font-family: 'Alegreya Sans SC', sans-serif;
            ">Kargo Formu</div>
            <div style="
                float: left;
                width: 100%;
                height: 35%;
                text-align: center;
                font-size: 3vh;
                line-height: 5vh;
                font-family: 'Alegreya Sans SC', sans-serif;
            "><?php echo $cargo; ?></div></div>
    </a>
<a href="?pg=services">
    <div class="data-box">
        <div class="fas fa-box-open white" style="
            float: left;
            width: 100%;
            height: 50%;
            font-size: 3vh;
            text-align: center;
            line-height: 9vh;
        "></div><div style="
            float: left;
            width: 100%;
            height: 16%;
            text-align: center;
            font-size: 22px;
            font-family: 'Alegreya Sans SC', sans-serif;
        ">Servis Formu</div>
        <div style="
            float: left;
            width: 100%;
            height: 35%;
            text-align: center;
            font-size: 3vh;
            line-height: 5vh;
            font-family: 'Alegreya Sans SC', sans-serif;
        "><?php echo $services; ?></div></div>
</a>
<a href="?pg=delivery">
    <div class="data-box">
        <div class="fas fa-box white" style="
            float: left;
            width: 100%;
            height: 50%;
            font-size: 3vh;
            text-align: center;
            line-height: 9vh;
        "></div><div style="
            float: left;
            width: 100%;
            height: 16%;
            text-align: center;
            font-size: 22px;
            font-family: 'Alegreya Sans SC', sans-serif;
        ">Malzeme Formu</div>
        <div style="
            float: left;
            width: 100%;
            height: 35%;
            text-align: center;
            font-size: 3vh;
            line-height: 5vh;
            font-family: 'Alegreya Sans SC', sans-serif;
        "><?php echo $delivery; ?></div></div>
</a>
<a href="?pg=scrap">
    <div class="data-box">
        <div class="fas fa-dolly-flatbed white" style="
            float: left;
            width: 100%;
            height: 50%;
            font-size: 3vh;
            text-align: center;
            line-height: 9vh;
        "></div><div style="
            float: left;
            width: 100%;
            height: 16%;
            text-align: center;
            font-size: 22px;
            font-family: 'Alegreya Sans SC', sans-serif;
        ">Hurda Cihaz Formu</div>
        <div style="
            float: left;
            width: 100%;
            height: 35%;
            text-align: center;
            font-size: 3vh;
            line-height: 5vh;
            font-family: 'Alegreya Sans SC', sans-serif;
        "><?php echo $scrap; ?></div></div> 
</a>
</div>
</div>
<div class="footer">
    <div class="fright">Bilgi İşlem Departmanı</div>
</div>
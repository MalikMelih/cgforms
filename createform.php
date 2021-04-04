    <video style="height: 100vh;object-fit: cover;width: 100vw;position: fixed;top: 0;left: 0;z-index: -1;" autoplay="" muted="" loop="" id="myVideo">
        <source src="assets/videos/server.mp4" type="video/mp4">
    </video>
    <div style="position: absolute;left: 70px;top: 0;width: calc( 100vw - 70px);height: 100vh;background: linear-gradient(90deg, rgb(0,0,0,0.95) 50%, rgb(0,0,0,0.8));">

<div style="width: 40%;position: absolute;left: 10vw;bottom: 10vh;overflow: visible;">

<div>

    <div style="float: left;width: 14%;height: 80%;max-width: 74px;">

    <?php
if(isset($_GET['step']))
{
    $active = "background-color:#3bb7e8;color:white;";
    $nctive = "background-color:white;color:#101010;";
    $step = $_GET['step'];
?>
        <a <?php if($step>=2) { echo "href='?pg=create&step=1'"; }?>>
            <div style="<?php if($step==1) { echo $active; } else { echo $nctive; } ?>float: left;width: 50px;height: 50px;border-radius: 50%;font-size: 25px;font-weight: 600;text-align: center;line-height: 50px;margin: 15% 5%;">1</div>
        </a>

        <a <?php if($step>=3) { echo "href='?pg=create&step=2&group=".isset($_SESSION['group'])."'"; }?>>
            <div style="<?php if($step==2) { echo $active; } else { echo $nctive; } ?>float: left;width: 50px;height: 50px;border-radius: 50%;font-size: 25px;font-weight: 600;text-align: center;line-height: 50px;margin: 15% 5%;">2</div>
        </a>
<?php
}
else
{
?>
        <a href="?pg=create&step=1">
            <div style="float: left;width: 50px;height: 50px;background-color: #3bb7e8;border-radius: 50%;color: white;font-size: 25px;font-weight: 600;text-align: center;line-height: 50px;margin: 15% 5%;">1</div>
        </a>

        <a>
            <div style="float: left;width: 50px;height: 50px;background-color: white;border-radius: 50%;color: #101010;font-size: 25px;font-weight: 600;text-align: center;line-height: 50px;margin: 15% 5%;">2</div>
        </a>
<?php
}
?>

    </div>

    <div style="float: left;width: 60%;height: 80%;max-width: 315px;">

        <div style="float: left;width: 100%;height: 20px;margin-top: 5%;color: white;">Form Şirket Seçimi</div>

        <div style="float: left;width: 100%;height: 20px;margin-bottom: 5%;color: gray;font-size: 12px;line-height: 20px;">Oluşturulacak Form İçin Şirket Seçiniz</div>
    
        <div style="float: left;width: 100%;height: 20px;margin-top: 5%;color: white;">Form Tipi</div>

        <div style="float: left;width: 100%;height: 20px;margin-bottom: 5%;color: gray;font-size: 12px;line-height: 20px;">Oluşturulacak Form Tipini Seçiniz</div>

    </div>
</div>

</div>

    <?php
    if(isset($_GET['step']) && $_GET['step']==2)
    {
        ?>
<div style="position: absolute;width: 44vw;height: 83vh;/* padding: 2vw; */background-color: #101010;border-radius: 10px;right: 5vw;bottom: 0;overflow: hidden;">
    
    
    <div id="left-canvas">
        <div id="pdf" class="bg-holding" style="background-position: top;background-image: url(docs/pdf/examples/<?php echo $_GET['group']; ?>/cargo.png);background-size: cover;"></div>
    </div>

    
    <div id="right-canvas">
        <a href="?pg=cargo&group=<?php echo $_GET['group'];?>">
            <div id="rc-type" class="rc-items fas fa-truck-loading white" onclick="chg('cargo','<?php echo $_GET['group'];?>')" onmouseenter="chg('cargo','<?php echo $_GET['group'];?>')">
                <div>Kargo Takip Formu</div>
            </div>
        </a>
        <a href="?pg=services&step=3&group=<?php echo $_GET['group'];?>">
            <div id="rc-type" class="rc-items fas fa-box-open white" onclick="chg('services','<?php echo $_GET['group'];?>')" onmouseenter="chg('services','<?php echo $_GET['group'];?>')">
                <div>Cihaz Servis Formu</div>
            </div>
        </a>
        <a href="?pg=delivery&step=3&group=<?php echo $_GET['group'];?>">
            <div id="rc-type" class="rc-items fas fa-box white" onclick="chg('delivery','<?php echo $_GET['group'];?>')" onmouseenter="chg('delivery','<?php echo $_GET['group'];?>')">
                <div>Malzeme Teslim Formu</div>
            </div>
        </a>
        <a href="?pg=scrap&step=3&group=<?php echo $_GET['group'];?>">
            <div id="rc-type" class="rc-items fas fa-dolly-flatbed white" onclick="chg('scrap','<?php echo $_GET['group'];?>')" onmouseenter="chg('scrap','<?php echo $_GET['group'];?>')">
                <div>Hurda Cihaz Formu</div>
            </div>
        </a>
    </div>
</div>

<?php
    }
    else
    {
?>

<div style="position: absolute;width: 44vw;height: 83vh;/* padding: 2vw; */background-color: #101010;border-radius: 10px;right: 5vw;bottom: 0;overflow: hidden;">
    
    
    <div id="left-canvas">
        <div id="lc-bg" class="bg-holding">
            <div id="img-canvas">
                <img src="assets/img/logo/light/holding.png" id="ic-img">
            </div>
        </div>
    </div>

    
    <div id="right-canvas">
    <a href="?pg=create&step=2&group=holding">
            <div class="rc-items" style="background-image: url(assets/img/logo/light/holding.png);"  onclick="chg('holding')" onmouseenter="chg('holding')">
                <div style="margin: 6%;font-size: 20px;">Holding Grubu</div>
            </div>
        </a>
        <a href="?pg=create&step=2&group=doviz">
            <div class="rc-items" style="background-image: url(assets/img/logo/light/doviz.png);"  onclick="chg('doviz')" onmouseenter="chg('doviz')">
                <div style="margin: 6%;font-size: 20px;">Döviz Grubu</div>
            </div>
        </a>
        <a href="?pg=create&step=2&group=otomotiv">
            <div class="rc-items" style="background-image: url(assets/img/logo/light/otomotiv.png);" onclick="chg('otomotiv')" onmouseenter="chg('otomotiv')">
                <div id="demo" style="margin: 6%;font-size: 20px;">Otomotiv Grubu</div>
            </div>
        </a>
        <a href="?pg=create&step=2&group=gaz">
            <div class="rc-items" style="background-image: url(assets/img/logo/light/cg.png);" onclick="chg('gaz')" onmouseenter="chg('gaz')">
                <div id="demo" style="margin: 6%;font-size: 20px;">Gaz Grubu</div>
            </div>
        </a>
    </div>
</div>

    <?php
    }
?>

</div>
<script>
    document.getElementById("central").style.backgroundColor = "transparent";
</script>
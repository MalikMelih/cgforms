<?php
if(isset($_GET['form']))
{
    $header = "En Son Oluşturulanlar";
    if($_GET['form']=="services")
    {
        $title = "Servis Takip Formları";
    }
    else if ($_GET['form']=="cargo")
    {
        $title = "Kargo Takip Formları";
    }
    else if ($_GET['form']=="delivery")
    {
        $title = "Malzeme Teslim Formları";
    }
    else if ($_GET['form']=="scrap")
    {
        $title = "Hurda Cihaz Formları";
    }
    else
    {
        $title = "Son 10 Form";
    }
}
else
{
    $header = "En Son Oluşturulanlar";
    $title = "Son 10 Form";
}
?>
<div class="fleft fsl-bg">
    <div class="fsl-main">
        <div style="overflow: hidden;">
            <img id="logo" src="assets/img/logo/logo.png" style="float: left;height: 50px;margin: 3vh 2vw;">
            <div class="fright tright" style="margin: 2vh 2vw;">
                <h4 style="color: #3bb7e8;font-size: 28px;font-weight: bold;margin: 0;"><?php echo $header;?></h4>
                <h2 style="color: #8dcf69;margin: 0;font-size: 22px;"><?php echo $title;?></h2>
            </div>
        </div>
        <!--<div style="overflow: hidden;">
            <a href=""><div style="float: right;padding: 10px;margin: 10px 20px;background-color: #8fbc8f;border-radius: 2px;">Yeni Kargo Formu Oluştur</div></a>
            <a href=""><div style="float: right;padding: 10px;margin: 10px 20px;background-color: #8fbc8f;border-radius: 2px;">Yeni Form Oluştur</div></a>
        </div>-->
        <div class="fleft fsl-header fsl-data-bg">
            <div class="fsl-lineh fslh-usr">Kullanıcı</div>
            <div class="fsl-lineh fslh-name"></div>
            <div class="fsl-lineh fslh-fno">Form Numarası</div>
            <div class="fsl-lineh fslh-ot">Oluşturma Tarihi</div>
            <div class="fsl-lineh fslh-stat">Durumu</div>
            <div class="fsl-lineh fslh-act">Eylemler</div>
        </div>
<?php
$i = 0;
    if(!isset($_GET['form']))
    {
        $sql = "SELECT * FROM forms ORDER BY F_ID DESC LIMIT 10";
        $result = mysqli_query($db,$sql);
        while($row = mysqli_fetch_array($result))
        {
            if($row[10]==0)
            {
                $pdf = "PDF Dosyası Bekleniyor...";
                $bcolor = "style='background-color: darkorange;'";
                $color = "style='color: darkorange;'";
            }
            else
            {
                $pdf = "Tamamlandı";
                $bcolor = "style='background-color: mediumaquamarine;'";
                $color = "style='color: mediumaquamarine;'";
            }
            if ($i%2==1)
            {
                $bg = "fsl-data-bg";
            }
            else
            {
                $bg = " ";
            }
?>
        <div class="fleft fsl-data <?php echo $bg;?>">
            <div class="fsld-usr">
                <img src="assets/img/user/<?php echo $row[11];?>.jpg" class="fsld-usr-img">
            </div>
            <div class="fsld-uno"><?php echo $row[4];?></div>
            <div class="fsld-fno">#<?php echo $row[1];?></div>
            <div class="fsld-fdate"><?php echo $row[3];?></div>
            <div class="fsld-fstat" <?php echo $color;?>>
                <div class="fsld-dot" <?php echo $bcolor;?>></div>
                <div><?php echo $pdf;?></div>
            </div>
            <div class="fsld-act">
                <a href="index.php<?php echo "?pg=".$row[7]."&group=".$row[2]."&no=".$row[1]; ?>"><div id="fsld-act-icns" class="icn-eye far fa-eye" title="Formu İncele"></div></a>
                <div id="fsld-act-icns" class="icn-pen fas fa-pen-nib" title="Detayları Düzenle"></div>
                <div id="fsld-act-icns" class="icn-trash fas fa-trash" title="Arşive Kaldır"></div>
                <div id="fsld-act-icns" class="icn-pdf far fa-file-pdf" title="PDF Belgesi Yükle"></div>
            </div>
        </div>
<?php
$i= $i+1;
    }
}
else
{
    $sql = "SELECT * FROM forms INNER JOIN ".$_GET['form']." ON forms.F_No = ".$_GET['form'].".F_No ORDER BY ".$_GET['form'].".SV_ID DESC";
    $result = mysqli_query($db,$sql);
    while($row = mysqli_fetch_array($result))
    {
        if($row[10]==0)
        {
            $pdf = "PDF Dosyası Bekleniyor...";
            $bcolor = "style='background-color: darkorange;'";
            $color = "style='color: darkorange;'";
        }
        else
        {
            $pdf = "Tamamlandı";
            $bcolor = "style='background-color: mediumaquamarine;'";
            $color = "style='color: mediumaquamarine;'";
        }
        if ($i%2==1)
        {
            $bg = "fsl-data-bg";
        }
        else
        {
            $bg = " ";
        }
?>
        <div class="fleft fsl-data <?php echo $bg;?>">
            <div class="fsld-usr">
                <img src="assets/img/user/<?php echo $row[11];?>.jpg" class="fsld-usr-img">
            </div>
            <div class="fsld-uno"><?php echo $row[12];?></div>
            <div class="fsld-fno">#<?php echo $row[11];?></div>
            <div class="fsld-fdate"><?php echo $row[16];?></div>
            <div class="fsld-fstat" <?php echo $color;?>>
                <div class="fsld-dot" <?php echo $bcolor;?>></div>
                <div><?php echo $pdf;?></div>
            </div>
            <div class="fleft fsld-act">
            <a href="index.php<?php echo "?pg=".$row[7]."&group=".$row[2]."&no=".$row[1]; ?>"><div id="fsld-act-icns" class="icn-eye far fa-eye" title="Formu İncele"></div></a>
                <div id="fsld-act-icns" class="icn-pen fas fa-pen-nib" title="Detayları Düzenle"></div>
                <div id="fsld-act-icns" class="icn-trash fas fa-trash" title="Arşive Kaldır"></div>
                <div id="fsld-act-icns" class="icn-pdf far fa-file-pdf" title="PDF Belgesi Yükle"></div>
            </div>
        </div>
<?php
$i= $i+1;
    }
}
?>
</div>
</div>
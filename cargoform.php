<?php //Manual type form date & id config
//$date = "00/00/0000";
//$id = "00000000";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="assets/img/logo/logo.png" rel="icon">
<title>Çorumgaz Forms | Servis Formu</title>
<link rel="stylesheet" href="assets/css/css" type="text/css">
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/all.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/stylesheet.css">
</head>
<body>
<div class="container-fluid invoice-container" id="invoice">
    <header>
    <div class="row align-items-center">
    <div class="col-sm-7 text-center text-sm-left mb-3 mb-sm-0">
        <img id="logo" src="assets/img/logo/<?php echo $_COOKIE['group'];?>logo.png" style="height: 50px;">
    </div>
    <div class="col-sm-5 text-center text-sm-right" style="margin-left: -8%;">
        <h4 class="text-7 mb-0" id="<?php echo $_COOKIE['group']; ?>-title">Kargo Takip</h4>
        <h2 class="mb-0" id="<?php echo $_COOKIE['group']; ?>-text" style="font-size: 1.2rem">Formu</h2>
    </div>
    </div>
    <hr>
    </header>
    <main>
<?php   /* Start Php Function */
    if(isset($_GET["no"]))
    {
        $fno = $_GET['no'];
        $fdate = $_SESSION['fdate'];
        $fstaff = $_SESSION['fstaff'];
        $fcustomer = $_SESSION['fcustomer'];
        $feno = $_SESSION['feno'];
        $type = $_SESSION['type'];
        $sql = "SELECT * FROM forms LEFT JOIN cargo ON forms.F_No=cargo.F_No WHERE forms.F_No = '$fno'";
        $result = mysqli_query($db,$sql);
    	$row = mysqli_fetch_array($result);
        if(isset($row['C_ID']) && $_GET['group']==$row[2])
        {
            $user=$row[4];
            $eno=$row[8];
            $sno=$row[9];
            $tno=$row[14];
            $direct=$row[15];
            $type=$row[16];
            $brand=$row[17];
            $model=$row[18];

            $dcperson=$row[19];
            $dcname=$row[20];
            $dcadress=$row[21];
            $dcphone=$row[22];

            $rcperson=$row[23];
            $rcname=$row[24];
            $rcadress=$row[25];
            $rcphone=$row[26];
            $detail=$row[27];
        }
        else
        {
            ?><script>window.location.href = 'index.php?err=1';</script><?php
        }
?>
<div class="row">
    <div class="col-sm-6"><strong>Tarih:</strong> <?php echo $date;?></div>
    <div class="col-sm-6 text-sm-right"> <strong>Form No:</strong> #<?php echo $id;?></div>
  </div>
  <div class="card card-add">
<div>
<div class="fleft box-1">
    <div>Envanter No</div>
    <div>Gönderen</div>
    <div>Takip No</div>
    <div>Kargo Yönü</div>
</div>
<div class="fleft box-2">
    <input value="#<?php echo $eno;?>">
    <input value="<?php echo $user;?>">
    <input value="<?php echo $tno;?>">
    <div>
        <form>
            <input type="radio" id="outgoing" name="yesno" <?php if($direct==0){echo "checked='true'";}?> value="1" class="fleft">
            <label for="outgoing" class="fleft">Giden</label>
            <input type="radio" id="incoming" name="yesno" <?php if($direct==1){echo "checked='true'";}?> value="0" class="fleft">
            <label for="incoming" class="fleft">Gelen</label>
        </form>
    </div>
</div>
<div class="fright box-2">
    <input value="<?php echo $sno;?>">
    <input value="<?php echo $type;?>">
    <input value="<?php echo $brand;?>">
    <input value="<?php echo $model;?>">
</div>
<div class="fright box-1">
    <div>Cihaz Seri No</div>
    <div>Cihaz Türü</div>
    <div>Cihaz Markası</div>
    <div>Cihaz Modeli</div>
</div>
</div>
</div>

<div class="card card-add">
    <div class="fleft">
    <div class="fleft box-header">Gönderici Firma Bilgileri</div>
<div class="fleft box-1">
    <div>Yetkili Adı:</div>
    <div>F. Adı:</div>
    <div>Adresi:</div>
    <div>Telefon No:</div>
</div>
<div class="fleft box-4">
    <input value="<?php echo $dcperson;?>">
    <input value="<?php echo $dcname;?>">
    <input value="<?php echo $dcadress;?>">
    <input value="<?php echo $dcphone;?>">
</div>
</div></div>
<div class="card card-add">
    <div class="fleft">
    <div class="fleft box-header">Alıcı Firma Bilgileri</div>
<div class="fleft box-1">
    <div>Yetkili Adı:</div>
    <div>F. Adı:</div>
    <div>Adresi:</div>
    <div>Telefon No:</div>
</div>
<div class="fleft box-4">
    <input value="<?php echo $rcperson;?>">
    <input value="<?php echo $rcname;?>">
    <input value="<?php echo $rcadress;?>">
    <input value="<?php echo $rcphone;?>">
</div>
</div>
</div>
<div class="card card-add">
    <div class="fleft">
        <div class="fleft box-header">Açıklama - Detay</div>
        <textarea class="fleft detail-box"><?php echo $detail?></textarea>
    </div>
</div>
    <div class="row" style="margin-top: 50px;">
        <div class="col-sm-6 text-sm-right order-sm-1"> <strong>Teslim Alan:</strong>
            <address>Ad / Soyad<br>İmza<br><br>
            <p style="color:red;"><?php echo $fcustomer; ?></p>
            </address>
            </div>
        <div class="col-sm-6 order-sm-0"> <strong>Teslim Eden:</strong>
            <address>Ad / Soyad<br>  İmza<br>
            <br><p style="color:red;"><?php echo $fstaff; ?></p>
            </address>
    </div>
    </div>
<div id="canvas" class="qr"></div>
<?php
}
else    /* If Not give an ID Empty Page Load */
{
?>
<div class="row">
    <div class="col-sm-6"><strong>Tarih:</strong> <?php echo $date;?></div>
    <div class="col-sm-6 text-sm-right"> <strong>Form No:</strong> #<?php echo $id;?></div>
</div>
<div class="card card-add">
<div>
<div class="fleft box-1">
    <div>Envanter No</div>
    <div>Gönderen</div>
    <div>Takip No</div>
    <div>Kargo Yönü</div>
</div>
<div class="fleft box-2">
    <a class="d-print-inpt" href="qrcode.php?pg=services">
        <div class="fa fa-qrcode" id="form-qr"></div>
    </a>
    <input id="eno" class="d-print-qr" <?php echo "value='".$eno."'";?>>
    <input>
    <input>
    <div>
        <form>
            <input type="radio" id="outgoing" name="yesno" value="1" class="fleft">
            <label for="outgoing" class="fleft">Giden</label>
            <input type="radio" id="incoming" name="yesno" value="0" class="fleft">
            <label for="incoming" class="fleft">Gelen</label>
        </form>
    </div>
</div>
<div class="fright box-2">
    <a class="d-print-inpt" href="qrcode.php?pg=services">
        <div class="fa fa-qrcode" id="form-qr"></div>
    </a>
    <input id="eno" class="d-print-qr" <?php echo "value='".$sno."'";?>>
    <input>
    <input>
    <input>
</div>
<div class="fright box-1">
    <div>Cihaz Seri No</div>
    <div>Cihaz Türü</div>
    <div>Cihaz Markası</div>
    <div>Cihaz Modeli</div>
</div>
</div>
</div>

<div class="card card-add">
    <div class="fleft">
    <div class="fleft box-header">Gönderici Firma Bilgileri</div>
<div class="fleft box-1">
    <div>Yetkili Adı:</div>
    <div>F. Adı:</div>
    <div>Adresi:</div>
    <div>Telefon No:</div>
</div>
<div class="fleft box-4">
    <input>
    <input>
    <input>
    <input>
</div>
</div></div>
<div class="card card-add">
    <div class="fleft">
    <div class="fleft box-header">Alıcı Firma Bilgileri</div>
<div class="fleft box-1">
    <div>Yetkili Adı:</div>
    <div>F. Adı:</div>
    <div>Adresi:</div>
    <div>Telefon No:</div>
</div>
<div class="fleft box-4">
    <input>
    <input>
    <input>
    <input>
</div>
</div>
</div>
<div class="card card-add">
    <div class="fleft">
        <div class="fleft box-header">Açıklama - Detay</div>
        <textarea class="fleft detail-box"></textarea>
    </div>
</div>
    <div class="row" style="margin-top: 50px;">
        <div class="col-sm-6 text-sm-right order-sm-1"> <strong>Onaylayan Personel:</strong>
            <address>Ad / Soyad<br>İmza<br>
            <br></address>
        </div>
        <div class="col-sm-6 order-sm-0"> <strong>Gönderen Personel:</strong>
            <address>Ad / Soyad<br>İmza<br>
            <br></address>
        </div>
    </div>
<div id="canvas" class="qr"></div>
<?php
}   /* End Php Function */
?>
</main>
    <!-- Footer -->
    <footer class="text-center mt-4">
    <div class="btn-group btn-group-sm d-print-none">
        <a href="javascript:window.print()" class="btn btn-light border text-black-50 shadow-none">
        <i class="fa fa-print"></i> Print</a>
        <a id="download" onclick="pdf()" class="btn btn-light border text-black-50 shadow-none">
        <i class="fa fa-download"></i> Download</a>
    </div>
    </footer>
</div>
</body>
</html>
<script type="text/javascript" src="assets/js/qrcodestyling.js"></script>
<script type="text/javascript">
  
    const qrCode = new QRCodeStyling({
      width: 60,
      height: 60,
      data: "<?php echo $id." ".$eno; ?>",
      dotsOptions: {
        color: "#000",
        type: "square"
      },
      backgroundOptions: {
        color: "#FFFFFF",
      }
    });
    qrCode.append(document.getElementById("canvas"));
  </script>
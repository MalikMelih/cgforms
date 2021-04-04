<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="assets/img/logo/logo.png" rel="icon">
<title>Çorumgaz Forms | Teslim Tutanağı</title>
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
      <img id="logo" src="https://evezne.net/assets/images/company_logo/f3012.png" title="Koice" alt="Koice" style="height: 50px;">
    </div>
    <div class="col-sm-5 text-center text-sm-right" style="margin-left: -8%;">
      <h4 class="text-7 mb-0" style="color: #3bb7e8;">Malzeme Teslim</h4>
      <h2 class="mb-0" style="color: #8dcf69; font-size: 1.2rem">Formu</h2>
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
        $fperson = $_SESSION['fperson'];
        $fverify = $_SESSION['fverify'];
        $feno = $_SESSION['feno'];
        $type = $_SESSION['type'];
        $sql = "SELECT * FROM services WHERE F_No = '$fno'";
        $result = mysqli_query($db,$sql);
    	$row = mysqli_fetch_array($result);
        if(isset($row['SV_ID']))
        {

        }
        else
        {
            header("location:index.php?err=1");
        }
?>
  <div class="row">
    <div class="col-sm-6"><strong>Tarih:</strong> <?php echo $date;?></div>
    <div class="col-sm-6 text-sm-right"> <strong>Form No:</strong> #<?php echo $id;?></div>
  </div>
  <div class="card card-add">
<div>
    <div class="fleft box-1">
    <div>Servis Form No</div>
    <div>Teslim Türü</div>
    <div>Teslim Tarihi</div>
</div>
<div class="fleft box-2">
    <input value="#">
    <input>
    <input>
</div>
<div class="fright box-2">
<input>
<input>
<div><?php echo $name.' '.$sname;?></div>
</div>
    <div class="fright box-1">
        <div>Firma</div>
        <div>Şehir ve Ofis</div>
        <div>İşlemi Yapan</div>
    </div>
</div>
</div>
<div class="card card-add">
    <div class="fleft">
        <div class="fleft box-header">Teslim Alınan Malzemeler</div>
        <div class="fleft box-3 text-center">
            <div class="details-header">Adet</div>
            <input>
            <input>
            <input>
            <input>
            <input>
            <input>
            <input>
            <input>
        </div>
        <div class="fleft box-4">
            <div class="details-header">Malzeme</div>
            <input>
            <input>
            <input>
            <input>
            <input>
            <input>
            <input>
            <input>
        </div>
    </div>
</div>
<div class="card card-add">
    <div class="fleft">
        <div class="fleft box-header">Teslim Edilen Malzemeler</div>
        <div class="fleft box-3 text-center">
            <div class="details-header">Adet</div>
            <input>
            <input>
            <input>
            <input>
            <input>
            <input>
            <input>
            <input>
        </div>
        <div class="fleft box-4">
            <div class="details-header">Malzeme</div>
            <input>
            <input>
            <input>
            <input>
            <input>
            <input>
            <input>
            <input>
        </div>
    </div>
</div>
    <div class="row" style="margin-top: 50px;">
    <div class="col-sm-6 text-sm-right order-sm-1"> <strong>Teslim Alan:</strong>
      <address>Ad / Soyad<br>İmza<br>
      <br></address>
    </div>
    <div class="col-sm-6 order-sm-0"> <strong>Teslim Eden:</strong>
      <address>Ad / Soyad<br>İmza<br>
      <br></address>
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
    <div>Servis Form No</div>
    <div>Teslim Türü</div>
    <div>Teslim Tarihi</div>
</div>
<div class="fleft box-2">
    <a href="qrcode.php?pg=delivery&type=sno">
        <div class="fa fa-qrcode" id="form-qr"></div>
    </a>
    <input id="eno" style=" width: calc( 100% - 40px );" <?php echo "value='".$sno."'";?>>
    <input>
    <input>
</div>
<div class="fright box-2">
<input>
<input>
<div><?php echo $name.' '.$sname;?></div>
</div>
    <div class="fright box-1">
        <div>Firma</div>
        <div>Şehir ve Ofis</div>
        <div>İşlemi Yapan</div>
    </div>
</div>
</div>
<div class="card card-add">
    <div class="fleft">
        <div class="fleft box-header">Teslim Alınan Malzemeler</div>
        <div class="fleft box-3 text-center">
            <div class="details-header">Adet</div>
            <input>
            <input>
            <input>
            <input>
            <input>
            <input>
            <input>
            <input>
        </div>
        <div class="fleft box-4">
            <div class="details-header">Malzeme</div>
            <input>
            <input>
            <input>
            <input>
            <input>
            <input>
            <input>
            <input>
        </div>
    </div>
</div>
<div class="card card-add">
    <div class="fleft">
        <div class="fleft box-header">Teslim Edilen Malzemeler</div>
        <div class="fleft box-3 text-center">
            <div class="details-header">Adet</div>
            <input>
            <input>
            <input>
            <input>
            <input>
            <input>
            <input>
            <input>
        </div>
        <div class="fleft box-4">
            <div class="details-header">Malzeme</div>
            <input>
            <input>
            <input>
            <input>
            <input>
            <input>
            <input>
            <input>
        </div>
    </div>
</div>
    <div class="row" style="margin-top: 50px;">
    <div class="col-sm-6 text-sm-right order-sm-1"> <strong>Teslim Alan:</strong>
      <address>Ad / Soyad<br>İmza<br>
      <br></address>
    </div>
    <div class="col-sm-6 order-sm-0"> <strong>Teslim Eden:</strong>
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
<script type="text/javascript" src="https://unpkg.com/qr-code-styling/lib/qr-code-styling.js"></script>
<script type="text/javascript">
  
    const qrCode = new QRCodeStyling({
      width: 60,
      height: 60,
      data: "<?php echo $id; ?>",
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
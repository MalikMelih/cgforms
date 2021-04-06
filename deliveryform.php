<?php //Manual type form date & id config
//$date = "00/00/0000";
//$id = "00000000";
    $_SESSION['group'] = isset($_GET['group']);
    if (isset($_SESSION['pdf']))
    {
      $pdf = $_SESSION['pdf'];
    }
    if (isset($pdf) && $pdf==1 && isset($_GET['no']))
    {
        $no = $_GET['no'];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
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
  <!-- Test Item -->
    <a href="javascript:history.back()">
      <div class="fa fa-arrow-left" style="position: absolute;top: 20px;left: 100px;width: 48px;height: 48px;line-height: 48px;font-size: 25px;text-align: center;background-color: #3a3a3a;border-radius: 64px;color: white;"></div>
    </a>
  <!-- /Test Item -->
    <div id="invoice">
      <iframe src="docs/pdf/delivery/<?php echo $no;?>.PDF#toolbar=0&scrollbar=0&navpanes=0&scrollbar=0" width="100%" height="1070px" style="display: block;margin: 15px auto;max-width: 850px;background-color: #fff;border-radius: 6px;"></iframe>
    </div>
  </body>
</html>
<?php   /* Start Php Function */
    }
    else if(isset($_GET["no"]))
    {
      $fno = $_GET['no'];
      $fdate = $_SESSION['fdate'];
      $fstaff = $_SESSION['fstaff'];
      $fcustomer = $_SESSION['fcustomer'];
      $feno = $_SESSION['feno'];
      $type = $_SESSION['type'];
        $sql = "SELECT * FROM forms LEFT JOIN delivery ON forms.F_No=delivery.F_No WHERE forms.F_No = '$fno' LIMIT 1";
        $result = mysqli_query($db,$sql);
    	  $row = mysqli_fetch_array($result);
        if(isset($row['DV_ID']) && $_GET['group']==$row[2])
        {
          $sfno = $row[9];
          $company = $row[17];
          $city = $row[18];
          $dltype = $row[15];
          $dltime = $row[16];
          $ria = $row[19];
          $rin = $row[20];
          $dia = $row[21];
          $din = $row[22];

          if(strlen($dia) > 1)
          {
              $dia = explode (",",$dia);
          }
          if(strlen($din) > 1)
          {
              $din = explode (",",$din);
          }
          if(strlen($ria) > 1)
          {
              $ria = explode (",",$ria);
          }
          if(strlen($rin) > 1)
          {
              $rin = explode (",",$rin);
          }
        }
        else
        {
          ?><script>window.location.href = 'index.php?err=1';</script><?php
        }
?>
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
        <img id="logo" src="assets/img/logo/<?php echo $_COOKIE['group'];?>logo.png" style="height: 50px;">
    </div>
    <div class="col-sm-5 text-center text-sm-right" style="margin-left: -8%;">
        <h4 class="text-7 mb-0" id="<?php echo $_COOKIE['group']; ?>-title">Malzeme Teslim</h4>
        <h2 class="mb-0" id="<?php echo $_COOKIE['group']; ?>-text" style="font-size: 1.2rem">Formu</h2>
    </div>
    </div>
    <hr>
    </header>
  <main>
  <div class="row">
    <div class="col-sm-6"><strong>Tarih:</strong> <?php echo $fdate;?></div>
    <div class="col-sm-6 text-sm-right"> <strong>Form No:</strong> #<?php echo $fno;?></div>
  </div>
  <div class="card card-add">
<div>
    <div class="fleft box-1">
    <div>Servis Form No</div>
    <div>Teslim Türü</div>
    <div>Teslim Tarihi</div>
</div>
<div class="fleft box-2">
    <input value="#<?php echo $sfno;?>">
    <input value="<?php echo $dltype;?>">
    <input value="<?php echo $dltime;?>">
</div>
<div class="fright box-2">
<input value="<?php echo $company;?>">
<input value="<?php echo $city;?>">
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
            <?php
              for($i=0;$i < count($ria);$i++)
              {
                echo "<input value='".$ria[$i]."'>";
              }
            ?>
        </div>
        <div class="fleft box-4">
            <div class="details-header">Malzeme</div>
            <?php
              for($i=0;$i < count($rin);$i++)
              {
                echo "<input value='".$rin[$i]."'>";
              }
            ?>
        </div>
    </div>
</div>
<div class="card card-add">
    <div class="fleft">
        <div class="fleft box-header">Teslim Edilen Malzemeler</div>
        <div class="fleft box-3 text-center">
            <div class="details-header">Adet</div>
            <?php
              for($i=0;$i < count($dia);$i++)
              {
                echo "<input value='".$dia[$i]."'>";
              }
            ?>
        </div>
        <div class="fleft box-4">
            <div class="details-header">Malzeme</div>
            <?php
              for($i=0;$i < count($din);$i++)
              {
                echo "<input value='".$din[$i]."'>";
              }
            ?>
        </div>
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
      data: "<?php echo $id." ".$prnt; ?>",
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
<?php
}
else    /* If Not give an ID Empty Page Load */
{
  if(isset($_GET['eno'])) { $eno = $_GET['eno']; } else { $eno = ""; }
?>
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
        <img id="logo" src="assets/img/logo/<?php echo $_COOKIE['group'];?>logo.png" style="height: 50px;">
    </div>
    <div class="col-sm-5 text-center text-sm-right" style="margin-left: -8%;">
        <h4 class="text-7 mb-0" id="<?php echo $_COOKIE['group']; ?>-title">Malzeme Teslim</h4>
        <h2 class="mb-0" id="<?php echo $_COOKIE['group']; ?>-text" style="font-size: 1.2rem">Formu</h2>
    </div>
    </div>
    <hr>
    </header>
  <main>
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
    <a class="d-print-inpt" href="qrcode.php?pg=services">
        <div class="fa fa-qrcode" id="form-qr"></div>
    </a>
    <input id="eno" class="d-print-qr" <?php echo "value='".$eno."'";?>>
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
      data: "<?php echo $id." ".$prnt; ?>",
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
<?php
}   /* End Php Function */
?>
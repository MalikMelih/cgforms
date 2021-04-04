<?php   /* Start Php Function */
    if(isset($_GET['no']))
    {
        $fno = $_GET['no'];
        $sql = "SELECT F_Pdf FROM forms WHERE F_No = '$fno'";
        $result = mysqli_query($db,$sql);
        $row = mysqli_fetch_array($result);
        $pdf = $row[0];
    }
    if (isset($pdf) && $pdf==1 && isset($_GET['no']))
    {
        $no = $_GET['no'];
?>
        <!DOCTYPE html>
        <html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
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
            <div id="invoice"><iframe src="docs/pdf/services/<?php echo $no;?>.PDF#toolbar=0" width="100%" height="1070px" style="display: block;margin: 15px auto;max-width: 850px;background-color: #fff;border-radius: 6px;"></iframe></div>
        </div>
        </body>
        </html>
        <?php
    }
    else if(isset($_GET["no"]))
    {
        $fno = $_GET['no'];
        $fdate = $_SESSION['fdate'];
        $fperson = $_SESSION['fperson'];
        $freceiver = $_SESSION['freceiver'];
        $feno = $_SESSION['feno'];
        $type = $_SESSION['type'];
        $sql = "SELECT * FROM services WHERE F_No = '$fno'";
        $result = mysqli_query($db,$sql);
    	$row = mysqli_fetch_array($result);
        if(isset($row['SV_ID']))
        {
            $fuser=$row['F_User'];
            $dtime=$row['SV_DTime'];
            $dtype=$row['SV_DType'];
            $serial=$row['SV_Serial'];
            $type=$row['SV_Type'];
            $owner=$row['SV_Owner'];
            $brand=$row['SV_Brand'];
            $model=$row['SV_Model'];
            $error=$row['SV_Error'];
            $procces=$row['SV_Procces'];
            $piece=$row['SV_Piece'];
            $material=$row['SV_Material'];
            $detail=$row['SV_Detail'];
            if(strlen($error) > 1)
            {
                $errors = explode (",",$error);
            }
            if(strlen($procces) > 1)
            {
                $procceses = explode (",",$procces);
            }
            if(strlen($piece) > 1)
            {
                $pieces = explode (",",$piece);
            }
            if(strlen($material) > 1)
            {
                $materials = explode (",",$material);
            }
        }
        else
        {
            header("location:index.php?err=1");
        }
?>
<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
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
                <img id="logo" src="assets/img/logo/logo-name.png" style="height: 50px;">
            </div>
            <div class="col-sm-5 text-center text-sm-right" style="margin-left: -8%;">
                <h4 class="text-7 mb-0" style="color: #3bb7e8;">Cihaz Servis</h4>
                <h2 class="mb-0" style="color: #8dcf69; font-size: 1.2rem">Formu</h2>
            </div>
        </div>
        <hr>
    </header>
    <main>
    <div class="row">
        <div class="col-sm-6"><strong>Tarih:</strong> <?php echo $fdate;?></div>
        <div class="col-sm-6 text-sm-right"> <strong>Form No:</strong> #<?php echo $fno; ?></div>
    </div>
    <div class="card card-add">
        <div>
            <div class="fleft box-1">
                <div>Envanter No</div>
                <div>İşlem Zamanı</div>
                <div>İşlemi Yapan</div>
                <div>Teslim Tarihi</div>
                <div>Teslim Türü</div>
            </div>
            <div class="fleft box-2">
                <input value="#<?php echo $feno;?>"/>
                <input value="<?php echo $fdate;?>"/>
                <div><?php echo $fuser;?></div>
                <input value="<?php echo $dtime;?>">
                <input value="<?php echo $dtype;?>">
            </div>
            <div class="fright box-2">
                <input value="<?php echo $serial;?>">
                <input value="<?php echo $type;?>">
                <input value="<?php echo $owner;?>">
                <input value="<?php echo $brand;?>">
                <input value="<?php echo $model;?>">
            </div>
            <div class="fright box-1">
                <div>Cihaz Seri No</div>
                <div>Cihaz Türü</div>
                <div>Cihaz Sahibi</div>
                <div>Cihaz Markası</div>
                <div>Cihaz Modeli</div>
            </div>
        </div>
    </div>
    <div class="card card-add">
        <div class="fleft">
            <div class="fleft box-header">Yapılan İşlemler</div>
            <div class="fleft details-box1">
                <div class="details-header">Belirtilen Arıza</div>
                <input value="<?php if(isset($errors[0])) {echo $errors[0];}?>">
                <input value="<?php if(isset($errors[1])) {echo $errors[1];}?>">
                <input value="<?php if(isset($errors[2])) {echo $errors[2];}?>">
                <input value="<?php if(isset($errors[3])) {echo $errors[3];}?>">
                <input value="<?php if(isset($errors[4])) {echo $errors[4];}?>">
            </div>
            <div class="fleft details-box2">
                <div class="details-header">Yapılan İşlem</div>
                <input value="<?php if(isset($procceses[0])) {echo $procceses[0];}?>">
                <input value="<?php if(isset($procceses[1])) {echo $procceses[1];}?>">
                <input value="<?php if(isset($procceses[2])) {echo $procceses[2];}?>">
                <input value="<?php if(isset($procceses[3])) {echo $procceses[3];}?>">
                <input value="<?php if(isset($procceses[4])) {echo $procceses[4];}?>">
            </div>
        </div>
    </div>
    <div class="card card-add">
        <div class="fleft">
            <div class="fleft box-header">Kullanılan Malzeme</div>
            <div class="fleft box-3">
                <div class="details-header">Adet</div>
                <input value="<?php if(isset($pieces[0])) {echo $pieces[0];}?>">
                <input value="<?php if(isset($pieces[1])) {echo $pieces[1];}?>">
                <input value="<?php if(isset($pieces[2])) {echo $pieces[2];}?>">
                <input value="<?php if(isset($pieces[3])) {echo $pieces[3];}?>">
            </div>
            <div class="fleft box-4">
                <div class="details-header">Malzeme</div>
                <input value="<?php if(isset($materials[0])) {echo $materials[0];}?>">
                <input value="<?php if(isset($materials[1])) {echo $materials[1];}?>">
                <input value="<?php if(isset($materials[2])) {echo $materials[2];}?>">
                <input value="<?php if(isset($materials[3])) {echo $materials[3];}?>">
            </div>
        </div>
    </div>
    <div class="card card-add">
        <div class="fleft">
            <div class="fleft box-header">Detay Bölümü</div>
            <textarea class="detail-box"><?php echo $detail;?></textarea>
        </div>
    </div>
    <div class="row" style="margin-top: 50px;">
        <div class="col-sm-6 text-sm-right order-sm-1"> <strong>Teslim Alan:</strong>
            <address>Ad / Soyad<br>İmza<br><br><p style="color:red;"><?php echo $freceiver; ?></p></address>
        </div>
        <div class="col-sm-6 order-sm-0"> <strong>Teslim Eden:</strong>
            <address>Ad / Soyad<br>İmza<br><br><p style="color:red;"><?php echo $fperson; ?></p></address>
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
    </body>
</html>
<script type="text/javascript" src="https://unpkg.com/qr-code-styling/lib/qr-code-styling.js"></script>
<script type="text/javascript">
  
    const qrCode = new QRCodeStyling({
      width: 60,
      height: 60,
      data: "<?php echo $id; ?>", //
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
else   /* If Not give an ID Empty Page Load */
{
?>
<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

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
                <img id="logo" src="assets/img/logo/logo-name.png" style="height: 50px;">
            </div>
            <div class="col-sm-5 text-center text-sm-right" style="margin-left: -8%;">
                <h4 class="text-7 mb-0" style="color: #3bb7e8;">Cihaz Servis</h4>
                <h2 class="mb-0" style="color: #8dcf69; font-size: 1.2rem">Formu</h2>
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
                <div>Envanter No</div>
                <div>İşlem Zamanı</div>
                <div>İşlemi Yapan</div>
                <div>Teslim Tarihi</div>
                <div>Teslim Türü</div>
            </div>
            <div class="fleft box-2">
                <a href="qrcode.php?pg=services&type=eno&sno=<?php echo $sno?>">
                    <div class="fa fa-qrcode" id="form-qr"></div>
                </a>
                <input id="eno" style=" width: calc( 100% - 40px );" <?php echo "value='".$eno."'";?>>
                <input value="<?php echo $ldate." - ".$time;?>"/>
                <div><?php echo $name." ".$sname;?></div>
                <input>
                <input>
            </div>
                <div class="fright box-2">
                        <a href="qrcode.php?pg=services&type=eno&sno=<?php echo $eno?>">
                    <div class="fa fa-qrcode" id="form-qr"></div>
                </a>
                <input id="eno" style=" width: calc( 100% - 40px );" <?php echo "value='".$sno."'";?>>
                <input>
                <input>
                <input>
                <input>
            </div>
            <div class="fright box-1">
                <div>Cihaz Seri No</div>
                <div>Cihaz Türü</div>
                <div>Cihaz Sahibi</div>
                <div>Cihaz Markası</div>
                <div>Cihaz Modeli</div>
            </div>
        </div>
    </div>
    <div class="card card-add">
        <div class="fleft">
            <div class="fleft box-header">Yapılan İşlemler</div>
            <div class="fleft details-box1">
                <div class="details-header">Belirtilen Arıza</div>
                <input>
                <input>
                <input>
                <input>
                <input>
            </div>
            <div class="fleft details-box2">
                <div class="details-header">Yapılan İşlem</div>
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
            <div class="fleft box-header">Kullanılan Malzeme</div>
            <div class="fleft box-3">
                <div class="details-header">Adet</div>
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
            </div>
        </div>
    </div>
    <div class="card card-add">
        <div class="fleft">
            <div class="fleft box-header">Detay Bölümü</div>
            <textarea class="detail-box"></textarea>
        </div>
    </div>

    <div class="row" style="margin-top: 50px;">
        <div class="col-sm-6 text-sm-right order-sm-1"> <strong>Teslim Alan:</strong>
            <address>Ad / Soyad<br>İmza<br><br></address>
        </div>
        <div class="col-sm-6 order-sm-0"> <strong>Teslim Eden:</strong>
            <address>Ad / Soyad<br>İmza<br><br></address>
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
    </body>
</html>
<script type="text/javascript" src="https://unpkg.com/qr-code-styling/lib/qr-code-styling.js"></script>
<script type="text/javascript">
  
    const qrCode = new QRCodeStyling({
      width: 60,
      height: 60,
      data: "<?php echo $id; ?>", //
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
<?php   /* Start Php Function */
//$date = "00/00/0000";
//$id = "00000000";
$_SESSION['group'] = isset($_GET['group']);
if(isset($_GET['eno']) && $_GET['eno']!="")
{
    $prnt = $_GET['eno'];
}
else if(isset($_GET['sno']) && $_GET['sno']!="")
{
    $prnt = $_GET['sno'];
}
else
{
    $prnt = "";
}
    if(isset($_GET["no"]))
    {
        $fno = $_GET['no'];
        $fdate = $_SESSION['fdate'];
        $fperson = $_SESSION['fperson'];
        $fverify = $_SESSION['fverify'];
        $feno = $_SESSION['feno'];
        $type = $_SESSION['type'];
        $sql = "SELECT * FROM scrap WHERE F_No = '$fno'";
        $result = mysqli_query($db,$sql);
    	$row = mysqli_fetch_array($result);
        if(isset($row['SF_ID']))
        {
            $fuser = $row[2];
            $repair=$row[6];
            $sftype=$row[8];
            $serial=$row[7];
            $brand=$row[9];
            $model=$row[10];
            $error=$row[11];
            $detail=$row[12];
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
<link rel="stylesheet" type="text/css" href="assets/css/css">
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/all.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/stylesheet.css">
</head>
<body>
<div class="container-fluid invoice-container" id="invoice">
        <header>
            <div class="row align-items-center">
                    <div class="col-sm-7 text-center text-sm-left mb-3 mb-sm-0">
                        <img id="logo" src="assets/img/logo/<?php echo $_SESSION['group']; ?>logo.png" style="height: 50px;">
                    </div>
                    <div class="col-sm-5 text-center text-sm-right" style="margin-left: -8%;">
                        <h4 class="text-7 mb-0" id="<?php echo $_SESSION['group']; ?>-title">Hurda Cihaz</h4>
                        <h2 class="mb-0" id="<?php echo $_SESSION['group']; ?>-text" style="font-size: 1.2rem">Formu</h2>
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
                        <div class="sub-boxs">Envanter No</div>
                        <div class="sub-boxs">İşlem Zamanı</div>
                        <div class="sub-boxs">İşlemi Yapan</div>
                        <div class="sub-boxs">Tamir Olabilir</div>
                    </div>
                    <div class="fleft box-2">
                        <input value="#<?php echo $feno;?>"/>
                        <input value="<?php echo $fdate;?>"/>
                        <div><?php echo $fuser;?></div>
                        <div>
                            <form>
                                <input type="radio" id="yes" name="yesno" <?php if($repair==1){echo "checked='true'";}?> value="1" class="fleft">
                                <label for="yes" class="fleft">Evet</label>
                                <input type="radio" id="no" name="yesno" <?php if($repair==0){echo "checked='true'";}?> value="0" class="fleft">
                                <label for="no" class="fleft">Hayır</label>
                            </form>
                        </div>
                    </div>
                    <div class="fright box-2">
                        <input value="<?php echo $serial; ?>">
                        <input value="<?php echo $sftype; ?>">
                        <input value="<?php echo $brand; ?>">
                        <input value="<?php echo $model; ?>">
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
                    <div class="fleft box-header">Belirlenen Arızalar</div>
                    <div class="fleft details">
                        <input value="<?php echo $error; ?>">
                        <input>
                        <input>
                        <input>
                    </div>
                    <div class="fleft details">
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
                        <textarea class="detail-box"><?php echo $detail; ?></textarea>
                    </div>
                </div>

                <div class="row" style="margin-top: 50px;">
                    <div class="col-sm-6 text-sm-right order-sm-1"> <strong>İşlemi Onaylayan:</strong>
                    <address>
                    Ad / Soyad<br>İmza<br>
                    <br><p style="color:red;"><?php echo $fperson; ?></p>
                    </address>
                </div>
                <div class="col-sm-6 order-sm-0"> <strong>İşlemi Yapan:</strong>
                    <address>Ad / Soyad<br>  İmza<br>
                    <br><p style="color:red;"><?php echo $fverify; ?></p>
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
<script type="text/javascript" src="https://unpkg.com/qr-code-styling/lib/qr-code-styling.js"></script>
<script type="text/javascript">
    const qrCode = new QRCodeStyling({
    width: 60,
    height: 60,
    data: "<?php echo $fno; ?>",
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
?>
<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="assets/img/logo/logo.png" rel="icon">
<title>Çorumgaz Forms | Servis Formu</title>
<link rel="stylesheet" type="text/css" href="assets/css/css">
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/all.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/stylesheet.css">
</head>
<body>
<div class="container-fluid invoice-container" id="invoice">
        <header>
        <div class="row align-items-center">
                    <div class="col-sm-7 text-center text-sm-left mb-3 mb-sm-0">
                        <img id="logo" src="assets/img/logo/<?php echo $_SESSION['group']; ?>logo.png" style="height: 50px;">
                    </div>
                    <div class="col-sm-5 text-center text-sm-right" style="margin-left: -8%;">
                        <h4 class="text-7 mb-0" id="<?php echo $_SESSION['group']; ?>-title">Hurda Cihaz</h4>
                        <h2 class="mb-0" id="<?php echo $_SESSION['group']; ?>-text" style="font-size: 1.2rem">Formu</h2>
                    </div>
            </div>
        <hr>
        </header>
        <main>
            <div class="row">
                <div class="col-sm-6"><strong>Tarih:</strong> <?php echo $date;?></div>
                <div class="col-sm-6 text-sm-right"> <strong>Form No:</strong> #<?php echo $id; ?></div>
            </div>
            <div class="card card-add">
                <div>
                    <div class="fleft box-1">
                        <div class="sub-boxs">Envanter No</div>
                        <div class="sub-boxs">İşlem Zamanı</div>
                        <div class="sub-boxs">İşlemi Yapan</div>
                        <div class="sub-boxs">Tamir Olabilir</div>
                    </div>
                    <div class="fleft box-2">
                    <a class="d-print-inpt" href="qrcode.php?pg=services">
                        <div class="fa fa-qrcode" id="form-qr"></div>
                    </a>
                    <input id="eno" class="d-print-qr" <?php echo "value='".$eno."'";?>>
                        <input value="<?php echo $date." - ".$time; ?>"/>
                        <div><?php echo $name." ".$sname;?></div>
                        <div>
                            <form>
                                <input type="radio" id="yes" name="yesno" value="1" class="fleft">
                                <label for="yes" class="fleft">Evet</label>
                                <input type="radio" id="no" name="yesno" value="0" class="fleft">
                                <label for="no" class="fleft">Hayır</label>
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
                    <div class="fleft box-header">Belirlenen Arızalar</div>
                    <div class="fleft details">
                        <input>
                        <input>
                        <input>
                        <input>
                    </div>
                    <div class="fleft details">
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
                    <div class="col-sm-6 text-sm-right order-sm-1"> <strong>İşlemi Onaylayan:</strong>
                    <address>
                    Ad / Soyad<br>İmza<br>
                    <br><p style="color:red;"></p>
                    </address>
                </div>
                <div class="col-sm-6 order-sm-0"> <strong>İşlemi Yapan:</strong>
                    <address>Ad / Soyad<br>  İmza<br>
                    <br><p style="color:red;"></p>
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
<script type="text/javascript" src="https://unpkg.com/qr-code-styling/lib/qr-code-styling.js"></script>
<script type="text/javascript">
    const qrCode = new QRCodeStyling({
    width: 60,
    height: 60,
    data: "<?php echo $fno; ?>",
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
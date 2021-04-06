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
        <title>Çorumgaz Forms | Hurda Cihaz Formu</title>
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
            <iframe src="docs/pdf/scrap/<?php echo $no;?>.PDF#toolbar=0&scrollbar=0&navpanes=0&scrollbar=0" width="100%" height="1070px" style="display: block;margin: 15px auto;max-width: 850px;background-color: #fff;border-radius: 6px;"></iframe>
        </div>
    </body>
</html>
<?php   /* Start Php Function */
    }
    else if(isset($_GET["no"]))
    {
        $fno = $_GET['no'];
        $fdate = $_SESSION['fdate'];
        $fperson = $_SESSION['fstaff'];
        $fverify = $_SESSION['fcustomer'];
        $feno = $_SESSION['feno'];
        $type = $_SESSION['type'];
        $sql = "SELECT * FROM forms LEFT JOIN scrap ON forms.F_No=scrap.F_No WHERE forms.F_No = '$fno' LIMIT 1";
        $result = mysqli_query($db,$sql);
        $row = mysqli_fetch_array($result);
        if(isset($row['SF_ID']) && $_GET['group']==$row[2])
        {
            $fuser=$row[3];
            $repair=$row[14];
            $sftype=$row[15];
            $serial=$row[9];
            $brand=$row[16];
            $model=$row[17];
            $error=$row[18];
            $detail=$row[19];
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
<title>Çorumgaz Forms | Hurda Cihaz Formu</title>
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
        <img id="logo" src="assets/img/logo/<?php echo $_COOKIE['group'];?>logo.png" style="height: 50px;">
    </div>
    <div class="col-sm-5 text-center text-sm-right" style="margin-left: -8%;">
        <h4 class="text-7 mb-0" id="<?php echo $_COOKIE['group']; ?>-title">Hurda Cihaz</h4>
        <h2 class="mb-0" id="<?php echo $_COOKIE['group']; ?>-text" style="font-size: 1.2rem">Formu</h2>
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
                        <address>Ad / Soyad<br>İmza<br><br>
                        <p style="color:red;"><?php echo $fperson; ?></p>
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
<script type="text/javascript" src="assets/js/qrcodestyling.js"></script>
<script type="text/javascript">
    const qrCode = new QRCodeStyling({
    width: 60,
    height: 60,
    data: "<?php echo $fno." ".$prnt; ?>",
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
<title>Çorumgaz Forms | Hurda Cihaz Formu</title>
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
        <img id="logo" src="assets/img/logo/<?php echo $_COOKIE['group'];?>logo.png" style="height: 50px;">
    </div>
    <div class="col-sm-5 text-center text-sm-right" style="margin-left: -8%;">
        <h4 class="text-7 mb-0" id="<?php echo $_COOKIE['group']; ?>-title">Hurda Cihaz</h4>
        <h2 class="mb-0" id="<?php echo $_COOKIE['group']; ?>-text" style="font-size: 1.2rem">Formu</h2>
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
<script type="text/javascript" src="assets/js/qrcodestyling.js"></script>
<script type="text/javascript">
    const qrCode = new QRCodeStyling({
    width: 60,
    height: 60,
    data: "<?php echo $fno." ".$prnt; ?>",
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
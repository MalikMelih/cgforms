<?php
include("alert.php");
include("assets/db");

if(isset($_SESSION["err"]) && $_SESSION["err"]!=null)
	{
		errormsg($_SESSION['err']);
		$_SESSION['err']=null;
	}

	//QR Kod Çalışması İçin Gerekli
	if(isset($_GET['qr']))
    {
		if($_GET['type']=="eno")
		{
			$eno = $_GET['qr'];
		}
		if($_GET['type']=="sno")
		{
			$sno = $_GET['qr'];
		}
		if(isset($_GET['eno']))
		{
			$eno = $_GET['eno'];
		}
		if(isset($_GET['sno']))
		{
			$sno = $_GET['sno'];
		}
    }
    else
    {
		$eno = "";
        $sno = "";
    }

	$nick = $_SESSION['Nick'];

$mac='UNKNOWN';
foreach(explode("\n",str_replace(' ','',trim(`getmac`,"\n"))) as $i)
if(strpos($i,'Tcpip')>-1){$mac=substr($i,0,17);break;}

	if(!isset($_SESSION["Nick"]))
	{
		header("location:login.php");
	}
	else
	{
		$sql = "SELECT U_Name, U_SName, U_Theme FROM cgusers WHERE U_Nick = '$nick'";
    	$result = mysqli_query($db,$sql);
    	$row = mysqli_fetch_array($result);
		$name = $row[0];
		$sname = $row[1];
		$theme = $row[2];
		if(isset($_GET['no']))
		{
			$id = $_GET['no'];
		}
		else
		{
			$sql = "SELECT F_No FROM forms ORDER BY F_No DESC LIMIT 1";
			$result = mysqli_query($db,$sql);
			$row = mysqli_fetch_array($result);
			if(substr($row[0],0,6)==date("ymd"))
			{
				$last = substr($row[0],-2)+1;
				if(strlen($last)<2)
				{
					$iddate = date("ymd")."0";
					$id = $iddate.$last;
				}
				else
				{
					$id = date("ymd").$last;
				}
			}
			else
			{
				$id = date("ymd")."01";
			}
		}
		
	}
	$ldate = date("d/m/Y");
	$date = date("d/m/Y");
	$time = date("H:i");
?>
<?php
include("alert.php"); //Error Alert Requered Page
include("assets/db"); //Database Connection Page

	//Display Error Data
	if(isset($_SESSION["err"]) && $_SESSION["err"]!=null)
	{
		errormsg($_SESSION['err']);
		$_SESSION['err']=null;
	}

	//Group Config
	if(!isset($_GET['group']))
	{
		$_COOKIE['group'] = "gaz";
	}
	else
	{
		$_COOKIE['group'] = $_GET['group'];
	}

	//Theme Config
	if(isset($_GET['th']))
	{
		if($_GET['th']==1)
		{
			$sql = "UPDATE cgusers SET U_Theme = 0 WHERE U_Nick = '".$_SESSION['Nick']."';";
			mysqli_query($db, $sql);
			header('Location: ' . $_SERVER['HTTP_REFERER']);
		}
		else
		{
			$sql = "UPDATE cgusers SET U_Theme = 1 WHERE U_Nick = '".$_SESSION['Nick']."';";
			mysqli_query($db, $sql);
			header('Location: ' . $_SERVER['HTTP_REFERER']);
		}
	}

	//QR Code System Requered Part
	if(isset($_GET['eno']))
    {
		$eno = $_GET['eno'];
		if(isset($_GET['sno']))
		{
			$sno = $_GET['sno'];
		}
		else
		{
			$sno = "";
		}
    }
    else
    {
		$eno = "";
        $sno = "";
    }

	//Login Session Controls
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
			if($row)
			{
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
			else
			{
				$id = date("ymd")."01";
			}
		}
		
	}
	$ldate = date("d/m/Y");
	$date = date("d/m/Y");
	$time = date("H:i");

	//Qr Write Serial Or Inventory No

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
?>
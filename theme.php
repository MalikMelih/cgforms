<?php
if(isset($theme) && $theme==1)
{
	echo "<link rel='stylesheet' type='text/css' href='assets/css/dark.css'>";
	$thtext = "Aydınlık Mod'a Geç";
	$thicon = "fas fa-sun";
}
else if (isset($theme) && $theme==0)
{
	echo "<link rel='stylesheet' type='text/css' href='assets/css/light.css'>";
	$thtext = "Aydınlık Mod'a Geç";
	$thicon = "fas fa-moon";
}
else
{
	$da = date("a");
	$dh = date("h");
	if($da=="am")
	{
		if($dh==12)
		{
			echo "<link rel='stylesheet' type='text/css' href='assets/css/dark.css'>";
		}
		else if($dh<5)
		{
			echo "<link rel='stylesheet' type='text/css' href='assets/css/dark.css'>";
		}
		else
		{
			echo "<link rel='stylesheet' type='text/css' href='assets/css/light.css'>";
		}
	}
	else
	{
		if($dh>=8 && $dh!=12 )
		{
			echo "<link rel='stylesheet' type='text/css' href='assets/css/dark.css'>";
		}
		else
		{
			echo "<link rel='stylesheet' type='text/css' href='assets/css/light.css'>";
		}
	}
}
?>
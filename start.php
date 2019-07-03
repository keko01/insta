<?php
require('class.php');
@set_time_limit(0);
@clearstatcache();
@ini_set('max_execution_time',0);
@ini_set('output_buffering',0);

echo "TurkHackTeam.Org - Quiec Gururla Sunar!\n";

echo "Kardeşim Kullanıyorsun Bir Teşekkürü Eksik Etmezsin :)\n";

echo " -----------------------------\n";

echo "Kaç adet hesap istiyorsunuz [Fazla Yapmak Sunucuzu Yorar][?]:";
$count = trim(fgets(STDIN, 1024));
echo "Kaç saniyede bir üretilsin [10 yapmanız önerilir] [?]:";
$sleep = trim(fgets(STDIN, 1024));
echo "[!] Hesaplar oluşuyor. . .\n\n";
$i = new instaCreator();
$i->userCreate($count,$sleep);

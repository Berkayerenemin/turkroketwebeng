<?php 

/* 
Veritabani baglantimizi yapiyoruz
*/

$hostadresi        =	"sql107.epizy.com";
$kullaniciadi      =	"epiz_33481074";
$sifre             =	"hq9MgYF7RQ5Xe";
$veritabani        =	"epiz_33481074_uye";

$baglanti = mysqli_connect($hostadresi,$kullaniciadi,$sifre,$veritabani);
if (mysqli_connect_errno())
{
echo "MySQL bağlantısı başarısız: " . mysqli_connect_error();
}
?>




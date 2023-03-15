<?php 

/* 
Veritabani baglantimizi yapiyoruz
*/

$hostadresi        =	"sql107.epizy.com";
$kullaniciadi      =	"epiz_33481074";
$sifre             =	"hq9MgYF7RQ5Xe";
$veritabani        =	"epiz_33481074_gonullu";

$baglanti = mysqli_connect($hostadresi,$kullaniciadi,$sifre,$veritabani);
if (mysqli_connect_errno())
{
echo "MySQL ba�lant�s� ba�ar�s�z: " . mysqli_connect_error();
}
?>
<?php 

/* 
Veritabani baglantimizi yapiyoruz
*/

$hostadresi        =	"localhost";
$kullaniciadi      =	"root";
$sifre             =	"asd123456";
$veritabani        =	"uyeler";

$baglanti = mysqli_connect($hostadresi,$kullaniciadi,$sifre,$veritabani);
if (mysqli_connect_errno())
{
echo "MySQL ba�lant�s� ba�ar�s�z: " . mysqli_connect_error();
}
?>




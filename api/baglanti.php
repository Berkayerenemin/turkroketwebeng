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
echo "MySQL bağlantısı başarısız: " . mysqli_connect_error();
}
?>




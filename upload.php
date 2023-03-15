<?php

/*Yüklenilecek dosyanın adı alındı*/
$filename = $_FILES['file']['name'];

/*Dosyanın nereye kaydedileceği belirlendi.*/
$location = "bildirim/".$filename;

/* Dosya local dosyalama sistemine kaydedildi */
if( move_uploaded_file($_FILES['file']['tmp_name'], $location)){
    echo
    "<script> alert('Geri bildirim başarıyla alındı.'); </script>";
}else{
    echo
    "<script> alert('Geri bildirim alınamadı. Başka bir şekilde tekrar deneyiniz.'); </script>";
}
?>
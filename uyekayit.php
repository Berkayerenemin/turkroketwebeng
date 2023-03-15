<?php
session_start();
include("baglanti.php"); //veritabanını ekliyoruz

$username = $_POST["isim"];
$phone = $_POST["tel"];
$email = $POST["email"]
$duplicate = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username' OR email = '$email'");

if(mysqli_num_rows($duplicate) > 0){
    echo 
    "<script> alert('Halihazırda bir gönüllü başvurunuz mevcut'); </script>";
}
else{
    $query = "INSERT INTO users VALUES ('','$username','$phone','$email')";
    mysqli_query($baglanti,$query);
    echo
    "<script> alert('Gönüllü başvurunuz başarıyla alındı.'); </script>";

}
?>
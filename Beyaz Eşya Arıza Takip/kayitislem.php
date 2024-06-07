<?php
session_start();
include("baglanti.php");
$ad=$_POST["ad"];
$soyad=$_POST["soyad"];
$email=$_POST["eposta"];
$sifre=$_POST["sifre"];

if (strlen($email) <= 4)
   {
    echo 'doğru bir email girin';
    header("Refresh:2; url=kayit.php");
    }
    else if (strlen($sifre) <= 4) {
    echo 'daha uzun bir sifre belirleyin';
    header("Refresh:2; url=kayit.php");
    }
    else {
        $query = "SELECT * FROM uyeler WHERE email='".$email."'";
        $result = mysqli_query($baglanti, $query) or die("sorgu Hatası");
        $num_row = mysqli_num_rows($result);
        $row = mysqli_fetch_array($result);
        $insert_row = $baglanti->query("INSERT INTO uyeler (id,ad,soyad,email,sifre) VALUES
        ('','".$ad."','".$soyad."','".$email."','".$sifre."')");

if ($insert_row) {
    $_SESSION['kid'] = $baglanti->insert_id;
    $_SESSION['kad'] = $ad;
    $_SESSION['kmail'] = $email;
    echo 'kayıt işlemi başarılı';
    header("Refresh:2; url=giris.php");
    }
    else { echo 'kayit işlemi başarısız';
        header("Refresh:2; url=kayit.php"); }
    }
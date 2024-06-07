<?php
$host="localhost"; 
$kullanici="root";
$sifre="";
$baglanti = new mysqli($host, $kullanici, $sifre, "arizatakip");
if(!$baglanti){
 echo "Veri Tabanı Bağlantısı Başarısız";
}
?>
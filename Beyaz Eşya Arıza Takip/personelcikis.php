<?php

session_start();

// Tüm oturum değişkenlerini boşaltmak için yapıldı
$_SESSION = array();

// Oturumu sonlandır
session_destroy();


header("Location: personel.php");
exit();
?>

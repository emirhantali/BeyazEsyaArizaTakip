<?php

session_start();
if(empty($_POST["ad"]))  $ad=$_SESSION['ad'];  else  $ad=$_POST["ad"];
if(empty($_POST["soyad"])) $soyad=$_SESSION['soyad'];  else  $soyad=$_POST["soyad"];
if(empty($_POST["eposta"]))  $mail=$_SESSION['mail'];  else $mail=$_POST["eposta"];
$id=$_GET["id"];
include("baglanti.php");	
$insert_row = $baglanti->query("UPDATE uyeler SET ad ='".$ad."', soyad='".$soyad."', email='".$mail."' WHERE id='".$id."'");
			if ($insert_row) {
				$_SESSION['id'] = $id;
				$_SESSION['ad'] = $ad;
				$_SESSION['mail'] = $mail;
                $soyad=$_SESSION['soyad']=$soyad;
				header("Location:kullanici.php");
			}
		     else {

			echo 'Güncelleme Başarısız';
			header("Refresh:3;kullanici.php");

		    }
?>
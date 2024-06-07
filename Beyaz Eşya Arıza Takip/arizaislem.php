<?php
session_start();


include("baglanti.php");

// Formdan gelen verileri aldık
$baslik = $_POST['baslik'];
$tel = $_POST['tel'];
$mail = $_POST['mail'];
$konu = $_POST['konu'];
$mesaj = $_POST['mesaj'];
$cihaz = $_POST['cihaz'];
$tip = $_POST['tip'];
$tarih = date("Y-m-d");
// Arıza oluşturan kullanıcının adını aldık
$kullaniciid = isset($_SESSION["id"]) ? $_SESSION["id"] : "";

// Arıza oluşturulduğunda veritabanına ekledik
$sql = "INSERT INTO arizarandevu (uyeid, konubasligi, cihaz, aciklama, telno, email, tarih, servistipi,tahminibitistarih) VALUES ('$kullaniciid', '$baslik', '$cihaz', '$mesaj', '$tel', '$mail', '$tarih', '$tip','0000-00-00')";

if ($baglanti->query($sql) === TRUE) {
    
    echo "Arıza başarıyla oluşturuldu.";
    header("Refresh:2; url=index.php");
} else {
   
    echo "Hata: " . $sql . "<br>" . $baglanti->error;
    header("Refresh:2; url=arizaolustur.php");
}

// Veritabanı bağlantısını kapattık
$baglanti->close();
?>

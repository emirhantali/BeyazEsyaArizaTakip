<?php
session_start();
if(isset($_SESSION["Aad"])) {
    include("baglanti.php");

    // Personel silme işlemi
    if(isset($_POST['sil'])){
        $pid = $_POST['pid'];
        $sql = "DELETE FROM personel WHERE pid = '$pid'";
        if ($baglanti->query($sql) === TRUE) {
            echo "Personel başarıyla silindi.";
            
            header("Refresh:2; url=adminpersonelislem.php");
        } else {
            echo "Hata: " . $sql . "<br>" . $baglanti->error;
        }
    }
} else {
    echo "Lütfen Giriş Yapınız";
    header("Refresh:2; url=admin.php");
    exit(); 
}
?>

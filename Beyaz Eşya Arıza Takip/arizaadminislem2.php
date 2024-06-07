<?php
include("baglanti.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Formdan gelen verileri alma
    $arizaId = $_POST["arizaİd"];
    $personel = $_POST["personel"];
    $tahminibitistarihi = $_POST["tahminibitistarihi"];
    $admin_not = $_POST["admin_not"];

    // Arıza bilgilerini güncelleme
    $sql_update = "UPDATE arizarandevu SET personel = '$personel', tahminibitistarih = '$tahminibitistarihi', admin_not = '$admin_not' WHERE arizaId = $arizaId";

    if ($baglanti->query($sql_update) === TRUE) {
        echo "Arıza bilgileri başarıyla güncellendi.";
        header("Refresh:2; url=adminpanel.php");
    } else {
        echo "Hata: " . $sql_update . "<br>" . $baglanti->error;
    }
}
?>

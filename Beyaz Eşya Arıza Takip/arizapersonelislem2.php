<?php
include("baglanti.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Formdan gelen verileri al
    $arizaId = $_POST["arizaİd"];
    $personel_not = $_POST["personel_not"];

    // Arıza bilgilerini güncelle
    $sql_update = "UPDATE arizarandevu SET personel_not = '$personel_not' WHERE arizaId = $arizaId";

    if ($baglanti->query($sql_update) === TRUE) {
        echo "Arıza bilgileri başarıyla güncellendi.";
        header("Refresh:2; url=personelpanel.php");
    } else {
        echo "Hata: " . $sql_update . "<br>" . $baglanti->error;
    }
}
?>

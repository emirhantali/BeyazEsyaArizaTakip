<?php

include("baglanti.php");

$arizaID = $_POST['arizaİd'];

// Arızayı getir
$sql_select = "SELECT * FROM arizarandevu WHERE arizaİd = $arizaID";
$result = $baglanti->query($sql_select);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();

    // Personel atanmamış, tahmini bitiş tarihi atanmamış ve admin notu boşsa iptal etme
    if (empty($row['personel']) && $row['tahminibitistarih'] == '0000-00-00' && empty($row['admin_not'])) {
        echo "Arıza iptal edilemez. Personel Veya tahmini bitis tarihi veya açıklama kısmı atanmamış.";
        header("Refresh:2; url=adminpanel.php");
    } else {
        // G arızayı iptal et
        $sql_update = "UPDATE arizarandevu SET durum = 2 WHERE arizaİd = $arizaID";

        if ($baglanti->query($sql_update) === TRUE) {
            echo "Arıza başarıyla iptal edildi.";
            header("Refresh:2; url=adminpanel.php");
        } else {
            echo "Arıza iptal edilirken bir hata oluştu: " . $baglanti->error;
            header("Refresh:2; url=adminpanel.php");
        }
    }
} else {
    echo "Arıza bulunamadı.";
    header("Refresh:2; url=adminpanel.php");
}

$baglanti->close();

?>

<?php

include("baglanti.php");

if(isset($_GET['arizaİd'])) {
    $arizaID = $_GET['arizaİd'];

   
    $sql = "SELECT personel, tahminibitistarih,admin_not FROM arizarandevu WHERE arizaİd = $arizaID";
    $result = $baglanti->query($sql);

    if($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $personel = $row['personel'];
        $tahminiBitisTarihi = $row['tahminibitistarih'];
        $admin_not = $row['admin_not'];
       

        // Personel ve tahmini bitiş tarihi dolu ise işlemi gerçekleştir
        if(!empty($personel)  && !empty($admin_not)  && $tahminiBitisTarihi != '0000-00-00') {
            $sql_update = "UPDATE arizarandevu SET durum = 1 WHERE arizaİd = $arizaID";

            if ($baglanti->query($sql_update) === TRUE) {
                echo "Arıza başarıyla tamamlandı.";
                header("Refresh:2; url=adminpanel.php");
            } else {
                echo "Arıza tamamlanırken bir hata oluştu: " . $baglanti->error;
                header("Refresh:2; url=adminpanel.php");
            }
        } else {
            echo "Personel,Açıklama veya tahmini bitiş tarihi belirlenmediği için işlem gerçekleştirilemedi.";
            header("Refresh:5; url=adminpanel.php");
        }
    } else {
        echo "Arıza ID bulunamadı.";
        header("Refresh:2; url=adminpanel.php");
    }
} else {
    echo "Arıza ID bulunamadı.";
    header("Refresh:2; url=adminpanel.php");
}

$baglanti->close();
?>

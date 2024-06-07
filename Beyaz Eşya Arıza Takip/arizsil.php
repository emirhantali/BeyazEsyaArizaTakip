<?php
include("baglanti.php");
 
if (isset($_GET['arizaİd'])) { 
   
     $ariza_id = $_GET['arizaİd']; 
   

    $sql = "DELETE FROM arizarandevu WHERE arizaİd =$ariza_id";

    if ($baglanti->query($sql)) {
        echo "Arıza başarıyla silindi.";
        header("Refresh:2; url=takip.php");
    } else {
        echo "Arıza silinirken bir hata oluştu: " . $baglanti->error;
    }
} else {
    echo "Arıza ID'si post edilmedi."; 
}
?>

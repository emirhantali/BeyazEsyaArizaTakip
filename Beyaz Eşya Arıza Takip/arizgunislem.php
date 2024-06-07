<?php

            include("baglanti.php");

                  if(isset($_POST["gonder"])){
                    // Form verilerini al
                    $arizaId = $_POST["arizaİd"];
                    $baslik = $_POST["baslik"];
                    $tel = $_POST["tel"];
                    $mail = $_POST["mail"];
                    $konu = $_POST["konu"];
                    $mesaj = $_POST["mesaj"];
                    $cihaz = $_POST["cihaz"];
                    $tip = $_POST["tip"];
                
                    
                    $update_sql = "UPDATE arizarandevu SET konubasligi = '$baslik', telno = '$tel', email = '$mail', tarih = '$konu', aciklama = '$mesaj', cihaz = '$cihaz', servistipi = '$tip' WHERE arizaİd = '$arizaId'";

                
                  
                    if ($baglanti->query($update_sql) === TRUE) {
                        echo "Arıza bilgileri başarıyla güncellendi.";
                        header("Refresh:2; url=takip.php");
                    } else {
                        echo "Hata: " . $baglanti->error;
                    }
                }
                
                ?>
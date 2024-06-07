<?php
session_start();

// Kullanıcı giriş yapmışsa adını al
if(isset($_SESSION["ad"])){
    $kullaniciAdi = $_SESSION["ad"];
}
?>
<?php



include ("baglanti.php");


if(isset($_SESSION["id"])){
    $kullaniciId = $_SESSION["id"];

    // Kullanıcıya ait arızaları veritabanından alın
    $sql = "SELECT * FROM arizarandevu WHERE uyeid = $kullaniciId";
    $result = $baglanti->query($sql);
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arıza Takip</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
 <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
</head>
<style>

.üst{
  height: 40px;
  background-color: rgb(255, 255, 255);
  font-family: 'Courier New', Courier, monospace;
  font-size: small;
  font-style: normal;
  color: gray;
  padding-left: 180px;
  padding-top: 10px;


}


.üst-img
{

    width: 25px; /* Div genişliği */
    height: 25px; /* Div yüksekliği */
    background-image: url('insta.png'); /* Arka plan resmi */
    background-size: contain; /* Resmi div boyutuna sığacak şekilde ayarlar */
    border-radius: 50%;
     border: 2px solid black; 
    position: relative; /* Elementin konumlandırılma tipi */
    left: 900px; /* Soldan 50 piksel uzaklık */
    bottom: 25px;
    transition: transform 0.3s ease;
}

.üst-img-1
{

    width: 25px; /* Div genişliği */
    height: 25px; /* Div yüksekliği */
    background-image: url('face.png'); /* Arka plan resmi */
    background-size: contain; /* Resmi div boyutuna sığacak şekilde ayarlar */
    border-radius: 50%;
    border: 2px solid black; 
    position: relative; /* Elementin konumlandırılma tipi */
    left: 950px; /* Soldan 50 piksel uzaklık */
    bottom: 50px;
    transition: transform 0.3s ease;
}

.üst-img-2
{

    width: 25px; /* Div genişliği */
    height: 25px; /* Div yüksekliği */
    background-image: url('xlogo.png'); /* Arka plan resmi */
    background-size: contain; /* Resmi div boyutuna sığacak şekilde ayarlar */
    border-radius: 50%;
    border: 2px solid black; 
    position: relative; /* Elementin konumlandırılma tipi */
    left: 1000px; /* Soldan 50 piksel uzaklık */
    bottom: 75px;
    transition: transform 0.3s ease;
}
.üst-img:hover,
.üst-img-1:hover,
.üst-img-2:hover {
    transform: scale(1.2); /* Yakınlaştırma efekti */
}

.menu-bar{

background-color: rgb(6, 0, 22);
text-align: center;
}
.menu-bar ul{
    display: inline-flex;
    list-style: none;
}
.menu-bar ul li{

 width: 150px;
 margin: 15px;
 padding: 15px;
}
.menu-bar ul li a{
    text-decoration: none;
    color: #fff;
}
.menu-bar img {
    height: 40px;
    width: auto;
    margin: 15px;
    position: relative; /* Elementin konumlandırılma tipi */
    left: -280px; /* Soldan 50 piksel uzaklık */
    
}
.active, .menu-bar ul li:hover{

background-color: #beb206;
border-radius: 10px;

}
.menu-bar .fas {
    margin-right: 8px;
}

.ana {

  width: 100%;
  height: 60%;
}

html,
    body {
        position: relative;
  height: 100%; /* Yüzde cinsinden değer */
  width: 100%; /* Yüzde cinsinden değer */
    }

    body {
      background: #eee;
      font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
      font-size: 14px;
      color: #000;
      margin: 0;
      padding: 0;
    }

    swiper-container {
      width: 100%;
      height: 75%;
    }

    swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    swiper-slide img {
      display: block;
      width: 100%;
      height: 100%;
      object-fit: fill;
    }

    .autoplay-progress {
      position: absolute;
      right: 16px;
      bottom: 16px;
      z-index: 10;
      width: 48px;
      height: 48px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: bold;
      color: var(--swiper-theme-color);
    }

    .autoplay-progress svg {
      --progress: 0;
      position: absolute;
      left: 0;
      top: 0px;
      z-index: 10;
      width: 100%;
      height: 100%;
      stroke-width: 4px;
      stroke: var(--swiper-theme-color);
      fill: none;
      stroke-dashoffset: calc(125.6 * (1 - var(--progress)));
      stroke-dasharray: 125.6;
      transform: rotate(-90deg);
    }
    .footer {
        background-color: rgb(5, 2, 11);
    text-align: center;
    padding-bottom: 20px; /* Yazının altındaki boşluğu ayarlamak için */
    width: 100%; /* Sayfa genişliğinde olmasını sağlar */
    position: relative; /* Sabit tutma yerine sayfanın altına doğru hareket etmek için */
    clear: both; /* Diğer elementlerin footer'ın altında olmasını sağlar */
    margin-top: 20px; /* Footer'ı içeri doğru itmek için */
}

.footer ul {
    display: flex;
    justify-content: center;
    list-style: none;
    padding: 0;
}

.footer ul li {
    margin-top: 20px;
    text-align: center;
    padding: 0 15px; /* Sağ ve sol iç kenarlık */
}

.footer ul li a {
    text-decoration: none;
    color: #fff;
}

hr {
    margin-top: 0px; /* Üstündeki boşluğu ayarlamak için */
    margin-bottom: 10px; 
    border-color: #fff; 
    margin-left: 80px; 
    margin-right: 80px; 
}

</style>
<body>
    
  <!-- üst div başlangıc -->
  <div class="container-fluid üst">
        Sosyal medyadan veya iletişim adreslerimizden bize ulaşabilirsiniz
        <a href="https://www.instagram.com/igugelisim/" target="_blank"> <div class="üst-img">  </div></a>
        <a href="https://www.facebook.com/gelisimedu/?locale=tr_TR" target="_blank"> <div class="üst-img-1">  </div></a>
        <a href="https://x.com/gelisimedu?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" target="_blank"> <div class="üst-img-2">  </div></a>
    </div>
   <!-- üst div bitiş -->

     <!-- navigasyon başlangıc -->
   <div class="container-fluid menu-bar"> 
       <ul>
        <img src="logo.png" alt="Logo">
        <li><a href="index.php"><i class="fas fa-home" > </i>Anasayfa </a></li>
        <li><a href="hakkimizda.php"><i class="fas fa-user" > </i>Hakkımızda </a></li>
        <li><a href="iletisim.php"><i class="fas fa-phone" > </i>İletişim </a></li>

        <?php if(isset($kullaniciAdi)) {?>
                <li><a href="kullanici.php"><i class="fas fa-user"></i><?php echo $kullaniciAdi; ?></a></li>
                <li><a href="cikis.php"><i class="fas fa-sign-out-alt"></i>Çıkış Yap</a></li>
            <?php } else {?>
                <li><a href="giris.php"><i class="fas fa-user"></i>Giriş Yap</a></li>
            <?php }?>
        <li><a href="takip.php"><i class="fas fa-clone" > </i>Arıza Takip </a></li>
        <li class="active"><a href="arizaolustur.php"><i class="fas fa-lira-sign"></i>Arıza Oluştur </a></li>
       

       </ul>
</div>    
<!-- navigasyon bitiş -->

<div class="container-fluid">
        <div class="row">
            <?php
            if (isset($result) && $result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
            ?>
            <div class="col-md-6 mb-3">
                <div class="card text-center">
                    <div class="card-header" align="center">
                        Cihaz: <?php echo $row["cihaz"]; ?>
                    </div>
                    <div class="card-body" align="center">
                        <h5 class="card-title"><strong>Konu Başlığı: <?php echo $row["konubasligi"]; ?></strong></h5>
                        <p class="card-text">Açıklama: <?php echo $row["aciklama"]; ?></p>
                        <p class="card-text">İlgilenen Personel: 
                            <?php 
                            if(empty($row["personel"])) {
                                echo "<span style='color:red;'>Personel Atanmadı</span>";
                            } else {
                                echo "<span style='color:green;'>" . $row["personel"] . "</span>";
                            }
                            ?>
                        </p>
                        <p class="card-text">Personel Açıklaması:
                            <?php 
                            if(empty($row["admin_not"])) {
                                echo "<span style='color:red;'>Not Eklenmedi</span>";
                            } else {
                                echo "<span style='color:orange;'>" . $row["admin_not"] . "</span>";
                            }
                            ?>
                        </p>
                        <p class="card-text">Personel Açıklaması 2:
                            <?php 
                            if(empty($row["personel_not"])) {
                                echo "<span style='color:red;'>Not Eklenmedi</span>";
                            } else {
                                echo "<span style='color:orange;'>" . $row["admin_not"] . "</span>";
                            }
                            ?>
                        </p>

                        <p class="card-text">Arıza İşlem: 
                            <?php 
                            if($row["durum"] == 0 && empty($row["personel"])) {
                                echo "<span style='color:red;'>İşlem Beklemede</span>";
                            } elseif($row["durum"] == 0 && !empty($row["personel"])) {
                                echo "<span style='color:orange;'>İşleme Alındı</span>";
                            } elseif($row["durum"] == 1) {
                                echo "<span style='color:green;'>İşlem Tamamlandı</span>";
                            } elseif($row["durum"] == 2) {
                                echo "<span style='color:red;'>Arıza İptal Edildi</span>";
                            }
                            ?>
                        </p>
                        <form action="arizsil.php?arizaİd=<?php echo $row["arizaİd"]; ?>" method="post">
                            
                            <button type="submit" class="btn btn-danger">Arızayı Sil</button>
                        </form><br>
                        <form action="arizgun.php?arizaİd=<?php echo $row["arizaİd"]; ?>" method="post">
                            <input type="hidden" name="arizaİd" value="<?php echo $row["arizaİd"]; ?>">
                            <button type="submit" class="btn btn-primary">Arızayı Güncelle</button>
                        </form>
                    </div>
                    <div class="card-footer text-muted" align="center">
                        Arıza Oluşturma Tarihi: <?php echo $row["tarih"]; ?>
                        <br> 
                        Tahmini Bitiş Tarihi: 
                        <?php 
                        if($row["tahminibitistarih"] == '0000-00-00') {
                            echo "<span style='color:red;'>Tahmini Bitiş Tarihi Eklenmedi</span>";
                        } else {
                            echo "<span style='color:green;'>" . $row["tahminibitistarih"]."</span>";
                        }
                        ?>
                    </div>
                </div>
            </div>
            <?php
                }
            } else {
                echo "Henüz arıza oluşturulmamış.";
            }
            ?>
        </div>
    </div>




<!-- footer Başlangıc -->
<div class="container-fluid footer"> 
  <ul>
   <li><a href="index.php">Anasayfa </a></li>
   <li><a href="hakkimizda.php">Hakkımızda </a></li>
   <li><a href="iletisim.php">İletişim </a></li>
   <li><a href="takip.php">Arıza Takip </a></li>
   <li><a href="arizaolustur.php">Arıza Oluştur </a></li>

  </ul> 
   <hr>
   <p style="color: #fff;">©2024 EYC SERVİS,TÜM HAKLARI SAKLIDIR</p>
</div>    


<?php if (!isset($result) || $result->num_rows == 0) { ?>
        <style>
            .footer {
                position: fixed;
                left: 0;
                bottom: 0;
                width: 100%;
                background-color: rgb(5, 2, 11);
                text-align: center;
                padding-bottom: 20px; 
                z-index: 1000; 
            }
        </style>
    <?php } ?>

</body>
</html>
<?php
session_start();

// Kullanıcı giriş yapmışsa adını al
if(isset($_SESSION["ad"])){
    $kullaniciAdi = $_SESSION["ad"];
    $kullaniciSoyadi = $_SESSION["soyad"];
    $kullaniciEmail = $_SESSION["mail"];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anasayfa</title>
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
  padding-bottom: 20px; 
  bottom: 0; 
  width: 100%; 
  height: 50%;
}

.footer ul {
  display: inline-flex;
  list-style: none;
}

.footer ul li {
  margin-top: 30%;
  text-align: center;
  padding: 15px;
}

.footer ul li a {
  text-decoration: none;
  color: #fff;
}

hr {
  margin-top: 0px; 
  margin-bottom: 10px; 
  border-color: #fff; 
  margin-left: 80px; 
  margin-right: 80px; 
}


   .kullanici {
            background-color: darkgray;
            border-radius: 200px;
            width: 100%;
            height: 100%;
            color: #fff;
           
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

<div class="container-fluid kullanici"> 
    <h2 style="color: black; text-align: center; font-family: 'Times New Roman', Times, serif;">KULLANICI BİLGİLERİ</h2>
    <?php 
    if(isset($kullaniciAdi)) {
        echo '<h5 style="color: black; margin-left:450px; margin-top:50px; font-family: \'Times New Roman\', Times, serif;"><u><b>Kullanıcının Adı: </b></u>' . $kullaniciAdi . '</h5>';
        echo '<h5 style="color: black; margin-left:450px; margin-top:20px; font-family: \'Times New Roman\', Times, serif;"><u><b>Kullanıcının Soyadı </b></u>:  ' . $kullaniciSoyadi . '</h5>';
        echo '<h5 style="color: black; margin-left:450px; margin-top:20px; font-family: \'Times New Roman\', Times, serif;"><u><b>Kullanıcının Epostası:</b></u> ' . $kullaniciEmail . '</h5>';
      
    }
    ?>
    <hr style="margin-top: 70px;">

 <h2 style="color: black; text-align: center; font-family: 'Times New Roman', Times, serif; margin-top: 20px;">KULLANICI BİLGİLERİ GÜNCELLEME</h2>
   <?php
 echo '<form style="margin-left: 650px; margin-top:30px;" action="guncelle.php?id='.$_SESSION["id"].'" method="POST">' ?>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Ad</label>
    <div class="col-sm-2">
      <input type="text" class="form-control" name="ad" placeholder="Ad">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Soyad</label>
    <div class="col-sm-2">
      <input type="text" class="form-control" name="soyad" placeholder="Soyad">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-2">
      <input type="text" class="form-control" name="eposta" placeholder="Email">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Şifre</label>
    <div class="col-sm-2">
      <input type="password" class="form-control" name="sifre" placeholder="Şifre">
    </div>
  </div>
  <div class="form-group row" style="margin-left: 100px;">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-warning" value="GÜNCELLE">GÜNCELLE</button>
    </div>
  </div>
</form>




</div>





<!-- bitiş -->

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

<!-- footer Bitiş -->

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>

</body>
</html>
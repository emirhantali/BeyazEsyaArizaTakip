<?php
session_start();

// Kullanıcı giriş yapmışsa adını al
if(isset($_SESSION["ad"])){
    $kullaniciAdi = $_SESSION["ad"];
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

  
      .footer {
  background-color: rgb(5, 2, 11);
  text-align: center;
  padding-bottom: 20px; 
  bottom: 0; 
  width: 100%; 
  height: 50%;
  margin-top: 1%;
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

<!-- Div1 Başlangıc -->
<div class="container-fluid ana" style="background-color: black;">
  <div style="display: flex; justify-content: space-between; align-items: center;">
    <div style="flex: 1;">
      <h2 style="color: #fff; font-family: 'Times New Roman', Times, serif; text-align: left; margin-left: 100px;"><b>Arızaları Kolayca Takip Edin, Sorunları Hızlıca Çözün!</b></h2> 
      <p style="color: #fff; font-family:'Courier New', Courier, monospace; text-align: left; margin-left: 200px; font-size: medium;">Artık Arızalarınız Korkunuz Olmasın</p> 
    <a href="arizaolustur.php"> <button type="button" class="btn btn-warning" style="margin-left: 250px;">Hemen Arıza Oluşturun</button></a> 
    </div>
    <img src="5.png" width="920" height="380"> 
  </div>
</div>

<!--Div1 Bitiş -->


<!--Card Başlangıc-->
<div class="container-fluid" style="margin-top: 25PX; background-color: black;"> 
  <h2 style="color: #fff; font-family: 'Times New Roman', Times, serif; text-align:center; "><b>HİZMETLERİMİZİN BAZILARI</b></h2> 
<div class="card-deck" style="background-color:black;">
  <div class="card">
  <a href="arizaolustur.php">  <img class="card-img-top" src="camasir.png" alt="Card image cap" style="width: 277px; height: 350px; margin-left: 25%;"></a>
    <div class="card-body">
      <h5 class="card-title" align="center" style="font-family: 'Times New Roman';"><b><u>Çamaşır Makinesi</b></h5></u>
      <p class="card-text" style="font-size:small; font-family: Arial, Helvetica, sans-serif;">Deneyimli ve uzman teknisyenlerimiz, her marka ve model çamaşır makinesinin tamirini hızlı ve etkili bir şekilde gerçekleştirir. Arızanın tespitinden onarımına kadar her adımda titizlikle çalışarak, çamaşır makinenizin en kısa sürede yeniden çalışır duruma gelmesini sağlıyoruz.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">EYC SERVİS</small>
    </div>
  </div>
  <div class="card">
  <a href="arizaolustur.php"> <img class="card-img-top" src="buz.png" alt="Card image cap" style="width: 277px; height: 350px; margin-left: 25%;"></a>
    <div class="card-body">
      <h5 class="card-title" align="center" style="font-family: 'Times New Roman';"><b><u>Buz Dolabı</b></h5></u>
      <p class="card-text" style="font-size:small; font-family: Arial, Helvetica, sans-serif;">Uzman teknisyenlerimiz, her marka ve model buzdolabının tamiri konusunda uzmanlaşmıştır. Soğutma sorunlarından sızıntılara ve elektronik arızalara kadar her türlü sorunu profesyonel bir şekilde çözebiliriz.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">EYC SERVİS</small>
    </div>
  </div>
  <div class="card">
  <a href="arizaolustur.php"> <img class="card-img-top" src="bulasik.png" alt="Card image cap" style="width: 277px; height: 350px; margin-left: 25%;"></a>
    <div class="card-body">
      <h5 class="card-title" align="center" style="font-family: 'Times New Roman';"><b><u>Bulaşık Makinesi</b></h5></u>
      <p class="card-text" style="font-size:small; font-family: Arial, Helvetica, sans-serif;">Deneyimli teknisyenlerimiz, her marka ve model bulaşık makinesinin tamiri konusunda uzmandır. Yıkama sorunlarından su sızıntılarına ve elektronik arızalara kadar her türlü sorunu gidermek için donanımlıyız.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">EYC SERVİS</small>
    </div>
  </div>
</div>
<br>
<br>
</div>
<!-- Card Bitiş -->


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
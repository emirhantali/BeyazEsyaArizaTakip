
<?php
session_start();

// Kullanıcı giriş yapmışsa adını al
if(isset($_SESSION["ad"])){
    $kullaniciAdi = $_SESSION["ad"];
    
}else{
  header("Location: giris.php");
  exit(); 
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
  bottom: 0; /* Sayfanın en altına sabitlemek için */
  width: 100%; /* Sayfa genişliğinde olmasını sağlar */
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
.ariza {
 
    width: 100%;
    height: 100%;
    
   
}
#container{
			
			width: 100½;
			height: 100½;
			margin:auto; 
             color: #fff;
		}
		
		#iletisim{
			
			padding: 50px;
			height: auto;
			text-align: center;
		}
		#h3iletisim{
			color: #565656;
		}
		
		#iletisimopak{
			
			background: rgba(90,91,87,0.2);
			
			padding: 30px 20px;
			border-radius: 5px;
			margin-bottom: 50px;
			height: 550px;
		}
		#formgroup{
			
			
			width: 700px;
			float: left;
			height: 500px;
			text-align: left;
		}
		#solform{
			
			width: 49%;
			float: left;
			padding-right: 5px;
		}
		#sagform{
			width: 49%;
			float: right;
			padding-left: 5px;
		}
		.form-control{
			
			width: 100%;
			padding: 10px;
			font-size: 15px;
			line-height: 1.5;
			color: #495057;
			background-color: white;
			margin: 10px;
			border-radius: 5px;
			border: 1px solid #ced4da;
		}
		textarea{
			
			
			font-family: Arial;
		}
		input[type="submit"]{
			
			
			cursor: pointer;
			background-color: #445c6e;
			font-size: 18px;
			letter-spacing: 1px;
			padding: 10px 30px;
			color: white;
			border: 2px solid white;
			border-radius: 5px;
			margin-left: 10px;
			margin-top: 10px;
				
		}
		#adres{
			
			padding: 10px;
			float: right;
			
			text-align: left;
		}
		#h4baslik{
			font-size: 30px;
			color: white;
		}


</style>
</head>
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
         <!-- navigasyon bitiş -->
   <div class="ariza">
        <form action="arizaislem.php" method="POST">
            <section id="iletisim">
                <div id="container">
                    <h2 style="color: #fff; font-family: 'Times New Roman', Times, serif; text-align: center; margin-top: 10px; "><b>ARIZA OLUŞTUR</b></h2>
                    <div id="iletisimopak">
                        <div id="formgroup">
                            <div id="solform">
                                <input type="text" name="baslik" placeholder="Konu Başlığı" required class="form-control">
                                <input type="text" name="tel" placeholder="Telefon Numarası" required class="form-control">
                                <select name="tip" id="tip" required class="form-control">
                                    <option>Bakım</option>
                                    <option>Onarım</option>
                                </select>
                            </div>
                            <div id="sagform">
                                <input type="email" name="mail" placeholder="E-mail Adresiniz" required class="form-control">
                                <input type="date" name="konu" placeholder="Tarih Seçiniz" required class="form-control">
                                <select name="cihaz" id="cihaz" required class="form-control">
                                    <option>Buzdolabı</option>
                                    <option>Bulaşık makinesi</option>
                                    <option>Çamaşır makinesi</option>
                                    <option>Fırın</option>
                                    <option>Derin Dondurucu</option>
                                    <option>Kurutma Makinesi</option>
                                    <option>Elektrikli Süpürge</option>
                                    <option>AirFry</option>
                                </select>
                            </div>
                            <textarea name="mesaj" id="" cols="60" placeholder="Mesaj Giriniz" rows="10" required class="form-control"></textarea>
                            <input type="submit" value="Gönder" name="gonder">
                        </div>
                        <div class="photo-box"style="text-align: right; overflow: hidden; margin-left: 100px; ">
                            <img src="byzs.png" style="width: 350px; height: 350px;">
                        </div>
                    </div>
                </div>
            </section>
        </form>
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

<!-- footer Bitiş -->      
</body>
</html>
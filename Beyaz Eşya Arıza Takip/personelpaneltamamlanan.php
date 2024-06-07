<?php
session_start(); 

include("baglanti.php");
if(!isset($_SESSION["pid"])) {
    header("Location: personel.php");
    exit; 
}

else if(isset($_SESSION["pid"])) {
    $personelPid = $_SESSION["pid"];

    
    $sql = "SELECT ar.*, u.ad, u.soyad FROM arizarandevu ar
            INNER JOIN uyeler u ON ar.uyeid = u.id
            WHERE ar.durum = 1 AND ar.personel = '$personelPid' ORDER BY ar.tarih DESC";
    $result = $baglanti->query($sql);

    // Kodun devamı
} else {
    echo "Oturum bilgileri bulunamadı. Lütfen giriş yapın.";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PANEL</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    
    <!-- Stil Kodlarını Buraya Ekleyelim -->
    <style>
        body{
            font-family: 'Libre Baskerville', serif;    
        }

        .wrapper{
            display: flex;      
        }

        #sidebar{
            min-width: 250px;
            color: #fff; 
            background: black;    
            transition: all 0.3s;
            /* Önemli Değişiklik */
            flex: 0 0 250px; /* Sidebar'ın sabit genişlikte olmasını sağlar */
            overflow-y: auto; /* Sayfa boyutu aşıldığında scrollbar gösterir */
            height: 100vh; /* Sayfanın tamamını kaplar */
        }

        #sidebar .sidebar-header{
            padding: 20px;
            background: #beb206;
        }

        #sidebar ul.components{
            padding: 20px 0;    
        }

        #sidebar ul p{  
            padding: 10px;
        }

        #sidebar ul li a{
            padding: 10px;
            font-size: 1.1em;
            display: block;
        }

        #sidebar ul li a:hover{
            color: #fff !important;
            background: #beb206;
            transition: .3s all ease;
        }

        

        ul ul a{
            font-size: 0.9em !important;
            padding-left: 30px !important;
            background: #003078;
        }

        #content{
            width: 100%;
            padding: 20px;        
        }
        .card {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        .card-body {
            flex-grow: 1;
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
    </style>
</head>

<body>

<div class="wrapper">
    <nav id="sidebar">
        <div class="sidebar-header">
            <h3>EYC SERVİS</h3>
        </div>
        <ul class="list-unstyled components">
            <p>Hizmetler</p>
            <li>
                <a href="personelpanel.php" class="text-light text-decoration-none">Gelen Arızalar</a>
                <a href="personelpaneltamamlanan.php" class="text-light text-decoration-none">Tamamlanan Arızalar</a>
                <a href="personelpaneliptal.php" class="text-light text-decoration-none">İptal Edilen Arızalar</a>
                <a href="personelcikis.php" class="text-light text-decoration-none">Çıkış</a>
            </li>
    </nav>


    <div id="content">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                   
                     
             <b><h1 align="center">  TAMAMLANAN ARIZALAR <input type="text" class="form-control" id="searchInput" placeholder="Arıza Ara"> </h1> </b>
                </div>
            </nav> 
            <div class="card text-center">
            <?php
if (isset($result) && $result->num_rows > 0) {
    $counter = 0;
    while ($row = $result->fetch_assoc()) {
        // Eğer sayaç 0 ise yeni bir satır başlıyoruz
        if ($counter % 2 == 0) {
            echo "<div class='row'>";
        }
        
        echo "<div class='col-md-6'>";
        echo "<div class='card text-center'>";
        echo "<div class='card-header' style='margin-top: 40px;' align='center'>";
        echo "Cihaz: " . $row["cihaz"];
        echo "</div>";
        echo "<div class='card-body' align='center'>";
        echo "<h5 class='card-title' align='center'>Konu Başlığı:" . $row["konubasligi"] . "</h5>";
        echo "<p class='card-text'align='center'>Açıklama:" . $row["aciklama"] . "</p>";
        echo "<p class='card-text'>İlgilenen Personel: ";
        if (empty($row["personel"])) {
            echo "<span style='color:red;'>Personel Atanmadı</span>";
        } else {
            echo "<span style='color:green;'>" . $row["personel"] . "</span>";
        }
        echo "</p>";
        echo "<p class='card-text'>Personel Açıklaması: ";
        if (empty($row["admin_not"])) {
            echo "<span style='color:red;'>Not Eklenmedi</span>";
        } else {
            echo "<span style='color:orange;'>" . $row["admin_not"] . "</span>";
        }
        echo "</p>";
        echo "<p class='card-text'>Arıza İşlem: ";
        if ($row["durum"] == 0 && empty($row["personel"])) {
            echo "<span style='color:red;'>İşlem Beklemede</span>";
        } elseif ($row["durum"] == 0 && !empty($row["personel"])) {
            echo "<span style='color:orange;'>İşleme Alındı</span>";
        } elseif ($row["durum"] == 1) {
            echo "<span style='color:green;'>İşlem Tamamlandı</span>";
        } elseif ($row["durum"] == 2) {
            echo "<span style='color:red;'>Arıza İptal Edildi</span>";
        }
        echo "</p>";
        echo "</div>";
        echo "<div class='card-footer text-muted' align='center'>";
        echo "Arıza Oluşturma Tarihi: " . $row["tarih"] . "<br>";
        echo "Tahmini Bitiş Tarihi: ";
        if ($row["tahminibitistarih"] == '0000-00-00') {
            echo "<span style='color:red;'>Tahmini Bitiş Tarihi Eklenmedi</span>";
        } else {
            echo "<span style='color:green;'>" . $row["tahminibitistarih"] . "</span>";
        }
        echo "<br>";
        echo "Arızayı Oluşturan: " . $row["ad"] . " " . $row["soyad"];
        echo "</div>";
        echo "</div>";
        echo "</div>";
        // Eğer sayaç 1 ise satırı kapatıyoruz
        if ($counter % 2 != 0 || $counter == ($result->num_rows - 1)) {
            echo "</div>";
        }
        $counter++;
    }
} else {
    echo "Henüz arıza oluşturulmamış.";
}
?>
       
   

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
        <script>
    $(document).ready(function(){
        $("#searchInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $(".card").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>
</body>
</html>

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
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #ced4da;
        }
        textarea{
            font-family: Arial;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .btn-submit {
            width: 100%;
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
                <a href="adminpanel.php" class="text-light text-decoration-none">Gelen Arızalar</a>
                <a href="#" class="text-light text-decoration-none">Tamamlanan Arızalar</a>
                <a href="#" class="text-light text-decoration-none">İptal Edilen Arızalar</a>
            </li>
        </ul>
    </nav>

    <div id="content">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <b><h1 align="center">  ARIZAYI TAMAMLA</h1> </b>
            </div>
        </nav> 

        <div class="card text-center">
            <div class="container">
                <?php
                // Veritabanı bağlantısını sağlayın
                include("baglanti.php");

                // Personelleri seçen sorguyu hazırlayın
                $sql_personel = "SELECT * FROM personel";

                // Sorguyu çalıştırın
                $result_personel = $baglanti->query($sql_personel);

                // Hata ayıklama: Sorguda bir hata olup olmadığını kontrol edin
                if (!$result_personel) {
                    // Eğer bir hata varsa, hata mesajını yazdırın
                    echo "Veritabanı hatası: " . $baglanti->error;
                } else {
                    // Eğer herhangi bir hata yoksa, personelleri listeleyin
                    ?>
                    <form action="arizaadminislem2.php" method="post">
                        <div class="form-group">
                        <input type="hidden" name="arizaİd" value="<?php echo $_GET["arizaİd"]; ?>">
                            <h5>Atanacak Personel Seçiniz</h5>
                            <select name="personel" id="personel" required class="form-control">
                                <?php
                                if ($result_personel->num_rows > 0) {
                                    while ($row_personel = $result_personel->fetch_assoc()) {
                                        $personel_id = $row_personel["pid"]; // Personel ID'si
                                        $personel_ad = $row_personel["ad"]; // Personel Adı
                                        $personel_soyad = $row_personel["soyad"]; // Personel Soyadı
                                        ?>
                                        <option value="<?php echo $personel_id; ?>"><?php echo $personel_ad . " " . $personel_soyad; ?></option>
                                <?php
                                    }
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <h5>Tahmini Bitiş Tarihi Ekleyiniz</h5>
                            <input type="date" name="tahminibitistarihi" placeholder="Tarih Seçiniz" required class="form-control">
                        </div>
                        <div class="form-group">
                            <h5>Müşteriye Not Ekleyin</h5>
                            <textarea name="admin_not" id="" cols="60" placeholder="Mesaj Giriniz" rows="10" required class="form-control"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-submit">Gönder</button>
                    </form>
                    <?php
                }

                // Veritabanı bağlantısını kapatın
                $baglanti->close();
                ?>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>
</html>
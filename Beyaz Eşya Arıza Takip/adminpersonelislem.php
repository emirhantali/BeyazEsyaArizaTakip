<?php
session_start();
if(isset($_SESSION["Aad"])) {
    include("baglanti.php");

    // Yeni personel ekleme formunun işlenmesi
    if(isset($_POST['ekle'])){
        $ad = $_POST['ad'];
        $soyad = $_POST['soyad'];
        $sifre = $_POST['sifre'];

        // Veritabanına ekleme sorgusu
        $sql = "INSERT INTO personel (ad, soyad, sifre) VALUES ('$ad', '$soyad', '$sifre')";
        if ($baglanti->query($sql) === TRUE) {
            echo "Yeni personel başarıyla eklendi.";
        } else {
            echo "Hata: " . $sql . "<br>" . $baglanti->error;
        }
    }

    // Mevcut personel listesini getirme sorgusu
    $sql = "SELECT * FROM personel";
    $result = $baglanti->query($sql);
} else {
    header("Location: admin.php");
    exit(); 
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
        
            flex: 0 0 250px; 
            overflow-y: auto; 
            height: 100vh; 
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
                <a href="adminpanel.php" class="text-light text-decoration-none">Gelen Arızalar</a>
                <a href="adminpaneltamamlanan.php" class="text-light text-decoration-none">Tamamlanan Arızalar</a>
                <a href="adminpaneliptal.php" class="text-light text-decoration-none">İptal Edilen Arızalar</a>
                <a href="adminiltesim.php" class="text-light text-decoration-none">İletişim Gelen Formlar </a>
                <a href="adminpersonelislem.php" class="text-light text-decoration-none">Personel İşlemleri </a>
                <a href="admincikis.php" class="text-light text-decoration-none">Çıkış Yap</a>
            </li>
        </ul>
    </nav>

            <div id="content">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <b><h1 align="center">Personel İşlemleri</h1></b>
            </div>
        </nav>

        <!-- Yeni personel ekleme formu -->
        <div class="card text-center">
    <div class="card-header">
       <b> Yeni Personel Ekle </b>
    </div>
    <div class="card-body d-flex justify-content-center">
        <form method="post" style="width: 300px;">
            <div class="form-group">
               <b> <label for="ad">Ad</label></b>
                <input type="text" class="form-control" id="ad" name="ad" required>
            </div>
            <div class="form-group">
              <b>  <label for="soyad">Soyad</label></b>
                <input type="text" class="form-control" id="soyad" name="soyad" required>
            </div>
            <div class="form-group">
            <b>    <label for="sifre">Şifre</label></b>
                <input type="password" class="form-control" id="sifre" name="sifre" required>
            </div>
            
            <button type="submit" class="btn btn-primary" name="ekle">Personel Ekle</button>
        </form>
    </div>
</div>

        <!-- Mevcut personel listesi -->
        <div class="card text-center mt-3">
            <div class="card-header">
                Mevcut Personel
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">PID</th>
                            <th scope="col">Ad</th>
                            <th scope="col">Soyad</th>
                            <th scope="col">Şifre</th>
                            <th scope="col">İşlem</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if(isset($result) && $result->num_rows > 0){
                            while($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>" . $row["pid"] . "</td>";
                                echo "<td>" . $row["ad"] . "</td>";
                                echo "<td>" . $row["soyad"] . "</td>";
                                echo "<td>" . $row["sifre"] . "</td>";
                                echo "<td>
                                <form action='adminpersonelislem2.php'  method='post'>
                                    <input type='hidden' name='pid' value='" . $row["pid"] . "'>
                                    <button type='submit' class='btn btn-danger' name='sil'>Sil</button>
                                </form>
                              </td>";
                        
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan='5'>Mevcut personel bulunamadı.</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
        

</body>
</html>

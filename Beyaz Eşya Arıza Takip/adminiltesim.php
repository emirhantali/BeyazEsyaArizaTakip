<?php
session_start();
if(isset($_SESSION["Aad"])) {
    include ("baglanti.php");

    $sql = "SELECT * FROM iletisim ORDER BY İletisimID DESC";
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
                <b><h1 align="center">GELEN Formlar <input type="text" class="form-control" id="searchInput" placeholder="Arıza Ara"></h1></b>
            </div>
        </nav>

        <div class="card text-center">
            <div class="row" id="iletisimCards">
                <?php
                if (isset($result) && $result->num_rows > 0) {
                    $counter = 0;
                    while ($row = $result->fetch_assoc()) {
                        if ($counter % 2 == 0) {
                            echo "</div><div class='row'>";
                        }
                        echo "<div class='col-md-6'>";
                        echo "<div class='card text-center'>";
                        echo "<div class='card-header' style='margin-top: 40px;' align='center'>";
                        echo "İletisim İD: " . $row['İletisimID'];
                        echo "</div>";
                        echo "<div class='card-body' align='center'>";
                        echo "<h5 class='card-title' align='center'>Konu Başlığı: <strong>" . $row['KonuBasligi'] . "</strong></h5>";
                        echo "<p class='card-text'align='center'>Açıklama: <span style='background-color: yellow;'>" . $row['Yazi'] . "</span></p>";
                        echo "<p class='card-text'>Telefon Numarası: <span style='color: green;'>" . $row['TelNo'] . "</span></p>";
                        echo "<p class='card-text'>Mail: <span style='background-color: yellow;'>" . $row['Mail'] . "</span></p>";
                        echo "</div>";
                        echo "<div class='card-footer text-muted' align='center'>";
                        echo "Formu Oluşturan Oluşturan: <strong>" . $row['AdSoyad'] . "</strong>";
                        echo "</div>";
                        echo "</div>";
                        echo "</div>";
                        $counter++;
                    }
                } else {
                    echo "Henüz arıza oluşturulmamış.";
                }
                ?>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
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

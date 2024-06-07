<?php
include("baglanti.php");

if(isset($_POST["eposta"]) && isset($_POST["parola"])) {
    $gmail = $_POST["eposta"];
    $gsifre = $_POST["parola"];

    $query = "SELECT * FROM uyeler WHERE email='".$gmail."'";
    $result = mysqli_query($baglanti, $query) or die("sorgu hatası");
    $num_row = mysqli_num_rows($result);
    $row = mysqli_fetch_array($result);
    if($num_row >= 1) {
        if($gsifre == $row['sifre']) {
            session_start();       
            $_SESSION["ad"] = $row['ad'];
            $_SESSION["soyad"] = $row['soyad'];
            $_SESSION["mail"] = $gmail;
            $_SESSION["id"] = $row['id'];
            echo "<div id='basarili' style='color: green;'>Giriş Başarılı. Anasayfaya Yönlendiriliyorsunuz</div>";
            echo "<script>setTimeout(function(){ window.location.href = 'index.php'; }, 2000);</script>";
        } else {
            echo "<div id='hatali' style='color: red;'>Şifreniz hatalı.</div>";
           
        }
    } else {
        echo "<div id='hatali' style='color: red;'>E-posta hatalı.</div>";   
        ;
    }
} else {
    echo "<div id='hatali' style='color: green;'>E-posta ve şifre gereklidir.</div>";
}
?>

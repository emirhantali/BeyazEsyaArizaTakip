<?php
include("baglanti.php");
$gad=$_POST["ad"];
$gsifre=$_POST["parola"];

$query="SELECT * FROM personel WHERE ad='".$gad."'";
$result=mysqli_query($baglanti,$query) or die("sorgu hatası");
$num_row=mysqli_num_rows($result);
$row=mysqli_fetch_array($result);
if($num_row>=1)
{
     
    if($gsifre==$row['sifre'])
    {
        session_start();       
        $_SESSION["ad"]=$gad;
        $_SESSION["pid"]=$row['pid'];
        echo "Giriş Başarılı. Anasayfaya Yönlendiriliyorsunuz";
       header("Refresh:2; url=personelpanel.php");
    }
    else
    {
        echo "şifre hatalı. Personel girişine yönlendiriliyorsunuz";
        header("Refresh:3;url=personel.php");
    }
}
else
{
    echo "Ad hatalı. Personel girişine yönlendiriliyorsunuz";
    header("Refresh:3;url=personel.php");   
}
?>
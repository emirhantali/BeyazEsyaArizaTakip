<?php
include("baglanti.php");
$gad=$_POST["ad"];
$gsifre=$_POST["parola"];

$query="SELECT * FROM admin WHERE ad='".$gad."'";
$result=mysqli_query($baglanti,$query) or die("sorgu hatası");
$num_row=mysqli_num_rows($result);
$row=mysqli_fetch_array($result);
if($num_row>=1)
{
     
    if($gsifre==$row['sifre'])
    {
        session_start();       
        $_SESSION["Aad"]=$gad;
        $_SESSION["id"]=$row['id'];
        echo "Giriş Başarılı. Anasayfaya Yönlendiriliyorsunuz";
       header("Refresh:2; url=adminpanel.php");
    }
    else
    {
        echo "şifre hatalı. Admin girişine yönlendiriliyorsunuz";
        header("Refresh:3;url=admin.php");
    }
}
else
{
    echo "Ad hatalı. Admin girişine yönlendiriliyorsunuz";
    header("Refresh:3;url=admin.php");   
}
?>
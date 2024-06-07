<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
$gemail=$_POST["eposta"];

include("baglanti.php");

$query="SELECT * FROM uyeler WHERE email='".$gemail."' ";
$result=mysqli_query($baglanti,$query) or die ("sorgu hatası");
$num_rows =mysqli_num_rows($result);                // bu kod resulta bir değer döndü yani döndürülen satrın yani bir satır var onu result aldı ve bu kodda kaçtane satır döndürdüğünü gösteriyo kaç satır
$row=mysqli_fetch_array($result);                   //         result daki değeri alır diziye dönüştürür 

//mail yollamak için yaptığımız kodlar
if($num_rows>=1){
    $gideceksifre= $row['sifre'];
    require("PHPMailer/src/Exception.php");
    require("PHPMailer/src/PHPMailer.php");
    require("PHPMailer/src/SMTP.php");
    $mail=new PHPMailer();
    $mail->isSMTP();
    $mail->SMTPAuth=true;
    $mail->SMTPSecure="tls"; //güvenlik ayarı
    $mail->Port=587;  // port ayarı
    $mail->Host="smtp.gmail.com";  //gmail kullandığımız için bunu yazdık
    $mail->Username="eycariza@gmail.com";                               // mail kim tarafından gönderilcek site sahibi
    $mail->Password="l r y k e g v c u h ya i w w p";
    $mail->addAddress($gemail);
    $mail->Subject="Sifre Hatirlatma Maili";  //bu mailin konusu ne olacak
    $mail->Body="EYC SERVİS  Şifreniz:".$gideceksifre."Şifrenizi Kimse İle Paylaşmayınız";                                        // mailin gövdesinde ne yazılacak
    //gönderme işlemi yapılacak

    if($mail->send()) {echo "Mail Gönderildi Girişe Yönlendiriliyorsunuz"; header("Refresh:2; url=giris.php");}
    else echo "mail gönderilmedi";
}

else{
    echo "boyle bir mail adresi yok";
    header("Refresh:2; url=unuttum.php");
}
?>
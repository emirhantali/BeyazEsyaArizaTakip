<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giriş Yapınız</title>
</head>
<style>
*{
	
    box-sizing: border-box;
    text-decoration: none;	
    }
    *:focus{
        outline: none;
        
    }
    
    body{
        font-family: Arial;
        background: #232323;
        padding: 100px;
        background-image: url("arkaplan.jpg");
    }
    .login{
        margin: 20px auto;
        width: 300px;
    }
    .login-screen{
        
        background-color: #FFFFFF;
        padding: 20px;
        border-radius: 5px;
        
    }
    .app-title{
        text-align: center;
       color: black;
    }
    .login-form{
        
        text-align: center;
    }
    .control-group{
        margin-bottom: 10px;
    }
    input{
        text-align: center;
        background-color: #ECF0F1;
        border: 2px solid transparent;
        border-radius: 3px;
        font-size: 15px;
        font-weight: 200;
        padding: 10px 0;
        width: 250px;
        transition: border .5s; 
    }
    input:focus{
        border: 2px solid #3498DB;
        box-shadow: none;
    }
    .btn{
        border: 2px solid transparent;
        background: #000000;
        color: white;
        font-size: 15px;
        line-height: 10px 0;
        text-decoration: none;
        text-shadow: none;
        border-radius: 3px;
        transition: 0.25s;
        display: block;
        width: 250px;
        margin: 0 auto;
        margin-top: 5px;
    }
    .btn:hover{
        
        background-color: #beb206;;
        
    }

</style>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            $("#girisYap").click(function () {
                var email = $("#eposta").val();
                var parola = $("#parola").val();
                $.ajax({
                    type: "POST",
                    url: "girisislem.php",
                    data: { eposta: email, parola: parola },
                    success: function (response) {
                        $("#girisMesaji").html(response);
                    },
                    beforeSend: function () {
                        $("#girisMesaji").html("Giriş yapılıyor...");
                    }
                });
                return false;
            });
        });
    </script>
<body>
<div class="login">
    <div class="login-screen">
        <div class="app-title">
            <h1>Giriş Yapın</h1>
        </div>
        <div id="girisMesaji" align="center"></div>
        <form>
            <div class="login-form">
                <div class="control-group">
                    <input type="text" id="eposta" class="login-field" placeholder="E-posta">
                </div>
                <div class="control-group">
                    <input type="password" id="parola" class="login-field" placeholder="Şifre">
                </div>
                <button id="girisYap" class="btn btn-primary btn-large btn-block">Giriş Yap</button>
            </div>
        </form>
        <a href="kayit.php"><button class="btn btn-primary btn-large btn-block">Kayıt Ol</button></a>
        <p align="center" style="font-size: 10px; font-family: Trebuchet MS;">Şifrenizimi <a href="unuttum.php">Unuttunuz</a>?</p>
        <div id="girisMesaji"></div>
    </div>
</div>
</body>
</html>
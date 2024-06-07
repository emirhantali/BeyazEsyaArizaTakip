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
<body>
<div class="login">
	<div class="login-screen">
	<div class="app-title">
		<h1>Şifremi Unuttum</h1>
		</div>
		<form action="unuttumislem.php" method="post">
    <div class="login-form">

		<div class="control-group">
	<input type="email" name="eposta" class="login-field" placeholder="E-posta">
		<label class="login-field-icon fui-user" for="login-name"></label>	
	</div>

		<button href="index.php" name="unuttum" class="btn btn-primary btn-large btn-block">Şifremi Unuttum</button>
	   
		</div>
		</form>
        <p align="center" style="font-size: 10px; font-family: Trebuchet MS;">Hesabınız <a href="kayit.php">Yokmu</a>?</p>
        <p align="center" style="font-size: 10px; font-family: Trebuchet MS;">Giriş <a href="giris.php">Yapmak</a>İçin</p>
        <br>

	</div>
	
	</div>
</body>
</html>
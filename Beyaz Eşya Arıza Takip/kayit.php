<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kayit Olunuz</title>
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
    <h2>Kayıt Olun</h2>
		</div>
		<form action="kayitislem.php" method="post">
<div class="login-form">
		<div class="control-group">
	
	<input type="text" name="ad" class="login-field" placeholder="Ad" >
		<label class="login-field-icon fui-user" for="login-name"></label>	
	
	</div>

    <div class="control-group">
	
	<input type="text" name="soyad" class="login-field" placeholder="Soyad">
		<label class="login-field-icon fui-user" for="login-name"></label>	
	
	</div>

    <div class="control-group">
	
	<input type="text" name="eposta" class="login-field" placeholder="E-posta">
		<label class="login-field-icon fui-user" for="login-name"></label>	
	
	</div>

	<div class="control-group">
	<input type="password" name="sifre" class="login-field" placeholder="Şifre" >
	<label class="login-field-icon fui-user" for="login-pass"></label>		
			
	
	</div>
    
		<button href="kayit.php" name="kayit" class="btn btn-primary btn-large btn-block">Kayıt Ol</button>

		</div>
		</form>
        <br>
        <p align="center" style="font-size: 10px; font-family: Trebuchet MS;">Zaten <a href="giris.php">Üyemisiniz</a>?</p>
	</div>
	
	</div>
</body>
</html>
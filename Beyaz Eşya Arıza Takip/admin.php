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
        background-color: black;
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
		<h1 style="color: #beb206;  font-family: 'Times New Roman', Times, serif;">EYC SERVİS</h1>
        <h4 >ADMİN GİRİŞİ</h4>
		</div>
		<form action="admingrsislem.php" method="post">
<div class="login-form">
		<div class="control-group">
	
	<input type="text" name="ad" class="login-field" placeholder="Ad">
		<label class="login-field-icon fui-user" for="login-name"></label>	
	
	</div>
	<div class="control-group">
	<input type="password" name="parola" class="login-field" placeholder="Şifre" >
	<label class="login-field-icon fui-user" for="login-pass"></label>		
	
	</div>
		<button href="index.php" name="giris" class="btn btn-primary btn-large btn-block">Giris Yap</button>
	   
		</div>
		</form>
        
		
	</div>
	
	</div>
</body>
</html>
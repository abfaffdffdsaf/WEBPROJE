<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First mywebsite</title>
    <link rel="stylesheet" href="sitil.css">
</head>
<body>
    <header class="container2">
        
        <div class="giris">
            <h1>First Mywebsite</h1>
            <h2>HOŞGELDİNİZ</h2>
           

        </div>
        <div class="kullanıcıgirişi">
        <form action="login.php" method="post">
            <label for="kullanıcıadı">Kullanıcı adı:</label>
            <input type="email" name="kullanıcıadı" required autocomplete="on"> <br> 


            <label for="şifre">Şifre   :</label>
            <input type="password" name="şifre"required autocomplete="on"> <br>

            <input type="reset" value="Sıfırla">
            <input type="submit" value="Gönder">

        </form>
        </div>

    </div>
    


   
    







</body>
</html>

<?php
if(isset($_POST['kullanıcıadı']) && isset($_POST['şifre'])){
  $username = $_POST['kullanıcıadı'];
  $password = $_POST['şifre']; 

       if($username=='b221210066@sakarya.edu.tr' && $password=="b221210066" ){
       header("location:website.html" );
          exit();
      }
      
      else
      echo 
      "<h1>YALNIŞ KULLANICI ADI / ŞİFRE:</h1>";


}

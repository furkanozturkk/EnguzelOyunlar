<?php session_start();

if(isset($_SESSION["isim"]))
{
  header("location:oyunlar.php");
}
 else {
   ?>
 
<!DOCTYPE html>
<html>
<head>
  <title>EnGuzelOyunlar | Admin</title>
  <link rel="stylesheet" href="../admin/css/style.css">
</head>
<body>
<h2>Enguzeloyunlar.org</h2>
  <div class="outer-box">
    <div class="login-box">
      <h4 class="login-text">Giriş</h4>
        <form action="login.php" method="post" id="login">
      <center>
        <input id="username" type="mail" name="mail" placeholder="Email" autofocus="" required="">   
        <input id="password" type="password" name="password" placeholder="Şifre" required="">

      <button id="btn-login">Giriş Yap</button>
      </center>
    </form>
    </div>
  </div>
<small>Copyright 2017 Furkan ÖZTÜRK</small>
</body>
</html>
<?php } ?>
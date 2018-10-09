<?php session_start();

if(isset($_SESSION["isim"]))
{
   ?>
<!DOCTYPE html>
<html>
   <?php require_once  'include/head.php'; ?>
   <body>
      <div class="header">
         <?php require_once  'include/header.php'; ?>
      </div>
      <div class="govde">
         <?php require_once 'include/sidebar.php'; ?>
         <div class="content">
           <h1>Hoşgeldiniz...</h1>
         </div>
      </div>
   </body>
</html>
<?php
}
else{
   header("location:index.php");

} ?>
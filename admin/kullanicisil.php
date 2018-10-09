<?php 
$gelenID=$_GET['id'];
 include("..//baglanti.php");  
  $sql="DELETE FROM tbl_kullanicilar WHERE id=$gelenID";
  $sorgula=mysqli_query($vt,$sql);
  header("location:kullanicilar.php");




?>
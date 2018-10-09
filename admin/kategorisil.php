<?php 
$gelenID=$_GET['id'];
 include("..//baglanti.php");  
  $sql="DELETE FROM tbl_kategoriler WHERE id=$gelenID";
  $sorgula=mysqli_query($vt,$sql);
  header("location:kategoriler.php");




?>
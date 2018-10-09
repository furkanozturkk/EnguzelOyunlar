<?php 
$gelenID=$_GET['id'];
 include("..//baglanti.php");  
 $sql1="SELECT oyun,resim FROM tbl_oyunlar WHERE id=$gelenID";
 $sorgula2=mysqli_query($vt,$sql1);
 $sonuc = mysqli_fetch_assoc($sorgula2);
 unlink($sonuc['resim']);
 unlink($sonuc['oyun']);
  $sql="DELETE FROM tbl_oyunlar WHERE id=$gelenID";
  $sorgula=mysqli_query($vt,$sql);
  header("location:oyunlar.php");




?>
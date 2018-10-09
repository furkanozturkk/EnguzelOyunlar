<?php 
include("baglanti.php");
session_start();
               $gelenId=$_GET['id'];
               $kullanici_id=$_SESSION['id'];


$sql="INSERT INTO tbl_yorumbegeni (kullanici_id,yorum_id) VALUES('$kullanici_id','$gelenId')";
$result=mysqli_query($vt,$sql);

header('Location: ' . $_SERVER['HTTP_REFERER']);
?>
<?php 
include("baglanti.php");
session_start();
               $gelenId=$_GET['id'];
$sql="DELETE FROM tbl_yorumbegeni WHERE yorum_id=$gelenId";
$result=mysqli_query($vt,$sql);
header('Location: ' . $_SERVER['HTTP_REFERER']);
?>
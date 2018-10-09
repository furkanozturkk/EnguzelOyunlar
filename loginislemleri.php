<?php
session_start();
include("baglanti.php");

$k_adi=$_POST['username'];
$sifre=md5($_POST['password']);
	$sql="select * from tbl_kullanicilar where k_adi='$k_adi' and sifre='$sifre'";
	$result=mysqli_query($vt,$sql);
	$sorgula=mysqli_fetch_array($result);

	if(($k_adi==$sorgula['k_adi']&& $sifre==$sorgula['sifre']))
		{
			$_SESSION['k_adi']=$_POST['username'];
			$_SESSION['id']=$sorgula['id'];
			$_SESSION['mail']=$sorgula['mail'];
			header("location:index.php");
		}
	else
		{
			header("location:index.php");
		}

?>
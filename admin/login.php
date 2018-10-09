<?php
session_start();
include("..//baglanti.php");

$mail=$_POST['mail'];
$sifre=$_POST['password'];
	$sql="select * from tbl_admin where mail='$mail' and sifre='$sifre'";
	$result=mysqli_query($vt,$sql);
	$sorgula=mysqli_fetch_array($result);
		
	if(($mail==$sorgula['mail']&& $sifre==$sorgula['sifre']))
		{	
			$_SESSION['mail']=$_POST['mail'];
			$_SESSION['id']=$sorgula['id'];
			$_SESSION['isim']=$sorgula['ad_soyad'];
			echo "başarılı";
			header("location:anasayfa.php");
			
		}
	else
		{
			echo "<p style='color:white;'>lütfen üyelik bilgilerinizi kontrol ederek tekrar giriniz</p>";
			header("location:index.php");
		}

?>
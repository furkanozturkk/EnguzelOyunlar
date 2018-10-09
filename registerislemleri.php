<?php
if ($_POST) {
include 'baglanti.php';
$k_adi = $_POST['username'];
$sifre = md5($_POST['password']);
$mail = $_POST['email'];
$kadivarmi = mysqli_query($vt,"Select * from tbl_kullanicilar where k_adi='$k_adi'");
$mailvarmi = mysqli_query($vt,"Select * from tbl_kullanicilar where mail='$mail'");
$kadikontrol = mysqli_num_rows($kadivarmi);
$mailkontrol = mysqli_num_rows($mailvarmi);
if($kadikontrol==0){
	if($mailkontrol==0){
		$sorgu=mysqli_query($vt,"Insert into tbl_kullanicilar(k_adi,mail,sifre)values('$k_adi','$mail','$sifre')");
		if($sorgu)
        {
            header("location:index.php");
        }
        else
        {
            echo "Uyelik işlemleriniz başarıyla tamamlanmıştır";
        }
	}
	else{
		echo "Mail Var";
	}
 }
 else{
 	echo "Kullanıcı Adı Var";
 }

 }
 ?>

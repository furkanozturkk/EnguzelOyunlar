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
            <?php 
                           include("..//seflink.php");
               include("..//baglanti.php");
            $gelenId=$_GET['id'];

if($_POST)
{
    $gelenId=$_GET['id'];
    $kategori_adi = $_POST['kategori_adi'];
    $kategori_sef=permalink($kategori_adi);
    if(isset($_POST['durum'])) { 
         $yatay_durum=1;
    } else {
        $yatay_durum=0;
    }


    $sql = "UPDATE tbl_kategoriler SET kategori_adi='$kategori_adi', kategori_sef='$kategori_sef',yatay_durum='$yatay_durum' WHERE id='$gelenId'";
    $sonuc= mysqli_query($vt,$sql);
    header("location:kategoriler.php");
}
else
{
$sql="SELECT * FROM tbl_kategoriler WHERE id=$gelenId";
$sorgula=mysqli_query($vt,$sql);
$satirsay=mysqli_num_rows($sorgula);
if($satirsay>0)
{
   $satir=mysqli_fetch_array($sorgula);
echo' 
   <table border="1" align="center">
   <form action="" method="POST">
<tr>
<td colspan="2" align="center"> Kategori Güncelleme</td>
</tr>
<tr>
<td>Kategori Adı</td>
<td><input type="text" name="kategori_adi" value="'.$satir['kategori_adi'].'" required></td>
</tr>
<tr>
<td>Yatay Menü</td>
<td><input type="checkbox" name="durum"';if ($satir['yatay_durum']==1) echo 'checked'; else {} echo '/></td>
</tr>
<tr>
<td></td>
<td><input type="submit" value="Güncelle"></td>
</tr>
</table>
</form>';

}
}
}
else{
   header("location:index.php");

} ?> 
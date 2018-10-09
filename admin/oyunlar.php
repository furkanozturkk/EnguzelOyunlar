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
            <table>
				<tr>
					<th>Oyun ID</th>
					<th>Oyun Adı</th>
					<th>Oyun Sef</th>
					<th>Açıklama</th>
					<th>Kategori Adı</th>
					<th>Resim</th>
					<th>Resim Adresi</th>
					<th>Oyun Adresi</th>
					<th>Ekleme Tarihi</th>
					<th>Beğeni</th>
					<th></th>
					<th></th>
</tr>
<?php 
 include("..//baglanti.php");
               

$sql="SELECT tbl_oyunlar.id,tbl_oyunlar.oyun_adi,tbl_oyunlar.oyun_sef,tbl_oyunlar.aciklama,tbl_kategoriler.kategori_adi,tbl_oyunlar.ekleme_tarihi,tbl_oyunlar.resim,tbl_oyunlar.oyun,tbl_oyunlar.begeni FROM tbl_oyunlar INNER JOIN tbl_kategoriler ON tbl_oyunlar.kategori_id=tbl_kategoriler.id " ;
$sorgula=mysqli_query($vt,$sql);

while($result=mysqli_fetch_array($sorgula))
{
	extract($result);
	
	echo "
	<tr>
	
	<td>$id</td>
	<td>$oyun_adi</td>
	<td>$oyun_sef</td>
	<td>";echo substr($aciklama,0,60);echo"..</td>
	<td>$kategori_adi</td>
	<td><img src='$resim' height='42' width='42'></td>
	<td>$resim</td>
	<td>$oyun</td>
	<td>$ekleme_tarihi</td>
	<td>$begeni</td>
	<td><a href='oyunguncelle.php?id=$id'>Düzenle</td>
	<td><a href='oyunsil.php?id=$id'>Sil</td>
	</tr>";
}
?>
</table>
         </div>
      </div>
   </body>
</html>
<?php
}
else{
   header("location:index.php");

} ?>
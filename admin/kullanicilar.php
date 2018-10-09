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
					<th>Kullanıcı ID</th>
					<th>Kullanıcı Adı</th>
					<th>Mail</th>
					<th>Şifre</th>
					<th></th>
</tr>
<?php 
 include("..//baglanti.php");
               

$sql="SELECT * FROM tbl_kullanicilar" ;
$sorgula=mysqli_query($vt,$sql);

while($result=mysqli_fetch_array($sorgula))
{
	extract($result);
	
	echo "
	<tr>
	
	<td>$id</td>
	<td>$k_adi</td>
	<td>$mail</td>
	<td>$sifre</td>
	<td><a href='kullanicisil.php?id=$id'>Sil</td>
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
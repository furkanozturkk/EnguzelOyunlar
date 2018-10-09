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
					<th>Kategori ID</th>
					<th>Kategori Adı</th>
					<th>Kategori Sef</th>
					<th>Yatay Menu</th>
					<th></th>
					<th></th>
</tr>
<?php 
 include("..//baglanti.php");           

$sql="SELECT * FROM tbl_kategoriler ORDER BY kategori_adi ASC" ;
$sorgula=mysqli_query($vt,$sql);

while($result=mysqli_fetch_array($sorgula))
{
	extract($result);
	
	echo "
	<tr>
	
	<td>$id</td>
	<td>$kategori_adi</td>
	<td>$kategori_sef</td>
	<td style='text-align:center;'>";if($yatay_durum === '1') echo "<span style='background-color:green; color:white; padding:5px;border-radius:6px;'>Onaysız</span>"; else {echo "<span style='background-color:red; color:white; padding:5px;border-radius:6px;'>Onaysız</span>";} echo "</td>
	<td><a href='kategoriguncelle.php?id=$id'>Düzenle</td>
	<td><a href='kategorisil.php?id=$id'>Sil</td>
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
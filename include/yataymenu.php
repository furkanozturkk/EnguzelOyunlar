<div class="ortala">
	<ul class="yatay-menu">
		<li><a href='http://localhost/enguzeloyunlar/index.php'>Anasayfa</a></li>
	<?php 
 include("baglanti.php");
               include("seflink.php");

$sql="SELECT * FROM tbl_kategoriler WHERE yatay_durum=1 " ;
$sorgula=mysqli_query($vt,$sql);

while($result=mysqli_fetch_array($sorgula))
{
	extract($result);
	
	echo "<li><a href='http://localhost/enguzeloyunlar/	$kategori_sef/'>$kategori_adi</a></li>"; 
}
?>

				</ul>
			</div>
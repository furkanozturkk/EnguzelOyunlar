<!DOCTYPE html>
<html>
<?php require_once  'include/head.php'; ?>
<body>
	<div class="header">
		<?php require_once  'include/header.php'; ?>
	</div>
	<div class="govde">
		<?php require_once  'include/sidebar.php'; ?>
		<div class="content">
			<div class="yatay-reklam"></div>
			<div class='oyunlar'>
				<div class='oyunlar-header'>
					<h2>Yeni Oyunlar - Yeni En Güzel Oyunlar</h2>
				</div>
			<?php 
 include("baglanti.php");
               

$sql="SELECT * FROM tbl_oyunlar ORDER BY ekleme_tarihi DESC LIMIT 12" ;
$sorgula=mysqli_query($vt,$sql);
while($result=mysqli_fetch_array($sorgula))
{
	extract($result);

	echo "
			
				
				<div class='oyun-kutu'>
					<a href='http://localhost/enguzeloyunlar/aciklama.php?id=$id' title='$oyun_adi'>
						<img src='http://localhost/enguzeloyunlar/admin/$resim' width='145' height='115' alt='' border='0'>
						$oyun_adi
					</a>
				</div>
			";
		} ?>
		</div>
		<div class='oyunlar'>
				<div class='oyunlar-header'>
					<h2>Popüler Oyunlar - Popüler En Güzel Oyunlar</h2>
				</div>
			<?php 
 include("baglanti.php");
               

$sql="SELECT * FROM tbl_oyunlar ORDER BY begeni DESC LIMIT 20" ;
$sorgula=mysqli_query($vt,$sql);
while($result=mysqli_fetch_array($sorgula))
{
	extract($result);

	echo "
			
				
				<div class='oyun-kutu'>
					<a href='http://localhost/enguzeloyunlar/aciklama.php?id=$id' title='$oyun_adi'>
						<img src='http://localhost/enguzeloyunlar/admin/$resim' width='145' height='115' alt='' border='0'>
						$oyun_adi
					</a>
				</div>
			";
		} ?>
		</div>
		</div>
	</div>
<div class="dikey-reklam">
				<span>Sponsor Bağlantılar</span>
			</div>
	<div id="footer">
		<?php require_once  'include/footer.php'; ?>
	</div>

</body>
</html>

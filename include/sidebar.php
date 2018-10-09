<div class="sidebar">
			<div class="side-header">
				<span>Oyun Kategorileri</span>
			</div>
			<div class="side-body">
				<ul class="dikey-menu">
					<?php 
 					include("baglanti.php");

					$sql="SELECT * FROM tbl_kategoriler " ;
					$sorgula=mysqli_query($vt,$sql);
					while($result=mysqli_fetch_array($sorgula))
						{
							extract($result);
							echo "<li><a href='http://localhost/enguzeloyunlar/	$kategori_sef/'' title='$kategori_adi'>$kategori_adi</a></li>"; 
						}
?>
				</ul>
			</div>
		</div>
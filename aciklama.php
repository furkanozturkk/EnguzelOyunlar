<!DOCTYPE html>
<html>
<?php require_once  'include/head.php'; ?>
<body>
	<div class="header">
		<?php require_once  'include/header.php'; ?>
	</div>
	<div class="govde">
		<?php require_once  'include/sidebar.php'; ?>
		<div class="content" >
			<div class="oyunlar" style="background-color: transparent;">
				<?php 
 include("baglanti.php");
               $gelenId=$_GET['id'];    

$sql="SELECT * FROM tbl_oyunlar WHERE id=$gelenId" ;
$sorgula=mysqli_query($vt,$sql);
while($result=mysqli_fetch_array($sorgula))
{
	extract($result);
	
	echo "
	<div class='oyunlar-header'>
					<h2>$oyun_adi</h2>
				</div>
				<div class='content-box'>
					<div class='oyun-img'><img src='admin/$resim'></div>
					<div class='oyun-share'>
					<p class='oylama' itemprop='aggregateRating' itemscope=' itemtype='http://schema.org/AggregateRating'>
      <span id='file_rating' itemprop='ratingValue'><span class='star star_empty' title='0 / 5' style='cursor: pointer;'></span><span class='star star_empty' title='0 / 5' style='cursor: pointer;'></span><span class='star star_empty' title='0 / 5' style='cursor: pointer;'></span><span class='star star_empty' title='0 / 5' style='cursor: pointer;'></span><span class='star star_empty' title='0 / 5' style='cursor: pointer;'></span></span>
      <meta itemprop='bestRating' content='5'>
	  <meta itemprop='ratingCount' content='0'>
      <span class='oy'>0.00</span> / 5 (0 Oy)</p>
					<a href='http://www.facebook.com/sharer.php?u=http%3A%2F%2Fwww.enguzeloyunlar.org%2Fg1578&amp;t=Ate%C5%9F+ve+Su+2016+-+EN+G%C3%9CZEL+OYUNLAR+OYNA' rel='nofollow' target='_blank' class='face'></a>
					<a href='http://twitter.com/home?status=Zirveye+U%C3%A7u%C5%9F+Oyunu+oyunu+oyna+-+http%3A%2F%2Fwww.enguzeloyunlar.org%2Fg1882' rel='nofollow' target='_blank' class='tweet'></a>
					</div>
					<div class='oyun-aciklama'>
						<p class='aciklama-metin'>
						<span style='color: #1c3e91;font-size: 14px;font-weight: bold;'>$oyun_adi</span><br>
						<span>$aciklama</span>
						<p>
					</div>

				</div>
				<p class='oyna'><a href='http://localhost/enguzeloyunlar/oyna?id=$id' title='$oyun_adi'>Oynamak için tıklayınız!</a></p>";
}
?>
			</div>
					<div class='oyunlar'>
				<div class='oyunlar-header'>
					<h2>Benzer Oyunlar</h2>
				</div>
			<?php 
 include("baglanti.php");
               

$sql="SELECT * FROM tbl_oyunlar WHERE kategori_id=$kategori_id Limit 8";
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


			</div>
	<div id="footer">
		<?php require_once  'include/footer.php'; ?>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
	$(function(){
		var kontrol=0;
			$("#file_rating span").mouseover(function(){
				var index=$(this).index();
					$("#file_rating .star").css("color","#000")
						for(i=index;i>=0;i--){
							$("#file_rating .star:eq("+i+")").addClass("star_hover");
						}
					})
					$("#file_rating span").mouseout(function(){
						if(kontrol==0){
							$("#file_rating span").removeClass("star_hover");
						}
					})
					$("#file_rating span").click(function(){
						var index=$(this).index()+1;
						kontrol=1;
							for(i=index-1;i>=0;i--){
								$("#file_rating .star:eq("+(i)+")").removeClass("star_empty star_hover").addClass("star_full");
								}
								$(".oy").text(index);
					})
			})
	</script>
</body>
</html>


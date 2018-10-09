<div class="footer-block-cerceve">
			<div class="footer-block dorttebir">
				<div class="footer-block-head">En Yeni Oyunlar</div>
				<ul>
			         <?php 
 include("baglanti.php");
               

$sql="SELECT * FROM tbl_oyunlar ORDER BY ekleme_tarihi DESC LIMIT 5" ;
$sorgula=mysqli_query($vt,$sql);
while($result=mysqli_fetch_array($sorgula))
{
	extract($result);

	echo "
			<li><a href='http://localhost/enguzeloyunlar/aciklama.php?id=$id' title='$oyun_adi'>$oyun_adi</a></li>
			";
		} ?>
			         
      			</ul>
			</div>
			<div class="footer-block dorttebir">
				 <div class="footer-block-head">En Güzel Oyunlar</div>
				     <ul>
				        <?php 
 include("baglanti.php");
               

$sql="SELECT * FROM tbl_oyunlar ORDER BY begeni DESC LIMIT 5" ;
$sorgula=mysqli_query($vt,$sql);
while($result=mysqli_fetch_array($sorgula))
{
	extract($result);

	echo "
			<li><a href='http://localhost/enguzeloyunlar/aciklama.php?id=$id' title='$oyun_adi'>$oyun_adi</a></li>
			";
		} ?>
				    </ul>
			</div>
			<div class="footer-block dorttebir">
				<div class="footer-block-head">En Çok Oynanan Oyunlar</div>
			      	<ul>
			         	 <?php 
 include("baglanti.php");
               

$sql="SELECT * FROM tbl_oyunlar ORDER BY tiklanma DESC LIMIT 5" ;
$sorgula=mysqli_query($vt,$sql);
while($result=mysqli_fetch_array($sorgula))
{
	extract($result);

	echo "
			<li><a href='http://localhost/enguzeloyunlar/aciklama.php?id=$id' title='$oyun_adi'>$oyun_adi</a></li>
			";
		} ?>
			      	</ul>
			</div>
			<div class="footer-block dorttebir">
				<div class="footer-block-head">Bizi Takip Edin!!</div>
					<div class="sosyalblock">
						<script src="https://apis.google.com/js/platform.js" async="" defer="" gapi_processed="true">
  						{lang: 'tr'}
						</script>
						<div id="___person_0" style="text-indent: 0px; margin: 0px; padding: 0px; background: transparent; border-style: none; float: none; line-height: normal; font-size: 1px; vertical-align: baseline; display: inline-block; width: 180px; height: 199px;"><iframe ng-non-bindable="" frameborder="0" hspace="0" marginheight="0" marginwidth="0" scrolling="no" style="position: static; top: 0px; width: 180px; margin: 0px; border-style: none; left: 0px; visibility: visible; height: 199px;" tabindex="0" vspace="0" width="100%" id="I0_1521217747289" name="I0_1521217747289" src="https://apis.google.com/u/0/_/widget/render/person?usegapi=1&amp;width=180&amp;href=%2F%2Fplus.google.com%2Fu%2F0%2F117413614603758246945&amp;theme=dark&amp;showtagline=false&amp;rel=author&amp;hl=tr&amp;origin=http%3A%2F%2Fwww.enguzeloyunlar.org&amp;gsrc=3p&amp;ic=1&amp;jsh=m%3B%2F_%2Fscs%2Fapps-static%2F_%2Fjs%2Fk%3Doz.gapi.tr.B7QmSURg_nc.O%2Fm%3D__features__%2Fam%3DAQE%2Frt%3Dj%2Fd%3D1%2Frs%3DAGLTcCOsH5tGiUJlVf5_TIsODswPPObGqQ#_methods=onPlusOne%2C_ready%2C_close%2C_open%2C_resizeMe%2C_renderstart%2Concircled%2Cdrefresh%2Cerefresh%2Conload&amp;id=I0_1521217747289&amp;_gfid=I0_1521217747289&amp;parent=http%3A%2F%2Fwww.enguzeloyunlar.org&amp;pfname=&amp;rpctoken=17501513" data-gapiattached="true" title="+Badge"></iframe></div>
						<ul>
					        <li><a target="_blank" href="" rel="tooltip" title="Twitter" class="tw">Twitter</a></li>
					        <li><a target="_blank" href="http://www.enguzeloyunlar.org/rss.php" rel="tooltip" title="RSS" class="rss">RSS</a></li>
					        <li><li>
     					</ul>
					</div>
			</div>
			<div class="clear"></div>
			<hr class="cizgi">
			<p>Copyright © 2013 <a href="http://www.enguzeloyunlar.org/">EN GÜZEL OYUNLAR OYNA</a>. Tüm oyunlar ve açıklamalar sahiplerinin telif hakkıdır. Tüm hakları saklıdır.</p>
			<p><a href="http://www.korsanoyun.com/" title="en güzel oyunlar" target="_blank">en güzel oyunlar</a></p>
			<p></p>
			<p><!-- onArcade 2.4 -->
				<a href="http://www.enguzeloyunlar.org/sayfa/gizlilik-politikasi.html" title="Gizlilik Politikası">Gizlilik Politikası</a>
				<a href="http://www.enguzeloyunlar.org/contact.php">İletişim</a>
				<a href="http://www.enguzeloyunlar.org/sitemap.php">Sitemap</a>
  			</p>
		</div>
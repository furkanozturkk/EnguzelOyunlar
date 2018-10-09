<div class="ortala">
				<div class="logo">
					<a href="#" title="EN GÜZEL OYUNLAR OYNA">EN GÜZEL OYUNLAR OYNA</a>
				</div>
				<div class="search">
					<form name="search" action="" method="post">
						<input type="text" name="t" maxlength="40" size="20" class="searchinput">
						<input type="submit" value="Oyun Ara" class="searchsubmit">
					</form>
				</div>
				<div class="login">
					<div class="login-ic">

						<?php
 							session_start();
 							if(isset($_SESSION['k_adi'])){
 							echo "<div class='loginok'>
									<p>Hoşgeldin ".$_SESSION['k_adi']."</p>
									<p style='color:#d4d2d4'><a href='cikisyap.php'>Çıkış Yap</a></p>
								</div>";
							 }
							else{
								echo "<p><a href='http://localhost/enguzeloyunlar/login' class='uye_girisi'>Üye Girişi</a></p>
									<p><a href='http://localhost/enguzeloyunlar/register' class='uye_ol'>Yeni Üyelik</a></p>
									<p><a href='#'' class='facelog'>Yeni Üyelik</a></p>";
							}
							
						 ?>
					</div>
				</div>
			</div> 
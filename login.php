
<!DOCTYPE html>
<html>
<?php require_once  'include/head.php'; ?>
<body>
	<div class="header">
		<?php require_once  'include/header.php'; ?>
	</div>
	<div class="govde" style="width: 100%;">
		<div class="content" style="width: 100%; max-width: 910px;float: left;padding: 15px;" >
			<div class="login-img"></div>
<div class="login-form">
	<form action="loginislemleri.php" method="post" id="login">
    <h1>Giriş Yap</h1>
    <fieldset id="inputs">
        <input id="username" type="text" name="username" placeholder="Kullanıcı adı" autofocus="" required="">   
        <input id="password" type="password" name="password" placeholder="Şifre" required="">
    </fieldset>
    <fieldset id="actions">
        <input type="submit" name="submit" id="submit" value="Giriş Yap">
        <a href="http://www.enguzeloyunlar.org/login.php?a=lost_password">Şifrenizi mi unuttunuz?</a><a href="http://www.enguzeloyunlar.org/profile.php?a=register">Yeni Üyelik</a>
    </fieldset>
</form>
</div>
<div class="login-imgr"></div>
<div class="clear"></div>
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
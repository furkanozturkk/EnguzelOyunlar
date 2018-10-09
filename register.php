
<!DOCTYPE html>
<html>
<?php require_once  'include/head.php'; ?>
<body>
	<div class="header">
		<?php require_once  'include/header.php'; ?>
	</div>
	<div class="govde" style="width: 100%;">
		<div class="content" style="width: 100%; max-width: 870px;float: left;padding: 15px;" >
			<div class="register-img"><span>enguzeloyunlar.org</span></div>
			<div class="register_form">
    <div id="login">
        <div class="clear"></div>
      <form action="registerislemleri.php" method="post" id="reg_form">
       <h1>Kayıt ol</h1>
       <p></p><p>Lütfen üye olmadan önce aşağıdaki Üyelik Sözleşmesini okuyunuz ve kabul ediyorsanız üye olunuz.</p>
	<p align="center"><strong>Üyelik Sözleşmesi :</strong></p>
		<ul>
		<li>Diğer üyelere veya yorum sistemine spam göndermek yasaktır.</li>
		<li>Sana ait olmayan telif hakkı kapsamındaki materyallerin gönderilmesi yasaktır.</li>
		<li>Argo, siyasi, rencide edici, küfür, aşağılama vb. sözcük , benzetme veya cümleler kullanılamaz.</li>
		<li>Yöneticiler bir kişinin üyeliğini uyarı vermeksizin geçici olarak veya tamamen durdurma hakkına sahiptirler</li>
		</ul><p></p>
       <div class="clear"></div>
        <fieldset id="inputs">
        <input id="username" type="text" name="username" maxlength="25" placeholder="Kullanıcı adı" value="" required>
        </fieldset>
        <fieldset id="inputs" class="pass" data-msg="Şifreler Eşleşmiyor">
        <input id="password" type="password" name="password" maxlength="50" placeholder="Şifre" pattern=".{6,}"   required title="Şifre En Az 6 Karakter Olmalı" required>
        <input id="password" type="password" name="password_2" maxlength="50" placeholder="Şifreni onayla" pattern=".{6,}"   required title="Şifre En Az 6 Karakter Olmalı" required>
        </fieldset>
        <fieldset id="inputs" class="mail" data-msg="E-mailler Eşleşmiyor">
        <input id="email" type="email" name="email" maxlength="50" placeholder="E-posta" value="" required >
        <input id="email" type="email" name="email_2" maxlength="50" placeholder="E-Posta adresini onayla" value="" required>
        </fieldset>
        <fieldset id="inputs">
          <div id="image_verification"><div class="image_verification"><img src="http://www.enguzeloyunlar.org/includes/verification_image.php" class="code_image"><img src="http://www.enguzeloyunlar.org/images/reload.png" class="refresh_image">
          	<input type="text" maxlength="2" name="image_verification" style="width: 20px; background-image: none;height: 0;"></div></div>
        </fieldset>
    <div class="clear"></div>
        <fieldset id="actionsx">
        <input type="submit" id="submit" value="Kayıt ol">
        </fieldset>
      </form>
      </div>
      <script type="text/javascript">
    register.init();
      </script>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
 <script type="text/javascript">
 	function comparePassword(event) {
            var password, password_2;

            if (event.type == 'change') {
                // this = pass1, el = pass2
                password = $(this);
                password_2 = $(event.data.el);
            } else {
                // this = pass2, el = pass1
                password_2 = $(this);
                password = $(event.data.el);
            }

            if (password.val() != password_2.val()) {
                password_2[0].setCustomValidity(event.data.msg);
            } else {
                password_2[0].setCustomValidity('');
            }
        }

        $(".pass").each(function (i, e) {
            var msg = $(e).data('msg');
            if ($("input[type=password]", e).length == 2) {
                var elem = $("input[type=password]", e);
                $(elem[0]).change({el: elem[1], msg: msg}, comparePassword);
                $(elem[1]).keyup({el: elem[0], msg: msg}, comparePassword);
            }
        });
        function comparePassword(event) {
            var mail1, mail2;

            if (event.type == 'change') {
                // this = pass1, el = pass2
                mail1 = $(this);
                mail2 = $(event.data.el);
            } else {
                // this = pass2, el = pass1
                mail2 = $(this);
                mail1 = $(event.data.el);
            }

            if (mail1.val() != mail2.val()) {
                mail2[0].setCustomValidity(event.data.msg);
            } else {
                mail2[0].setCustomValidity('');
            }
        }

        $(".mail").each(function (i, e) {
            var msg = $(e).data('msg');
            if ($("input[type=email]", e).length == 2) {
                var elem = $("input[type=email]", e);
                $(elem[0]).change({el: elem[1], msg: msg}, comparePassword);
                $(elem[1]).keyup({el: elem[0], msg: msg}, comparePassword);
            }
        });
 </script>
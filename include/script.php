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
$(document)
    .ready(function () {
        $('#submit-registration')
            .on('click', function () {
                let email = $.trim($('#login-email')
                    .val());
                let password = $.trim($('#login-password')
                    .val());

                if (email.length == '') {
                    $('.login-email-msg')
                        .html('Email Field is Required');
                    email = '';
                }
                if (password.length == '') {
                    $('.login-password-msg')
                        .html('Password Field is Required');
                    password = '';
                }

                if (email !== '' && password !== '') {
                    $.ajax({
                        type: 'POST',
                        url: 'php/login-user.php',
                        dataType: 'json',
                        data: {'login-email': email, 'login-password': password},
                        success: function (data) {
                            if (data.msgcode === 'success') {
                                console.log('Both Password and Email are oke. We need to redirect User');
                            } else  if (data.msgcode === 'no_password') {
                                console.log('Password Unknown ' + data.msgcode);
                            } else  if (data.msgcode === 'no_email') {
                                console.log('Email Unknown ' + data.msgcode);
                            }
                        }
                    });

                }
            });
    });
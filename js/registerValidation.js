$(document)
    .ready(function () {
        const password_reg = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$\^&\*])(?=.{6,})");
        let password = '';
        let confirm = '';
        $('#password')
            .on('focusout', function () {
                var password_store = $.trim($('#password')
                    .val());
                // alert(password_store);
                $('.password_label')
                    .show();
                if (password_store.length == '') {
                    $('.password-error').html('Password is required');
                    password = '';

                } else if (password_reg.test(password_store)) {
                    $('.password-error').html("<div class='successful'><i class='fas fa-check-circle'></i> Your password is strong </div>");
                    $('.password_label').hide();
                    password = password_store;
                } else {
                    $('.password-error').html("<div class='successful'> Your password is must be at least 6 characters, must contain at least one lowercase," +
                        " one numeric digit and one special character" +
                        " </div>");
                    $('.password_label').show();
                    password = '';
                }
            });

        $('#confirm-password').on('focusout', function () {
            var confirm_password_store = $.trim($('#confirm-password')
                .val());
            // alert(password_store);
            $('.confirm_password_label')
                .show();
            if (confirm_password_store.length == '') {
                $('.confirm-password-error').html('Confirm Password is required');
                $('.confirm_password_label')
                    .show();
                confirm = '';

            } else if (confirm_password_store !== password) {
                $('.confirm-password-error').html("<div class='unsuccessful'><i class='fas fa-exclamation-circle'></i> Password didn't match </div>");
                $('#confirm-password').val('');
                $('.confirm_password_label')
                    .hide();
                confirm = '';
            } else {

               confirm = confirm_password_store;
            }
        });
    });

//Email Validation

$('#email').on('focusout', function () {
    var email_store = $.trim($('#email').val());
    if (email_store !== '') {
        $.ajax({
            type: 'POST',
            url: 'php/email-check.php',
            dataType: 'JSON',
            beforeSend: function () {
                $('.email-error').html('<i class="fas fa-spinner fa-pulse"></i>');
            },
            data: {email_check: email_store},
            success: function (data) {
                setTimeout(function () {
                    if (data['response'] == 'email_success') {
                        // console.log('We have a positive match ' + email_store + ' is in our db');
                        $('.email').val('');
                        $('.email-error').html("<div class='unsuccessful'><i class='fas fa-exclamation-triangle'></i> The " + email_store +" is in our" +
                            " database</div>");

                    } else {
                        // console.log('We are good to proceed')
                        $('.email_label').hide();
                        $('.email-error').html("<div class='successful'><i class='fas fa-check'></i> Great continue with this email</div>");
                    }
                }, 1700);
            }
        });
    }
});

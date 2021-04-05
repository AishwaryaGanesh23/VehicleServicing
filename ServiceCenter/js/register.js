$(document).ready(function () {

    $("#reg_button").on('click', function (e) {

        e.preventDefault();

        // validations
        var name = $("#customer_name").val();
        var mobNo = $("#customer_contact").val();

        if (name == "") {
            $("#nameError").html('Name Required*');
            $("#nameError").css('color', 'red');
            $("#nameError").css('font-size', '0.7rem');
            return (false);
        }
        else if (!(checkfochar(name))) {
            $("#nameError").html('Enter Valid Name');
            $("#nameError").css('color', 'red');
            $("#nameError").css('font-size', '0.7rem');
            return (false);
        }
        else {
            $("#nameError").html('');
        }

        if (mobNo == "") {
            $("#contactError").html('Mobile Number Required*');
            $("#contactError").css('color', 'red');
            $("#contactError").css('font-size', '0.7rem');
            return (false);
        }
        else if (mobNo.length !== 10) {
            $("#contactError").html('Enter 10 digits only');
            $("#contactError").css('color', 'red');
            $("#contactError").css('font-size', '0.7rem');
            return (false);
        }
        else {
            $("#contactError").html('');
        }

        var email = $("#customer_email").val();

        if (email == "") {
            $("#emailError").html('Email Required*');
            $("#emailError").css('color', 'red');
            $("#emailError").css('font-size', '0.7rem');
            return (false);
        }

        else if (!(checkemail(email))) {
            $("#emailError").html('Enter Valid Email*');
            $("#emailError").css('color', 'red');
            $("#emailError").css('font-size', '0.7rem');
            return (false);
        }
        else {
            $("#emailError").html('');
        }

        var password = $("#customer_password").val();

        if (password == "") {
            $("#passwordError").html('Password Required*');
            $("#passwordError").css('color', 'red');
            $("#passwordError").css('font-size', '0.7rem');
            return (false);
        }
        else if (password.length < 6) {
            $("#passwordError").html('Password length should be more than 6*');
            $("#passwordError").css('color', 'red');
            $("#passwordError").css('font-size', '0.7rem');
            return (false);
        }
        else {

            $("#passwordError").html('');

        }

        var address = $("#customer_address").val();

        if (address == "") {
            $("#addressError").html('Address Required*');
            $("#addressError").css('color', 'red');
            $("#addressError").css('font-size', '0.7rem');
            return (false);
        } else {
            $("#addressError").html('');
        }



        // ajax operation
        $.ajax({
            type: 'POST',
            url: 'web_services/custRegister.php',
            data: $("#reg_form").serialize(),
            success: function (result) {
                // alert(result.status);
                if (result.status == 'duplicate') {
                    // alert(result.status);
                    $("#emailError").html("Email already exist. Please try another email.");
                    $("#emailError").css('color', 'red');
                    $("#emailError").css('font-size', '0.7rem');

                }
                else if (result.status == 'failed') {
                    // alert(result.status);
                    $("$emailError").html("Oops something went wrong. Please contact the admin. Sorry for the inconvinience");
                }
                else if (result.status == 'success') {
                    // alert(result.status);
                    // $("#reg_msg").html("Registration Successfull. Try logging in."); 
                    document.cookie = "email=" + email + "?";
                    window.location.href = "registertwo.php";
                }
            },
            error: function (xhr, status, error) {
                alert("error: " + error);
            }
        })

    })

})

function checkforspchar(string) {
    return /[~`!#$%\^&*+=\-\[\]\\';.,/{}|\\":<>\?]/g.test(string);
}

function checkforno(string) {
    return /\d/.test(string);
}

function checkfochar(string) {
    return /^[a-z][a-z\s]*$/i.test(string);
}

function checkforregno(string) {
    return /^[A-Z]{2}[/][0-9]{2}[/][A-Z]{0,2}[/][0-9]{4}$/i.test(string);
}

function checkemail(string) {
    const re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(string);
}
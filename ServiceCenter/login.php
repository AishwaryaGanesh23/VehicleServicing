<?php

session_start();

require 'config/connect.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Form</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <!-- Css and bootstrap Stylesheets -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/40419ae504.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <!-- Bootstrap Scripts -->
    <script src="js/jquery.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.js"></script>



    <title>Animation</title>
</head>

<body>

    <div class="container">

        <h3 class="login_head">Login</h3>
        <form action="" method="">
            <div class="form-group">
                <input type="email" class="form-control" id="loginEmail" aria-describedby="emailHelp" placeholder="Enter email" name="email">
                <span id="loginEmailError" class=""></span>
            </div>

            <div class="form-group">
                <input type="password" class="form-control" id="loginPassword" placeholder="Password" name="password">
                <span id="loginPasswordError" class=""></span>
            </div>

            <button type="submit" class="btn btn-block btn-success btn-lg " id="loginButton" name="login_button">Login</button>

        </form>

        <span class=""><a href="">New Here? Click to register!</a></span>
        </br>
        <span class=""><a href="" data-toggle="modal" data-target="#passwordModal">Forgot password?</a></span>

    </div>

</body>

</html>


<!-- 
<div class="modal fade" id="passwordModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Reset Password</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <form>
                        <div class="form-group">
                            <input type="email" class="form-control" id="userEmail" aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="password" placeholder="New Password">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="re_password" placeholder="New Password">
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">

                <button type="button" class="btn btn-primary">Reset</button>
            </div>
        </div>
    </div>
</div> -->
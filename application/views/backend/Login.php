<!DOCTYPE html>
<html >
    <head>
        <meta charset="UTF-8">
        <title>Login Aplikasi Forecast</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
        <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans'>
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/css/stylelogin.css">
        <link rel="apple-touch-icon" href="<?php echo base_url(); ?>assets/backend/images/logo.png">
        <meta name="apple-mobile-web-app-title" content="Monitoring Sungai Saddang">
        <meta name="mobile-web-app-capable" content="yes">
        <link rel="shortcut icon" sizes="196x196" href="<?php echo base_url(); ?>assets/backend/images/logo.png">


    </head>

    <body>
        <div class="cont">
            <div class="demo">
                <div class="login">
                    <form method='post' action="backend/login/ceklogin" >
                        <!--<div class="login__check"></div>-->
                        <div class="logo"></div>
                        <!--<div class='tulisan'><center><h1>Dinas Pekerjaan Umum</h1>-->
                        <div class='tulisan'><center>
                                <h1>Halaman Administrator <br> Monitoring Sungai Saddang</h1>
                                <h2>BBWS Pompengan Jeneberang</h2>
                                <?php
                                echo '<h2>' . $this->session->flashdata('error') . '</h2></center>';
                                ?></div>

                        <div class="login__form">
                            <div class="login__row">
                                <svg class="login__icon name svg-icon" viewBox="0 0 20 20">
                                <path d="M0,20 a10,8 0 0,1 20,0z M10,0 a4,4 0 0,1 0,8 a4,4 0 0,1 0,-8" />
                                </svg>
                                <input type="text" class="login__input name" name='username' placeholder="Username"/>
                            </div>
                            <div class="login__row">
                                <svg class="login__icon pass svg-icon" viewBox="0 0 20 20">
                                <path d="M0,20 20,20 20,8 0,8z M10,13 10,16z M4,8 a6,8 0 0,1 12,0" />
                                </svg>
                                <input type="password" class="login__input pass" name='password' placeholder="Password"/>
                            </div>
                            <input type="submit" class="login__submit" value="Masuk">
                          <!--<p class="login__signup">Don't have an account? &nbsp;<a>Sign up</a></p>-->
                        </div>
                    </form>
                </div>
                <div class="app">
                    <div class="app__top">
                        <div class="app__menu-btn">
                            <span></span>
                        </div>
                        <svg class="app__icon search svg-icon" viewBox="0 0 20 20">
                        <!-- yeap, its purely hardcoded numbers straight from the head :D (same for svg above) -->
                        <path d="M20,20 15.36,15.36 a9,9 0 0,1 -12.72,-12.72 a 9,9 0 0,1 12.72,12.72" />
                        </svg>
                        <p class="app__hello">Login Berhasil! Harap menunggu proses masuk.</p>
                        <div class="app__user">
                            <img src="//s3-us-west-2.amazonaws.com/s.cdpn.io/142996/profile/profile-512_5.jpg" alt="" class="app__user-photo" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="<?php echo base_url(); ?>assets/backend/js/index.js"></script>

    </body>
</html>

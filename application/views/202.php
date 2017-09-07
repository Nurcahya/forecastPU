<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Aplikasi Forecasting</title>
        <meta name="description" content="Admin, Dashboard, Bootstrap, Bootstrap 4, Angular, AngularJS" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="mobile-web-app-capable" content="yes">
        <link rel="apple-touch-icon" href="<?php echo base_url(); ?>assets/backend/images/logo.png">
        <meta name="apple-mobile-web-app-title" content="Flatkit">
        <meta name="mobile-web-app-capable" content="yes">
        <link rel="shortcut icon" sizes="196x196" href="<?php echo base_url(); ?>assets/backend/images/logo.png">
        <!-- style -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/animate.css/animate.min.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/glyphicons/glyphicons.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/font-awesome/css/font-awesome.min.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/material-design-icons/material-design-icons.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/bootstrap/dist/css/bootstrap.min.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/styles/app.css" type="text/css" />

    </head>
    <body>
        <div class="app" id="app">
            <div class="app-body indigo bg-auto w-full">
                <div class="text-center pos-rlt p-y-md">
                    <h1 class="text-shadow text-white text-4x">
                        <span class="text-2x font-bold block m-t-lg">202</span>
                    </h1>
                    <p class="h5 m-y-lg text-u-c font-bold">Data berhasil dimasukkan dalam database. Terima kasih!</p>
                    <table>
                        <li> Kode Sensor : <?php echo $ksens; ?></li>
                        <li> Nilai : <?php echo $nilai; ?></li>
                        <li> Waktu Pencatatan: <?php echo $waktu; ?></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- endbuild -->
    </body>
</html>

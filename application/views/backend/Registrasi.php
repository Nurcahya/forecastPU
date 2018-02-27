<html ng-app="app_insert">
    <meta charset="utf-8">
    <head>
        <title>Aplikasi Administrator - Monitoring Sungai Saddang</title>
        <meta name="description" content="Admin, Dashboard, Bootstrap, Bootstrap 4, Angular, AngularJS" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-barstyle" content="black-translucent">
        <link rel="apple-touch-icon" href="<?php echo base_url(); ?>assets/backend/images/logo.png">
        <meta name="apple-mobile-web-app-title" content="Monitoring Sungai Saddang">
        <meta name="mobile-web-app-capable" content="yes">
        <link rel="shortcut icon" sizes="196x196" href="<?php echo base_url(); ?>assets/backend/images/logo.png">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<script src="<?php echo base_url(); ?>assets/backend/jquery/jquery/dist/jquery.js"></script>
        <script src="<?php echo base_url(); ?>assets/backend/jquery/tether/dist/js/tether.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/backend/jquery/bootstrap/dist/js/bootstrap.js"></script>
        <script src="<?php echo base_url(); ?>assets/backend/angular/angular/angular.js"></script>
    </head>
    <body>
        <div class="container" ng-controller="app_controller">
            <h1>FORM REGISTRAS APLIKASI ADMINISTRATOR SUNGAI SADDANG</h1>
            <h2>{{titel}}{{username}}</h2>
            <form>
                <label>USERNAME</label>
                <input type="text" class="form-control" ng-model="username">
                <label>PASSWORD</label>
                <input type="password" class="form-control" ng-model="password">
                <label>JENIS KELAMIN</label>
                <select class="form-control" ng-model="jk">
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                </select>
                <label>ALAMAT</label>
                <textarea class="form-control" ng-model="alamat"></textarea><br>
                <input type="button" class="btn btn-primary" ng-click="insert_data()" value="SUBMIT">
            </form>
        </div>

        <script>
            var app = angular.module('app_insert', []);
            app.controller('app_controller', function ($scope, $http) {
                // $scope.insert_data => insert_data merupakan nama dari ng-click pada tombol submit
                $scope.insert_data = function () {
                    $http.post("<?php echo site_url('backend/login/simpan'); ?>", {'username': $scope.username, 'password': $scope.password, 'jk': $scope.jk, 'alamat': $scope.alamat}).success(function (data, status, headers, config) {
                        //Beritahu jika data sudah berhasil di input
                       // alert("Data Berhasil Di Input");
                    });
                };
                 $scope.$watch('jk',function(){
                    if($scope.jk=='L'){
                        $scope.titel="Tuan ";
                    } else if ($scope.jk=='P') {
                        $scope.titel="Nyonya ";
                    }
                });

            });
        </script>
    </body>
</html>
<!-- build:js scripts/app.html.js -->
<!-- jQuery -->
<script src="<?php echo base_url(); ?>assets/backend/jquery/jquery/dist/jquery.js"></script>
 <?php if ($link == 'video') { ?>
<!--<script src="<?php echo base_url(); ?>assets/backend/jquery/datatables/media/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/backend/jquery/plugins/integration/bootstrap/3/dataTables.bootstrap.js"></script>-->
<script>
  var app = angular.module('myApp', []);
    app.controller('myCtrl', function ($scope) {
        $scope.smalltext = "Video player monitoring sungai";
//        $scope.ubah = function (x) {
//            $scope.smalltext = x;
//            document.getElementById("isivideo").src = "<?php echo base_url(); ?>assets/video/" + x;
//            mediaPlayer = document.getElementById('media-video');
//            mediaPlayer.currentTime = 0;
//            mediaPlayer.load();
//            mediaPlayer.play();
//        };
    });
      $(function () {
        $('#pos #item').click(function () {
            var target = $(this).data('target');
            var show = $(this).data('show');
            $('#idpos').text('Daftar Video ' + $(this).text());
            $('#judul').text($(this).text());
            $(target).children().addClass('hide');
            $(show).removeClass('hide');
        });
    }); 
    function mainkan(x){
        document.getElementById("isivideo").src = "<?php echo base_url(); ?>assets/video/" + x;
        document.getElementById("judulvideo").innerHTML="Video player saat ini memainkan : "+x;
        mediaPlayer = document.getElementById('media-video');
        mediaPlayer.currentTime = 0;
        mediaPlayer.load();
        mediaPlayer.play();
    }
</script>
    
 <?php } ?>
<!-- Bootstrap -->
<script src="<?php echo base_url(); ?>assets/backend/jquery/tether/dist/js/tether.min.js"></script>
<script src="<?php echo base_url(); ?>assets/backend/jquery/bootstrap/dist/js/bootstrap.js"></script>
<!-- core -->
<script src="<?php echo base_url(); ?>assets/backend/jquery/underscore/underscore-min.js"></script>
<script src="<?php echo base_url(); ?>assets/backend/jquery/jQuery-Storage-API/jquery.storageapi.min.js"></script>
<script src="<?php echo base_url(); ?>assets/backend/jquery/PACE/pace.min.js"></script>
<!-- ajax -->
<script src="<?php echo base_url(); ?>assets/backend/scripts/config.lazyload.js"></script>

<script src="<?php echo base_url(); ?>assets/backend/scripts/palette.js"></script>
<script src="<?php echo base_url(); ?>assets/backend/scripts/ui-load.js"></script>
<script src="<?php echo base_url(); ?>assets/backend/scripts/ui-jp.js"></script>
<script src="<?php echo base_url(); ?>assets/backend/scripts/ui-include.js"></script>
<script src="<?php echo base_url(); ?>assets/backend/scripts/ui-device.js"></script>
<script src="<?php echo base_url(); ?>assets/backend/scripts/ui-form.js"></script>
<script src="<?php echo base_url(); ?>assets/backend/scripts/ui-nav.js"></script>
<script src="<?php echo base_url(); ?>assets/backend/scripts/ui-screenfull.js"></script>
<script src="<?php echo base_url(); ?>assets/backend/scripts/ui-scroll-to.js"></script>
<script src="<?php echo base_url(); ?>assets/backend/scripts/ui-toggle-class.js"></script>
<script src="<?php echo base_url(); ?>assets/backend/scripts/app.js"></script>
<script src="<?php echo base_url(); ?>assets/backend/jquery/jquery-pjax/jquery.pjax.js"></script>
<script src="<?php echo base_url(); ?>assets/backend/scripts/ajax.js"></script>



<!-- endbuild -->
</body>
</html>
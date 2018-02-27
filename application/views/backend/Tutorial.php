<?php
$this->load->view('backend/tema/Header');
?>
<!--<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>-->
<div class="padding">    
    <div class="row" ng-app='myApp' ng-controller='myCtrl'>
        <!--<div class="row">-->
        <div class="col-md-8">
            <div class="box">
                <div class="box-header accent">
                    <h3 >Isi Buku Manual</h3>
                </div>
                <div class="box-body">
                    <div class='media-player'>
                    <iframe id="isimanual" SRC=<?php echo base_url('libs/pdf/DMC.html');?> width=100% height="480" frameBorder="0"></iframe>          
                    </div>	
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="box">
                <div class="box-header accent">
                    <h3>Daftar Buku Manual</h3>
                </div>
                <div class="box-body">
                    <ul>
                        <li><h6 id='idpos'><a onclick="bukamanual('DMC.html')">Database Measurement Controller</a></h6></li>
                        <li><h6 id='idpos'><a onclick="bukamanual('RMA.html')">River Monitoring Administrator</a></h6></li>
                        <li><h6 id='idpos'><a onclick="bukamanual('RMD.html')">River Monitoring Display</a></h6></li>
                        <li><h6 id='idpos'><a onclick="bukamanual('RMO.html')">River Monitoring Online</a></h6></li>
                    </ul>
                </div>
            </div>
        </div>
        
    </div>
</div>
</div>
<!-- ############ PAGE END-->
</div>
</div>


<div id="switcher">
    <div class="switcher box-color dark-white text-color" id="sw-theme">
        <a href ui-toggle-class="active" target="#sw-theme" class="box-color dark-white text-color sw-btn">
            <i class="fa fa-gear"></i>
        </a>
        <div class="box-header">
            <h2>Pengganti Tema</h2>
        </div>
        <div class="box-divider"></div>
        <div class="box-body">
            <p class="hidden-md-down">
                <label class="md-check m-y-xs"  data-target="folded">
                    <input type="checkbox">
                    <i class="green"></i>
                    <span class="hidden-folded">Minimalis</span>
                </label>
                <label class="md-check m-y-xs" data-target="boxed">
                    <input type="checkbox">
                    <i class="green"></i>
                    <span class="hidden-folded">Bentuk Box</span>
                </label>
                <label class="m-y-xs pointer" ui-fullscreen>
                    <span class="fa fa-expand fa-fw m-r-xs"></span>
                    <span>Layar Penuh</span>
                </label>
            </p>
            <p>Tema:</p>
            <div data-target="bg" class="row no-gutter text-u-c text-center _600 clearfix">
                <label class="p-a col-sm-6 light pointer m-0">
                    <input type="radio" name="theme" value="" hidden>
                    Putih
                </label>
                <label class="p-a col-sm-6 grey pointer m-0">
                    <input type="radio" name="theme" value="grey" hidden>
                    Abu-abu
                </label>
                <label class="p-a col-sm-6 dark pointer m-0">
                    <input type="radio" name="theme" value="dark" hidden>
                    Gelap
                </label>
                <label class="p-a col-sm-6 black pointer m-0">
                    <input type="radio" name="theme" value="black" hidden>
                    Hitam
                </label>
            </div>
        </div>
    </div>
</div>
<!-- / -->
<!-- ############ LAYOUT END-->
</div>


<?php
$this->load->view('backend/tema/Footer');
?>
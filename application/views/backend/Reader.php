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
                    <h3 >Isi File CSV</h3>
                </div>
                <div class="box-body">
                    <div class='media-player'>
                        <iframe id="isifile" src="" width=100% height="330" frameBorder="0"></iframe>
                    </div>	
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="box">
                <div class="box-header accent">
                    <h3>Daftar File CSV</h3>
                </div>
                <div class="box-body">
                    <div class="btn-group dropdown" >
                        <button class="btn white dropdown-toggle" data-toggle="dropdown" id="judul" >Pilih Pos</button>
                        <div class="dropdown-menu dropdown-menu-scale"  id="pos">
                            <?php foreach ($pos2 as $rows) { ?>
                                <a class="dropdown-item" id='item' data-target=".hasil" data-show=".<?php echo $rows->id_pos; ?>"><?php echo $rows->nama_pos; ?></a>                                
                            <?php } ?>
                        </div>
                    </div>
                    <br><br>
                    <h6 id='idpos'>Daftar File</h6>
                    <div class="table-responsive">  
                        <table id="tabelvideo" class="table table-striped b-t b-b">    
                            <thead>
                                <tr><th>Nama File</th><th>Waktu</th></th>
                            </thead>
                            <tbody class="hasil">
                                <?php
                                $no = 1;
                                foreach ($csv as $rows) {
                                    ?>                       
                                    <tr class="<?php echo $rows->id_pos; ?> "><td><a onclick="buka('<?php echo $rows->nama_file; ?>')"><?php echo $rows->nama_file; ?></a></td><td><?php echo $rows->waktu; ?></td></tr>
                                    <?php
                                    $no++;
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
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
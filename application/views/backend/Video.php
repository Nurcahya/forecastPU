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
                    <h3 >Video CCTV</h3>
                    <small id='judulvideo'>{{smalltext}}</small>
                </div>
                <div class="box-body">
                    <div class='media-player'>

<iframe width="760" height="480" src="https://www.youtube.com/embed/jTQLYeXlxd8" frameborder="0" allowfullscreen></iframe>

                        <center><video class='media-video' id='media-video' controls>
                                <source id='isivideo' src=<?php echo base_url(); ?>assets/video/gin.MP4 type='video/mp4'>
                            </video></center>
                    </div>	
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="box">
                <div class="box-header accent">
                    <h3>Daftar CCTV</h3>
                </div>
                <div class="box-body">
                    <div class="btn-group dropdown" >
                        <button class="btn white dropdown-toggle" data-toggle="dropdown" id="judul" >Pilih Pos</button>
                        <div class="dropdown-menu dropdown-menu-scale"  id="pos">
                            <?php foreach ($pos as $itempos) { ?>
                                <a class="dropdown-item" id='item' data-target=".hasil" data-show=".<?php echo $itempos->id_pos; ?>"><?php echo $itempos->nama_pos; ?></a>                                
                            <?php } ?>
                        </div>
                    </div>
                    <br><br>
                    <h6 id='idpos'>Daftar Video</h6>
                    <div class="table-responsive">  
                        <table id="tabelvideo" class="table table-striped b-t b-b">    
                            <thead>
                                <tr><th>Judul</th><th>Waktu</th></th>
                            </thead>
                            <tbody class="hasil">
                                <?php
                                $no = 1;
                                foreach ($vid as $video) {
                                    ?>                       
                                    <tr class="<?php echo $video->id_pos; ?> "><td><a onclick="mainkan('<?php echo $video->judul; ?>')"><?php echo $video->judul; ?></a></td><td><?php echo $video->waktu; ?></td></tr>
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
        <div class="col-md-12">
            <div class="box">
                <div class="box-header accent">
                    <h3 >Upload Video</h3>
                    <small>Upload video sementara menggunakan ini. Selanjutnya akan menggunakan FTP dan HTTP GET</small>
                </div>
                <div class="box-body">
                    <form action='video/savevideo' method='post' enctype="multipart/form-data">
                        <div class="form-group row">
                            <label class="col-sm-2 form-control-label">Pilih Pos</label>
                            <select class="form-control c-select col-sm-4" name='idpos'>
                                <?php foreach ($pos2 as $itempos) { ?>
                                    <option value="<?php echo $itempos->id_pos; ?>"><?php echo $itempos->nama_pos; ?></a>                                
                                    <?php } ?>
                            </select>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 form-control-label">Pilih Video</label>
                            <input class="form-control col-sm-4" type="file" name="userfile" id="gambar">
                        </div>

                        <div class="col-sm-offset-2 col-sm-10">
                          <button type="submit" class="btn white">Upload</button>
                        </div>

                    </form>
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
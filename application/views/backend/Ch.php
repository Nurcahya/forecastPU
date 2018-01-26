<?php
$this->load->view('backend/tema/header');
?>

<div class="padding">    
<div class="row">
    <div class="col-sm-8">
      <div class="box">
        <div class="box-header accent">
          <h3>Grafik Curah Hujan</h3>
        </div>
        <div class="box-body">              
	<iframe SRC=<?php echo base_url('backend/CH/graflive/').$_GET['id'];?> width=100% height="330" frameBorder="0"></iframe>          
        </div>
      </div>
    </div>
    
    <div class="col-md-4">
            <div class="box">
                <div class="box-header accent">
                    <h3>Daftar Pos</h3>
                </div>
                <div class="box-body">
                    <h4><?php echo $namapos->nama_pos; ?> </h4>
                    Pilih Pos : 
                    <div class="btn-group dropdown" >
                        <button class="btn white dropdown-toggle" data-toggle="dropdown" id="judul" >Daftar Pos</button>
                        <div class="dropdown-menu dropdown-menu-scale"  id="pos">
                            <?php foreach ($pos as $itempos) { ?>
                               <a class="dropdown-item" id='item' href="<?php echo site_url('backend/ch?id=').$itempos->id_pos ?>"><?php echo $itempos->nama_pos; ?></a>                                
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    
    
    <div class="col-sm-12">
      <div class="box">
        <div class="box-header accent">
          <h3>Tabel Curah Hujan</h3>
          <small>Riwayat Seluruh Curah Hujan</small>
        </div>
        <div class="box-body">              
	<iframe SRC=<?php echo base_url('backend/ch/grid/').$_GET['id'];?> width=100% height="500" frameBorder="0"></iframe>          
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
$this->load->view('backend/tema/footer');
?>
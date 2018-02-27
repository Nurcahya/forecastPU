<?php
$this->load->view('backend/tema/header');
?>

<div class="padding">    
<div class="row">
    <div class="col-sm-8">
      <div class="box">
        <div class="box-header accent">
          <h3>Grafik Turbidity</h3>
        </div>
        <div class="box-body">    
        <?php if($_GET['kat']=='harian') { ?>
	<iframe SRC=<?php echo base_url('backend/turbidity/graflive2/').$_GET['id'];?> width=100% height="330" frameBorder="0"></iframe>          
         <?php } else if($_GET['kat']=='bulanan') { ?>
	<iframe SRC=<?php echo base_url('backend/turbidity/graflive3/').$_GET['id'];?> width=100% height="330" frameBorder="0"></iframe>          
         <?php } else { ?> 
	<iframe SRC=<?php echo base_url('backend/turbidity/graflive/').$_GET['id'];?> width=100% height="330" frameBorder="0"></iframe>          
         <?php } ?>
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
                               <a class="dropdown-item" id='item' href="<?php echo site_url('backend/turbidity?kat=10&id=').$itempos->id_pos ?>"><?php echo $itempos->nama_pos; ?></a>                                
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        
            <div class="box">
                <div class="box-header accent">
                    <h3>Kategori</h3>
                </div>
                <div class="box-body">
                    <a class="md-btn md-raised m-b-sm w-xs blue" href="<?php echo site_url('backend/turbidity?kat=10&id=').$_GET['id'] ?>">10 Menit</a>
                    <a class="md-btn md-raised m-b-sm w-xs blue" href="<?php echo site_url('backend/turbidity?kat=harian&id=').$_GET['id'] ?>">Harian</a>
                    <a class="md-btn md-raised m-b-sm w-xs blue" href="<?php echo site_url('backend/turbidity?kat=bulanan&id=').$_GET['id'] ?>">Bulanan</a>
                </div>
            </div>
        </div>
    
    
    
    <div class="col-sm-12">
      <div class="box">
        <div class="box-header accent">
          <h3>Tabel Turbidity</h3>
          <small>Riwayat Seluruh Turbidity</small>
        </div>
        <div class="box-body">   
         <?php if($_GET['kat']=='harian') { ?>
            <iframe SRC=<?php echo base_url('backend/turbidity/grid2/').$_GET['id'];?> width=100% height="500" frameBorder="0"></iframe>          
         <?php } else if($_GET['kat']=='bulanan') { ?>
            <iframe SRC=<?php echo base_url('backend/turbidity/grid3/').$_GET['id'];?> width=100% height="500" frameBorder="0"></iframe>          
         <?php } else { ?> 
              <form action="<?php echo site_url();?>backend/turbidity/createSess/<?php echo $_GET['id']; ?>" method="post" target="frametabel">
                <div class='form-group'>
                    <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
                    
                            <table border="0" width="50%">
                                <tr>
                                <td><p>Tanggal Mulai: <input type="text" name="tglmulai" id="datepicker"></p></td>
                                <td><p>Tanggal Berakhir: <input type="text" name="tglakhir" id="datepicker2"></p></td>
                                <td><input type="submit" value="Filter" class="btn-primary"></td>
                                <td><a href="<?php echo site_url();?>backend/turbidity/grid/<?php echo $_GET['id']; ?>" target="frametabel"><input type="button" value="Reset Filter" class="btn-secondary"></a></td>
                            </table>
                    
                </div>
                </form>
            <iframe name="frametabel" SRC=<?php echo base_url('backend/turbidity/grid/').$_GET['id'];?> width=100% height="500" frameBorder="0"></iframe>          
         <?php } ?>     
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
<?php
$this->load->view('backend/tema/Header');
?>

<div class="padding">
  <div class="row">
    <div class="col-sm-8 col-md-9">
        
<?php  if($this->session->flashdata('sukses')=="isinya"){ ?>
<div class="alert alert-success alert-dismissable fade in">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Sukses!</strong> Email Anda telah berhasil terkirim. Harap tunggu balasan dari kami.
</div>
<?php } ?>
        
      <h4 class="m-0 m-b-sm text-md">Tentang Aplikasi</h4>
      <div class="m-b" id="accordion">
        <div class="panel box no-border m-b-xs">
          <div class="box-header p-y-sm">
            <a data-toggle="collapse" data-parent="#accordion" data-target="#c_1">
              Sekilas Tentang Aplikasi Monitoring Sungai Saddang
            </a>
          </div>
          <div id="c_1" class="collapse in">
            <div class="box-body">
Aplikasi MONITORING SUNGAI SADDANG - BBWS POMPENGAN JENEBERANG dibuat dengan memungkinkan pengguna untuk mengatur data pengukuran yang diterima dari sensor dan peralatan ukur lainnya yang ada di masing-masing stasiun pengukuarn. Perangkat lunak ini dirancang agar dapat mudah digunakan (user-friendly) namun handal dan dapat menampung data hasil pengukuran yang besar di dalam database dalam engine SQL. Data hasil pengukuran dapat di-eksport ke berbagai format data seperti excel, sql, csv dan bahkan dapat dicetak.<br><br>Aplikasi ini terdiri dari beberapa menu navigasi, antara lain: Dashboard untuk melihat tampilan peta letak stasiun pengukuran, Lokasi pos untuk melakukan pengaturan terhadap lokasi pos stasiun pengukuran, Riwayat curah hujan untuk melihat riwayat data curah hujan dari setiap stasiun pengukuran, Riwayat tinggi air untuk melihat riwayat data ketinggian muka air sungai dari setiap stasiun pengukuran, Citra kamera untuk melihat riwayat data citra yang dikirimkan melalui setiap kamera di masing-masing stasiun pengukuran, User untuk mengatur akun pengguna yang dapat masuk ke dalam aplikasi ini, Video untuk melihat rekaman CCTV selama 10 detik setiap harinya.
            </div>
          </div>
        </div>
      </div>
      <h4 class="m-t-md text-md">Kirim Pertanyaan</h4>
      <form name="form-contact" class="form-validation m-b-lg" method="post" action="about/email">
        <div class="row">
          <div class="col-sm-6 m-b">
            <label>Nama Anda</label>
            <input type="text" class="form-control" name='nama' placeholder="Nama" required >
          </div>
          <div class="col-sm-6 m-b">
            <label>Email</label>
            <input type="email" class="form-control" name='email' placeholder="Email" required >
          </div>
        </div>
        <div class="form-group">
          <label>Subjek Pertanyaan</label>
          <select class="form-control c-select" name='subjek'>
            <option>Aplikasi Error</option>
            <option>Web Error</option>
            <option>Database Error</option>
          </select>
        </div>
        <div class="form-group" >
          <label>Pertanyaan Anda</label>
          <textarea class="form-control" rows="6"  name='isi' placeholder="Pertanyaan"></textarea>
        </div>
        <button type="submit" class="btn btn-info">Submit</button>
      </form>
    </div>
    <div class="col-sm-4 col-md-3">
      <h4 class="m-0 m-b-sm text-md">Hubungi kami</h4>
      <div class="box">
        <ul class="list inset">
          <li class="list-item">
            <a herf class="list-left">
              <span class="w-40 circle avatar accent">
                <span>J</span>
                <!--<i class="away b-white"></i>-->
              </span>
            </a>
            <div class="list-body">
              <div><a href>Juniadi Arijanto</a></div>
              <small class="text-muted text-ellipsis">President Director</small>
            </div>
          </li>
          <li class="list-item">
            <a herf class="list-left">
              <span class="w-40 circle avatar green">
                <span>I</span>
              </span>
            </a>
            <div class="list-body">
              <div><a href>Ira Gumbira</a></div>
              <small class="text-muted text-ellipsis">Project Manager</small>
            </div>
          </li>
          <li class="list-item">
            <a herf class="list-left">
              <span class="w-40 circle avatar purple">
                <span>N</span>
              </span>
            </a>
            <div class="list-body">
              <div><a href>Nurcahya Pradana T.P.</a></div>
              <small class="text-muted text-ellipsis">Software Engineer</small>
            </div>
          </li>
          
        </ul>
      </div>
      <div class="m-b">
        <p><i class="fa fa-fw text-muted m-r-xs fa-envelope"></i> sartika@sartika-ms.com</p>
        <p><i class="fa fa-fw text-muted m-r-xs fa-phone"></i> (+6221) 750 4918</p>
        <p><i class="fa fa-fw text-muted m-r-xs fa-clock-o"></i> Senin-Jum'at 9:00 - 16:00</p>
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
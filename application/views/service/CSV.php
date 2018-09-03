  <?php
$this->load->view('service/tema/header_csv');

?>

		<div class="container-fluid" id="pcont">
		  <div class="cl-mcont">
		  <br><br><br><br>
	  		<form action="<?php echo site_url();?>service/insertCSV" method="post" enctype="multipart/form-data" onSubmit="getPath();">
			    Pilih CSV untuk diupload:
			    <input type="file" name="csv[]" multiple="multiple" id="csv">

			    Masukkan tipe sensor: <br>
			    <select name="tipe">
				    <option value="TMA">Tinggi Muka Air</option>
				    <option value="CH">Curah Hujan</option>
				</select><br>
			    Masukkan kode sensor: <br>
			    <input type="text" name="ksens" id="ksens">
			    <input type="submit" value="Upload" name="submit">
			</form>

		  </div>
		</div> 

  <?php
$this->load->view('service/tema/footer');

?>
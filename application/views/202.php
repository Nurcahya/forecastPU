<ul>
    <li> Sensor: <?php echo $ksens; ?></li>
    <li> Nilai: <?php echo $nilai; ?></li>
    <li> Waktu: <?php echo $waktu; ?></li>
    <li> Kamera: <?php echo $kamera; ?></li>
    <li> Tegangan: <?php 
    if (isset($_GET['teg'])){
            echo $_GET['teg'];
        } else {
            echo '0';
        } ?>
    </li>
    <li> Kode: <?php 
    if (isset($_GET['kode'])){
         echo substr($_GET['kode'],0,1)." - ".substr($_GET['kode'],1,1)." - ".substr($_GET['kode'],2,1);
         echo "<br>Status Signal Conditioning : ";
         if (substr($_GET['kode'],0,1)=='1'){
             echo "On";
         } else {
             echo "Off";
         }
         echo "<br>Status Pengiriman : ";
         if (substr($_GET['kode'],1,1)=='1'){
             echo "Sukses";
         } else {
             echo "Timeout";
         }
             
         echo "<br>Status Kamera : ";
         if (substr($_GET['kode'],2,1)=='1'){
            echo 'On';
         } else {
            echo 'Off';
        }
    } ?>
    </li>
</ul>


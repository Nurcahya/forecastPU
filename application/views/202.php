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
</ul>


<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>ADMINISTRATOR MONITORING SUNGAI SADDANG</title>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/animate.css/animate.min.css" type="text/css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/glyphicons/glyphicons.css" type="text/css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/font-awesome/css/font-awesome.min.css" type="text/css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/material-design-icons/material-design-icons.css" type="text/css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/bootstrap/dist/css/bootstrap.min.css" type="text/css" />
<!-- build:css ../assets/styles/app.min.css -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/styles/app.css" type="text/css" />
</head>

<body>

<div class="mainwrapper fullwrapper">
                
    <!-- START OF RIGHT PANEL -->
    <div class="rightpanel" style="margin-left: 0px !important;">
        <center>
        	<h1>Citra CCTV Monitoring Sungai Saddang <br> Stasiun <?php echo $pos->nama_pos; ?></h1> 
                <h3><?php echo $tanggal; ?></h3><hr>
                 <button class="btn-success" onclick="myFunction()">Cetak halaman</button><br><br>
        </center>
               
    
        
        <div class="maincontent">
        	<div class="contentinner">
		        <table width="100%">
                    <tr>
                        <?php
                        $i = 1;
                        foreach ($citra as $cetak){
                            if ($i%4==4) echo '<tr>';
                            echo "<td><center><img style='width:100%; max-width:300px;' src='".base_url()."assets/uploads/citra/".$cetak->nama_citra."'/></center><center>".$cetak->waktu."</center><center>".$cetak->nama_citra."</center><br></td>";
                            if ($i%4==0) echo '</tr>';
                            $i++;
                        }
                        ?>
                    </tr>
                </table>

            </div><!--contentinner-->
        </div><!--maincontent-->
        
    </div><!--mainright-->
    <!-- END OF RIGHT PANEL -->

<script>
function myFunction() {
    window.print();
}
</script>

 <div class="app-footer">
                    <div class="p-2 text-xs">
                        <div class="pull-right text-muted py-1">
                            <strong><a>Aplikasi Administrator Monitoring Sungai Saddang</a></strong> <span class="hidden-xs-down"> - 2017</span>
                        </div>
                        <div class="nav">
                            <a class="nav-link" >BBWS POMPENGAN JENEBERANG</a>
                        </div>
                    </div>
                </div>
    
</div><!--mainwrapper-->


</body>
</html>

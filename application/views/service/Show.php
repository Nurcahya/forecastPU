<!DOCTYPE HTML>
<html>
    <head>   
        
        <!--<meta http-equiv="refresh" content="300">-->
        <title>Data Service</title>
        <style>
            body{
                background: url('<?php echo base_url(); ?>assets/backend/gambar/service.jpg') no-repeat center center fixed;                
            } 
            h1 {
            font-family:arial;
            color:#CD4E2A;
            text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
            }
            h2 {
            font-family:arial;
            color:#CD4E2A;
            text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
            }
        </style>
        <script src="<?php echo base_url(); ?>assets/backend/jquery/jquery/dist/jquery.js"></script>
        <script type="text/javascript">                     
        
            function start() {
                setInterval(function(){
                 $.ajax({
                    url: 'http://saddang.com/service/get_ch',
                    dataType: 'text',
                    success: function (data) {
                        var array = JSON.parse(data);
                        var i = 1;
                        array.forEach(function(object) {
                            var xhr = new XMLHttpRequest({mozSystem: true});
                            var url = "<?php echo site_url()."service/insert_ch?id="; ?>"+i+"&nilai="+object;
                            xhr.open("GET", url, true);
                            xhr.send();
                            i=i+1;
                        });
                    },
                    cache: false
                });
                $.ajax({
                    url: 'http://saddang.com/service/get_tma',
                    dataType: 'text',
                    success: function (data) {
                        var array = JSON.parse(data);
                        var i = 6;
                        array.forEach(function(object) {
                            var xhr = new XMLHttpRequest({mozSystem: true});
                            var url = "<?php echo site_url()."service/insert_tma?id="; ?>"+i+"&nilai="+object;
                            xhr.open("GET", url, true);
                            xhr.send();
                            i=i+1;
                        });
                    },
                    cache: false
                });
                $.ajax({
                    url: 'http://saddang.com/service/get_citra',
                    dataType: 'text',
                    success: function (data) {
                        var array = JSON.parse(data);
                        var i = 1;
                        array.forEach(function(object) {
                            var xhr = new XMLHttpRequest({mozSystem: true});
                            var url = "<?php echo site_url()."service/insert_citra?id="; ?>"+i+"&nilai="+object;
                            xhr.open("GET", url, true);
                            xhr.send();
                            i=i+1;
                        });
                    },
                    cache: false
                });   
                }, 600000);
            }
        </script>
    </head>
    <body onload="start()">
    <center> 
        <img src='<?php echo base_url(); ?>assets/backend/gambar/gear2.gif'>
        <h1>PULL DATA SERVICE IS RUNNING!</h1> 
        <h2>Mohon jangan tutup halaman ini</h2> 
    </center>
    </body>
</html>

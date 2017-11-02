<!DOCTYPE html>
<html>
  <head>
    <title>Peta</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <style>
      html, body, #map-canvas {
        height: 100%;
        margin: 0px;
        padding: 0px
      }
    </style>
  <style>
  #legend {
    font-family: Arial, sans-serif;
        background: #fff;
        padding: 10px;
        margin: 10px;
        border: 3px solid #000;
  }
</style>


  
  <?php
    $con=mysqli_connect("localhost","root","","forecast");
    $sql="SELECT * FROM pos"; 
    $result=mysqli_query($con,$sql); 
    $pos = array();
    $no=0;
    while($rows=mysqli_fetch_array($result)){ 
    $pos[$no][0] = $rows['nama_pos'];  
    $pos[$no][1] = $rows['lat'];
    $pos[$no][2] = $rows['long'];
    $pos[$no][3] = $rows['id_pos'];
    $pos[$no][4] = 'normal';
//    if ($rows['TMA'] >= $rows['lwl'] && $rows['TMA'] < $rows['crest']) {
//      $pos[$no][4] = 'normal';
//    }
//    else if ($rows['TMA'] >= $rows['hwl'] && $rows['TMA'] < $rows['crest']) {
//      $pos[$no][4] = 'siaga';
//    }
//    else if ($rows['TMA'] >= $rows['crest']) {
//      $pos[$no][4] = 'bahaya';
//    }
//    else if ($rows['TMA'] < $rows['lwl']){
//      $pos[$no][4] = 'kosong';
//    }
//    $pos[$no][5] = $rows['TMA'];
    $no = $no+1;
    } 
  ?>


    <script>  
function initialize() {
//var myLatlng = new google.maps.LatLng(-7.476857,111.600952);
 // var myLatlng = new google.maps.LatLng(-5.227717,119.846191);
 var myLatlng = new google.maps.LatLng(-4.559437, 119.638450);
  var mapOptions = {
    center: myLatlng,   
        zoom: 8,
        zoomControl: true,
        zoomControlOptions: {
            style: google.maps.ZoomControlStyle.DEFAULT,
        },
        disableDoubleClickZoom: true,
        mapTypeControl: true,
        mapTypeControlOptions: {
            style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR,
        },
        scaleControl: true,
        scrollwheel: true,
        streetViewControl: true,
        draggable : true,
        overviewMapControl: true,
        overviewMapControlOptions: {
        opened: false,
        },
        mapTypeId: google.maps.MapTypeId.TERRAIN,
    

  };
var pos = <?php echo json_encode($pos); ?>;  

var iconBase = 'https://maps.google.com/mapfiles/kml/shapes/';
var icons = {
  kosong: {
  name: 'Kosong',
    icon: '<?php echo base_url();?>assets/backend/gambar/map/logotrans.png'
  },
  normal: {
   name: 'Normal',
   //icon: iconBase + 'library_maps.png'
   icon: '<?php echo base_url();?>assets/backend/gambar/map/awlr_siaga1.png'
  },
  siaga: {
  name: 'Siaga',
    icon: '<?php echo base_url();?>assets/backend/gambar/map/awlr_siaga2.png'
  },
  bahaya: {
  name: 'Bahaya',
    icon: '<?php echo base_url();?>assets/backend/gambar/map/awlr_siaga3.png'
  }
};
  
  var map = new google.maps.Map(document.getElementById('map-canvas'),mapOptions);
  var legend = document.getElementById('legend');
  for (var key in icons) {
    var type = icons[key];
    var name = type.name;
    var icon = type.icon;
    var div = document.createElement('div');
    div.innerHTML = '<img src="' + icon + '"> ' + name;
    legend.appendChild(div);
  }
  map.controls[google.maps.ControlPosition.RIGHT_BOTTOM].push(document.getElementById('legend'));
setMarkers(map, pos);

}


function setMarkers(map, locations) {
 
  var shape = {
      coord: [1, 1, 1, 20, 18, 20, 18 , 1],
      type: 'poly'
  };
  for (var i = 0; i < locations.length; i++) {
    var beach = locations[i]; 
    var myLatLng = new google.maps.LatLng(parseFloat(beach[1]), parseFloat(beach[2]));
  var tipe = beach[4];
  var simbol = {
  normal: {
   icon: '<?php echo base_url();?>assets/backend/gambar/map/awlr_siaga1.png'
  },
  siaga: {
    icon: '<?php echo base_url();?>assets/backend/gambar/map/awlr_siaga2.png'
  },
  bahaya: {
    icon: '<?php echo base_url();?>assets/backend/gambar/map/awlr_siaga3.png'
  },
   kosong: {
    icon: '<?php echo base_url();?>assets/backend/gambar/map/logotrans.png'
  }
  };
  
  var image = {
  url: simbol[tipe].icon,
    size: new google.maps.Size(35, 32),
    origin: new google.maps.Point(0,0),
  anchor: new google.maps.Point(0, 32)
  };
    var marker = new google.maps.Marker({
        position: myLatLng,
        map: map,
        icon: image,
    //icon: icons[tipe].icon,
        shape: shape,
        title: "Bendungan "+beach[0],
        zIndex: Number(beach[3])
    });
    
  var infowindow = new google.maps.InfoWindow({
    maxWidth: 320,
    maxHeight: 320,
      content: ' ' + beach[0] +' <br> TMA '
    });

    makeInfoWindowEvent(map, infowindow, marker); 
  }   
}


function makeInfoWindowEvent(map, infowindow, marker) {
  google.maps.event.addListener(marker, 'click', function() {
    infowindow.open(map, marker);
  });
}

function loadScript() {
  var script = document.createElement('script');
  script.type = 'text/javascript';
  script.src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAd9y51NHJatP8XlzDnG7Yf8owDzSithT4&callback=initialize";
  document.body.appendChild(script);
}

window.onload = loadScript;

    </script>
  </head>
  <body>
  
    <div id="map-canvas"></div>
  <div id="legend">
  Legenda
</div>

  </body>
</html>
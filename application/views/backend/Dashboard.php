<?php
$this->load->view('backend/tema/Header');
?>

      
<!-- ############ PAGE START-->
<div class="dker">
  <div class="tab-content tab-alt">
    <div class="tab-pane in active" id="world">
      <div class="padding">
        <div class="row-col">
          <div class="col-xs-4 v-m">
            <h1 class="_800 l-s-n-4x inline m-r-sm">5,600</h1>
            <span class="inline l-h-1x">
              Markets <br>
              <small class="text-muted">From africa to asia</small>
            </span>
          </div>
          <div class="col-xs-4 v-m">
            <h1 class="_800 l-s-n-4x inline m-r-sm text-primary">31,000</h1>
            <span class="inline l-h-1x">
              Employees  <br>
              <small class="text-muted">From 16 countries</small>
            </span>
          </div>
          <div class="col-xs-4 v-m">
            <h1 class="_800 l-s-n-4x text-white text-shadow inline m-r-sm">4,300</h1>
            <span class="inline l-h-1x">
              Suppliers  <br>
              <small class="text-muted">From Nike to PE</small>
            </span>
          </div>
        </div>
      </div>
        <div>
            <IFRAME SRC=<?php echo base_url('backend/dashboard/map');?> WIDTH=100% Height=450></IFRAME>           
        </div>
    </div>
    <div class="tab-pane" id="usa">
      <div class="padding">
        <div class="row-col">
          <div class="col-xs-4 v-m">
            <h1 class="_800 l-s-n-4x inline m-r-sm text-primary">580</h1>
            <span class="inline l-h-1x">
              Markets <br>
              <small class="text-muted">From africa to asia</small>
            </span>
          </div>
          <div class="col-xs-4 v-m">
            <h1 class="_800 l-s-n-4x inline m-r-sm">12,500</h1>
            <span class="inline l-h-1x">
              Employees  <br>
              <small class="text-muted">From 16 countries</small>
            </span>
          </div>
          <div class="col-xs-4 v-m">
            <h1 class="_800 l-s-n-4x text-white text-shadow inline m-r-sm">1,000</h1>
            <span class="inline l-h-1x">
              Suppliers  <br>
              <small class="text-muted">From Nike to PE</small>
            </span>
          </div>
        </div>
      </div>
      <div style="height: 62vh" ui-jp="vectorMap" ui-options="{
        map: 'us_aea_en',
        markers: [{latLng: [40.71, -74.00], name: &#x27;New York&#x27;},{latLng: [34.05, -118.24], name: &#x27;Los Angeles&#x27;},{latLng: [41.87, -87.62], name: &#x27;Chicago&#x27;},{latLng: [29.76, -95.36], name: &#x27;Houston&#x27;},{latLng: [39.95, -75.16], name: &#x27;Philadelphia&#x27;},{latLng: [38.90, -77.03], name: &#x27;Washington&#x27;},{latLng: [37.36, -122.03], name: &#x27;Silicon Valley&#x27;}],
        backgroundColor: 'transparent',
        regionsSelectable: true,
        markersSelectable: true,
        regionStyle: {
          initial: {
            fill: '#ffffff'
          },
          selected: {
            fill: '#f44455'
          }
        },
        series: {
          markers: [{
            attribute: 'fill',
            scale: ['#0cc2aa','#f77a99', '#6cc788'],
            values: [ 605.16, 310.69, 405.17, 748.31, 207.35, 217.22, 137.70, 280.71, 210.32, 325.42 ]
          },{
            attribute: 'r',
            scale: [5, 20],
            values: [ 605.16, 310.69, 405.17, 748.31, 207.35, 217.22, 137.70, 280.71, 210.32, 325.42 ]
          }]
        }
      }" >
      </div>
    </div>
  </div>
  <div class="row-col">
    <div class="col-xs-3 v-m text-center text-sm text-muted p-a">Peta Sungai Jeneberang - 2017</div>
  </div>
</div>

<div class="row no-gutter">
  <div class="col-md-7 col-lg-8 light lt v-b">
    <div class="text-center p-a m-b-lg">
      <h6 class="text-u-c">Global Goals for a Better World</h6>
      <p class="text-muted"><em>2010 - 2015</em></p>
    </div>
    <div style="overflow: hidden">
      <div style="margin: 0 -2px">
        <div ui-jp="plot" ui-refresh="app.setting.color" ui-options="
          [
            { data: [[1, 3.6], [2, 3.5], [3, 6], [4, 4], [5, 4.3], [6, 3.5], [7, 3.6]], 
              points: { show: true, radius: 0}, 
              splines: { show: true, tension: 0.45, lineWidth: 0, fill: 0.8} 
            },
            { data: [[1, 3], [2, 2.6], [3, 3.2], [4, 3], [5, 3.5], [6, 3], [7, 3.5]], 
              points: { show: true, radius: 0}, 
              splines: { show: true, tension: 0.45, lineWidth: 0, fill: 1} 
            }
          ], 
          {
            colors: ['#0cc2aa','#0cc2aa'],
            series: { shadowSize: 3 },
            xaxis: { show: false, font: { color: '#ccc' }, position: 'bottom' },
            yaxis:{ show: false, font: { color: '#ccc' }},
            grid: { hoverable: true, clickable: true, borderWidth: 0, color: 'rgba(120,120,120,0.5)' },
            tooltip: true,
            tooltipOpts: { content: '%x.0 is %y.4',  defaultTheme: false, shifts: { x: 0, y: -40 } }
          }
        " style="height:140px" >
        </div>
      </div>
    </div>
    <div class="p-a-md primary">
      <div class="row">
        <div class="col-sm-4">
          <h3 class="m-0 _600">98%</h3>
          <span class="text-muted">School enrollment</span>
        </div>
        <div class="col-sm-4">
          <h3 class="m-0 _600">75%</h3>
          <span class="text-muted">Financial Sector</span>
        </div>
        <div class="col-sm-4">
          <h3 class="m-0 _600">78%</h3>
          <span class="text-muted">PMI</span>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-5 col-lg-4 white">
    <ul class="list inset m-0">
      <li class="list-item">
        <div class="list-left">
          <span ui-jp="sparkline" ui-refresh="app.setting.color" ui-options="[70,30], {type:'pie', height:40, sliceColors:['rgba(168,168,168,0.2)','#0cc2aa']}" class="sparkline inline"></span>
        </div>
        <div class="list-body">
          <div><a href class="_600">Agriculture &amp; Rural Development</a></div>
          <small class="text-muted">Rural population (4% of total population)</small>
        </div>
      </li>
      <li class="list-item">
        <div class="list-left">
          <span ui-jp="sparkline" ui-refresh="app.setting.color" ui-options="[90,10], {type:'pie', height:40, sliceColors:['rgba(168,168,168,0.2)','#a88add']}" class="sparkline inline"></span>
        </div>
        <div class="list-body">
          <div><a href class="_600">Climate Change</a></div>
          <small class="text-muted">CO2 emissions (21kt)</small>
        </div>
      </li>
      <li class="list-item">
        <div class="list-left">
          <span ui-jp="sparkline" ui-refresh="app.setting.color" ui-options="[80,20], {type:'pie', height:40, sliceColors:['rgba(168,168,168,0.2)','#a88add']}" class="sparkline inline"></span>
        </div>
        <div class="list-body">
          <div><a href class="_600">Economy &amp; Growth</a></div>
          <small class="text-muted">Services, etc., value added (75% of GDP)</small>
        </div>
      </li>
      <li class="list-item">
        <div class="list-left">
          <span ui-jp="sparkline" ui-refresh="app.setting.color" ui-options="[75,25], {type:'pie', height:40, sliceColors:['rgba(168,168,168,0.2)','#a88add']}" class="sparkline inline"></span>
        </div>
        <div class="list-body">
          <div><a href class="_600">Education</a></div>
          <small class="text-muted">School enrollment, primary (120% gross)</small>
        </div>
      </li>
      <li class="list-item">
        <div class="list-left">
          <span ui-jp="sparkline" ui-refresh="app.setting.color" ui-options="[85,15], {type:'pie', height:40, sliceColors:['rgba(168,168,168,0.2)','#a88add']}" class="sparkline inline"></span>
        </div>
        <div class="list-body">
          <div><a href class="_600">Financial Sector</a></div>
          <small class="text-muted">Market capitalization of listed companies (45% of GDP)</small>
        </div>
      </li>
      <li class="list-item">
        <div class="list-left">
          <span ui-jp="sparkline" ui-refresh="app.setting.color" ui-options="[85,15], {type:'pie', height:40, sliceColors:['rgba(168,168,168,0.2)','#a88add']}" class="sparkline inline"></span>
        </div>
        <div class="list-body">
          <div><a href class="_600">Science &amp; Technology</a></div>
          <small class="text-muted">Research and development expenditure (2.12% of GDP)</small>
        </div>
      </li>
    </ul>
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
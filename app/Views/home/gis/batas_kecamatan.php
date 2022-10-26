<?php echo $this->extend('home/template/index'); ?>
<?php echo $this->section('home-content'); ?>

<div id="banner-area" class="banner-area" style="background-image:url(<?= base_url('/img/setting/'.$setting->background) ?>)">
  <div class="banner-text">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <div class="banner-heading">
                <h1 class="banner-title">Batas Kecamatan</h1>
                <?= $breadcrumbs; ?>
              </div>
          </div><!-- Col end -->
        </div><!-- Row end -->
    </div><!-- Container end -->
  </div><!-- Banner text end -->
</div><!-- Banner area end --> 

<section id="main-container" class="main-container pb-2">
  <div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-6 mb-5">
          <div class="ts-service-box">
             <div class="col-12">
               <div id="map" style="height: 900px; background-color:white;"></div>
              </div>
          </div><!-- Service2 end -->
        </div><!-- Col 2 end -->

    </div><!-- Main row end -->
  </div><!-- Conatiner end -->
</section><!-- Main container end -->

<?php echo $this->endSection(); ?>

<?php echo $this->section('script'); ?>
<script type="text/javascript">
   $(document).ready(function() {

      let peta1 = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
         attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
            'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
         id: 'mapbox/streets-v11'
      });

      let peta2 = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
         attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
            '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
            'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
         id: 'mapbox/satellite-v9'
      });

      let peta3 = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
         attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
      });

      let peta4 = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
         attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
            '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
            'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
         id: 'mapbox/dark-v10'
      });

      let maps = L.map('map', {
        center: [-1.8647779909219413, 121.53014072928303],
        zoom: 10,
        layers: [peta1],
        attributionControl: false
      });

     <?php foreach ($batas_kecamatan as $bk) { ?>
         $.getJSON("<?= base_url('file/geojson_batas_kecamatan/' . $bk->geojson_file) ?>", function(data) {
            geoLayer = L.geoJson(data, {
               style: function(feature) {
                  return {
                     opacity: 1.0,
                     color: '<?= $bk->geojson_color ?>',
                     fillOpacity: 0.5,
                     fillColor: '<?= $bk->geojson_color ?>',
                  }
               },
            }).addTo(maps);

            geoLayer.eachLayer(function(layer) {
               layer.bindPopup(
                  "Nama Kecamatan : <?= $bk->kecamatan_name ?><br>"
               );
            });
         });
      <?php } ?>

   });
</script>
<?php echo $this->endSection(); ?>

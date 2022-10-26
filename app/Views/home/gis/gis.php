<?php echo $this->extend('home/template/index'); ?>
<?php echo $this->section('home-content'); ?>

<div id="banner-area" class="banner-area" style="background-image:url(<?= base_url('/img/setting/' . $setting->background) ?>)">
   <div class="banner-text">
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <div class="banner-heading">
                  <?php foreach ($data_gis as $dt) : ?>
                     <h1 class="banner-title"><?= $dt->category_name; ?></h1>
                  <?php endforeach; ?>
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

     

      let icons = L.icon({
         iconUrl: '<?= base_url('icon/gis/' . $icon) ?>',
         iconSize: [20, 40], // size of the icon
         iconAnchor: [11, 48],
         popupAnchor: [2, -20]
      });


      <?php foreach ($data_gis as $row) : ?>
         L.marker([<?= $row->latitude ?>, <?= $row->longitude ?>], {
               icon: icons
            })
            .bindPopup('<p class="h4 mt-0 mb-0"><?= $row->title ?><p>' +
               "<img src='<?= base_url('/img/gis/facilities/' . $row->image_name) ?>'width='100%'><br>" +
               '<p><?= $row->description ?><p>'
            ).addTo(maps);
      <?php endforeach ?>

      <?php foreach ($batas_kecamatan as $bk) { ?>
         $.getJSON("<?= base_url('file/geojson_batas_kecamatan/' . $bk->geojson_file) ?>", function(data) {
            geoLayer = L.geoJson(data, {
               style: function(feature) {
                  return {
                     opacity: 0.2,
                     color: '#90EE90',
                     fillOpacity: 0.6,
                     fillColor: '#32CD32',
                  }
               },
            }).addTo(maps);
         });
      <?php } ?>

   });
</script>
<?php echo $this->endSection(); ?>

<?php

use phpDocumentor\Reflection\PseudoTypes\False_;

echo $this->extend('dashboard/template/index'); ?>

<?php echo $this->section('page-content'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">
   <?= $breadcrumbs; ?>
   <!-- Page Heading -->
   <div class="row">
      <div class="col-sm-1"></div>
      <div class="col-sm-10">
         <div class="card shadow mb-4">
            <div class="card-header py-3">
               <h6 class="m-0 font-weight-bold text-primary">Add facilities</h6>
            </div>
            <form action="<?php echo base_url('gis_facilities/create') ?>" method="post" enctype="multipart/form-data">
               <input type="hidden" name="token" value="<?= generate_token('facilities_add'); ?>">
               <div class="card-body">
                  <div class="row">
                     <div class="col-12">
                        <div id="mapid" style="height: 350px;"></div>
                     </div>
                  </div>
                  <div class="form-group">
                     <div class="row">
                        <div class="col-sm-12">
                           <label for="Title">Title</label>
                           <input type="text" class="form-control <?= ($validation->hasError('title')) ? 'is-invalid' : ''; ?>" id=" title" name="title" value="<?= old('title') ?>">
                           <div class="invalid-feedback">
                              <?= $validation->getError('title'); ?>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="form-group">
                     <div class="row">
                        <div class="col-sm-12">
                           <label for="Category">Category</label>
                           <select class="form-control <?= ($validation->hasError('category')) ? 'is-invalid' : ''; ?>" name="category" id="category">
                              <option value="">No Selected</option>
                              <?php foreach ($category as $row) : ?>
                                 <option value="<?= $row->category_facilities_id; ?>" <?= set_select('category', $row->category_facilities_id, FALSE); ?>><?php echo $row->category_name; ?></option>
                              <?php endforeach; ?>
                           </select>
                           <div class="invalid-feedback">
                              <?= $validation->getError('category'); ?>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="form-group">
                     <div class="row">
                        <div class="col-sm-6">
                           <label for="Image">Image</label>
                           <input type="file" class="form-control-file <?= ($validation->hasError('image_file')) ? 'is-invalid' : ''; ?>" id=" image_file" name="image_file" onchange="changeImage(this)">
                           <div class="invalid-feedback">
                              <?= $validation->getError('image_file'); ?>
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <img src="<?= base_url('/img/morut.png') ?>" alt="img-preview" class="img-thumbnail" width="100px" heigth="100px" id="img-preview">
                        </div>
                     </div>
                  </div>
                  <div class="form-group">
                     <div class="row">
                        <div class="col-sm-6">
                           <label for="latitude">Latitude</label>
                           <input type="text" id="Latitude" class="form-control <?= ($validation->hasError('latitude')) ? 'is-invalid' : ''; ?>" id="latitude" name="latitude" value="<?= old('latitude') ?>">
                           <div class="invalid-feedback">
                              <?= $validation->getError('latitude'); ?>
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <label for="longitude">Longitude</label>
                           <input type="text" id="Longitude" class="form-control <?= ($validation->hasError('longitude')) ? 'is-invalid' : ''; ?>" id="longitude" name="longitude" value="<?= old('longitude') ?>">
                           <div class="invalid-feedback">
                              <?= $validation->getError('longitude'); ?>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="form-group">
                     <div class="row">
                        <div class="col-sm-12">
                           <label for="description">Description</label>
                           <textarea class="form-control <?= ($validation->hasError('description')) ? 'is-invalid' : ''; ?>" id="description" name="description" rows="8"><?= set_value('description'); ?></textarea>
                           <div class="invalid-feedback">
                              <?= $validation->getError('description'); ?>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="card-footer">
                  <button type="submit" name="add_news" class="btn btn-success">Save</button>
               </div>
            </form>
         </div>
      </div>
      <div class="col-sm-1"></div>
   </div>
</div>
<?php echo $this->endSection(); ?>
<?php echo $this->section('script'); ?>
<script type="text/javascript">
   function changeImage(input, id) {
      id = id || '#img-preview';
      if (input.files && input.files[0]) {
         var reader = new FileReader();

         reader.onload = function(e) {
            $(id)
               .attr('src', e.target.result)
               .width(200)
               .height(150);
         };

         reader.readAsDataURL(input.files[0]);
      }
   }

   $(document).ready(function() {
      $("#category").selectpicker();
   });

   var curLocation = [0, 0];
   if (curLocation[0] == 0 && curLocation[1] == 0) {
      curLocation = [-1.9824700660937014, 121.33821728088598];
   }

   var mymap = L.map('mapid').setView([-1.9824700660937014, 121.33821728088598], 14);
   L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
      attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
         '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
         'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
      id: 'mapbox/satellite-v9'
   }).addTo(mymap);

   mymap.attributionControl.setPrefix(false);
   var marker = new L.marker(curLocation, {
      draggable: 'true'
   });

   marker.on('dragend', function(event) {
      var position = marker.getLatLng();
      marker.setLatLng(position, {
         draggable: 'true'
      }).bindPopup(position).update();
      $("#Latitude").val(position.lat);
      $("#Longitude").val(position.lng).keyup();
   });

   $("#Latitude, #Longitude").change(function() {
      var position = [parseInt($("#Latitude").val()), parseInt($("#Longitude").val())];
      marker.setLatLng(position, {
         draggable: 'true'
      }).bindPopup(position).update();
      mymap.panTo(position);
   });
   mymap.addLayer(marker);
</script>
<?php echo $this->endSection(); ?>
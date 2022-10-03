<?php echo $this->extend('dashboard/template/index'); ?>

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
               <h6 class="m-0 font-weight-bold text-primary">Edit Batas Kecamatan</h6>
            </div>
            <form action="<?php echo base_url('gis_batas_kecamatan/update/' . $batas_kecamatan->id) ?>" method="post" enctype="multipart/form-data">
               <input type="hidden" name="token" value="<?= generate_token('gis_batas_kecamatan_edit'); ?>">
               <input type="hidden" name="geojsonOld" value="<?= $batas_kecamatan->geojson_file; ?>">
               <div class="card-body">
                  <div class="form-group">
                     <label for="Name Kecamatan">Kecamatan Name</label>
                     <input type="text" class="form-control <?= ($validation->hasError('kecamatan_name')) ? 'is-invalid' : ''; ?>" id="kecamatan_name" name="kecamatan_name" value="<?= old('kecamatan_name', $batas_kecamatan->kecamatan_name); ?>">
                     <div class="invalid-feedback">
                        <?= $validation->getError('kecamatan_name'); ?>
                     </div>
                  </div>
                  <div class="form-group">
                     <label for="Geojson file">Geojson File</label>
                     <input id="geojson_file" type="file" class="form-control-file <?= ($validation->hasError('geojson_file')) ? 'is-invalid' : ''; ?>" id="geojson_file" name="geojson_file">
                     <div class="invalid-feedback">
                        <?= $validation->getError('geojson_file'); ?>
                     </div>
                  </div>
                  <div class="form-group">
                     <label for="geojson_color">Geojson Color</label>
                     <input type="text" class="form-control" id="geojson_color" name="geojson_color" value="<?= $batas_kecamatan->geojson_color; ?>" data-jscolor="{}">
                  </div>
               </div>
               <div class="card-footer">
                  <button type="submit" name="add_batas_kecamatan" class="btn btn-success">Save</button>
               </div>
            </form>
         </div>
      </div>
      <div class="col-sm-1"></div>
   </div>
</div>
<?php echo $this->endSection(); ?>
<?php echo $this->section('script'); ?>
<?php echo $this->endSection(); ?>
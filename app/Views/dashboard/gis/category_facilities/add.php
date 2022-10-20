<?php echo $this->extend('dashboard/template/index'); ?>

<?php echo $this->section('page-content'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">
   <?= $breadcrumbs; ?>
   <!-- Page Heading -->
   <div class="row">
      <div class="col-sm-9">
         <div class="card shadow mb-4">
            <div class="card-header py-3">
               <h6 class="m-0 font-weight-bold text-primary">Add Category </h6>
            </div>
            <form action="<?php echo base_url('gis_category_facilities/create') ?>" method="post" enctype="multipart/form-data">
               <input type="hidden" name="token" value="<?= generate_token('category_facilities_add'); ?>">
               <div class="card-body">
                  <div class="form-group">
                     <label for="Category Name">Category Name</label>
                     <input type="text" class="form-control <?= ($validation->hasError('category_name')) ? 'is-invalid' : ''; ?>" id="category_name" name="category_name">
                     <div class="invalid-feedback">
                        <?= $validation->getError('category_name'); ?>
                     </div>
                  </div>
                  <div class="form-group">
                     <label for="On Menu">On Menu</label>
                     <select name="on_menu" class="form-control">
                        <option value="">-- Selected --</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                     </select>
                  </div>
                  <div class="form-group">
                     <div class="row">
                        <div class="col-sm-6">
                           <label for="content" id="labelcontent">Icon Category</label>
                           <input id="category_icon" type="file" class="form-control-file <?= ($validation->hasError('category_icon')) ? 'is-invalid' : ''; ?>" id="category_icon" name="category_icon" onchange="changeImage(this)">
                           <div class="invalid-feedback">
                              <?= $validation->getError('category_icon'); ?>
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <img src="<?= base_url('/img/morut.png') ?>" alt="img-preview" class="img-thumbnail" width="100px" heigth="100px" id="img-preview">
                        </div>
                     </div>
                  </div>
               </div>
               <div class="card-footer">
                  <button type="submit" name="add_category_facilities" class="btn btn-success">Save</button>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>
<script>
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
</script>
<?php echo $this->endSection(); ?>
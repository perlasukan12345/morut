<?php echo $this->extend('dashboard/template/index'); ?>

<?php echo $this->section('page-content'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">
   <?= $breadcrumbs; ?>
   <!-- Page Heading -->
   <div class="row">
      <div class="col-sm-6">
         <div class="card shadow mb-4">
            <div class="card-header py-3">
               <h6 class="m-0 font-weight-bold text-primary">Category Edit</h6>
            </div>
            <form action="<?php echo base_url('gis_category_facilities/update/' . $post->category_facilities_id) ?>" method="post">
               <input type="hidden" name="token" value="<?= generate_token('category_facilities_edit'); ?>">
               <div class="card-body">
                  <div class="form-group">
                     <label for="Category Name">Category name</label>
                     <input type="text" class="form-control <?= ($validation->hasError('category_name')) ? 'is-invalid' : ''; ?>" id="category_name" name="category_name" value="<?php echo $post->category_name ?>">
                     <div class="invalid-feedback">
                        <?= $validation->getError('category_name'); ?>
                     </div>
                  </div>
               </div>
               <div class="card-footer">
                  <button type="submit" name="edit_category_facilities" class="btn btn-success">Update</button>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>
<!-- /.container-fluid -->
<?php echo $this->endSection(); ?>
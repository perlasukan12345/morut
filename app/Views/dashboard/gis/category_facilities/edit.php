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
               <h6 class="m-0 font-weight-bold text-primary">Category Edit</h6>
            </div>
            <form action="<?php echo base_url('gis_category_facilities/update/' . $post->category_facilities_id) ?>" method="post" enctype="multipart/form-data">
               <input type="hidden" name="token" value="<?= generate_token('category_facilities_edit'); ?>">
               <input type="hidden" name="imgOld" value="<?= $post->category_icon; ?>">

               <div class="card-body">
                  <div class="form-group">
                     <label for="Category Name">Category name</label>
                     <input type="text" class="form-control <?= ($validation->hasError('category_name')) ? 'is-invalid' : ''; ?>" id="category_name" name="category_name" value="<?php echo $post->category_name ?>">
                     <div class="invalid-feedback">
                        <?= $validation->getError('category_name'); ?>
                     </div>
                  </div>
                  <div class="form-group">
                     <label for="On Menu">On Menu</label>
                     <select name="on_menu" class="form-control">
                        <option value="">-- Selected --</option>
                        <option value="Yes" <?= ($post->on_menu === 'Yes') ? 'selected' : '';?>>Yes</option>
                        <option value="No" <?= ($post->on_menu === 'No') ? 'selected' : '';?>>No</option>
                     </select>
                  </div>
                  <div class="form-group">
                     <div class="row">
                        <div class="col-sm-6">
                           <label for="Image">Image</label>
                           <input type="file" class="form-control-file <?= ($validation->hasError('category_icon')) ? 'is-invalid' : ''; ?>" id="category_icon" name="category_icon" onchange="changeImage()">
                           <div class="invalid-feedback">
                              <?= $validation->getError('category_icon'); ?>
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <img src="<?= base_url('icon/gis/' . $post->category_icon); ?>" alt="img-preview" class="img-thumbnail">
                        </div>
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
<script>
   function changeImage() {
      const preview = document.querySelector('.img-thumbnail');
      const image = document.querySelector('#category_icon');

      const imageUpload = new FileReader();
      imageUpload.readAsDataURL(image.files[0]);
      imageUpload.onload = function(e) {
         preview.src = e.target.result;
      }
   }
</script>
<!-- /.container-fluid -->
<?php echo $this->endSection(); ?>
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
               <h6 class="m-0 font-weight-bold text-primary">Add Priority Program</h6>
            </div>
            <form action="<?php echo base_url('priority_program/create') ?>" method="post" enctype="multipart/form-data">
               <input type="hidden" name="token" value="<?= generate_token('priority_program_add'); ?>">
               <div class="card-body">
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
                        <div class="col-sm-6">
                           <label for="Image">Image (650x450)</label>
                           <input type="file" class="form-control-file <?= ($validation->hasError('content')) ? 'is-invalid' : ''; ?>" id=" content" name="content" onchange="changeImage(this)">
                           <div class="invalid-feedback">
                              <?= $validation->getError('content'); ?>
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <img src="<?= base_url('/img/morut.png') ?>" alt="img-preview" class="img-thumbnail" width="100px" heigth="100px" id="img-preview">
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
</script>
<?php echo $this->endSection(); ?>
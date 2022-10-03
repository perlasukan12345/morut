<?php echo $this->extend('dashboard/template/index'); ?>

<?php echo $this->section('page-content'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">
   <?= $breadcrumbs; ?>
   <!-- Page Heading -->
   <div class="row">
      <?php
      helper('form');
      ?>
      <div class="col-sm-1"></div>
      <div class="col-sm-10">
         <div class="card shadow mb-4">
            <div class="card-header py-3">
               <h6 class="m-0 font-weight-bold text-primary">Edit Gallery</h6>
            </div>
            <form action="<?php echo base_url('gallery/update/' . $gallery->gallery_id) ?>" method="post" enctype="multipart/form-data">
               <input type="hidden" name="token" value="<?= generate_token('gallery_edit'); ?>">
               <input type="hidden" name="optionOld" value="<?= $gallery->option; ?>">
               <input type="hidden" name="imageOld" value="<?= $gallery->content; ?>">
               <div class="card-body">
                  <div class="form-group">
                     <div class="row">
                        <div class="col-sm-12">
                           <label for="Category">Category</label>
                           <select class="form-control <?= ($validation->hasError('category')) ? 'is-invalid' : ''; ?>" name="category" id="category">
                              <option value="">No Selected</option>
                              <?php foreach ($category as $row) : ?>
                                 <option value="<?php echo $row->category_gallery_id; ?>" <?= set_select('category', $row->category_gallery_id, (!empty($c) && $c == $row->$category_gallery_id  ? TRUE : FALSE)) ?> <?= ($gallery->category_gallery_id === $row->category_gallery_id) ? 'selected' : ''; ?>><?php echo $row->category_name; ?></option>
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
                        <div class="col-sm-12">
                           <label for="option">Option</label>
                           <select class="form-control <?= ($validation->hasError('options')) ? 'is-invalid' : ''; ?>" name="options" id="options">
                              <option value="">No Selected</option>
                              <option value="image" <?= set_select('options', 'image', (!empty($list) && $list == 'image' ? TRUE : FALSE)); ?> <?= ($gallery->option === 'image') ? 'selected' : ''; ?>>Image</option>
                              <option value="video" <?= set_select('options', 'video', (!empty($list) && $list == 'video' ? TRUE : FALSE)); ?> <?= ($gallery->option === 'video') ? 'selected' : ''; ?>>Video</option>
                           </select>
                           <div class="invalid-feedback">
                              <?= $validation->getError('options'); ?>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="form-group">
                     <div class="row">
                        <div class="col-sm-6">
                           <label for="content" id="labelcontent"></label>
                           <input id="contents" value="<?= ($gallery->option == 'video') ? $gallery->content : ''; ?>" type="hidden" class="form-control-file <?= ($validation->hasError('contents')) ? 'is-invalid' : ''; ?>" id="contents" name="contents" onchange="changeImage(this)">
                           <div class="invalid-feedback">
                              <?= $validation->getError('contents'); ?>
                           </div>
                        </div>
                        <div class="col-sm-6" id="contentimage" style="display:none">
                           <img src="<?= base_url('/img/gallery/' . $gallery->content) ?>" alt="img-preview" class="img-thumbnail" width="100px" heigth="100px" id="img-preview">
                        </div>
                     </div>
                  </div>
               </div>
               <div class="card-footer">
                  <button type="submit" name="edit_image" class="btn btn-success">Save</button>
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
   function changeImage() {
      const preview = document.querySelector('.img-thumbnail');
      const image = document.querySelector('#image_file');

      const imageUpload = new FileReader();
      imageUpload.readAsDataURL(image.files[0]);
      imageUpload.onload = function(e) {
         preview.src = e.target.result;
      }
   }

   $(document).ready(function() {
      $("#options").selectpicker();
      $("#category").selectpicker();

      let op = $('#options').val()

      if (op == 'image') {
         $('#contents').attr('type', 'file')
         $('#labelcontent').text('Image')
         $('#contentimage').css('display', 'block')
      } else if (op == 'video') {
         $('#contents').attr('type', 'text')
         $('#labelcontent').text('Link Video')
         $('#contentimage').css('display', 'none')
      }

      $('#options').on('change', function(e) {
         let values = $('#options option:selected').val();
         if (values == 'image') {
            $('#contents').attr('type', 'file')
            $('#labelcontent').text('Image')
            $('#contentimage').css('display', 'inline')
            $('#bodyContent').addClass('col-md-6')
         } else if (values == 'video') {
            $('#contents').attr('type', 'text')
            $('#labelcontent').text('Link Video')
            $('#contentimage').css('display', 'none')
            $('#bodyContent').addClass('col-md-12')
         }
      });
   });
</script>
<?php echo $this->endSection(); ?>
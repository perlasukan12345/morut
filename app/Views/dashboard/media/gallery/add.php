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
               <h6 class="m-0 font-weight-bold text-primary">Add Gallery</h6>
            </div>
            <form action="<?php echo base_url('gallery/create') ?>" method="post" enctype="multipart/form-data">
               <input type="hidden" name="token" value="<?= generate_token('gallery_add'); ?>">
               <div class="card-body">
                  <div class="form-group">
                     <div class="row">
                        <div class="col-sm-12">
                           <label for="Category">Category</label>
                           <select class="form-control <?= ($validation->hasError('category')) ? 'is-invalid' : ''; ?>" name="category" id="category">
                              <option value="">No Selected</option>
                              <?php foreach ($category as $row) : ?>
                                 <option value="<?php echo $row->category_gallery_id; ?>" <?= set_select('category', $row->category_gallery_id, (!empty($c) && $c == $row->$category_gallery_id  ? TRUE : FALSE)) ?>><?php echo $row->category_name; ?></option>
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
                              <option value="image" <?= set_select('options', 'image', (!empty($list) && $list == 'image' ? TRUE : FALSE)); ?>>Image</option>
                              <option value="video" <?= set_select('options', 'video', (!empty($list) && $list == 'video' ? TRUE : FALSE)); ?>>Video</option>
                           </select>
                           <div class="invalid-feedback">
                              <?= $validation->getError('options'); ?>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="form-group">
                     <div class="row" id="rowbody">
                        <div id="bodyContent">
                           <label for="content" id="labelcontent"></label>
                           <input id="contents" type="hidden" class="form-control-file <?= ($validation->hasError('contents')) ? 'is-invalid' : ''; ?>" id="contents" name="contents" onchange="changeImage(this)">
                           <div class="invalid-feedback">
                              <?= $validation->getError('contents'); ?>
                           </div>
                        </div>
                        <div class="col-sm-6" id="contentimage" style="display:none">
                           <img src="<?= base_url('/img/morut.png') ?>" alt="img-preview" class="img-thumbnail" width="100px" heigth="100px" id="img-preview">
                        </div>
                     </div>
                  </div>
               </div>
               <div class="card-footer">
                  <button type="submit" name="add_user" class="btn btn-success">Save</button>
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
      $("#option").selectpicker();
      $("#category").selectpicker();
      let op = $('#options option:selected').val();

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

      if (op == 'image') {
         $('#contents').attr('type', 'file')
         // $('#contents').attr('name', 'image')
         $('#labelcontent').text('image')
         $('#contentimage').css('display', 'inline')
         $('#bodyContent').addClass('col-md-6')

      } else if (op == 'video') {
         $('#contents').attr('type', 'text')
         // $('#contents').attr('name', 'url')

         $('#labelcontent').text('link video')
         $('#contentimage').css('display', 'none')
         $('#bodyContent').addClass('col-md-12')

      }
   });
</script>
<?php echo $this->endSection(); ?>
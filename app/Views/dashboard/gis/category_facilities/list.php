<?php echo $this->extend('dashboard/template/index'); ?>

<?php echo $this->section('page-content'); ?>
<div class="container-fluid">
   <?= $breadcrumbs; ?>
   <!-- Begin Page Content -->
   <div class="swal" data-swal="<?= session()->getFlashdata('message') ?>"></div>
   <div class="card shadow mb-4">
      <div class="card-header py-3">
         <a href="/gis_category_facilities/add" class="btn btn-primary">Add Category</a>
      </div>
      <div class="card-body">
         <div class="table-responsive">
            <table class="table table-bordered" id="data-category-facilities" width="100%" cellspacing="0">
               <thead>
                  <tr>
                     <th>No</th>
                     <th>Category Name</th>
                     <th>On Menu</th>
                     <th>Option</th>
                  </tr>
               </thead>
            </table>
         </div>
      </div>
   </div>
</div>
<?php echo $this->endSection(); ?>

<?php echo $this->section('script'); ?>
<script type="text/javascript">
   $(document).ready(function() {
      tampil_table_category_facilities();

      const swal = $('.swal').data('swal');
      if (swal) {
         Swal.fire({
            icon: 'success',
            text: swal
         })
      }
   });

   $(document).on('click', '.btn-delete', function(e) {
      e.preventDefault();
      const href = $(this).attr('href');
      Swal.fire({
         title: 'Are you sure?',
         text: "You won't be able to revert this!",
         icon: 'warning',
         showCancelButton: true,
         confirmButtonColor: '#3085d6',
         cancelButtonColor: '#d33',
         confirmButtonText: 'Yes, delete it!'
      }).then((result) => {
         if (result.isConfirmed) {
            document.location.href = href;
         }
      })
   });

   function tampil_table_category_facilities() {
      $('#data-category-facilities').DataTable({
         processing: true,
         serverSide: true,
         bDestroy: true,
         responsive: true,
         ajax: {
            url: "<?php echo base_url('gis_category_facilities/dt_category_facilities'); ?>",
            type: "POST",
            data: {},
            error: function(data) {
               console.log(data);
            }
         },
         columns: [{
               "data": "no"
            },
            {
               "data": "category_name"
            },
            {
               "data": "on_menu"
            },
            {
               "data": "option"
            }
         ],
         columnDefs: [{
               targets: [0, -1],
               orderable: false,
            },
            {
               width: "1%",
               targets: [0, -1],
            },
            {
               className: "dt-nowrap",
               targets: [-1],
            },
            {
               orderable: false,
               targets: [0, 3],
            }
         ],

      });
   }
</script>
<!-- /.container-fluid -->
<?php echo $this->endSection(); ?>
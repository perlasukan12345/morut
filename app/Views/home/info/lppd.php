<?php echo $this->extend('home/template/index'); ?>
<?php echo $this->section('home-content'); ?>

<div id="banner-area" class="banner-area" style="background-image:url(<?= base_url('/img/setting/'.$setting->background) ?>)">
  <div class="banner-text">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <div class="banner-heading">
                <h1 class="banner-title">Informasi LPPD</h1>
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
                  <div class="table-responsive">
             <table class="table table-bordered table-striped" id="data-lppd" width="100%" cellspacing="0">
                 <thead>
                     <tr>
                         <th>No</th>
                         <th>Opd</th>
                         <th>Title</th>
                         <th>Year</th>
                         <th>Description</th>
                         <th>Download</th>
                     </tr>
                 </thead>
                 <tbody>
                     <?php
                     $no=1;
                     foreach ($data as $row) {
                     ?>
                     <tr>
                        <td><?= $no ;?></td>
                        <td><?= $row->opd;?></td>
                        <td><?= $row->title;?></td>
                        <td><?= $row->year;?></td>
                        <td><?= $row->description;?></td>
                        <td><a href="<?php echo base_url('info/d_lppd/' . $row->lppd_id) ?>">Download</a></td>
                     </tr>
                     <?php
                     $no++;
                     }
                     ?>
                 </tbody>
             </table>
         </div>
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
        $('#data-lppd').DataTable({
          responsive: true,
          columnDefs: [
                {
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
                    targets: [0, 5],
                }
            ],
        });
    });
</script>
<?php echo $this->endSection(); ?>
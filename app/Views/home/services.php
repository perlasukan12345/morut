<?php echo $this->extend('home/template/index'); ?>

<?php echo $this->section('home-content'); ?>
<div id="banner-area" class="banner-area" style="background-image:url(<?= base_url('/img/setting/'.$setting->background) ?>)">
  <div class="banner-text">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <div class="banner-heading">
                <h1 class="banner-title">Pelayanan Daerah</h1>
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

      <?php foreach ($opd as $op): ?>
      <div class="col-lg-4 col-md-6 mb-5">
        <div class="ts-service-box">
            <div class="d-flex">
              <div class="ts-service-box-img">
                  <img loading="lazy" src="<?= base_url('img/icon-image/service-icon1.png') ?>" alt="service-icon">
              </div>
              <div class="ts-service-info">
                  <h3 class="service-box-title"><?= $op->opd ?></h3>
                  <a class="learn-more d-inline-block" href="#" aria-label="service-details"><i class="fa fa-caret-right"></i> Kunjungi Website</a>
              </div>
            </div>
        </div><!-- Service1 end -->
      </div><!-- Col 1 end -->
       <?php endforeach ?>

    </div><!-- Main row end -->
  </div><!-- Conatiner end -->
</section><!-- Main container end -->
<?php echo $this->endSection(); ?>
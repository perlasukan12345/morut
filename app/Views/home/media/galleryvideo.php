<?php echo $this->extend('home/template/index'); ?>
<?php echo $this->section('home-content'); ?>

<div id="banner-area" class="banner-area" style="background-image:url(<?= base_url('/img/setting/'.$setting->background) ?>)">
  <div class="banner-text">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <div class="banner-heading">
                <h1 class="banner-title">Galeri Video</h1>
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

      <?php
        foreach ($gallery as $vid) :
        ?>
        <div class="col-lg-4 col-md-6 mb-5">
          <div class="ts-service-box">
              <iframe width="300" height="285" src="https://www.youtube.com/embed/<?= $vid->content; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div><!-- Service2 end -->
        </div><!-- Col 2 end -->
        <?php
        endforeach;
        ?>

    </div><!-- Main row end -->
  </div><!-- Conatiner end -->
</section><!-- Main container end -->

<?php echo $this->endSection(); ?>
<?php echo $this->extend('home/template/index'); ?>

<?php echo $this->section('home-content'); ?>
<div id="banner-area" class="banner-area" style="background-image:url(<?= base_url('/img/setting/' . $setting->background) ?>)">
   <div class="banner-text">
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <div class="banner-heading">
                  <h1 class="banner-title">Program Prioritas</h1>
                  <?= $breadcrumbs; ?>
               </div>
            </div><!-- Col end -->
         </div><!-- Row end -->
      </div><!-- Container end -->
   </div><!-- Banner text end -->
</div><!-- Banner area end -->

<section id="main-container" class="main-container">
   <div class="container">
      <!--/ Title row end -->
      <div class="row">
         <?php if (empty($slug)) { ?>
            <?php foreach ($program as $p_program) : ?>
               <div class="col-lg-4 col-md-6 mb-4">
                  <div class="latest-post">
                     <div class="latest-post-media">
                        <img loading="lazy" class="img-fluid" src="<?= base_url('/img/priority_program/' . $p_program->content); ?>" alt="img">
                     </div>
                     <div class="post-body">
                        <h4 class="post-title">
                           <?= $p_program->title; ?>
                        </h4>
                        <div class="latest-post-meta">
                           <span class="post-item-date">
                              <p>
                                 <?= substr($p_program->description, 0, 300); ?>
                              </p>
                           </span>
                        </div>
                     </div>
                     <div class="post-footer">
                        <a href="/home/program/<?= $p_program->slug ?>" class="btn btn-primary">Baca Selengkapnya</a>
                     </div>
                  </div><!-- Latest post end -->
               </div><!-- 1st post col end -->
            <?php endforeach; ?>
         <?php
         } else {
         ?>
            <?php
            foreach ($vprogram as $vp) {
            ?>
               <div class="row">
                  <div class="col-lg-6">
                     <div class="posts-thumb">
                        <img loading="lazy" class="img-fluid" src="<?= base_url('/img/priority_program/' . $vp->content); ?>" alt="img">
                     </div>
                  </div>
                  <div class="col-lg-6 col-md-6 mb-5">
                     <div class="ts-service-box">
                        <div class="col-12">
                           <p><?= $vp->description ?></p>
                        </div>
                        <hr>
                     </div><!-- Service2 end -->
                  </div><!-- Col 2 end -->
               </div>
            <?php } ?>
         <?php } ?>
      </div>
   </div><!-- Container end -->
</section><!-- Main container end -->
<?php echo $this->endSection(); ?>
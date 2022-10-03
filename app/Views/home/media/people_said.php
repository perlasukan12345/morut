<?php echo $this->extend('home/template/index'); ?>

<?php echo $this->section('home-content'); ?>
<div id="banner-area" class="banner-area" style="background-image:url(<?= base_url('/img/setting/'.$setting->background) ?>)">
  <div class="banner-text">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <div class="banner-heading">
              <h1 class="banner-title">Suara Rakyat</h1>
               <?= $breadcrumbs; ?>
              </div>
          </div><!-- Col end -->
        </div><!-- Row end -->
    </div><!-- Container end -->
  </div><!-- Banner text end -->
</div><!-- Banner area end --> 

<section id="main-container" class="main-container">
   <div class="container">
      <div class="row text-center">
         <div class="col-12">
            <h3 class="section-sub-title mb-4">Apa Kata Rakyat</h3>
         </div>
      </div>
      <!--/ Title row end -->

      <div class="row">
        <?php foreach ($people_said as $people): ?>
         <div class="col-lg-4 col-md-6">
            <div class="quote-item quote-border mt-5">
               <div class="quote-text-border">
                  <?= $people->message ?>
                </div>

               <div class="quote-item-footer">
                  <img loading="lazy" class="testimonial-thumb" src="<?= base_url('/img/people/'.$people->image) ?>" alt="testimonial">
                  <div class="quote-item-info">
                     <h3 class="quote-author"><?= $people->name ?></h3>
                     <span class="quote-subtext"><?= $people->subject ?></span>
                  </div>
               </div>
            </div><!-- Quote item end -->
         </div><!-- End col md 4 -->
         <?php endforeach ?>
      </div><!-- Content row end -->
      <hr>
       <div class="row"> 
         <div class="col-lg-12 mb-4">
           <?= $pager->links('p_said', 'custom_pager'); ?>
         </div>
      </div>
   </div><!-- Container end -->
</section><!-- Main container end -->
<?php echo $this->endSection(); ?>
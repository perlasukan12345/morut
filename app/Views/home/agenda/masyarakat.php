<?php echo $this->extend('home/template/index'); ?>
<?php echo $this->section('home-content'); ?>

<div id="banner-area" class="banner-area" style="background-image:url(<?= base_url('/img/setting/'.$setting->background) ?>)">
  <div class="banner-text">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <div class="banner-heading">
                <h1 class="banner-title">Agenda</h1>
                <?= $breadcrumbs; ?>
              </div>
          </div><!-- Col end -->
        </div><!-- Row end -->
    </div><!-- Container end -->
  </div><!-- Banner text end -->
</div><!-- Banner area end --> 

<section id="main-container" class="main-container pb-2">
  <div class="container">
    <div class="row text-center">
         <div class="col-12">
            <h3 class="section-sub-title mb-4">Agenda Mayarakat</h3>
         </div>
      </div>
      <!--/ Title row end -->

    <div class="row">
        <div class="col-lg-12 col-md-6 mb-5">
          <div class="ts-service-box">
             <div class="col-12">
                <?php if (empty($slug)): ?>
                    <?php foreach ($agenda_mas as $amas): ?>
                      <h4 class="text-success"><a href="<?= base_url('agenda/kabupaten/'.$amas->slug) ?>"><?= $amas->title ?></a></h4>
                      <p><?= substr($amas->agenda, 0, 100).' ...'; ?></p>
                    <?php endforeach ?>

                    <div class="row"> 
                        <div class="col-lg-12 mb-4">
                           <?= $pager->links('agenda', 'custom_pager'); ?>
                        </div>
                    </div>
                <?php else: ?>
                    <?php foreach ($view_agenda as $vmas): ?>
                      <h4 class="text-success"><?= $vmas->title ?></h4>
                      <p><?= $vmas->agenda ?></p>
                    <?php endforeach ?>
                <?php endif ?>
              </div>
              <hr>
          </div><!-- Service2 end -->
        </div><!-- Col 2 end -->

    </div><!-- Main row end -->
  </div><!-- Conatiner end -->
</section><!-- Main container end -->

<?php echo $this->endSection(); ?>

<?php echo $this->section('script'); ?>
<?php echo $this->endSection(); ?>
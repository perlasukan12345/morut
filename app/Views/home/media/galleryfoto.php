<?php echo $this->extend('home/template/index'); ?>

<?php echo $this->section('home-content'); ?>
<div id="banner-area" class="banner-area" style="background-image:url(<?= base_url('/img/setting/'.$setting->background) ?>)">
  <div class="banner-text">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <div class="banner-heading">
                <h1 class="banner-title">Galeri Gambar</h1>
                <?= $breadcrumbs; ?>
              </div>
          </div><!-- Col end -->
        </div><!-- Row end -->
    </div><!-- Container end -->
  </div><!-- Banner text end -->
</div><!-- Banner area end --> 

<section id="main-container" class="main-container">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="shuffle-btn-group">
          <label class="active" for="all">
            <input type="radio" name="shuffle-filter" id="all" value="all" checked="checked">Show All
          </label>
           <?php
            foreach ($category as $row) :
            ?>
            <label for="<?= $row->category_name; ?>">
               <input type="radio" name="shuffle-filter" id="<?= $row->category_name; ?>" value="<?= $row->category_name; ?>"><?= $row->category_name; ?>
            </label>
            <?php endforeach; ?>
        </div><!-- project filter end -->


        <div class="row shuffle-wrapper">
          <div class="col-1 shuffle-sizer"></div>

          <?php
               foreach ($gallery as $gl) :
               ?>
          <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;<?= $gl->category_name; ?>&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="<?= base_url('img/gallery/' . $gl->content); ?>" aria-label="<?= $gl->category_name; ?>">
                <img class="img-fluid" src="<?= base_url('img/gallery/' . $gl->content); ?>" alt="<?= $gl->category_name; ?>">
                <span class="gallery-icon"><i class="fa fa-plus"></i></span>
              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title">
                    <?= $gl->category_name; ?>
                  </h3>
                  <p class="project-cat"><?= $gl->category_name; ?></p>
                </div>
              </div>
            </div>
          </div><!-- shuffle item 1 end -->
           <?php endforeach; ?>
        </div><!-- shuffle end -->
      </div>

    </div><!-- Content row end -->

  </div><!-- Conatiner end -->
</section><!-- Main container end -->
<?php echo $this->endSection(); ?>
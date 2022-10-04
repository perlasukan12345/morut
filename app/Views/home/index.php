<?php echo $this->extend('home/template/index'); ?>
<?php echo $this->section('home-content'); ?>
<?php if (is_null(session()->getFlashdata('message'))): ?>
  <div class="swal" data-swal="<?= session()->getFlashdata('error') ?>"></div>
<?php else: ?>
  <div class="swal" data-swal="<?= session()->getFlashdata('message') ?>"></div>
<?php endif ?>
<div class="banner-carousel banner-carousel-2 mb-0">
  <div class="banner-carousel-item" style="background-image:url(<?= base_url('/img/setting/'.$setting->banner1) ?>)">
    <div class="container">
        <div class="box-slider-content">
          <div class="box-slider-text">
              <h2 class="box-slide-title"></h2>
              <h3 class="box-slide-sub-title"><?= $setting->title1 ?></h3>
              <p class="box-slide-description"><?= $setting->description1 ?></p>
              <p>
                <a href="<?= $setting->url1 ?>" class="slider btn btn-primary"><?= $setting->url_tag1 ?></a>
              </p>
          </div>
        </div>
    </div>
  </div>

  <div class="banner-carousel-item" style="background-image:url(<?= base_url('/img/setting/'.$setting->banner2) ?>)">
    <div class="slider-content text-left">
        <div class="container">
          <div class="box-slider-content">
              <div class="box-slider-text">
                <h2 class="box-slide-title"></h2>
              <h3 class="box-slide-sub-title"><?= $setting->title2 ?></h3>
              <p class="box-slide-description"><?= $setting->description2 ?></p>
              <p>
                <a href="<?= $setting->url2 ?>" class="slider btn btn-primary"><?= $setting->url_tag2 ?></a>
              </p>
              </div>
          </div>
        </div>
    </div>
  </div>

  <div class="banner-carousel-item" style="background-image:url(<?= base_url('/img/setting/'.$setting->banner3) ?>)">
    <div class="slider-content text-left">
        <div class="container">
          <div class="box-slider-content">
              <div class="box-slider-text">
               <h2 class="box-slide-title"></h2>
              <h3 class="box-slide-sub-title"><?= $setting->title3 ?></h3>
              <p class="box-slide-description"><?= $setting->description3 ?></p>
              <p>
                <a href="<?= $setting->url3 ?>" class="slider btn btn-primary"><?= $setting->url_tag3 ?></a>
              </p>
              </div>
          </div>
        </div>
    </div>
  </div>
</div>

<section class="call-to-action no-padding">
  <div class="container">
    <div class="action-style-box">
        <div class="row">
          <div class="col-md-8 text-center text-md-left">
              <div class="call-to-action-text">
                <h3 class="action-title"><?= $setting->motto ?></h3>
              </div>
          </div><!-- Col end -->
          <div class="col-md-4 text-center text-md-right mt-3 mt-md-0">
              <div class="call-to-action-btn">
                <a class="btn btn-primary" href="<?= base_url('peoplesaid/index'); ?>">Suara Rakyat</a>
              </div>
          </div><!-- col end -->
        </div><!-- row end -->
    </div><!-- Action style box -->
  </div><!-- Container end -->
</section><!-- Action end -->

<section id="news" class="news">
  <div class="container">
    <div class="row text-center">
        <div class="col-12">
          <h2 class="section-title">Berita Tentang Morowali Utara</h2>
          <h3 class="section-sub-title">Berita Terbaru</h3>
        </div>
    </div>
    <!--/ Title row end -->

    <div class="row">
      <?php
        foreach ($data_news as $news) {
        ?>
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="latest-post">
              <div class="latest-post-media">
                <a href="/home/news/<?= $news->slug ?>" class="latest-post-img">
                    <img loading="lazy" class="img-fluid img-thumbnail" src="<?= base_url(); ?>/img/news/<?= $news->image_name ?>" alt="<?= base_url(); ?>/img/news/<?= $news->image_name ?>">
                </a>
              </div>
              <div class="post-body">
                <h4 class="post-title">
                    <a href="/home/news/<?= $news->slug ?>" class="d-inline-block"><?= $news->title ?></a>
                </h4>
                <div class="latest-post-meta">
                    <span class="post-item-date">
                      <i class="fa fa-clock-o"></i> <?= date_indo(date("Y-m-d", strtotime($news->created_at))) ?>
                    </span>
                </div>
              </div>
          </div><!-- Latest post end -->
        </div><!-- 1st post col end -->
        <?php
        }
        ?>
    </div>
    <!--/ Content row end -->

    <div class="general-btn text-center mt-4">
        <a class="btn btn-primary" href="/home/news">Lihat Semua Berita</a>
    </div>

  </div>
  <!--/ Container end -->
</section>

<section id="ts-service-area" class="ts-service-area pb-0">
  <div class="container">
    <div class="row text-center">
        <div class="col-12">
          <h2 class="section-title">Kami siap melayani anda</h2>
          <h3 class="section-sub-title">Pelayanan Publik</h3>
        </div>
    </div>
    <!--/ Title row end -->

    <div class="row">
        <div class="col-lg-4">
          <div class="ts-service-box d-flex">
              <div class="ts-service-box-img">
                <img loading="lazy" src="<?= base_url('img/icon-image/service-icon1.png') ?>" alt="service-icon">
              </div>
              <div class="ts-service-box-info">
                <div class="ts-service-info">
                  <h3 class="service-box-title">Pelayanan Daerah</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Integer adipiscing erat</p>
                  <a class="learn-more d-inline-block" href="<?= base_url('home/services') ?>" aria-label="service-details"><i class="fa fa-caret-right"></i> Lihat Layanan</a>
                </div>
              </div>
          </div><!-- Service 1 end -->

          <div class="ts-service-box d-flex">
              <div class="ts-service-box-img">
                <img loading="lazy" src="<?= base_url('img/icon-image/service-icon2.png') ?>" alt="service-icon">
              </div>
              <div class="ts-service-box-info">
                  <div class="ts-service-info">
                    <h3 class="service-box-title">LPSE</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Integer adipiscing erat</p>
                    <a class="learn-more d-inline-block" href="#" aria-label="service-details"><i class="fa fa-caret-right"></i> Kunjungi Website</a>
                  </div>
              </div>
          </div><!-- Service 2 end -->

          <div class="ts-service-box d-flex">
              <div class="ts-service-box-img">
                <img loading="lazy" src="<?= base_url('img/icon-image/service-icon2.png') ?>" alt="service-icon">
              </div>
              <div class="ts-service-box-info">
                  <div class="ts-service-info">
                    <h3 class="service-box-title">SIRUP</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Integer adipiscing erat</p>
                    <a class="learn-more d-inline-block" href="#" aria-label="service-details"><i class="fa fa-caret-right"></i> Kunjungi Website</a>
                  </div>
              </div>
          </div><!-- Service 2 end -->

        </div><!-- Col end -->

        <div class="col-lg-4 text-center">
          <img loading="lazy" class="img-fluid" src="<?= base_url('img/morut.png'); ?>" alt="service-avater-image">
        </div><!-- Col end -->

        <div class="col-lg-4 mt-5 mt-lg-0 mb-4 mb-lg-0">
          <div class="ts-service-box d-flex">
              <div class="ts-service-box-img">
                <img loading="lazy" src="<?= base_url('img/icon-image/service-icon2.png') ?>" alt="service-icon">
              </div>
              <div class="ts-service-box-info">
                  <div class="ts-service-info">
                    <h3 class="service-box-title">SIPD</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Integer adipiscing erat</p>
                    <a class="learn-more d-inline-block" href="#" aria-label="service-details"><i class="fa fa-caret-right"></i> Kunjungi Website</a>
                  </div>
              </div>
          </div><!-- Service 2 end -->

          <div class="ts-service-box d-flex">
              <div class="ts-service-box-img">
                <img loading="lazy" src="<?= base_url('img/icon-image/service-icon2.png') ?>" alt="service-icon">
              </div>
              <div class="ts-service-box-info">
                  <div class="ts-service-info">
                    <h3 class="service-box-title">JDIH Kabupaten Morowai Utara</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Integer adipiscing erat</p>
                    <a class="learn-more d-inline-block" href="#" aria-label="service-details"><i class="fa fa-caret-right"></i> Kunjungi Website</a>
                  </div>
              </div>
          </div><!-- Service 2 end -->

          <div class="ts-service-box d-flex">
              <div class="ts-service-box-img">
                <img loading="lazy" src="<?= base_url('img/icon-image/service-icon2.png') ?>" alt="service-icon">
              </div>
              <div class="ts-service-box-info">
                  <div class="ts-service-info">
                    <h3 class="service-box-title">JDIH DPRD Morowai Utara</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Integer adipiscing erat</p>
                    <a class="learn-more d-inline-block" href="#" aria-label="service-details"><i class="fa fa-caret-right"></i> Kunjungi Website</a>
                  </div>
              </div>
          </div><!-- Service 2 end -->
        </div><!-- Col end -->
    </div><!-- Content row end -->

  </div>
  <!--/ Container end -->
</section><!-- Service end -->

<section id="main-container" class="main-container">
  <div class="container">
    <div class="row text-center">
      <div class="col-lg-12">
        <h2 class="section-title">Agenda Morowali Utara</h2>
        <h3 class="section-sub-title">Dafta Agenda</h3>
      </div>
    </div>
    <!--/ Title row end -->
    <div class="row">

      <div class="col-lg-6">
        <h3 class="column-title">Kabupaten / Peerintahan</h3>

        <?php foreach ($agenda_kab as $akab): ?>
          <h4 class="text-success"><a href="<?= base_url('agenda/kabupaten/'.$akab->slug) ?>"><?= $akab->title ?></a></h4>
          <p><?= substr($akab->agenda, 0, 100).' ...'; ?></p>
        <?php endforeach ?>

        <div class="general-btn text-center">
          <a class="btn btn-primary" href="<?= base_url('agenda/kabupaten') ?>">Lihat Semua</a>
        </div>
      </div>
      <!--/ Col end -->

      <div class="col-lg-6">

        <h3 class="column-title">Masyarakat</h3>

        <?php foreach ($agenda_mas as $amas): ?>
          <h4 class="text-success"><a href="<?= base_url('agenda/masyarakat/'.$amas->slug) ?>"><?= $amas->title ?></a></h4>
          <p><?= substr($amas->agenda, 0, 100).' ...'; ?></p>
        <?php endforeach ?>

        <div class="general-btn text-center">
          <a class="btn btn-primary" href="<?= base_url('agenda/masyarakat') ?>">Lihat Semua</a>
        </div>
      </div>
      <!--/ Col end -->

    </div><!-- Content row 1 -->
  </div><!-- Container end -->
</section><!-- Main container end -->

<section id="project-area" class="project-area">
  <div class="container">
    <div class="row text-center">
      <div class="col-lg-12">
        <h2 class="section-title">Galeri Tentang Morowali Utara</h2>
        <h3 class="section-sub-title">Gambar Terbaru</h3>
      </div>
    </div>
    <!--/ Title row end -->

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
               foreach ($data_gallery_foto as $gl) :
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

      <div class="col-12">
        <div class="general-btn text-center">
          <a class="btn btn-primary" href="/home/galleryfoto">Lihat Semua Gambar</a>
        </div>
      </div>

    </div><!-- Content row end -->
  </div>
  <!--/ Container end -->
</section><!-- Project area end -->

<section id="ts-features" class="ts-features pb-2 solid-bg">
  <div class="container">
    <div class="row text-center">
      <div class="col-lg-12">
        <h2 class="section-title">Video Tentang Morowali Utara</h2>
        <h3 class="section-sub-title">Video Terbaru</h3>
      </div>
    </div>
    <!--/ Title row end -->

    <div class="row">
        <?php
        foreach ($data_gallery_video as $vid) :
        ?>
        <div class="col-lg-4 col-md-6 mb-5">
          <div class="ts-service-box">
              <iframe width="300" height="285" src="https://www.youtube.com/embed/<?= $vid->content; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div><!-- Service2 end -->
        </div><!-- Col 2 end -->
        <?php
        endforeach;
        ?>
        <div class="col-12">
        <div class="general-btn text-center">
          <a class="btn btn-primary" href="/home/galleryvideo">Lihat Semua Video</a>
        </div>
      </div>
    </div><!-- Content row end -->
  </div><!-- Container end -->
</section><!-- Feature are end -->

<section class="content">
  <div class="container">
    <div class="row">
        <div class="col-lg-6">
          <h3 class="column-title">Suara Rakyat</h3>

          <div id="testimonial-slide" class="testimonial-slide">
            <?php foreach ($people_said as $p_said): ?>
              <div class="item">
                <div class="quote-item">
                    <span class="quote-text">
                      <?= $p_said->message ?>
                    </span>

                    <div class="quote-item-footer">
                      <img loading="lazy" class="testimonial-thumb" src="<?= base_url('/img/people/'.$p_said->image) ?>" alt="testimonial">
                      <div class="quote-item-info">
                          <h3 class="quote-author"><?= $p_said->name ?></h3>
                          <span class="quote-subtext"><?= $p_said->subject ?></span>
                      </div>
                    </div>
                </div><!-- Quote item end -->
              </div>
              <!--/ Item 1 end -->
               <?php endforeach ?>
          </div>
          <div class="general-btn text-center">
            <a class="btn btn-primary" href="/peoplesaid/index">Lihat Semua Suara Rakyat</a>
          </div>
          <!--/ Testimonial carousel end-->
        </div><!-- Col end -->
        <div class="col-lg-6 mt-5 mt-lg-0">

          <h3 class="column-title">Rakyat Berkata</h3>

          <form id="contact-form" action="<?php echo base_url('peoplesaid/create') ?>" method="post" role="form" enctype="multipart/form-data">
          <div class="error-container"></div>
          <input type="hidden" name="token" value="<?= generate_token('people_said'); ?>">
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label>Nama</label>
                <input class="form-control form-control-name <?= ($validation->hasError('name')) ? 'is-invalid' : ''; ?>" name="name" id="name" placeholder="" type="text" required>
                <div class="invalid-feedback">
                  <?= $validation->getError('name'); ?>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label>Foto</label>
                <input class="form-control form-control-file <?= ($validation->hasError('image')) ? 'is-invalid' : ''; ?>" name="image" id="image" placeholder="" type="file" required>
                <div class="invalid-feedback">
                  <?= $validation->getError('image'); ?>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label>Subjek</label>
                <input class="form-control form-control-subject <?= ($validation->hasError('subject')) ? 'is-invalid' : ''; ?>" name="subject" id="subject" placeholder="" required>
                <div class="invalid-feedback">
                  <?= $validation->getError('subject'); ?>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label>Pesan</label>
            <textarea class="form-control form-control-message <?= ($validation->hasError('message')) ? 'is-invalid' : ''; ?>" name="message" id="message" placeholder="" rows="10" required></textarea>
            <div class="invalid-feedback">
              <?= $validation->getError('message'); ?>
            </div>
          </div>
          <div class="text-right"><br>
            <button class="btn btn-primary solid blank" type="submit">Kirin Pesan</button>
          </div>
        </form>

        </div><!-- Col end -->

    </div>
    <!--/ Content row end -->
  </div>
  <!--/ Container end -->
</section><!-- Content end -->

<?php echo $this->endSection(); ?>
<?php echo $this->section('script') ?>
<script type="text/javascript">
    $(document).ready(function() {
        
        const swal = $('.swal').data('swal');
        if (swal) {
            Swal.fire({
              <?php if (is_null(session()->getFlashdata('message'))): ?>
                icon: 'error',
                text: swal
              <?php else: ?>
                icon: 'success',
                text: swal
              <?php endif ?>
            })
        }
    });
</script>
<?php echo $this->endSection(); ?>
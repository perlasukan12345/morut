<?php echo $this->extend('home/template/index'); ?>

<?php echo $this->section('home-content'); ?>
<div id="banner-area" class="banner-area" style="background-image:url(<?= base_url('/img/setting/' . $setting->background) ?>)">
  <div class="banner-text">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="banner-heading">
            <h1 class="banner-title">Berita</h1>
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

      <?php
      if (empty($slug)) {
      ?>
        <div class="col-lg-8 mb-5 mb-lg-0">
          <?php
          foreach ($data_news as $news) {
          ?>
            <div class="post">
              <div class="post-media post-image">
                <img loading="lazy" src="<?= base_url(); ?>/img/news/<?= $news->image_name ?>" class="img-fluid" alt="post-image">
              </div>

              <div class="post-body">
                <div class="entry-header">
                  <div class="post-meta">
                    <span class="post-author">
                      <i class="far fa-user"></i>&nbsp<?= $news->user_name ?>
                    </span>
                    <span class="post-cat">
                      <i class="far fa-folder-open"></i><a href="/home/category/<?= $news->category_news_id ?>">&nbsp<?= $news->category_name ?></a>
                    </span>
                    <span class="post-meta-date">
                      <i class="far fa-calendar"></i>&nbsp<?= date_indo(date("Y-m-d", strtotime($news->created_at))) ?>
                    </span>
                  </div>
                  <h2 class="entry-title">
                    <a href="/home/news/<?= $news->slug ?>"><?= $news->title ?></a>
                  </h2>
                </div><!-- header end -->

                <div class="entry-content">
                  <p><?= substr($news->content, 0, 500); ?></p>
                </div>

                <div class="post-footer">
                  <a href="/home/news/<?= $news->slug ?>" class="btn btn-primary">Baca Selengkapnya</a>
                </div>

              </div><!-- post-body end -->
            </div><!-- 1st post end -->
          <?php
          }
          ?>

          <?= $pager->links('p_news', 'custom_pager'); ?>

        </div><!-- Content Col end -->
      <?php
      } else {
      ?>
        <div class="col-lg-8 mb-5 mb-lg-0">
          <?php
          foreach ($view_news as $v_news) {
          ?>
            <div class="post-content post-single">
              <div class="post-media post-image">
                <img loading="lazy" src="<?= base_url(); ?>/img/news/<?= $v_news->image_name ?>" class="img-fluid" alt="post-image">
              </div>

              <div class="post-body">
                <div class="entry-header">
                  <div class="post-meta">
                    <span class="post-author">
                      <i class="far fa-user"></i>&nbsp <?= $v_news->user_name ?>
                    </span>
                    <span class="post-cat">
                      <i class="far fa-folder-open"></i><a href="/home/category/<?= $v_news->category_news_id ?>">&nbsp<?= $v_news->category_name ?></a>
                    </span>
                    <span class="post-meta-date">
                      <i class="far fa-calendar"></i>&nbsp<?= date_indo(date("Y-m-d", strtotime($v_news->created_at))) ?>
                    </span>
                  </div>
                  <h2 class="entry-title">
                    <?= $v_news->title ?>
                  </h2>
                </div><!-- header end -->

                <div class="entry-content">
                  <p><?= $v_news->content ?></p>
                </div>
              </div><!-- post-body end -->
            </div><!-- post content end -->
          <?php
          }
          ?>
        </div><!-- Content Col end -->
      <?php
      }
      ?>

      <div class="col-lg-4">

        <div class="sidebar sidebar-right">
          <div class="widget recent-posts">
            <h3 class="widget-title">Berita Terbaru</h3>
            <ul class="list-unstyled">
              <?php
              foreach ($news_limit as $limit) {
              ?>
                <li class="d-flex align-items-center">
                  <div class="posts-thumb">
                    <a href="#"><img loading="lazy" alt="img" src="<?= base_url(); ?>/img/news/<?= $limit->image_name ?>"></a>
                  </div>
                  <div class="post-info">
                    <h4 class="entry-title">
                      <a href="/home/news/<?= $limit->slug ?>"><?= $limit->title ?></a>
                    </h4>
                  </div>
                </li><!-- 1st post end-->
              <?php
              }
              ?>

            </ul>

          </div><!-- Recent post end -->

          <div class="widget">
            <h3 class="widget-title">Kategori Berita</h3>
            <ul class="arrow nav nav-tabs">
              <?php
              foreach ($cat_news as $kat) {
              ?>
                <li><a href="/home/category/<?= $kat->category_news_id ?>"><?= $kat->category_name ?></a></li>
              <?php
              }
              ?>
            </ul>
          </div><!-- Categories end -->

          <div class="widget">
            <h3 class="widget-title">Arsip Berita </h3>
            <ul class="arrow nav nav-tabs">
              <?php
              foreach ($archive as $arc) {
              ?>
                <li><a href="/home/archive/<?= $arc->archive ?>"><?= date_archive($arc->archive) ?></a></li>
              <?php
              }
              ?>
            </ul>
          </div><!-- Archives end -->
        </div><!-- Sidebar end -->
      </div><!-- Sidebar Col end -->

    </div><!-- Main row end -->

  </div><!-- Container end -->
</section><!-- Main container end -->
<?php echo $this->endSection(); ?>
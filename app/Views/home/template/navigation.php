     <div id="top-bar" class="top-bar">
        <div class="container">
          <div class="row">
              <div class="col-lg-8 col-md-8">
                <ul class="top-info text-center text-md-left">
                    <li><i class="fas fa-map-marker-alt"></i> <p class="info-text"><?= $setting->quotes ?></p>
                    </li>
                </ul>
              </div>
              <!--/ Top info end -->
  
              <div class="col-lg-4 col-md-4 top-social text-center text-md-right">
                <ul class="list-unstyled">
                    <li>
                      <a title="Facebook" href="https://facebook.com/<?= $setting->facebook ?>" target="_blank">
                          <span class="social-icon"><i class="fab fa-facebook-f"></i></span>
                      </a>
                      <a title="Twitter" href="https://twitter.com/<?= $setting->twitter ?>" target="_blank">
                          <span class="social-icon"><i class="fab fa-twitter"></i></span>
                      </a>
                      <a title="Instagram" href="https://instagram.com/<?= $setting->instagram ?>" target="_blank">
                          <span class="social-icon"><i class="fab fa-instagram"></i></span>
                      </a>
                      <a title="Youtube" href="https://www.youtube.com/channel/<?= $setting->youtube ?>" target="_blank">
                          <span class="social-icon"><i class="fab fa-youtube"></i></span>
                      </a>
                    </li>
                </ul>
              </div>
              <!--/ Top social end -->
          </div>
          <!--/ Content row end -->
        </div>
        <!--/ Container end -->
  </div>
    <!--/ Topbar end -->
<!-- Header start -->
<header id="header" class="header-two">
  <div class="site-navigation">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <nav class="navbar navbar-expand-lg navbar-light p-0">
                
                <div class="logo">
                    <a class="d-block" href="/home/index">
                      <img loading="lazy" src="<?= base_url('img/setting/'.$setting->logo) ?>" alt="Pemkab Morowali Utara">
                    </a>
                </div><!-- logo end -->

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div id="navbar-collapse" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav ml-auto align-items-center">
                      <li class="nav-item">
                          <a class="nav-link" href="<?= base_url('home/index') ?>">Beranda</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="<?= base_url('home/news') ?>">Berita</a>
                      </li>
                       <li class="nav-item dropdown">
                          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Profil <i class="fa fa-angle-down"></i></a>
                          <ul class="dropdown-menu" role="menu">
                            <?php foreach ($profile as $key => $row): ?>
                            <li class="dropdown-submenu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?= $key ?></a>
                                <?php if (!empty($row['sub_cat'])): ?>
                                <ul class="dropdown-menu">
                                  <?php foreach ($row['sub_cat'] as $sub): ?>
                                     <li><a href="<?= base_url('page/profile/'.$sub->content_id) ?>"><?= $sub->title ?></a></li>
                                  <?php endforeach ?>
                                </ul>
                                <?php endif ?>
                             </li>     
                            <?php endforeach ?>
                          </ul>
                      </li>

                      <li class="nav-item dropdown">
                          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Informasi <i class="fa fa-angle-down"></i></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Program Prioritas</a></li>
                            <li><a href="#" target="_blank">PPID</a></li>
                            <li class="dropdown-submenu">
                              <?php foreach ($information as $key => $row): ?>
                                <a href="#!" class="dropdown-toggle" data-toggle="dropdown"><?= $key ?></a>
                              <?php if (!empty($row['sub_cat'])): ?>
                                <ul class="dropdown-menu">
                                  <?php foreach ($row['sub_cat'] as $sub): ?>
                                     <li><a href="<?= $sub->content_id ?>"><?= $sub->title ?></a></li>
                                  <?php endforeach ?>
                                </ul>   
                              <?php endif ?>
                              <?php endforeach ?>
                            </li>
                            <li><a href="<?= base_url('info/rpjmd'); ?>" target="_blank">RPJMD</a></li>
                            <li><a href="<?= base_url('info/rpjpd'); ?>" target="_blank">RPJPD</a></li>
                            <li><a href="<?= base_url('info/rkpd'); ?>" target="_blank">RKPD</a></li>
                            <li><a href="<?= base_url('info/lkpj'); ?>" target="_blank">LKPJ</a></li>
                            <li><a href="<?= base_url('info/sakip'); ?>" target="_blank">SAKIP</a></li>
                            <li><a href="<?= base_url('info/lppd'); ?>" target="_blank">LPPD</a></li>
                          </ul>
                      </li>
                      <li class="nav-item dropdown">
                          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Agenda <i class="fa fa-angle-down"></i></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="<?= base_url('agenda/kabupaten'); ?>">Agenda Kabupaten/Pemerintah</a></li>
                            <li><a href="<?= base_url('agenda/masyarakat'); ?>">Agenda Masyarakat</a></li>
                          </ul>
                      </li>
                      <li class="nav-item dropdown">
                          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Regulasi <i class="fa fa-angle-down"></i></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="#" target="_blank">Aplikasi JDIH Morowali Utara</a></li>
                            <li><a href="#" target="_blank">JDIH Kabupaten Morowali Utara</a></li>
                            <li><a href="#" target="_blank">JDIH DRPD Morowali Utara</a></li>
                          </ul>
                      </li>
                      <li class="nav-item dropdown">
                          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Media Center <i class="fa fa-angle-down"></i></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="<?= base_url('home/galleryfoto'); ?>">Galeri Kota</a></li>
                            <li><a href="<?= base_url('home/galleryvideo'); ?>">Galeri Video</a></li>
                            <li><a href="<?= base_url('peoplesaid/index'); ?>">Suara Rakyat</a></li>
                            <li><a href="webmail.morowaliutarakab.go.id/">Email</a></li>
                          </ul>
                      </li>
                      <li class="nav-item dropdown">
                          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Web GIS City <i class="fa fa-angle-down"></i></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="<?= base_url('WebGis/GisBatasKecamatan'); ?>">Batas Kecamatan</a></li>
                            <li><a href="<?= base_url('WebGis/GisHotel'); ?>">Fasilitas Hotel</a></li>
                            <li><a href="<?= base_url('WebGis/GisMedicalFacility'); ?>">Fasilitas Kesehatan</a></li>
                            <li><a href="<?= base_url('WebGis/GisCulinaryFacilities'); ?>">Fasilitas Kuliner</a></li>
                            <li><a href="<?= base_url('WebGis/GisEducationalFacilities'); ?>">Fasilitas Pendidikan</a></li>
                            <li><a href="<?= base_url('WebGis/GisPublicService'); ?>">Persebaran Kantor Pelayanan Publik</a></li>
                            <li><a href="<?= base_url('WebGis/GisWisata'); ?>">Tempat-tempat Wisata</a></li>
                            <li><a href="<?= base_url('WebGis/GisMining'); ?>">Persebaran Tambang</a></li>
                            <li><a href="<?= base_url('WebGis/GisIndustry'); ?>">Persebaran Pabrik</a></li>
                          </ul>
                      </li>
                      <li class="header-get-a-quote">
                      </li>
                    </ul>
                </div>
              </nav>
          </div>
          <!--/ Col end -->
        </div>
        <!--/ Row end -->
    </div>
    <!--/ Container end -->

  </div>
  <!--/ Navigation end -->
</header>
<!--/ Header end -->
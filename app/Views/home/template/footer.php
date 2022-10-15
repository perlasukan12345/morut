<footer id="footer" class="footer bg-overlay">
  <div class="footer-main">
    <div class="container">
      <div class="row justify-content-between">
        <div class="col-lg-3 col-md-6 footer-widget footer-about">
          <h3 class="widget-title">Kontak Kami</h3>
          <p>Hubungi kami jika anda memiliki keadaan darurat, melalui daftar kontak berikut :</p>
           <div class="row w-100">
              <div class="col-12 col-sm-6 col-md-9 text-center text-sm-left">
                  <span class="fa fa-map-marker fa-fw text-muted" data-toggle="tooltip" title="" data-original-title="<?= $setting->address ?>"></span>
                  <br>
                  <span class="text-muted"><?= $setting->address ?></span>
                  <br>
                  <span class="fa fa-phone fa-fw text-muted" data-toggle="tooltip" title="" data-original-title="<?= $setting->contact ?>"></span>
                   <br>
                  <span class="text-muted"><?= $setting->contact ?></span>
                  <br>
                  <span class="fa fa-envelope fa-fw text-muted" data-toggle="tooltip" data-original-title="<?= $setting->email ?>" title=""></span>
                   <br>
                  <span class="text-muted text-truncate"><?= $setting->email ?></span>
              </div>
          </div>
          <div class="footer-social">
            <ul>
              <li><a href="https://facebook.com/<?= $setting->facebook ?>" aria-label="Facebook" target="_blank"><i
                    class="fab fa-facebook-f"></i></a></li>
              <li><a href="https://twitter.com/<?= $setting->twitter ?>" aria-label="Twitter" target="_blank"><i class="fab fa-twitter"></i></a>
              </li>
              <li><a href="https://instagram.com/<?= $setting->instagram ?>" aria-label="Instagram" target="_blank"><i
                    class="fab fa-instagram"></i></a></li>
              <li><a href="https://www.youtube.com/channel/<?= $setting->youtube ?>" aria-label="Youtube" target="_blank"><i class="fab fa-youtube"></i></a></li>
            </ul>
          </div><!-- Footer social end -->
        </div><!-- Col end -->

        <div class="col-lg-6 col-md-6 footer-widget mt-5 mt-md-0">
          <h3 class="widget-title">Kantor Bupati Morowali Utara</h3>
          <div class="google-map">
            <div class="map">
              <iframe style="pointer-events: none;width: 100%; height: 100%;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3987.442467787113!2d121.33358250055456!3d-1.9773901485513499!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1acda605c0ca2dcc!2sKantor%20Bupati%20Kabupaten%20Morowali%20Utara!5e0!3m2!1sid!2sid!4v1622551180591!5m2!1sid!2sid" loading="lazy"></iframe>
            </div>
          </div>
        </div><!-- Col end -->

        <div class="col-lg-3 col-md-6 mt-5 mt-lg-0 footer-widget">
          <h3 class="widget-title">Waktu Kerja</h3>
          <div class="working-hours">
            Waktu kerja 6 hari dalam seminggu, tidak termasuk hari Sabtu, Minggu dan Hari Libur Nasional. 
            <br><br> <?= $setting->work_day ?>: <span class="text-right"><?= $setting->hour ?> </span>
          </div>
        </div><!-- Col end -->
      </div><!-- Row end -->
    </div><!-- Container end -->
  </div><!-- Footer main end -->

  <div class="copyright">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6">
          <div class="copyright-info">
            <span>Copyright &copy; <script>
                document.write(new Date().getFullYear())
              </script>, Designed &amp; Developed by <a href=""><?= $setting->author ?></a></span>
          </div>
        </div>
        
      <div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top position-fixed">
        <button class="btn btn-primary" title="Back to Top">
          <i class="fa fa-angle-double-up"></i>
        </button>
      </div>

    </div><!-- Container end -->
  </div><!-- Copyright end -->
</footer><!-- Footer end -->
<!DOCTYPE html>
<html lang="en">
<head>

<!-- Basic Page Needs
================================================== -->
<meta charset="utf-8">
<title>Situs Resmi Pemkab Morowali Utara</title>

<!-- Mobile Specific Metas
================================================== -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Construction Html5 Template">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
<meta name=author content="Themefisher">
<meta name=generator content="Themefisher Constra HTML Template v1.0">

<!-- Favicon
================================================== -->
<link rel="icon" type="image/png" href="<?= base_url(); ?>/img/logo.jpg">

<!-- CSS
================================================== -->
<!-- Bootstrap -->
<link rel="stylesheet" href="<?= base_url(); ?>/assets/bootstrap/css/bootstrap.min.css">
<!-- FontAwesome -->
<link rel="stylesheet" href="<?= base_url(); ?>/assets/fontawesome-free/css/all.min.css">
<!-- Animation -->
<link rel="stylesheet" href="<?= base_url(); ?>/assets/animate-css/animate.css">
<!-- slick Carousel -->
<link rel="stylesheet" href="<?= base_url(); ?>/assets/slick/slick.css">
<link rel="stylesheet" href="<?= base_url(); ?>/assets/slick/slick-theme.css">
<!-- Colorbox -->
<link rel="stylesheet" href="<?= base_url(); ?>/assets/colorbox/colorbox.css">
<!-- leaflet -->
<link rel="stylesheet" href="<?= base_url(); ?>/assets/leaflet/leaflet.css" />
<!-- Template styles-->
<link rel="stylesheet" href="<?= base_url(); ?>/css/style.css">
<!-- Data Tables -->
<link rel="stylesheet" href="<?= base_url(); ?>/assets/datatables/DataTables-1.12.1/css/dataTables.bootstrap4.min.css" />
<link rel="stylesheet" href="<?= base_url(); ?>/assets/datatables/Responsive-2.3.0/css/responsive.bootstrap4.min.css" />
<!-- Sweet Alert -->
<link rel="stylesheet" href="<?= base_url(); ?>/assets/sweetalert2/sweetalert2.min.css" />

</head>
<body>
<div class="body-inner">
  <!-- navigation -->
  <?php echo $this->include('home/template/navigation'); ?>
  <!-- end navigation -->

  <?php echo $this->renderSection('home-content'); ?>

<!-- footer -->
  <?php echo $this->include('home/template/footer'); ?>
<!-- end footer -->

</div><!-- Body inner end -->

<!-- Javascript Files
================================================== -->

<!-- initialize jQuery Library -->
<script src="<?= base_url(); ?>/assets/jquery/jquery.min.js"></script>
<!-- Bootstrap jQuery -->
<script src="<?= base_url(); ?>/js/popper.min.js"></script>
<script src="<?= base_url(); ?>/assets/bootstrap/js/bootstrap.min.js"></script>
<!-- Slick Carousel -->
<script src="<?= base_url(); ?>/assets/slick/slick.min.js"></script>
<script src="<?= base_url(); ?>/assets/slick/slick-animation.min.js"></script>
<!-- Color box -->
<script src="<?= base_url(); ?>/assets/colorbox/jquery.colorbox.js"></script>
<!-- shuffle -->
<script src="<?= base_url(); ?>/assets/shuffle/shuffle.min.js" defer></script>
<!-- leaflet js -->
<script src="<?= base_url(); ?>/assets/leaflet/leaflet.js"></script>
<!-- datatables js -->
<script src="<?= base_url(); ?>/assets/datatables/DataTables-1.12.1/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url(); ?>/assets/datatables/DataTables-1.12.1/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url(); ?>/assets/datatables/Responsive-2.3.0/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url(); ?>/assets/datatables/Responsive-2.3.0/js/responsive.bootstrap4.js"></script>
<!-- Sweet Alert -->
<script src="<?= base_url(); ?>/assets/sweetalert2/sweetalert2.min.js"></script>

<!-- Template custom -->
<script src="<?= base_url(); ?>/js/script.js"></script>

 <?php echo $this->renderSection('script'); ?>
</body>

</html>
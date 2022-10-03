<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $title ?></title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url(); ?>/assets/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url(); ?>/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url(); ?>/assets/jquery-ui/jquery-ui.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/assets/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/datatables/DataTables-1.12.1/css/dataTables.bootstrap4.min.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/datatables/Responsive-2.3.0/css/responsive.bootstrap4.min.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/sweetalert2/sweetalert2.min.css" />
    <!-- leaflet css -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/leaflet/leaflet.css" />



</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php echo $this->include('dashboard/template/sidebar'); ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <?php echo $this->include('dashboard/template/topbar'); ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->

                <?php echo $this->renderSection('page-content'); ?>

                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website <?php echo date('Y'); ?></span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->
    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url(); ?>/assets/jquery/jquery.min.js"></script>
    <script src="<?= base_url(); ?>/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url(); ?>/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?= base_url(); ?>/assets/bootstrap-select/js/bootstrap-select.min.js"></script>
    <script src="<?= base_url(); ?>/assets/sweetalert2/sweetalert2.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url(); ?>/assets/jquery-easing/jquery.easing.min.js"></script>
    <script src="<?= base_url(); ?>/assets/jquery-ui/jquery-ui.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url(); ?>/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?= base_url(); ?>/assets/datatables/DataTables-1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="<?= base_url(); ?>/assets/datatables/DataTables-1.12.1/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?= base_url(); ?>/assets/datatables/Responsive-2.3.0/js/dataTables.responsive.min.js"></script>
    <script src="<?= base_url(); ?>/assets/datatables/Responsive-2.3.0/js/responsive.bootstrap4.js"></script>

    <!-- leaflet js -->
    <script src="<?= base_url(); ?>/assets/leaflet/leaflet.js"></script>

    <!-- jscolor -->
    <script src="<?= base_url() ?>/assets/jscolor/jscolor.js"></script>

    <!-- tinymce -->
    <script src="<?= base_url(); ?>/assets/tinymce/js/tinymce/tinymce.min.js"></script>
    <script src="<?= base_url(); ?>/assets/tinymce/js/tinymce/plugins/table/plugin.min.js"></script>
    <script src="<?= base_url(); ?>/assets/tinymce/js/tinymce/plugins/autolink/plugin.min.js"></script>
    <script src="<?= base_url(); ?>/assets/tinymce/js/tinymce/plugins/anchor/plugin.min.js"></script>
    <script src="<?= base_url(); ?>/assets/tinymce/js/tinymce/plugins/emoticons/plugin.min.js"></script>
    <!-- END TINYMCE -->


    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <?php echo $this->renderSection('script'); ?>

</body>

</html>
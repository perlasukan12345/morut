<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PORTAL RESMI - PEMKAB BOJONEGORO</title>
    <!-- Global Site Tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-107838959-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-107838959-1');
    </script>
    <!-- END Global Site Tag (gtag.js) - Google Analytics -->
    <link rel="stylesheet" href="https://bojonegorokab.go.id/portal/css/bootstrap.min.css" />
    <!-- leaflet css -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/leaflet/leaflet.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/datatables/DataTables-1.12.1/css/dataTables.bootstrap4.min.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/datatables/Responsive-2.3.0/css/responsive.bootstrap4.min.css" />
    <link rel="stylesheet" href="https://bojonegorokab.go.id/portal/css/portal.css?v=5" />
    <link rel="stylesheet" href="https://bojonegorokab.go.id/portal/css/animate.css?v=2" />
    <link rel="stylesheet" href="https://bojonegorokab.go.id/portal/css/fontawesome/css/all.css" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- jquery -->
    <script src="<?= base_url(); ?>/assets/jquery/jquery.min.js"></script>
    <!-- leaflet js -->
    <script src="<?= base_url(); ?>/assets/leaflet/leaflet.js"></script>
</head>

<body>
    <div class="preloader">

        <img src="https://bojonegorokab.go.id/portal/assets/img/logo-kabupaten.png" class="logo">
    </div>
    <div class="portal">
        <div class="container-fluid p-0">
            <!--START NAVBAR-->
            <nav class="navbar navbar-light nav-header">
                <a class="navbar-brand" href="">
                    <img src="https://bojonegorokab.go.id/portal/assets/img/logo-kabupaten.png" alt="">
                    <span class="navbar-text">
                        <span class="navbar-text-site">Portal Resmi</span>
                        <span class="navbar-text-brand">PEMKAB BOJONEGORO</span>
                    </span>
                </a>
                <span class="text-center layout-btn-web">
                    <a href="https://bojonegorokab.go.id/beranda" class="btn btn-web">
                        SITUS WEB <i data-eva="arrow-forward-outline" class="ml-3"></i>
                    </a>
                </span>
                <span class="navbar-brand-left d-inline-block d-lg-none">
                    <div class="change-language">
                        <a href="https://bojonegorokab.go.id?lang=id" class="language active">
                            <img src="https://bojonegorokab.go.id/portal/assets/img/indonesia.png" alt=""> ID
                        </a>
                        <span class="text-white">|</span>
                        <a href="https://bojonegorokab.go.id?lang=en" class="language ">
                            <img src="https://bojonegorokab.go.id/portal/assets/img/english.png" alt=""> EN
                        </a>
                    </div>
                </span>
                <span class="navbar-brand-right text-lg-right">
                    <img src="https://bojonegorokab.go.id/portal/assets/img/logo-produktif.png" alt="">
                </span>
            </nav>
            <!--END NAVBAR-->
            <!--START CONTENT-->
            <div class="row m-0 content">
                <div class="col-12">
                    <div class="row">
                        <div class="col-12 col-lg-3 col-xl-3" data-toggle="modal" data-target="#bupatiModal" style="cursor: pointer;">
                            <div class="circle-widget">
                                <div class="img-wrap">
                                    <img src="https://bojonegorokab.go.id/storage/uploads/nBZ47QgCJNDK5huo.png" alt="" class="w-100">
                                </div>
                                <div class="text-widget">
                                    <div class="title">BUPATI BOJONEGORO</div>
                                    <div class="sub">DR. Hj. ANNA MU&#039;AWANAH. M. H.</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 col-xl-6 px-lg-0" id="map" style="height: 450px; background-color:#F9F9F9">

                        </div>
                        <div class="col-12 col-lg-3 col-xl-3" data-toggle="modal" data-target="#wakilModal" style="cursor: pointer;">
                            <div class="circle-widget">
                                <div class="img-wrap">
                                    <img src="https://bojonegorokab.go.id/storage/uploads/QrqBX9iLAGFEug4z.png" alt="" class="w-100">
                                </div>
                                <div class="text-widget">
                                    <div class="title">WAKIL BUPATI BOJONEGORO</div>
                                    <div class="sub">H. BUDI IRAWANTO</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--END CONTENT-->
        </div>
        <!--START TOOLBAR-->
        <nav class="navbar fixed-bottom navbar-light nav-footer">
            <div class="show-desktop-only d-none social-media">
                <img src="https://bojonegorokab.go.id/portal/assets/img/logo-pinarak.png">
                <div class="mt-2">
                    <a href="https://www.facebook.com/pemerintahkabbjn/" target="_blank"><span class="fab fa-facebook"></span></a>
                    <a href="https://www.instagram.com/pemkabbojonegoro/" target="_blank"><span class="fab fa-instagram"></span></a>
                    <a href="https://twitter.com/pemkab_bjn" target="_blank"><span class="fab fa-twitter"></span></a>
                    <a href="https://www.youtube.com/channel/UCDybJ-ptIaN9sdAzuiF6epw/videos" target="_blank"><span class="fab fa-youtube"></span></a>
                </div>
            </div>
            <div class="toolbar mx-lg-auto">
                <div class="toolbar-grid">
                    <a href="javascript:void(0);" data-toggle="modal" data-target="#selayangModal">
                        <div class="toolbar-icon">
                            <span data-eva="layout-outline"></span>
                        </div>
                        <div class="toolbar-text">SELAYANG PANDANG</div>
                    </a>
                </div>
                <div class="toolbar-grid">
                    <a href="javascript:void(0);" data-toggle="modal" data-target="#pemerintahanModal">
                        <div class="toolbar-icon">
                            <span data-eva="layers-outline"></span>
                        </div>
                        <div class="toolbar-text">PEMERINTAHAN</div>
                    </a>
                </div>
                <div class="toolbar-grid">
                    <a href="javascript:void(0);" data-toggle="modal" data-target="#gisModal">
                        <div class="toolbar-icon">
                            <span data-eva="pin-outline"></span>
                        </div>
                        <div class="toolbar-text">WEB GIS</div>
                    </a>
                </div>
                <div class="toolbar-grid">
                    <a href="http://data.bojonegorokab.go.id/" target="_blank">
                        <div class="toolbar-icon">
                            <span data-eva="bar-chart-2-outline"></span>
                        </div>
                        <div class="toolbar-text">SATU DATA BOJONEGORO</div>
                    </a>
                </div>
                <div class="toolbar-grid">
                    <a href="javascript:void(0);" data-toggle="modal" data-target="#smartcityModal">
                        <div class="toolbar-icon">
                            <span data-eva="globe-outline"></span>
                        </div>
                        <div class="toolbar-text">SMART CITY</div>
                    </a>
                </div>
                <div class="toolbar-grid">
                    <a href="javascript:void(0);" data-toggle="modal" data-target="#programunggulan">
                        <div class="toolbar-icon">
                            <span data-eva="grid-outline"></span>
                        </div>
                        <div class="toolbar-text">PROGRAM UNGGULAN</div>
                    </a>
                </div>
                <div class="toolbar-grid">
                    <a href="javascript:void(0);" data-toggle="modal" data-target="#egov">
                        <div class="toolbar-icon">
                            <span data-eva="people-outline"></span>
                        </div>
                        <div class="toolbar-text">PELAYANAN PUBLIK</div>
                    </a>
                </div>
                <div class="toolbar-grid">
                    <a href="http://bojonegorokab.go.id/gis-cctv/0" target="_blank">
                        <div class="toolbar-icon">
                            <span data-eva="video-outline"></span>
                        </div>
                        <div class="toolbar-text">CCTV</div>
                    </a>
                </div>
                <div class="toolbar-grid hide-desktop">
                    <a href="javascript:void(0);" data-toggle="modal" data-target="#sosialmediaModal">
                        <div class="toolbar-icon">
                            <span data-eva="browser-outline"></span>
                        </div>
                        <div class="toolbar-text">MEDIA SOSIAL</div>
                    </a>
                </div>
            </div>
            <div class="change-language d-none d-lg-inline-block">
                <a href="https://bojonegorokab.go.id?lang=id" class="language active">
                    <img src="https://bojonegorokab.go.id/portal/assets/img/indonesia.png" alt=""> ID
                </a>
                <a href="https://bojonegorokab.go.id?lang=en" class="language ">
                    <img src="https://bojonegorokab.go.id/portal/assets/img/english.png" alt=""> EN
                </a>
            </div>
        </nav>
        <!--END TOOLBAR-->
        <!--START PATTERN-->
        <div class="green-pattern d-none d-lg-block">
            <div class="dot-green-pattern"></div>
            <div class="box-green-pattern"></div>
        </div>
        <!--END PATTERN-->
        <!--START MODAL-->
        <!--Selayang Pandang Modal-->
        <div class="modal p-0" id="selayangModal" tabindex="-1" role="dialog" aria-labelledby="selayangModalLabel" aria-hidden="true">
            <div class="modal-portal modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="w-100 text-center">
                            <h2 class="modal-title" id="selayangModalLabel">Selayang Pandang</h2>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12 mt-3">
                                <iframe id="overview-video" class="video-player wrap" src="https://youtu.be/mnSqJvJ24q4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <p class="text-wrap">Kabupaten Bojonegoro (bahasa Jawa: Hanacaraka: ꦧꦺꦴꦗꦤꦒꦫ Pegon: بوجانگارا, translit. Bojanagara) adalah salah satu kabupaten di Provinsi Jawa Timur, Indonesia, dengan ibu kota Bojonegoro. Kabupaten ini berbatasan langsung dengan 5 Kabupaten, yaitu dibagian utara dengan Kabupaten Tuban, bagian timur dengan Kabupaten Lamongan, bagian selatan dengan Kabupaten Nganjuk, Kabupaten Madiun, dan Kabupaten Ngawi, serta bagian barat dengan Kabupaten Blora (Jawa Tengah). Bagian barat Bojonegoro (perbatasan dengan Jawa Tengah) merupakan bagian dari Blok Cepu, salah satu sumber deposit minyak bumi terbesar di Indonesia.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Bupati Modal-->
        <div class="modal p-0" id="bupatiModal" tabindex="-1" role="dialog" aria-labelledby="bupatiModalLabel" aria-hidden="true">
            <div class="modal-portal modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="w-100 text-center">
                            <h2 class="modal-title" id="bupatiModalLabel">Profil Bupati Bojonegoro</h2>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <table class="table">
                                <tr>
                                    <th>Nama</th>
                                    <th>:</th>
                                    <th>DR. Hj. ANNA MU&#039;AWANAH. M. H.</th>
                                </tr>
                                <tr>
                                    <th>Jabatan</th>
                                    <th>:</th>
                                    <th>Bupati Bojonegoro</th>
                                </tr>
                                <tr>
                                    <th>Riwayat Jabatan</th>
                                    <th>:</th>
                                    <th>1. Bupati Bojonegoro (2018 -sekarang)<br />
                                        2. Anggota DPR-RI (2014 - 2018)</th>
                                </tr>
                                <tr>
                                    <th>Riwayat Pendidikan</th>
                                    <th>:</th>
                                    <th>1. S3 Manajemen Lingkungan Universitas Negeri Jakarta<br />
                                        2. S2 Universitas Trisakti</th>
                                </tr>
                                <tr>
                                    <th>Riwayat Organisasi</th>
                                    <th>:</th>
                                    <th>1. Wakil Sekretaris Pengurus Pusat Muslimat NU (2016 - 2021)<br />
                                        2. Ketua Induk Koperasi An - Nisa' Muslimat NU (2015 - 2018)</th>
                                </tr>
                                <tr>
                                    <th>Alamat</th>
                                    <th>:</th>
                                    <th>Jl. P. Mas Tumapel No. 1, Kabupaten Bojonegoro</th>
                                </tr>
                                <tr>
                                    <th>Telepon</th>
                                    <th>:</th>
                                    <th>(0353) 881826</th>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Wakil Modal-->
        <div class="modal p-0" id="wakilModal" tabindex="-1" role="dialog" aria-labelledby="wakilModalLabel" aria-hidden="true">
            <div class="modal-portal modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="w-100 text-center">
                            <h2 class="modal-title" id="wakilModalLabel">Profil Wakil Bupati Bojonegoro</h2>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <table class="table">
                                <tr>
                                    <th>Nama</th>
                                    <th>:</th>
                                    <th>H. BUDI IRAWANTO</th>
                                </tr>
                                <tr>
                                    <th>Jabatan</th>
                                    <th>:</th>
                                    <th>Wakil Bupati Bojonegoro</th>
                                </tr>
                                <tr>
                                    <th>Riwayat Jabatan</th>
                                    <th>:</th>
                                    <th>1. Wakil Bupati Bojonegoro (2018 - sekarang)<br />
                                        2. Anggota DPRD Kabupaten Bojonegoro (2014 - 2018)</th>
                                </tr>
                                <tr>
                                    <th>Riwayat Pendidikan</th>
                                    <th>:</th>
                                    <th>1. S2 Universitas PGRI Adi Buana Surabaya<br />
                                        2. S1 IKIP PGRI Bojonegoro</th>
                                </tr>
                                <tr>
                                    <th>Riwayat Organisasi</th>
                                    <th>:</th>
                                    <th>1. Ketua Pengcab Indonesian Offroad Federation Cabang Bojonegoro (2015 - 2020)<br />
                                        2. Ketua DPC PDI Perjuangan Kabupaten Bojonegoro (2015 - 2019)</th>
                                </tr>
                                <tr>
                                    <th>Alamat</th>
                                    <th>:</th>
                                    <th>Jl. P. Mas Tumapel No. 1, Kabupaten Bojonegoro</th>
                                </tr>
                                <tr>
                                    <th>Telepon</th>
                                    <th>:</th>
                                    <th>(0353) 881826</th>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Pemerintahan Modal-->
        <!--START MODAL-->
        <!--Pemerintahan Modal-->
        <div class="modal p-0" id="pemerintahanModal" tabindex="-1" role="dialog" aria-labelledby="pemerintahanModalLabel" aria-hidden="true">
            <div class="modal-portal modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="w-100 text-center">
                            <h2 class="modal-title" id="pemerintahanModalLabel">PEMERINTAHAN</h2>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-3 col-6 px-4">
                                <a href="javascript:void(0);" data-target="#badanDetail" class="trigger-modal-detail">
                                    <div class="card-medium">
                                        <span class="fa fa-building"></span>
                                        <div class="card-medium-text">
                                            BADAN
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 px-4">
                                <a href="javascript:void(0);" data-target="#dinasDetail" class="trigger-modal-detail">
                                    <div class="card-medium">
                                        <span class="fa fa-landmark"></span>
                                        <div class="card-medium-text">
                                            DINAS
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 px-4">
                                <a href="javascript:void(0);" data-target="#setdaDetail" class="trigger-modal-detail">
                                    <div class="card-medium">
                                        <span class="fa fa-city"></span>
                                        <div class="card-medium-text">
                                            SETDA
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 px-4">
                                <a href="javascript:void(0);" data-target="#kecamatanDetail" class="trigger-modal-detail">
                                    <div class="card-medium">
                                        <span class="fa fa-warehouse"></span>
                                        <div class="card-medium-text">
                                            KECAMATAN
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 px-4">
                                <a href="javascript:void(0);" data-target="#rsudDetail" class="trigger-modal-detail">
                                    <div class="card-medium">
                                        <span class="fa fa-hospital"></span>
                                        <div class="card-medium-text">
                                            RSUD
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 px-4">
                                <a href="javascript:void(0);" data-target="#bumdDetail" class="trigger-modal-detail">
                                    <div class="card-medium">
                                        <span class="fa fa-hotel"></span>
                                        <div class="card-medium-text">
                                            BUMD
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 px-4">
                                <a href="http://setwan.bojonegorokab.go.id" target="_blank">
                                    <div class="card-medium">
                                        <span class="far fa-building"></span>
                                        <div class="card-medium-text">
                                            SETWAN
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Agenda Modal-->
        <div class="modal p-0" id="agendaModal" tabindex="-1" role="dialog" aria-labelledby="agendaModalLabel" aria-hidden="true">
            <div class="modal-portal modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="w-100 text-center">
                            <h2 class="modal-title" id="pemerintahanModalLabel">AGENDA</h2>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-3 col-6 px-4">
                                <a href="https://bojonegorokab.go.id/agenda-kabupaten" class="trigger-modal-detail">
                                    <div class="card-medium">
                                        <span data-eva="layers-outline"></span>
                                        <div class="card-medium-text">
                                            Agenda Kabupaten/Pemerintah </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 px-4">
                                <a href="https://bojonegorokab.go.id/agenda-pemerintah" class="trigger-modal-detail">
                                    <div class="card-medium">
                                        <span data-eva="layers-outline"></span>
                                        <div class="card-medium-text">
                                            Agenda Pemerintah </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 px-4">
                                <a href="https://bojonegorokab.go.id/agenda-masyarakat" class="trigger-modal-detail">
                                    <div class="card-medium">
                                        <span data-eva="layers-outline"></span>
                                        <div class="card-medium-text">
                                            Agenda Masyarakat </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal p-0" id="badanDetail" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-portal" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close back" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="w-100 text-center">
                            <h2 class="modal-title" id="detailPemerintahanModalLabel">BADAN DAN INSPEKTORAT KABUPATEN BOJONEGORO</h2>
                        </div>
                    </div>
                    <div class="modal-body pt-0">
                        <div class="row">
                            <div class="col-12">
                                <ul class="list-pemerintahan">
                                    <li>
                                        <a href="http://bkpp.bojonegorokab.go.id" target="_blank">
                                            <div class="row">
                                                <div class="col-lg-1 col-2 text-center">
                                                    <span data-eva="arrow-right-outline"></span>
                                                </div>
                                                <div class="col-lg-9 col-10">
                                                    BADAN KEPEGAWAIAN, PENDIDIKAN, DAN PELATIHAN
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://bappeda.bojonegorokab.go.id" target="_blank">
                                            <div class="row">
                                                <div class="col-lg-1 col-2 text-center">
                                                    <span data-eva="arrow-right-outline"></span>
                                                </div>
                                                <div class="col-lg-9 col-10">
                                                    BADAN PERENCANAAN PEMBANGUNAN DAERAH
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://bpkad.bojonegorokab.go.id" target="_blank">
                                            <div class="row">
                                                <div class="col-lg-1 col-2 text-center">
                                                    <span data-eva="arrow-right-outline"></span>
                                                </div>
                                                <div class="col-lg-9 col-10">
                                                    BADAN PENGELOLAAN KEUANGAN DAN ASET DAERAH
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://bapenda.bojonegorokab.go.id" target="_blank">
                                            <div class="row">
                                                <div class="col-lg-1 col-2 text-center">
                                                    <span data-eva="arrow-right-outline"></span>
                                                </div>
                                                <div class="col-lg-9 col-10">
                                                    BADAN PENDAPATAN DAERAH
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://bakesbangpol.bojonegorokab.go.id" target="_blank">
                                            <div class="row">
                                                <div class="col-lg-1 col-2 text-center">
                                                    <span data-eva="arrow-right-outline"></span>
                                                </div>
                                                <div class="col-lg-9 col-10">
                                                    BADAN KESATUAN BANGSA DAN POLITIK
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://bpbd.bojonegorokab.go.id" target="_blank">
                                            <div class="row">
                                                <div class="col-lg-1 col-2 text-center">
                                                    <span data-eva="arrow-right-outline"></span>
                                                </div>
                                                <div class="col-lg-9 col-10">
                                                    BADAN PENANGGULANGAN BENCANA DAERAH
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://inspektorat.bojonegorokab.go.id" target="_blank">
                                            <div class="row">
                                                <div class="col-lg-1 col-2 text-center">
                                                    <span data-eva="arrow-right-outline"></span>
                                                </div>
                                                <div class="col-lg-9 col-10">
                                                    INSPEKTORAT
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal p-0" id="dinasDetail" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-portal" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close back" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="w-100 text-center">
                            <h2 class="modal-title" id="detailPemerintahanModalLabel">DINAS KABUPATEN BOJONEGORO</h2>
                        </div>
                    </div>
                    <div class="modal-body pt-0">
                        <div class="row">
                            <div class="col-12">
                                <ul class="list-pemerintahan">
                                    <li>
                                        <a href="http://dinaspendidikan.bojonegorokab.go.id" target="_blank">
                                            <div class="row">
                                                <div class="col-lg-1 col-2 text-center">
                                                    <span data-eva="arrow-right-outline"></span>
                                                </div>
                                                <div class="col-lg-9 col-10">
                                                    DINAS PENDIDIKAN
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://dinkes.bojonegorokab.go.id" target="_blank">
                                            <div class="row">
                                                <div class="col-lg-1 col-2 text-center">
                                                    <span data-eva="arrow-right-outline"></span>
                                                </div>
                                                <div class="col-lg-9 col-10">
                                                    DINAS KESEHATAN
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://dpubimapr.bojonegorokab.go.id" target="_blank">
                                            <div class="row">
                                                <div class="col-lg-1 col-2 text-center">
                                                    <span data-eva="arrow-right-outline"></span>
                                                </div>
                                                <div class="col-lg-9 col-10">
                                                    DINAS PEKERJAAN UMUM BINA MARGA DAN PENATAAN RUANG
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://dipusda.bojonegorokab.go.id" target="_blank">
                                            <div class="row">
                                                <div class="col-lg-1 col-2 text-center">
                                                    <span data-eva="arrow-right-outline"></span>
                                                </div>
                                                <div class="col-lg-9 col-10">
                                                    DINAS PEKERJAAN UMUM SUMBER DAYA AIR
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://dpkpciptakarya.bojonegorokab.go.id" target="_blank">
                                            <div class="row">
                                                <div class="col-lg-1 col-2 text-center">
                                                    <span data-eva="arrow-right-outline"></span>
                                                </div>
                                                <div class="col-lg-9 col-10">
                                                    DINAS PERUMAHAN, KAWASAN PERMUKIMAN DAN CIPTA KARYA
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://dinsos.bojonegorokab.go.id" target="_blank">
                                            <div class="row">
                                                <div class="col-lg-1 col-2 text-center">
                                                    <span data-eva="arrow-right-outline"></span>
                                                </div>
                                                <div class="col-lg-9 col-10">
                                                    DINAS SOSIAL
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://dindamkar.bojonegorokab.go.id" target="_blank">
                                            <div class="row">
                                                <div class="col-lg-1 col-2 text-center">
                                                    <span data-eva="arrow-right-outline"></span>
                                                </div>
                                                <div class="col-lg-9 col-10">
                                                    DINAS PEMADAM KEBAKARAN
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://satpolpp.bojonegorokab.go.id" target="_blank">
                                            <div class="row">
                                                <div class="col-lg-1 col-2 text-center">
                                                    <span data-eva="arrow-right-outline"></span>
                                                </div>
                                                <div class="col-lg-9 col-10">
                                                    SATUAN POLISI PAMONG PRAJA
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://dp3akb.bojonegorokab.go.id" target="_blank">
                                            <div class="row">
                                                <div class="col-lg-1 col-2 text-center">
                                                    <span data-eva="arrow-right-outline"></span>
                                                </div>
                                                <div class="col-lg-9 col-10">
                                                    DINAS PEMBERDAYAAN PEREMPUAN, PERLINDUNGAN ANAK DAN KELUARGA BERENCANA
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://dinasdukcapil.bojonegorokab.go.id" target="_blank">
                                            <div class="row">
                                                <div class="col-lg-1 col-2 text-center">
                                                    <span data-eva="arrow-right-outline"></span>
                                                </div>
                                                <div class="col-lg-9 col-10">
                                                    DINAS KEPENDUDUKAN DAN PENCATATAN SIPIL
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://dinpmd.bojonegorokab.go.id" target="_blank">
                                            <div class="row">
                                                <div class="col-lg-1 col-2 text-center">
                                                    <span data-eva="arrow-right-outline"></span>
                                                </div>
                                                <div class="col-lg-9 col-10">
                                                    DINAS PEMBERDAYAAN MASYARAKAT DAN DESA
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://dinhub.bojonegorokab.go.id" target="_blank">
                                            <div class="row">
                                                <div class="col-lg-1 col-2 text-center">
                                                    <span data-eva="arrow-right-outline"></span>
                                                </div>
                                                <div class="col-lg-9 col-10">
                                                    DINAS PERHUBUNGAN
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://dinkominfo.bojonegorokab.go.id" target="_blank">
                                            <div class="row">
                                                <div class="col-lg-1 col-2 text-center">
                                                    <span data-eva="arrow-right-outline"></span>
                                                </div>
                                                <div class="col-lg-9 col-10">
                                                    DINAS KOMUNIKASI DAN INFORMATIKA
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://dinpora.bojonegorokab.go.id" target="_blank">
                                            <div class="row">
                                                <div class="col-lg-1 col-2 text-center">
                                                    <span data-eva="arrow-right-outline"></span>
                                                </div>
                                                <div class="col-lg-9 col-10">
                                                    DINAS KEPEMUDAAN DAN OLAHRAGA
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://dinkopum.bojonegorokab.go.id" target="_blank">
                                            <div class="row">
                                                <div class="col-lg-1 col-2 text-center">
                                                    <span data-eva="arrow-right-outline"></span>
                                                </div>
                                                <div class="col-lg-9 col-10">
                                                    DINAS KOPERASI DAN USAHA MIKRO
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://dpmptsp.bojonegorokab.go.id" target="_blank">
                                            <div class="row">
                                                <div class="col-lg-1 col-2 text-center">
                                                    <span data-eva="arrow-right-outline"></span>
                                                </div>
                                                <div class="col-lg-9 col-10">
                                                    DINAS PENANAMAN MODAL DAN PELAYANAN TERPADU SATU PINTU
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://dkpangan.bojonegorokab.go.id" target="_blank">
                                            <div class="row">
                                                <div class="col-lg-1 col-2 text-center">
                                                    <span data-eva="arrow-right-outline"></span>
                                                </div>
                                                <div class="col-lg-9 col-10">
                                                    DINAS KETAHANAN PANGAN
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://dinasperpusarsip.bojonegorokab.go.id" target="_blank">
                                            <div class="row">
                                                <div class="col-lg-1 col-2 text-center">
                                                    <span data-eva="arrow-right-outline"></span>
                                                </div>
                                                <div class="col-lg-9 col-10">
                                                    DINAS PERPUSTAKAAN DAN KEARSIPAN
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://dlh.bojonegorokab.go.id" target="_blank">
                                            <div class="row">
                                                <div class="col-lg-1 col-2 text-center">
                                                    <span data-eva="arrow-right-outline"></span>
                                                </div>
                                                <div class="col-lg-9 col-10">
                                                    DINAS LINGKUNGAN HIDUP
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://dinperinaker.bojonegorokab.go.id" target="_blank">
                                            <div class="row">
                                                <div class="col-lg-1 col-2 text-center">
                                                    <span data-eva="arrow-right-outline"></span>
                                                </div>
                                                <div class="col-lg-9 col-10">
                                                    DINAS PERINDUSTRIAN DAN TENAGA KERJA
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://dinbudpar.bojonegorokab.go.id" target="_blank">
                                            <div class="row">
                                                <div class="col-lg-1 col-2 text-center">
                                                    <span data-eva="arrow-right-outline"></span>
                                                </div>
                                                <div class="col-lg-9 col-10">
                                                    DINAS KEBUDAYAAN DAN PARIWISATA
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://dindag.bojonegorokab.go.id" target="_blank">
                                            <div class="row">
                                                <div class="col-lg-1 col-2 text-center">
                                                    <span data-eva="arrow-right-outline"></span>
                                                </div>
                                                <div class="col-lg-9 col-10">
                                                    DINAS PERDAGANGAN
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://dinperta.bojonegorokab.go.id" target="_blank">
                                            <div class="row">
                                                <div class="col-lg-1 col-2 text-center">
                                                    <span data-eva="arrow-right-outline"></span>
                                                </div>
                                                <div class="col-lg-9 col-10">
                                                    DINAS PERTANIAN
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://dinasnakkan.bojonegorokab.go.id" target="_blank">
                                            <div class="row">
                                                <div class="col-lg-1 col-2 text-center">
                                                    <span data-eva="arrow-right-outline"></span>
                                                </div>
                                                <div class="col-lg-9 col-10">
                                                    DINAS PETERNAKAN DAN PERIKANAN
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal p-0" id="setdaDetail" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-portal" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close back" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="w-100 text-center">
                            <h2 class="modal-title" id="detailPemerintahanModalLabel">SEKRETARIAT DAERAH KABUPATEN BOJONEGORO</h2>
                        </div>
                    </div>
                    <div class="modal-body pt-0">
                        <div class="row">
                            <div class="col-12">
                                <ul class="list-pemerintahan">
                                    <li>
                                        <a href="http://bagpembangunan.bojonegorokab.go.id" target="_blank">
                                            <div class="row">
                                                <div class="col-lg-1 col-2 text-center">
                                                    <span data-eva="arrow-right-outline"></span>
                                                </div>
                                                <div class="col-lg-9 col-10">
                                                    Bagian Pembangunan
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://bagpem.bojonegorokab.go.id" target="_blank">
                                            <div class="row">
                                                <div class="col-lg-1 col-2 text-center">
                                                    <span data-eva="arrow-right-outline"></span>
                                                </div>
                                                <div class="col-lg-9 col-10">
                                                    Bagian Pemerintahan
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://bagekonomi.bojonegorokab.go.id" target="_blank">
                                            <div class="row">
                                                <div class="col-lg-1 col-2 text-center">
                                                    <span data-eva="arrow-right-outline"></span>
                                                </div>
                                                <div class="col-lg-9 col-10">
                                                    Bagian Perekonomian
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://bagkesra.bojonegorokab.go.id" target="_blank">
                                            <div class="row">
                                                <div class="col-lg-1 col-2 text-center">
                                                    <span data-eva="arrow-right-outline"></span>
                                                </div>
                                                <div class="col-lg-9 col-10">
                                                    Bagian Kesra
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://bagperlengkapan.bojonegorokab.go.id" target="_blank">
                                            <div class="row">
                                                <div class="col-lg-1 col-2 text-center">
                                                    <span data-eva="arrow-right-outline"></span>
                                                </div>
                                                <div class="col-lg-9 col-10">
                                                    Bagian Perlengkapan
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://baghumas.bojonegorokab.go.id" target="_blank">
                                            <div class="row">
                                                <div class="col-lg-1 col-2 text-center">
                                                    <span data-eva="arrow-right-outline"></span>
                                                </div>
                                                <div class="col-lg-9 col-10">
                                                    Bagian Humas &amp; Protokol
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://bagumumkeu.bojonegorokab.go.id" target="_blank">
                                            <div class="row">
                                                <div class="col-lg-1 col-2 text-center">
                                                    <span data-eva="arrow-right-outline"></span>
                                                </div>
                                                <div class="col-lg-9 col-10">
                                                    Bagian Umum dan Keuangan
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://baghukum.bojonegorokab.go.id" target="_blank">
                                            <div class="row">
                                                <div class="col-lg-1 col-2 text-center">
                                                    <span data-eva="arrow-right-outline"></span>
                                                </div>
                                                <div class="col-lg-9 col-10">
                                                    Bagian Hukum &amp; Perundang-undangan
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://bagortala.bojonegorokab.go.id" target="_blank">
                                            <div class="row">
                                                <div class="col-lg-1 col-2 text-center">
                                                    <span data-eva="arrow-right-outline"></span>
                                                </div>
                                                <div class="col-lg-9 col-10">
                                                    Bagian Organisasi &amp; Tata Laksana
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://baglpbj.bojonegorokab.go.id" target="_blank">
                                            <div class="row">
                                                <div class="col-lg-1 col-2 text-center">
                                                    <span data-eva="arrow-right-outline"></span>
                                                </div>
                                                <div class="col-lg-9 col-10">
                                                    Bagian Layanan Pengadaan Barang dan Jasa
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal p-0" id="kecamatanDetail" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-portal" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close back" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="w-100 text-center">
                            <h2 class="modal-title" id="detailPemerintahanModalLabel">KECAMATAN KABUPATEN BOJONEGORO</h2>
                        </div>
                    </div>
                    <div class="modal-body pt-0">
                        <div class="row">
                            <div class="col-12">
                                <ul class="list-pemerintahan">
                                    <li>
                                        <a href="http://balen.bojonegorokab.go.id" target="_blank">
                                            <div class="row">
                                                <div class="col-lg-1 col-2 text-center">
                                                    <span data-eva="arrow-right-outline"></span>
                                                </div>
                                                <div class="col-lg-9 col-10">
                                                    Kecamatan Balen
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://baureno.bojonegorokab.go.id" target="_blank">
                                            <div class="row">
                                                <div class="col-lg-1 col-2 text-center">
                                                    <span data-eva="arrow-right-outline"></span>
                                                </div>
                                                <div class="col-lg-9 col-10">
                                                    Kecamatan Baureno
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://bubulan.bojonegorokab.go.id" target="_blank">
                                            <div class="row">
                                                <div class="col-lg-1 col-2 text-center">
                                                    <span data-eva="arrow-right-outline"></span>
                                                </div>
                                                <div class="col-lg-9 col-10">
                                                    Kecamatan Bubulan
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://bojonegoro.bojonegorokab.go.id" target="_blank">
                                            <div class="row">
                                                <div class="col-lg-1 col-2 text-center">
                                                    <span data-eva="arrow-right-outline"></span>
                                                </div>
                                                <div class="col-lg-9 col-10">
                                                    Kecamatan Bojonegoro
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://kalitidu.bojonegorokab.go.id" target="_blank">
                                            <div class="row">
                                                <div class="col-lg-1 col-2 text-center">
                                                    <span data-eva="arrow-right-outline"></span>
                                                </div>
                                                <div class="col-lg-9 col-10">
                                                    Kecamatan Kalitidu
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://gondang.bojonegorokab.go.id" target="_blank">
                                            <div class="row">
                                                <div class="col-lg-1 col-2 text-center">
                                                    <span data-eva="arrow-right-outline"></span>
                                                </div>
                                                <div class="col-lg-9 col-10">
                                                    Kecamatan Gondang
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://dander.bojonegorokab.go.id" target="_blank">
                                            <div class="row">
                                                <div class="col-lg-1 col-2 text-center">
                                                    <span data-eva="arrow-right-outline"></span>
                                                </div>
                                                <div class="col-lg-9 col-10">
                                                    Kecamatan Dander
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://kanor.bojonegorokab.go.id" target="_blank">
                                            <div class="row">
                                                <div class="col-lg-1 col-2 text-center">
                                                    <span data-eva="arrow-right-outline"></span>
                                                </div>
                                                <div class="col-lg-9 col-10">
                                                    Kecamatan Kanor
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://kapas.bojonegorokab.go.id" target="_blank">
                                            <div class="row">
                                                <div class="col-lg-1 col-2 text-center">
                                                    <span data-eva="arrow-right-outline"></span>
                                                </div>
                                                <div class="col-lg-9 col-10">
                                                    Kecamatan Kapas
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://kasiman.bojonegorokab.go.id" target="_blank">
                                            <div class="row">
                                                <div class="col-lg-1 col-2 text-center">
                                                    <span data-eva="arrow-right-outline"></span>
                                                </div>
                                                <div class="col-lg-9 col-10">
                                                    Kecamatan Kasiman
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://kedewan.bojonegorokab.go.id" target="_blank">
                                            <div class="row">
                                                <div class="col-lg-1 col-2 text-center">
                                                    <span data-eva="arrow-right-outline"></span>
                                                </div>
                                                <div class="col-lg-9 col-10">
                                                    Kecamatan Kedewan
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://kedungadem.bojonegorokab.go.id" target="_blank">
                                            <div class="row">
                                                <div class="col-lg-1 col-2 text-center">
                                                    <span data-eva="arrow-right-outline"></span>
                                                </div>
                                                <div class="col-lg-9 col-10">
                                                    Kecamatan Kedungadem
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://kepohbaru.bojonegorokab.go.id" target="_blank">
                                            <div class="row">
                                                <div class="col-lg-1 col-2 text-center">
                                                    <span data-eva="arrow-right-outline"></span>
                                                </div>
                                                <div class="col-lg-9 col-10">
                                                    Kecamatan Kepohbaru
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://malo.bojonegorokab.go.id" target="_blank">
                                            <div class="row">
                                                <div class="col-lg-1 col-2 text-center">
                                                    <span data-eva="arrow-right-outline"></span>
                                                </div>
                                                <div class="col-lg-9 col-10">
                                                    Kecamatan Malo
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://margomulyo.bojonegorokab.go.id" target="_blank">
                                            <div class="row">
                                                <div class="col-lg-1 col-2 text-center">
                                                    <span data-eva="arrow-right-outline"></span>
                                                </div>
                                                <div class="col-lg-9 col-10">
                                                    Kecamatan Margomulyo
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://ngambon.bojonegorokab.go.id" target="_blank">
                                            <div class="row">
                                                <div class="col-lg-1 col-2 text-center">
                                                    <span data-eva="arrow-right-outline"></span>
                                                </div>
                                                <div class="col-lg-9 col-10">
                                                    Kecamatan Ngambon
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://ngasem.bojonegorokab.go.id" target="_blank">
                                            <div class="row">
                                                <div class="col-lg-1 col-2 text-center">
                                                    <span data-eva="arrow-right-outline"></span>
                                                </div>
                                                <div class="col-lg-9 col-10">
                                                    Kecamatan Ngasem
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://ngraho.bojonegorokab.go.id" target="_blank">
                                            <div class="row">
                                                <div class="col-lg-1 col-2 text-center">
                                                    <span data-eva="arrow-right-outline"></span>
                                                </div>
                                                <div class="col-lg-9 col-10">
                                                    Kecamatan Ngraho
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://padangan.bojonegorokab.go.id" target="_blank">
                                            <div class="row">
                                                <div class="col-lg-1 col-2 text-center">
                                                    <span data-eva="arrow-right-outline"></span>
                                                </div>
                                                <div class="col-lg-9 col-10">
                                                    Kecamatan Padangan
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://purwosari.bojonegorokab.go.id" target="_blank">
                                            <div class="row">
                                                <div class="col-lg-1 col-2 text-center">
                                                    <span data-eva="arrow-right-outline"></span>
                                                </div>
                                                <div class="col-lg-9 col-10">
                                                    Kecamatan Purwosari
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://temayang.bojonegorokab.go.id" target="_blank">
                                            <div class="row">
                                                <div class="col-lg-1 col-2 text-center">
                                                    <span data-eva="arrow-right-outline"></span>
                                                </div>
                                                <div class="col-lg-9 col-10">
                                                    Kecamatan Temayang
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://trucuk.bojonegorokab.go.id" target="_blank">
                                            <div class="row">
                                                <div class="col-lg-1 col-2 text-center">
                                                    <span data-eva="arrow-right-outline"></span>
                                                </div>
                                                <div class="col-lg-9 col-10">
                                                    Kecamatan Trucuk
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://tambakrejo.bojonegorokab.go.id" target="_blank">
                                            <div class="row">
                                                <div class="col-lg-1 col-2 text-center">
                                                    <span data-eva="arrow-right-outline"></span>
                                                </div>
                                                <div class="col-lg-9 col-10">
                                                    Kecamatan Tambakrejo
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://gayam.bojonegorokab.go.id" target="_blank">
                                            <div class="row">
                                                <div class="col-lg-1 col-2 text-center">
                                                    <span data-eva="arrow-right-outline"></span>
                                                </div>
                                                <div class="col-lg-9 col-10">
                                                    Kecamatan Gayam
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://sumberrejo.bojonegorokab.go.id" target="_blank">
                                            <div class="row">
                                                <div class="col-lg-1 col-2 text-center">
                                                    <span data-eva="arrow-right-outline"></span>
                                                </div>
                                                <div class="col-lg-9 col-10">
                                                    Kecamatan Sumberrejo
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://sukosewu.bojonegorokab.go.id" target="_blank">
                                            <div class="row">
                                                <div class="col-lg-1 col-2 text-center">
                                                    <span data-eva="arrow-right-outline"></span>
                                                </div>
                                                <div class="col-lg-9 col-10">
                                                    Kecamatan Sukosewu
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://sugihwaras.bojonegorokab.go.id" target="_blank">
                                            <div class="row">
                                                <div class="col-lg-1 col-2 text-center">
                                                    <span data-eva="arrow-right-outline"></span>
                                                </div>
                                                <div class="col-lg-9 col-10">
                                                    Kecamatan Sugihwaras
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://sekar.bojonegorokab.go.id" target="_blank">
                                            <div class="row">
                                                <div class="col-lg-1 col-2 text-center">
                                                    <span data-eva="arrow-right-outline"></span>
                                                </div>
                                                <div class="col-lg-9 col-10">
                                                    Kecamatan Sekar
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal p-0" id="rsudDetail" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-portal" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close back" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="w-100 text-center">
                            <h2 class="modal-title" id="detailPemerintahanModalLabel">RUMAH SAKIT UMUM DAERAH KABUPATEN BOJONEGORO</h2>
                        </div>
                    </div>
                    <div class="modal-body pt-0">
                        <div class="row">
                            <div class="col-12">
                                <ul class="list-pemerintahan">
                                    <li>
                                        <a href="http://www.rssosodoro.com" target="_blank">
                                            <div class="row">
                                                <div class="col-lg-1 col-2 text-center">
                                                    <span data-eva="arrow-right-outline"></span>
                                                </div>
                                                <div class="col-lg-9 col-10">
                                                    RSUD Bojonegoro
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://rsudsumberrejo.bojonegorokab.go.id/" target="_blank">
                                            <div class="row">
                                                <div class="col-lg-1 col-2 text-center">
                                                    <span data-eva="arrow-right-outline"></span>
                                                </div>
                                                <div class="col-lg-9 col-10">
                                                    RSUD Sumberrejo
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://rsudpadangan.bojonegorokab.go.id" target="_blank">
                                            <div class="row">
                                                <div class="col-lg-1 col-2 text-center">
                                                    <span data-eva="arrow-right-outline"></span>
                                                </div>
                                                <div class="col-lg-9 col-10">
                                                    RSUD Padangan
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal p-0" id="bumdDetail" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-portal" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close back" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="w-100 text-center">
                            <h2 class="modal-title" id="detailPemerintahanModalLabel">BADAN USAHA MILIK DAERAH KABUPATEN BOJONEGORO</h2>
                        </div>
                    </div>
                    <div class="modal-body pt-0">
                        <div class="row">
                            <div class="col-12">
                                <ul class="list-pemerintahan">
                                    <li>
                                        <a href="http://bbs-bumd-bjn.com" target="_blank">
                                            <div class="row">
                                                <div class="col-lg-1 col-2 text-center">
                                                    <span data-eva="arrow-right-outline"></span>
                                                </div>
                                                <div class="col-lg-9 col-10">
                                                    PT. Bojonegoro Bangun Sarana (BBS)
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://www.gdkhotel.com" target="_blank">
                                            <div class="row">
                                                <div class="col-lg-1 col-2 text-center">
                                                    <span data-eva="arrow-right-outline"></span>
                                                </div>
                                                <div class="col-lg-9 col-10">
                                                    PT. Griya Dharma Kusuma (GDK)
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://pdambjn.co.id" target="_blank">
                                            <div class="row">
                                                <div class="col-lg-1 col-2 text-center">
                                                    <span data-eva="arrow-right-outline"></span>
                                                </div>
                                                <div class="col-lg-9 col-10">
                                                    PD. Air Minum (PDAM)
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://bankdaerahbojonegoro.com" target="_blank">
                                            <div class="row">
                                                <div class="col-lg-1 col-2 text-center">
                                                    <span data-eva="arrow-right-outline"></span>
                                                </div>
                                                <div class="col-lg-9 col-10">
                                                    PD. Bank Perkreditan Rakyat (BPR)
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Web Gis Modal-->
        <div class="modal p-0" id="gisModal" tabindex="-1" role="dialog" aria-labelledby="gisModalLabel" aria-hidden="true">
            <div class="modal-portal modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="w-100 text-center">
                            <h2 class="modal-title" id="gisModalLabel">WEB GIS</h2>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-3 col-6 px-4">
                                <a href="https://bojonegorokab.go.id/gis-batas-desa/0" target="_blank">
                                    <div class="card-medium">
                                        <span class="fa fa-map-pin"></span>
                                        <div class="card-medium-text small-text">
                                            BATAS DESA
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 px-4">
                                <a target="_blank" href="https://bojonegorokab.go.id/gis-batas-kecamatan/11">
                                    <div class="card-medium">
                                        <span class="fa fa-map-marked-alt"></span>
                                        <div class="card-medium-text small-text">
                                            BATAS KECAMATAN
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 px-4">
                                <a target="_blank" href="https://bojonegorokab.go.id/gis-fasilitas-hotel/4">
                                    <div class="card-medium">
                                        <span class="fa fa-h-square"></span>
                                        <div class="card-medium-text small-text">
                                            FASILITAS HOTEL
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 px-4">
                                <a target="_blank" href="https://bojonegorokab.go.id/gis-fasilitas-kesehatan/2">
                                    <div class="card-medium">
                                        <span class="fa fa-heartbeat"></span>
                                        <div class="card-medium-text small-text">
                                            FASILITAS KESEHATAN
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 px-4">
                                <a target="_blank" href="https://bojonegorokab.go.id/gis-fasilitas-kuliner/6">
                                    <div class="card-medium">
                                        <span class="fa fa-utensils"></span>
                                        <div class="card-medium-text small-text">
                                            FASILITAS KULINER
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 px-4">
                                <a target="_blank" href="https://bojonegorokab.go.id/gis-fasilitas-pendidikan/1">
                                    <div class="card-medium">
                                        <span class="fa fa-graduation-cap"></span>
                                        <div class="card-medium-text small-text">
                                            FASILITAS PENDIDIKAN
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 px-4">
                                <a target="_blank" href="https://bojonegorokab.go.id/gis-fasilitas-wifi/5">
                                    <div class="card-medium">
                                        <span class="fa fa-wifi"></span>
                                        <div class="card-medium-text small-text">
                                            FASILITAS WIFI
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 px-4">
                                <a target="_blank" href="https://bojonegorokab.go.id/gis-penyebaran-sekolah-dasar/8">
                                    <div class="card-medium">
                                        <span class="fa fa-school"></span>
                                        <div class="card-medium-text small-text">
                                            PENYEBARAN SEKOLAH DASAR
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 px-4">
                                <a target="_blank" href="https://bojonegorokab.go.id/gis-persebaran-kantor-pelayanan-publik/3">
                                    <div class="card-medium">
                                        <span class="fa fa-laptop-house"></span>
                                        <div class="card-medium-text small-text">
                                            PERSEBARAN KANTOR PELAYANAN PUBLIK
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 px-4">
                                <a target="_blank" href="https://bojonegorokab.go.id/gis-peta-tempat-oleh-oleh-sentra-usaha-kecil/10">
                                    <div class="card-medium">
                                        <span class="fa fa-map-marker-alt"></span>
                                        <div class="card-medium-text small-text">
                                            PETA TEMPAT OLEH-OLEH (SENTRA USAHA KECIL)
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 px-4">
                                <a target="_blank" href="https://bojonegorokab.go.id/gis-tempat-tempat-wisata/9">
                                    <div class="card-medium">
                                        <span class="fa fa-image"></span>
                                        <div class="card-medium-text small-text">
                                            TEMPAT-TEMPAT WISATA
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 px-4">
                                <a target="_blank" href="https://bojonegorokab.go.id/gis-titik-rawan-bencana/12">
                                    <div class="card-medium">
                                        <span class="fa fa-map-pin"></span>
                                        <div class="card-medium-text small-text">
                                            TITIK RAWAN BENCANA
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 px-4">
                                <a target="_blank" href="https://bojonegorokab.go.id/gis-wilayah-bisnis-migas/7">
                                    <div class="card-medium">
                                        <span class="fa fa-gas-pump"></span>
                                        <div class="card-medium-text small-text">
                                            WILAYAH BISNIS MIGAS
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--SmartCity Modal-->
        <div class="modal p-0" id="smartcityModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-portal modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="w-100 text-center">
                            <h2 class="modal-title" id="egovLabel">Smart City</h2>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-3 col-6 px-4">
                                <a class="has-parent" target="_blank" href="javascript:void(0);" data-parent="smartcityModal" data-toggle=modal data-target=#smartgovermentModal>
                                    <div class="card-medium">
                                        <span class="fa fa-balance-scale"></span>
                                        <div class="card-medium-text small-text">
                                            Smart Goverment
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 px-4">
                                <a class="has-parent" target="_blank" href="javascript:void(0);" data-parent="smartcityModal" data-toggle=modal data-target=#smartbrandingModal>
                                    <div class="card-medium">
                                        <span class="fa fa-award"></span>
                                        <div class="card-medium-text small-text">
                                            Smart Branding
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 px-4">
                                <a class="has-parent" target="_blank" href="javascript:void(0);" data-parent="smartcityModal" data-toggle=modal data-target=#smarteconomyModal>
                                    <div class="card-medium">
                                        <span class="fa fa-donate"></span>
                                        <div class="card-medium-text small-text">
                                            Smart Economy
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 px-4">
                                <a class="has-parent" target="_blank" href="javascript:void(0);" data-parent="smartcityModal" data-toggle=modal data-target=#smartlivingModal>
                                    <div class="card-medium">
                                        <span class="fa fa-hands"></span>
                                        <div class="card-medium-text small-text">
                                            Smart Living
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 px-4">
                                <a class="has-parent" target="_blank" href="javascript:void(0);" data-parent="smartcityModal" data-toggle=modal data-target=#smartsocietyModal>
                                    <div class="card-medium">
                                        <span class="fa fa-users"></span>
                                        <div class="card-medium-text small-text">
                                            Smart Society
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 px-4">
                                <a class="has-parent" target="_blank" href="javascript:void(0);" data-parent="smartcityModal" data-toggle=modal data-target=#smartenvironmentModal>
                                    <div class="card-medium">
                                        <span class="fab fa-envira"></span>
                                        <div class="card-medium-text small-text">
                                            Smart Environment
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal p-0" id="smartgovermentModal" tabindex="-1" role="dialog" aria-hidden="true" onmodalclose=#smartcityModal>
            <div class="modal-portal modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="w-100 text-center">
                            <h2 class="modal-title" id="egovLabel">Smart Goverment</h2>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-3 col-6 px-4">
                                <a class="has-parent" target="_blank" href="javascript:void(0);" data-parent="smartgovermentModal" data-toggle=modal data-target=#e-govermentModal>
                                    <div class="card-medium">
                                        <span class="fa fa-laptop"></span>
                                        <div class="card-medium-text small-text">
                                            E-Goverment
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 px-4">
                                <a class="has-parent" target="_blank" href="javascript:void(0);" data-parent="smartgovermentModal" data-toggle=modal data-target=#layananpengaduanModal>
                                    <div class="card-medium">
                                        <span class="fa fa-comment-alt"></span>
                                        <div class="card-medium-text small-text">
                                            Layanan Pengaduan
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 px-4">
                                <a class="has-parent" target="_blank" href="javascript:void(0);" data-parent="smartgovermentModal" data-toggle=modal data-target=#keterbukaaninformasiModal>
                                    <div class="card-medium">
                                        <span class="fa fa-book-open"></span>
                                        <div class="card-medium-text small-text">
                                            Keterbukaan Informasi
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 px-4">
                                <a class="has-parent" target="_blank" href="javascript:void(0);" data-parent="smartgovermentModal" data-toggle=modal data-target=#pelayananonlineModal>
                                    <div class="card-medium">
                                        <span class="fa fa-globe"></span>
                                        <div class="card-medium-text small-text">
                                            Pelayanan Online
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 px-4">
                                <a class="has-parent" target="_blank" href="javascript:void(0);" data-parent="smartgovermentModal" data-toggle=modal data-target=#instansivertikalModal>
                                    <div class="card-medium">
                                        <span class="fa fa-grip-vertical"></span>
                                        <div class="card-medium-text small-text">
                                            Instansi Vertikal
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 px-4">
                                <a class="has-parent" target="_blank" href="javascript:void(0);" data-parent="smartgovermentModal" data-toggle=modal data-target=#portaldatabojonegoroModal>
                                    <div class="card-medium">
                                        <span class="fa fa-table"></span>
                                        <div class="card-medium-text small-text">
                                            Portal Data Bojonegoro
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal p-0" id="e-govermentModal" tabindex="-1" role="dialog" aria-hidden="true" onmodalclose=#smartgovermentModal>
            <div class="modal-portal modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="w-100 text-center">
                            <h2 class="modal-title" id="egovLabel">E-Goverment</h2>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-3 col-6 px-4">
                                <a class="has-parent" target="_blank" href="http://musrenbang.bojonegorokab.go.id/musrenbang2018/" target=_blank data-parent="e-govermentModal">
                                    <div class="card-medium">
                                        <span data-eva="browser-outline"></span>
                                        <div class="card-medium-text small-text">
                                            Perencanaan Daerah
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 px-4">
                                <a class="has-parent" target="_blank" href="http://bpkad.bojonegorokab.go.id/transparansi" target=_blank data-parent="e-govermentModal">
                                    <div class="card-medium">
                                        <span data-eva="browser-outline"></span>
                                        <div class="card-medium-text small-text">
                                            Anggaran Daerah
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 px-4">
                                <a class="has-parent" target="_blank" href="http://e-monev.bojonegorokab.go.id/" target=_blank data-parent="e-govermentModal">
                                    <div class="card-medium">
                                        <span data-eva="browser-outline"></span>
                                        <div class="card-medium-text small-text">
                                            Evaluasi Kinerja
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 px-4">
                                <a class="has-parent" target="_blank" href="http://www.bojonegorokab.go.id/kinerja/" target=_blank data-parent="e-govermentModal">
                                    <div class="card-medium">
                                        <span data-eva="browser-outline"></span>
                                        <div class="card-medium-text small-text">
                                            Kinerja Pemerintah
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 px-4">
                                <a class="has-parent" target="_blank" href="https://lpse.lkpp.go.id/eproc4" target=_blank data-parent="e-govermentModal">
                                    <div class="card-medium">
                                        <span data-eva="browser-outline"></span>
                                        <div class="card-medium-text small-text">
                                            Rencana Pengadaan
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 px-4">
                                <a class="has-parent" target="_blank" href="https://sirup.lkpp.go.id/sirup" target=_blank data-parent="e-govermentModal">
                                    <div class="card-medium">
                                        <span data-eva="browser-outline"></span>
                                        <div class="card-medium-text small-text">
                                            Pengadaan Barang/Jasa
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 px-4">
                                <a class="has-parent" target="_blank" href="http://absensi-online.bojonegorokab.go.id/" target=_blank data-parent="e-govermentModal">
                                    <div class="card-medium">
                                        <span data-eva="browser-outline"></span>
                                        <div class="card-medium-text small-text">
                                            Absensi Pegawai
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 px-4">
                                <a class="has-parent" target="_blank" href="http://e-letter.bojonegorokab.go.id/" target=_blank data-parent="e-govermentModal">
                                    <div class="card-medium">
                                        <span data-eva="browser-outline"></span>
                                        <div class="card-medium-text small-text">
                                            Layanan Surat
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 px-4">
                                <a class="has-parent" target="_blank" href="http://kabbojonegoro.jdih.jatimprov.go.id/" target=_blank data-parent="e-govermentModal">
                                    <div class="card-medium">
                                        <span data-eva="browser-outline"></span>
                                        <div class="card-medium-text small-text">
                                            Informasi Hukum
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 px-4">
                                <a class="has-parent" target="_blank" href="https://opensid.bojonegorokab.go.id" target=_blank data-parent="e-govermentModal">
                                    <div class="card-medium">
                                        <span data-eva="browser-outline"></span>
                                        <div class="card-medium-text small-text">
                                            Website Desa
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal p-0" id="perencanaandaerahModal" tabindex="-1" role="dialog" aria-hidden="true" onmodalclose=#smartgovermentModal>
            <div class="modal-portal modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="w-100 text-center">
                            <h2 class="modal-title" id="egovLabel">Perencanaan Daerah</h2>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal p-0" id="anggarandaerahModal" tabindex="-1" role="dialog" aria-hidden="true" onmodalclose=#smartgovermentModal>
            <div class="modal-portal modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="w-100 text-center">
                            <h2 class="modal-title" id="egovLabel">Anggaran Daerah</h2>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal p-0" id="evaluasikinerjaModal" tabindex="-1" role="dialog" aria-hidden="true" onmodalclose=#smartgovermentModal>
            <div class="modal-portal modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="w-100 text-center">
                            <h2 class="modal-title" id="egovLabel">Evaluasi Kinerja</h2>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal p-0" id="kinerjapemerintahModal" tabindex="-1" role="dialog" aria-hidden="true" onmodalclose=#smartgovermentModal>
            <div class="modal-portal modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="w-100 text-center">
                            <h2 class="modal-title" id="egovLabel">Kinerja Pemerintah</h2>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal p-0" id="rencanapengadaanModal" tabindex="-1" role="dialog" aria-hidden="true" onmodalclose=#smartgovermentModal>
            <div class="modal-portal modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="w-100 text-center">
                            <h2 class="modal-title" id="egovLabel">Rencana Pengadaan</h2>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal p-0" id="pengadaanbarangjasaModal" tabindex="-1" role="dialog" aria-hidden="true" onmodalclose=#smartgovermentModal>
            <div class="modal-portal modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="w-100 text-center">
                            <h2 class="modal-title" id="egovLabel">Pengadaan Barang/Jasa</h2>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal p-0" id="absensipegawaiModal" tabindex="-1" role="dialog" aria-hidden="true" onmodalclose=#smartgovermentModal>
            <div class="modal-portal modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="w-100 text-center">
                            <h2 class="modal-title" id="egovLabel">Absensi Pegawai</h2>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal p-0" id="layanansuratModal" tabindex="-1" role="dialog" aria-hidden="true" onmodalclose=#smartgovermentModal>
            <div class="modal-portal modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="w-100 text-center">
                            <h2 class="modal-title" id="egovLabel">Layanan Surat</h2>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal p-0" id="informasihukumModal" tabindex="-1" role="dialog" aria-hidden="true" onmodalclose=#smartgovermentModal>
            <div class="modal-portal modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="w-100 text-center">
                            <h2 class="modal-title" id="egovLabel">Informasi Hukum</h2>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal p-0" id="websitedesaModal" tabindex="-1" role="dialog" aria-hidden="true" onmodalclose=#smartgovermentModal>
            <div class="modal-portal modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="w-100 text-center">
                            <h2 class="modal-title" id="egovLabel">Website Desa</h2>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal p-0" id="layananpengaduanModal" tabindex="-1" role="dialog" aria-hidden="true" onmodalclose=#smartgovermentModal>
            <div class="modal-portal modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="w-100 text-center">
                            <h2 class="modal-title" id="egovLabel">Layanan Pengaduan</h2>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-3 col-6 px-4">
                                <a class="has-parent" target="_blank" href="https://www.lapor.go.id/" target=_blank data-parent="layananpengaduanModal">
                                    <div class="card-medium">
                                        <span data-eva="browser-outline"></span>
                                        <div class="card-medium-text small-text">
                                            Lapor !
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 px-4">
                                <a class="has-parent" target="_blank" href="https://www.facebook.com/pemerintahkabbjn/" target=_blank data-parent="layananpengaduanModal">
                                    <div class="card-medium">
                                        <span data-eva="browser-outline"></span>
                                        <div class="card-medium-text small-text">
                                            Facebook Bojonegoro
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 px-4">
                                <a class="has-parent" target="_blank" href="https://twitter.com/pemkab_bjn" target=_blank data-parent="layananpengaduanModal">
                                    <div class="card-medium">
                                        <span data-eva="browser-outline"></span>
                                        <div class="card-medium-text small-text">
                                            Twitter Bojonegoro
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 px-4">
                                <a class="has-parent" target="_blank" href="https://www.instagram.com/bojonegoropemkab/" target=_blank data-parent="layananpengaduanModal">
                                    <div class="card-medium">
                                        <span data-eva="browser-outline"></span>
                                        <div class="card-medium-text small-text">
                                            Instagram Bojonegoro
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 px-4">
                                <a class="has-parent" target="_blank" href="https://drive.google.com/file/d/0BxTA_Wh20GiZSWhEeHRjblYzek0/preview" target=_blank data-parent="layananpengaduanModal">
                                    <div class="card-medium">
                                        <span data-eva="browser-outline"></span>
                                        <div class="card-medium-text small-text">
                                            Laporan SOP
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal p-0" id="laporModal" tabindex="-1" role="dialog" aria-hidden="true" onmodalclose=#smartgovermentModal>
            <div class="modal-portal modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="w-100 text-center">
                            <h2 class="modal-title" id="egovLabel">Lapor !</h2>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal p-0" id="facebookbojonegoroModal" tabindex="-1" role="dialog" aria-hidden="true" onmodalclose=#smartgovermentModal>
            <div class="modal-portal modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="w-100 text-center">
                            <h2 class="modal-title" id="egovLabel">Facebook Bojonegoro</h2>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal p-0" id="twitterbojonegoroModal" tabindex="-1" role="dialog" aria-hidden="true" onmodalclose=#smartgovermentModal>
            <div class="modal-portal modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="w-100 text-center">
                            <h2 class="modal-title" id="egovLabel">Twitter Bojonegoro</h2>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal p-0" id="instagrambojonegoroModal" tabindex="-1" role="dialog" aria-hidden="true" onmodalclose=#smartgovermentModal>
            <div class="modal-portal modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="w-100 text-center">
                            <h2 class="modal-title" id="egovLabel">Instagram Bojonegoro</h2>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal p-0" id="laporansopModal" tabindex="-1" role="dialog" aria-hidden="true" onmodalclose=#smartgovermentModal>
            <div class="modal-portal modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="w-100 text-center">
                            <h2 class="modal-title" id="egovLabel">Laporan SOP</h2>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal p-0" id="keterbukaaninformasiModal" tabindex="-1" role="dialog" aria-hidden="true" onmodalclose=#smartgovermentModal>
            <div class="modal-portal modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="w-100 text-center">
                            <h2 class="modal-title" id="egovLabel">Keterbukaan Informasi</h2>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-3 col-6 px-4">
                                <a class="has-parent" target="_blank" href="https://ppid.bojonegorokab.go.id/" target=_blank data-parent="keterbukaaninformasiModal">
                                    <div class="card-medium">
                                        <span data-eva="browser-outline"></span>
                                        <div class="card-medium-text small-text">
                                            Website PPID
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal p-0" id="websiteppidModal" tabindex="-1" role="dialog" aria-hidden="true" onmodalclose=#smartgovermentModal>
            <div class="modal-portal modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="w-100 text-center">
                            <h2 class="modal-title" id="egovLabel">Website PPID</h2>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal p-0" id="pelayananonlineModal" tabindex="-1" role="dialog" aria-hidden="true" onmodalclose=#smartgovermentModal>
            <div class="modal-portal modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="w-100 text-center">
                            <h2 class="modal-title" id="egovLabel">Pelayanan Online</h2>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-3 col-6 px-4">
                                <a class="has-parent" target="_blank" href="https://www.oss.go.id/oss/" target=_blank data-parent="pelayananonlineModal">
                                    <div class="card-medium">
                                        <span data-eva="browser-outline"></span>
                                        <div class="card-medium-text small-text">
                                            Online Single Submission
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 px-4">
                                <a class="has-parent" target="_blank" href="http://sippadu.bojonegorokab.go.id/" target=_blank data-parent="pelayananonlineModal">
                                    <div class="card-medium">
                                        <span data-eva="browser-outline"></span>
                                        <div class="card-medium-text small-text">
                                            Layanan Perizinan Online
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 px-4">
                                <a class="has-parent" target="_blank" href="http://pbb.bapendabojonegoro.id/" target=_blank data-parent="pelayananonlineModal">
                                    <div class="card-medium">
                                        <span data-eva="browser-outline"></span>
                                        <div class="card-medium-text small-text">
                                            Layanan Pajak Online
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 px-4">
                                <a class="has-parent" target="_blank" href="http://simpadu.bapendabojonegoro.id/" target=_blank data-parent="pelayananonlineModal">
                                    <div class="card-medium">
                                        <span data-eva="browser-outline"></span>
                                        <div class="card-medium-text small-text">
                                            Layanan Pajak Daerah
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 px-4">
                                <a class="has-parent" target="_blank" href="http://koperasiukm-online.bojonegorokab.go.id/" target=_blank data-parent="pelayananonlineModal">
                                    <div class="card-medium">
                                        <span data-eva="browser-outline"></span>
                                        <div class="card-medium-text small-text">
                                            Layanan UMKM Online
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 px-4">
                                <a class="has-parent" target="_blank" href="http://helpdesk-it.bojonegorokab.go.id/" target=_blank data-parent="pelayananonlineModal">
                                    <div class="card-medium">
                                        <span data-eva="browser-outline"></span>
                                        <div class="card-medium-text small-text">
                                            Layanan Helpdesk IT
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 px-4">
                                <a class="has-parent" target="_blank" href="http://dpmptsp.bojonegorokab.go.id/" target=_blank data-parent="pelayananonlineModal">
                                    <div class="card-medium">
                                        <span data-eva="browser-outline"></span>
                                        <div class="card-medium-text small-text">
                                            Portal Dinas Perizinan
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal p-0" id="onlinesinglesubmissionModal" tabindex="-1" role="dialog" aria-hidden="true" onmodalclose=#smartgovermentModal>
            <div class="modal-portal modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="w-100 text-center">
                            <h2 class="modal-title" id="egovLabel">Online Single Submission</h2>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal p-0" id="layananperizinanonlineModal" tabindex="-1" role="dialog" aria-hidden="true" onmodalclose=#smartgovermentModal>
            <div class="modal-portal modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="w-100 text-center">
                            <h2 class="modal-title" id="egovLabel">Layanan Perizinan Online</h2>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal p-0" id="layananpajakonlineModal" tabindex="-1" role="dialog" aria-hidden="true" onmodalclose=#smartgovermentModal>
            <div class="modal-portal modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="w-100 text-center">
                            <h2 class="modal-title" id="egovLabel">Layanan Pajak Online</h2>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal p-0" id="layananpajakdaerahModal" tabindex="-1" role="dialog" aria-hidden="true" onmodalclose=#smartgovermentModal>
            <div class="modal-portal modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="w-100 text-center">
                            <h2 class="modal-title" id="egovLabel">Layanan Pajak Daerah</h2>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal p-0" id="layananumkmonlineModal" tabindex="-1" role="dialog" aria-hidden="true" onmodalclose=#smartgovermentModal>
            <div class="modal-portal modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="w-100 text-center">
                            <h2 class="modal-title" id="egovLabel">Layanan UMKM Online</h2>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal p-0" id="layananhelpdeskitModal" tabindex="-1" role="dialog" aria-hidden="true" onmodalclose=#smartgovermentModal>
            <div class="modal-portal modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="w-100 text-center">
                            <h2 class="modal-title" id="egovLabel">Layanan Helpdesk IT</h2>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal p-0" id="portaldinasperizinanModal" tabindex="-1" role="dialog" aria-hidden="true" onmodalclose=#smartgovermentModal>
            <div class="modal-portal modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="w-100 text-center">
                            <h2 class="modal-title" id="egovLabel">Portal Dinas Perizinan</h2>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal p-0" id="instansivertikalModal" tabindex="-1" role="dialog" aria-hidden="true" onmodalclose=#smartgovermentModal>
            <div class="modal-portal modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="w-100 text-center">
                            <h2 class="modal-title" id="egovLabel">Instansi Vertikal</h2>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-3 col-6 px-4">
                                <a class="has-parent" target="_blank" href="http://dprd.bojonegorokab.go.id/" target=_blank data-parent="instansivertikalModal">
                                    <div class="card-medium">
                                        <span data-eva="browser-outline"></span>
                                        <div class="card-medium-text small-text">
                                            DPRD Bojonegoro
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 px-4">
                                <a class="has-parent" target="_blank" href="http://kejari-bojonegoro.go.id/" target=_blank data-parent="instansivertikalModal">
                                    <div class="card-medium">
                                        <span data-eva="browser-outline"></span>
                                        <div class="card-medium-text small-text">
                                            Kejaksaan Bojonegoro
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 px-4">
                                <a class="has-parent" target="_blank" href="http://pn-bojonegoro.go.id/" target=_blank data-parent="instansivertikalModal">
                                    <div class="card-medium">
                                        <span data-eva="browser-outline"></span>
                                        <div class="card-medium-text small-text">
                                            Pengadilan Bojonegoro
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 px-4">
                                <a class="has-parent" target="_blank" href="https://polresbojonegoro.id/" target=_blank data-parent="instansivertikalModal">
                                    <div class="card-medium">
                                        <span data-eva="browser-outline"></span>
                                        <div class="card-medium-text small-text">
                                            Polres Bojonegoro
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 px-4">
                                <a class="has-parent" target="_blank" href="http://kodim0813bojonegoro.mil.id/" target=_blank data-parent="instansivertikalModal">
                                    <div class="card-medium">
                                        <span data-eva="browser-outline"></span>
                                        <div class="card-medium-text small-text">
                                            Kodim Bojonegoro
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal p-0" id="dprdbojonegoroModal" tabindex="-1" role="dialog" aria-hidden="true" onmodalclose=#smartgovermentModal>
            <div class="modal-portal modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="w-100 text-center">
                            <h2 class="modal-title" id="egovLabel">DPRD Bojonegoro</h2>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal p-0" id="kejaksaanbojonegoroModal" tabindex="-1" role="dialog" aria-hidden="true" onmodalclose=#smartgovermentModal>
            <div class="modal-portal modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="w-100 text-center">
                            <h2 class="modal-title" id="egovLabel">Kejaksaan Bojonegoro</h2>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal p-0" id="pengadilanbojonegoroModal" tabindex="-1" role="dialog" aria-hidden="true" onmodalclose=#smartgovermentModal>
            <div class="modal-portal modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="w-100 text-center">
                            <h2 class="modal-title" id="egovLabel">Pengadilan Bojonegoro</h2>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal p-0" id="polresbojonegoroModal" tabindex="-1" role="dialog" aria-hidden="true" onmodalclose=#smartgovermentModal>
            <div class="modal-portal modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="w-100 text-center">
                            <h2 class="modal-title" id="egovLabel">Polres Bojonegoro</h2>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal p-0" id="kodimbojonegoroModal" tabindex="-1" role="dialog" aria-hidden="true" onmodalclose=#smartgovermentModal>
            <div class="modal-portal modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="w-100 text-center">
                            <h2 class="modal-title" id="egovLabel">Kodim Bojonegoro</h2>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal p-0" id="portaldatabojonegoroModal" tabindex="-1" role="dialog" aria-hidden="true" onmodalclose=#smartgovermentModal>
            <div class="modal-portal modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="w-100 text-center">
                            <h2 class="modal-title" id="egovLabel">Portal Data Bojonegoro</h2>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-3 col-6 px-4">
                                <a class="has-parent" target="_blank" href="http://103.87.16.61/spbe-v2/" target=_blank data-parent="portaldatabojonegoroModal">
                                    <div class="card-medium">
                                        <span data-eva="browser-outline"></span>
                                        <div class="card-medium-text small-text">
                                            Dashboard Data
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 px-4">
                                <a class="has-parent" target="_blank" href="http://dev-pendidikan.bojonegorokab.go.id/" target=_blank data-parent="portaldatabojonegoroModal">
                                    <div class="card-medium">
                                        <span data-eva="browser-outline"></span>
                                        <div class="card-medium-text small-text">
                                            Informasi Pendidikan
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 px-4">
                                <a class="has-parent" target="_blank" href="https://bojonegorokab.bps.go.id/" target=_blank data-parent="portaldatabojonegoroModal">
                                    <div class="card-medium">
                                        <span data-eva="browser-outline"></span>
                                        <div class="card-medium-text small-text">
                                            BPS Bojonegoro
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 px-4">
                                <a class="has-parent" target="_blank" href="https://data.go.id/dataset?q=bojonegoro" target=_blank data-parent="portaldatabojonegoroModal">
                                    <div class="card-medium">
                                        <span data-eva="browser-outline"></span>
                                        <div class="card-medium-text small-text">
                                            Satu Data Bojonegoro
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 px-4">
                                <a class="has-parent" target="_blank" href="http://geoportal.bojonegorokab.go.id/" target=_blank data-parent="portaldatabojonegoroModal">
                                    <div class="card-medium">
                                        <span data-eva="browser-outline"></span>
                                        <div class="card-medium-text small-text">
                                            Geoportal Bojonegoro
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal p-0" id="dashboarddataModal" tabindex="-1" role="dialog" aria-hidden="true" onmodalclose=#smartgovermentModal>
            <div class="modal-portal modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="w-100 text-center">
                            <h2 class="modal-title" id="egovLabel">Dashboard Data</h2>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal p-0" id="informasipendidikanModal" tabindex="-1" role="dialog" aria-hidden="true" onmodalclose=#smartgovermentModal>
            <div class="modal-portal modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="w-100 text-center">
                            <h2 class="modal-title" id="egovLabel">Informasi Pendidikan</h2>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal p-0" id="bpsbojonegoroModal" tabindex="-1" role="dialog" aria-hidden="true" onmodalclose=#smartgovermentModal>
            <div class="modal-portal modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="w-100 text-center">
                            <h2 class="modal-title" id="egovLabel">BPS Bojonegoro</h2>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal p-0" id="satudatabojonegoroModal" tabindex="-1" role="dialog" aria-hidden="true" onmodalclose=#smartgovermentModal>
            <div class="modal-portal modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="w-100 text-center">
                            <h2 class="modal-title" id="egovLabel">Satu Data Bojonegoro</h2>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal p-0" id="geoportalbojonegoroModal" tabindex="-1" role="dialog" aria-hidden="true" onmodalclose=#smartgovermentModal>
            <div class="modal-portal modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="w-100 text-center">
                            <h2 class="modal-title" id="egovLabel">Geoportal Bojonegoro</h2>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal p-0" id="smartbrandingModal" tabindex="-1" role="dialog" aria-hidden="true" onmodalclose=#smartcityModal>
            <div class="modal-portal modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="w-100 text-center">
                            <h2 class="modal-title" id="egovLabel">Smart Branding</h2>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-3 col-6 px-4">
                                <a class="has-parent" target="_blank" href="https://wisatabojonegoro.com/" target=_blank data-parent="smartbrandingModal">
                                    <div class="card-medium">
                                        <span class="fa fa-car"></span>
                                        <div class="card-medium-text small-text">
                                            Informasi Pariwisata
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 px-4">
                                <a class="has-parent" target="_blank" href="https://wisatabojonegoro.com/" target=_blank data-parent="smartbrandingModal">
                                    <div class="card-medium">
                                        <span class="fa fa-hat-cowboy"></span>
                                        <div class="card-medium-text small-text">
                                            Bojonegoro Tourism
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 px-4">
                                <a class="has-parent" target="_blank" href="http://radiomalowopati.online/" target=_blank data-parent="smartbrandingModal">
                                    <div class="card-medium">
                                        <span class="fa fa-headset"></span>
                                        <div class="card-medium-text small-text">
                                            Streaming Radio Malowopati
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 px-4">
                                <a class="has-parent" target="_blank" href="https://www.kanalbojonegoro.com/" target=_blank data-parent="smartbrandingModal">
                                    <div class="card-medium">
                                        <span class="fa fa-volume-up"></span>
                                        <div class="card-medium-text small-text">
                                            Kanal Bojonegoro
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 px-4">
                                <a class="has-parent" target="_blank" href="http://rilispers.bojonegorokab.go.id/" target=_blank data-parent="smartbrandingModal">
                                    <div class="card-medium">
                                        <span class="fa fa-microphone-alt"></span>
                                        <div class="card-medium-text small-text">
                                            Rilis Pers Bojonegoro
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 px-4">
                                <a class="has-parent" target="_blank" href="javascript:void(0);" data-parent="smartbrandingModal" data-toggle=modal data-target=#mediasosialModal>
                                    <div class="card-medium">
                                        <span class="fa fa-icons"></span>
                                        <div class="card-medium-text small-text">
                                            Media Sosial
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal p-0" id="informasipariwisataModal" tabindex="-1" role="dialog" aria-hidden="true" onmodalclose=#smartbrandingModal>
            <div class="modal-portal modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="w-100 text-center">
                            <h2 class="modal-title" id="egovLabel">Informasi Pariwisata</h2>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal p-0" id="bojonegorotourismModal" tabindex="-1" role="dialog" aria-hidden="true" onmodalclose=#smartbrandingModal>
            <div class="modal-portal modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="w-100 text-center">
                            <h2 class="modal-title" id="egovLabel">Bojonegoro Tourism</h2>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal p-0" id="streamingradiomalowopatiModal" tabindex="-1" role="dialog" aria-hidden="true" onmodalclose=#smartbrandingModal>
            <div class="modal-portal modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="w-100 text-center">
                            <h2 class="modal-title" id="egovLabel">Streaming Radio Malowopati</h2>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal p-0" id="kanalbojonegoroModal" tabindex="-1" role="dialog" aria-hidden="true" onmodalclose=#smartbrandingModal>
            <div class="modal-portal modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="w-100 text-center">
                            <h2 class="modal-title" id="egovLabel">Kanal Bojonegoro</h2>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal p-0" id="rilispersbojonegoroModal" tabindex="-1" role="dialog" aria-hidden="true" onmodalclose=#smartbrandingModal>
            <div class="modal-portal modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="w-100 text-center">
                            <h2 class="modal-title" id="egovLabel">Rilis Pers Bojonegoro</h2>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal p-0" id="mediasosialModal" tabindex="-1" role="dialog" aria-hidden="true" onmodalclose=#smartbrandingModal>
            <div class="modal-portal modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="w-100 text-center">
                            <h2 class="modal-title" id="egovLabel">Media Sosial</h2>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-3 col-6 px-4">
                                <a class="has-parent" target="_blank" href="https://www.facebook.com/pemerintahkabbjn/" target=_blank data-parent="mediasosialModal">
                                    <div class="card-medium">
                                        <span data-eva="browser-outline"></span>
                                        <div class="card-medium-text small-text">
                                            Facebook Bojonegoro
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 px-4">
                                <a class="has-parent" target="_blank" href="https://twitter.com/pemkab_bjn" target=_blank data-parent="mediasosialModal">
                                    <div class="card-medium">
                                        <span data-eva="browser-outline"></span>
                                        <div class="card-medium-text small-text">
                                            Twitter Bojonegoro
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 px-4">
                                <a class="has-parent" target="_blank" href="https://www.instagram.com/bojonegoropemkab/" target=_blank data-parent="mediasosialModal">
                                    <div class="card-medium">
                                        <span data-eva="browser-outline"></span>
                                        <div class="card-medium-text small-text">
                                            Instagram Bojonegoro
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 px-4">
                                <a class="has-parent" target="_blank" href="https://www.youtube.com/channel/UCDybJ-ptIaN9sdAzuiF6epw/videos" target=_blank data-parent="mediasosialModal">
                                    <div class="card-medium">
                                        <span data-eva="browser-outline"></span>
                                        <div class="card-medium-text small-text">
                                            Youtube Bojonegoro
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal p-0" id="facebookbojonegoroModal" tabindex="-1" role="dialog" aria-hidden="true" onmodalclose=#smartbrandingModal>
            <div class="modal-portal modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="w-100 text-center">
                            <h2 class="modal-title" id="egovLabel">Facebook Bojonegoro</h2>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal p-0" id="twitterbojonegoroModal" tabindex="-1" role="dialog" aria-hidden="true" onmodalclose=#smartbrandingModal>
            <div class="modal-portal modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="w-100 text-center">
                            <h2 class="modal-title" id="egovLabel">Twitter Bojonegoro</h2>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal p-0" id="instagrambojonegoroModal" tabindex="-1" role="dialog" aria-hidden="true" onmodalclose=#smartbrandingModal>
            <div class="modal-portal modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="w-100 text-center">
                            <h2 class="modal-title" id="egovLabel">Instagram Bojonegoro</h2>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal p-0" id="youtubebojonegoroModal" tabindex="-1" role="dialog" aria-hidden="true" onmodalclose=#smartbrandingModal>
            <div class="modal-portal modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="w-100 text-center">
                            <h2 class="modal-title" id="egovLabel">Youtube Bojonegoro</h2>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal p-0" id="smarteconomyModal" tabindex="-1" role="dialog" aria-hidden="true" onmodalclose=#smartcityModal>
            <div class="modal-portal modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="w-100 text-center">
                            <h2 class="modal-title" id="egovLabel">Smart Economy</h2>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-3 col-6 px-4">
                                <a class="has-parent" target="_blank" href="http://disdag-online.bojonegorokab.go.id/" target=_blank data-parent="smarteconomyModal">
                                    <div class="card-medium">
                                        <span class="fa fa-coins"></span>
                                        <div class="card-medium-text small-text">
                                            Informasi Harga Pasar
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 px-4">
                                <a class="has-parent" target="_blank" href="http://infoproduk.bojonegorokab.go.id/" target=_blank data-parent="smarteconomyModal">
                                    <div class="card-medium">
                                        <span class="fa fa-barcode"></span>
                                        <div class="card-medium-text small-text">
                                            Informasi Produk Daerah
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal p-0" id="informasihargapasarModal" tabindex="-1" role="dialog" aria-hidden="true" onmodalclose=#smarteconomyModal>
            <div class="modal-portal modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="w-100 text-center">
                            <h2 class="modal-title" id="egovLabel">Informasi Harga Pasar</h2>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal p-0" id="informasiprodukdaerahModal" tabindex="-1" role="dialog" aria-hidden="true" onmodalclose=#smarteconomyModal>
            <div class="modal-portal modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="w-100 text-center">
                            <h2 class="modal-title" id="egovLabel">Informasi Produk Daerah</h2>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal p-0" id="smartlivingModal" tabindex="-1" role="dialog" aria-hidden="true" onmodalclose=#smartcityModal>
            <div class="modal-portal modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="w-100 text-center">
                            <h2 class="modal-title" id="egovLabel">Smart Living</h2>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-3 col-6 px-4">
                                <a class="has-parent" target="_blank" href="https://polresbojonegoro.id/" target=_blank data-parent="smartlivingModal">
                                    <div class="card-medium">
                                        <span class="fa fa-id-card"></span>
                                        <div class="card-medium-text small-text">
                                            Portal Polres Bojonegoro
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 px-4">
                                <a class="has-parent" target="_blank" href="https://play.google.com/store/apps/details?id=com.synergics.cas.masyarakat&amp;hl=in" target=_blank data-parent="smartlivingModal">
                                    <div class="card-medium">
                                        <span class="fa fa-mobile-alt"></span>
                                        <div class="card-medium-text small-text">
                                            Aplikasi Madrim
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 px-4">
                                <a class="has-parent" target="_blank" href="https://apkpure.com/id/botic/com.bojonegorotic.amrizalns.botic" target=_blank data-parent="smartlivingModal">
                                    <div class="card-medium">
                                        <span class="fa fa-video"></span>
                                        <div class="card-medium-text small-text">
                                            CCTV Bojonegoro
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal p-0" id="portalpolresbojonegoroModal" tabindex="-1" role="dialog" aria-hidden="true" onmodalclose=#smartlivingModal>
            <div class="modal-portal modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="w-100 text-center">
                            <h2 class="modal-title" id="egovLabel">Portal Polres Bojonegoro</h2>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal p-0" id="aplikasimadrimModal" tabindex="-1" role="dialog" aria-hidden="true" onmodalclose=#smartlivingModal>
            <div class="modal-portal modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="w-100 text-center">
                            <h2 class="modal-title" id="egovLabel">Aplikasi Madrim</h2>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal p-0" id="cctvbojonegoroModal" tabindex="-1" role="dialog" aria-hidden="true" onmodalclose=#smartlivingModal>
            <div class="modal-portal modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="w-100 text-center">
                            <h2 class="modal-title" id="egovLabel">CCTV Bojonegoro</h2>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal p-0" id="smartsocietyModal" tabindex="-1" role="dialog" aria-hidden="true" onmodalclose=#smartcityModal>
            <div class="modal-portal modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="w-100 text-center">
                            <h2 class="modal-title" id="egovLabel">Smart Society</h2>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-3 col-6 px-4">
                                <a class="has-parent" target="_blank" href="http://www.bojonegorokarir.com/" target=_blank data-parent="smartsocietyModal">
                                    <div class="card-medium">
                                        <span class="fa fa-briefcase"></span>
                                        <div class="card-medium-text small-text">
                                            Informasi Lowongan Kerja
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 px-4">
                                <a class="has-parent" target="_blank" href="http://www.rssosodoro.com/" target=_blank data-parent="smartsocietyModal">
                                    <div class="card-medium">
                                        <span class="fa fa-first-aid"></span>
                                        <div class="card-medium-text small-text">
                                            Layanan RSUD Bojonegoro
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 px-4">
                                <a class="has-parent" target="_blank" href="https://play.google.com/store/apps/details?id=com.mobile.dinkesbojonegoro&amp;hl=in" target=_blank data-parent="smartsocietyModal">
                                    <div class="card-medium">
                                        <span class="fa fa-notes-medical"></span>
                                        <div class="card-medium-text small-text">
                                            Aplikasi e-Health
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 px-4">
                                <a class="has-parent" target="_blank" href="https://forumradiobojonegoro.com/" target=_blank data-parent="smartsocietyModal">
                                    <div class="card-medium">
                                        <span class="fa fa-notes-medical"></span>
                                        <div class="card-medium-text small-text">
                                            Forum Radio Bojonegoro
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal p-0" id="informasilowongankerjaModal" tabindex="-1" role="dialog" aria-hidden="true" onmodalclose=#smartsocietyModal>
            <div class="modal-portal modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="w-100 text-center">
                            <h2 class="modal-title" id="egovLabel">Informasi Lowongan Kerja</h2>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal p-0" id="layananrsudbojonegoroModal" tabindex="-1" role="dialog" aria-hidden="true" onmodalclose=#smartsocietyModal>
            <div class="modal-portal modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="w-100 text-center">
                            <h2 class="modal-title" id="egovLabel">Layanan RSUD Bojonegoro</h2>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal p-0" id="aplikasie-healthModal" tabindex="-1" role="dialog" aria-hidden="true" onmodalclose=#smartsocietyModal>
            <div class="modal-portal modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="w-100 text-center">
                            <h2 class="modal-title" id="egovLabel">Aplikasi e-Health</h2>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal p-0" id="forumradiobojonegoroModal" tabindex="-1" role="dialog" aria-hidden="true" onmodalclose=#smartsocietyModal>
            <div class="modal-portal modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="w-100 text-center">
                            <h2 class="modal-title" id="egovLabel">Forum Radio Bojonegoro</h2>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal p-0" id="smartenvironmentModal" tabindex="-1" role="dialog" aria-hidden="true" onmodalclose=#smartcityModal>
            <div class="modal-portal modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="w-100 text-center">
                            <h2 class="modal-title" id="egovLabel">Smart Environment</h2>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-3 col-6 px-4">
                                <a class="has-parent" target="_blank" href="http://dindamkar.bojonegorokab.go.id/" target=_blank data-parent="smartenvironmentModal">
                                    <div class="card-medium">
                                        <span class="fa fa-fire-extinguisher"></span>
                                        <div class="card-medium-text small-text">
                                            Layanan Pemadam Kebakaran
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 px-4">
                                <a class="has-parent" target="_blank" href="http://simtapat.bojonegorokab.go.id/" target=_blank data-parent="smartenvironmentModal">
                                    <div class="card-medium">
                                        <span class="fab fa-pagelines"></span>
                                        <div class="card-medium-text small-text">
                                            Informasi Tanam dan Panen
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 px-4">
                                <a class="has-parent" target="_blank" href="https://play.google.com/store/apps/details?id=com.bojonegoroapp&amp;hl=in" target=_blank data-parent="smartenvironmentModal">
                                    <div class="card-medium">
                                        <span class="fa fa-traffic-light"></span>
                                        <div class="card-medium-text small-text">
                                            Informasi Lalulintas
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal p-0" id="layananpemadamkebakaranModal" tabindex="-1" role="dialog" aria-hidden="true" onmodalclose=#smartenvironmentModal>
            <div class="modal-portal modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="w-100 text-center">
                            <h2 class="modal-title" id="egovLabel">Layanan Pemadam Kebakaran</h2>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal p-0" id="informasitanamdanpanenModal" tabindex="-1" role="dialog" aria-hidden="true" onmodalclose=#smartenvironmentModal>
            <div class="modal-portal modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="w-100 text-center">
                            <h2 class="modal-title" id="egovLabel">Informasi Tanam dan Panen</h2>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal p-0" id="informasilalulintasModal" tabindex="-1" role="dialog" aria-hidden="true" onmodalclose=#smartenvironmentModal>
            <div class="modal-portal modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="w-100 text-center">
                            <h2 class="modal-title" id="egovLabel">Informasi Lalulintas</h2>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Egov Modal-->
        <div class="modal p-0" id="egov" tabindex="-1" role="dialog" aria-labelledby="egovLabel" aria-hidden="true">
            <div class="modal-portal modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="w-100 text-center">
                            <h2 class="modal-title" id="egovLabel">Pelayanan Publik</h2>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-3 col-6 px-4">
                                <a href="http://sid.bojonegorokab.go.id" target="_blank">
                                    <div class="card-medium">
                                        <span class="fa fa-window-maximize"></span>
                                        <div class="card-medium-text small-text">
                                            SID
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 px-4">
                                <a href="http://sippadu.bojonegorokab.go.id" target="_blank">
                                    <div class="card-medium">
                                        <span class="fa fa-window-maximize"></span>
                                        <div class="card-medium-text small-text">
                                            SIPPADU
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 px-4">
                                <a href="http://simpadu.bapendabojonegoro.id" target="_blank">
                                    <div class="card-medium">
                                        <span class="fa fa-money-check"></span>
                                        <div class="card-medium-text small-text">
                                            e-PAJAK
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 px-4">
                                <a href="http://sibantu.bojonegorokab.go.id" target="_blank">
                                    <div class="card-medium">
                                        <span class="fa fa-window-restore"></span>
                                        <div class="card-medium-text small-text">
                                            SIBANTU
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 px-4">
                                <a href="http://sanduk.bojonegorokab.go.id" target="_blank">
                                    <div class="card-medium">
                                        <span class="fa fa-money-check"></span>
                                        <div class="card-medium-text small-text">
                                            SANDUK
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 px-4">
                                <a href="http://sitabah.bojonegorokab.go.id" target="_blank">
                                    <div class="card-medium">
                                        <span class="fa fa-hand-holding-heart"></span>
                                        <div class="card-medium-text small-text">
                                            SITABAH
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 px-4">
                                <a href="https://kpm.bojonegorokab.go.id/" target="_blank">
                                    <div class="card-medium">
                                        <span class="fa fa-hand-holding-water"></span>
                                        <div class="card-medium-text small-text">
                                            KPM
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 px-4">
                                <a href="https://kpp.smartbojonegoro.com/" target="_blank">
                                    <div class="card-medium">
                                        <span class="fa fa-truck-loading"></span>
                                        <div class="card-medium-text small-text">
                                            KPP
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 px-4">
                                <a href="http://lawancorona.bojonegorokab.go.id" target="_blank">
                                    <div class="card-medium">
                                        <span class="fa fa-viruses"></span>
                                        <div class="card-medium-text small-text">
                                            Lawan Corona
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal p-0" id="sosialmediaModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-portal modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="w-100 text-center">
                            <h2 class="modal-title" id="egovLabel">Sosial Media</h2>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-3 col-6 px-4">
                                <a class="has-parent" target="_blank" href="https://www.facebook.com/pemerintahkabbjn/" target=_blank data-parent="sosialmediaModal">
                                    <div class="card-medium">
                                        <span class="fab fa-facebook-f"></span>
                                        <div class="card-medium-text small-text">
                                            FACEBOOK
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 px-4">
                                <a class="has-parent" target="_blank" href="https://www.instagram.com/pemkabbojonegoro/" target=_blank data-parent="sosialmediaModal">
                                    <div class="card-medium">
                                        <span class="fab fa-instagram"></span>
                                        <div class="card-medium-text small-text">
                                            INSTAGRAM
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 px-4">
                                <a class="has-parent" target="_blank" href="https://twitter.com/pemkab_bjn" target=_blank data-parent="sosialmediaModal">
                                    <div class="card-medium">
                                        <span class="fab fa-twitter"></span>
                                        <div class="card-medium-text small-text">
                                            TWITTER
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 px-4">
                                <a class="has-parent" target="_blank" href="https://www.youtube.com/channel/UCDybJ-ptIaN9sdAzuiF6epw/videos" target=_blank data-parent="sosialmediaModal">
                                    <div class="card-medium">
                                        <span class="fab fa-youtube"></span>
                                        <div class="card-medium-text small-text">
                                            YOUTUBE
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MODAL -->
        <div class="modal p-0" id="programunggulan" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-portal modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="w-100 text-center">
                            <h2 class="modal-title" id="egovLabel">17 Program Prioritas</h2>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-3 col-6 px-4">
                                <a class="has-parent" target="_blank" href="javascript:void(0);" data-parent="programunggulan" data-toggle=modal data-target=#pemodalanumkmModal>
                                    <div class="card-medium">
                                        <span class="far fa-money-bill-alt"></span>
                                        <div class="card-medium-text small-text">
                                            Pemodalan UMKM
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 px-4">
                                <a class="has-parent" target="_blank" href="javascript:void(0);" data-parent="programunggulan" data-toggle=modal data-target=#insentifgttdanpttModal>
                                    <div class="card-medium">
                                        <span class="fas fa-money-bill-alt"></span>
                                        <div class="card-medium-text small-text">
                                            Insentif GTT dan PTT
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 px-4">
                                <a class="has-parent" target="_blank" href="javascript:void(0);" data-parent="programunggulan" data-toggle=modal data-target=#santunanduka25jutaModal>
                                    <div class="card-medium">
                                        <span class="far fa-handshake"></span>
                                        <div class="card-medium-text small-text">
                                            Santunan Duka 2,5 juta
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 px-4">
                                <a class="has-parent" target="_blank" href="javascript:void(0);" data-parent="programunggulan" data-toggle=modal data-target=#perijinansatuatapModal>
                                    <div class="card-medium">
                                        <span class="fas fa-square-full"></span>
                                        <div class="card-medium-text small-text">
                                            Perijinan Satu Atap
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 px-4">
                                <a class="has-parent" target="_blank" href="javascript:void(0);" data-parent="programunggulan" data-toggle=modal data-target=#festivalbudayatahunanModal>
                                    <div class="card-medium">
                                        <span class="fas fa-flag-checkered"></span>
                                        <div class="card-medium-text small-text">
                                            Festival Budaya Tahunan
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 px-4">
                                <a class="has-parent" target="_blank" href="javascript:void(0);" data-parent="programunggulan" data-toggle=modal data-target=#revisiperbup35tahun2015Modal>
                                    <div class="card-medium">
                                        <span class="fa fa-hand-holding"></span>
                                        <div class="card-medium-text small-text">
                                            Revisi PERBUP 35 Tahun 2015
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 px-4">
                                <a class="has-parent" target="_blank" href="javascript:void(0);" data-parent="programunggulan" data-toggle=modal data-target=#greensmartcityModal>
                                    <div class="card-medium">
                                        <span class="fa fa-box"></span>
                                        <div class="card-medium-text small-text">
                                            Green &amp; Smart City
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 px-4">
                                <a class="has-parent" target="_blank" href="javascript:void(0);" data-parent="programunggulan" data-toggle=modal data-target=#kenaikanhonorrtrwModal>
                                    <div class="card-medium">
                                        <span class="fa fa-wallet"></span>
                                        <div class="card-medium-text small-text">
                                            Kenaikan Honor RT/RW
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 px-4">
                                <a class="has-parent" target="_blank" href="javascript:void(0);" data-parent="programunggulan" data-toggle=modal data-target=#perbaikaninfrastrukturModal>
                                    <div class="card-medium">
                                        <span class="fas fa-industry"></span>
                                        <div class="card-medium-text small-text">
                                            Perbaikan Infrastruktur
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 px-4">
                                <a class="has-parent" target="_blank" href="javascript:void(0);" data-parent="programunggulan" data-toggle=modal data-target=#kartutanimandiriplusModal>
                                    <div class="card-medium">
                                        <span class="far fa-address-card"></span>
                                        <div class="card-medium-text small-text">
                                            Kartu Tani Mandiri Plus
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 px-4">
                                <a class="has-parent" target="_blank" href="javascript:void(0);" data-parent="programunggulan" data-toggle=modal data-target=#sekolahgratisModal>
                                    <div class="card-medium">
                                        <span class="fas fa-graduation-cap"></span>
                                        <div class="card-medium-text small-text">
                                            Sekolah Gratis
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 px-4">
                                <a class="has-parent" target="_blank" href="javascript:void(0);" data-parent="programunggulan" data-toggle=modal data-target=#perdamadinModal>
                                    <div class="card-medium">
                                        <span class="fas fa-book"></span>
                                        <div class="card-medium-text small-text">
                                            Perda Madin
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 px-4">
                                <a class="has-parent" target="_blank" href="javascript:void(0);" data-parent="programunggulan" data-toggle=modal data-target=#lingkunganramahModal>
                                    <div class="card-medium">
                                        <span class="fas fa-user-md"></span>
                                        <div class="card-medium-text small-text">
                                            Lingkungan Ramah
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 px-4">
                                <a class="has-parent" target="_blank" href="javascript:void(0);" data-parent="programunggulan" data-toggle=modal data-target=#layanankesehatanModal>
                                    <div class="card-medium">
                                        <span class="fas fa-stethoscope"></span>
                                        <div class="card-medium-text small-text">
                                            Layanan Kesehatan
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 px-4">
                                <a class="has-parent" target="_blank" href="javascript:void(0);" data-parent="programunggulan" data-toggle=modal data-target=#100000lapangankerjaModal>
                                    <div class="card-medium">
                                        <span class="fas fa-low-vision"></span>
                                        <div class="card-medium-text small-text">
                                            100.000 Lapangan Kerja
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 px-4">
                                <a class="has-parent" target="_blank" href="javascript:void(0);" data-parent="programunggulan" data-toggle=modal data-target=#programaladinModal>
                                    <div class="card-medium">
                                        <span class="fas fa-home"></span>
                                        <div class="card-medium-text small-text">
                                            Program Aladin
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 px-4">
                                <a class="has-parent" target="_blank" href="javascript:void(0);" data-parent="programunggulan" data-toggle=modal data-target=#penataanpasartradisionalModal>
                                    <div class="card-medium">
                                        <span class="fas fa-shopping-cart"></span>
                                        <div class="card-medium-text small-text">
                                            Penataan Pasar Tradisional
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal p-0" id="pemodalanumkmModal" onmodalclose="#programunggulan" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-portal modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="w-100 text-center">
                            <h2 class="modal-title">Pemodalan UMKM</h2>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12 mt-3">
                                <p class="text-wrap">
                                <p><img alt="" src="https://bojonegorokab.go.id/storage/photos/shares/ProgramUnggulan/pemodalan-umkm.jpg" style="width:100%" /></p>

                                <p><img alt="" src="https://bojonegorokab.go.id/storage/photos/shares/ProgramUnggulan/Baru/pemodalan-umkm.png" style="height:100%; width:100%" /></p>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal p-0" id="insentifgttdanpttModal" onmodalclose="#programunggulan" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-portal modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="w-100 text-center">
                            <h2 class="modal-title">Insentif GTT dan PTT</h2>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12 mt-3">
                                <p class="text-wrap">
                                <p><img alt="" src="https://bojonegorokab.go.id/storage/photos/shares/ProgramUnggulan/insentif.jpg" style="width:100%" /></p>

                                <p><img alt="" src="https://bojonegorokab.go.id/storage/photos/shares/ProgramUnggulan/Baru/insentif-1.png" style="height:100%; width:100%" /></p>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal p-0" id="santunanduka25jutaModal" onmodalclose="#programunggulan" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-portal modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="w-100 text-center">
                            <h2 class="modal-title">Santunan Duka 2,5 juta</h2>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12 mt-3">
                                <p class="text-wrap">
                                <p><img alt="" src="https://bojonegorokab.go.id/storage/photos/shares/ProgramUnggulan/santunan-duka.jpg" style="width:100%" /></p>

                                <p><img alt="" src="https://bojonegorokab.go.id/storage/photos/shares/ProgramUnggulan/Baru/santunan-duka.png" style="height:100%; width:100%" /></p>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal p-0" id="perijinansatuatapModal" onmodalclose="#programunggulan" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-portal modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="w-100 text-center">
                            <h2 class="modal-title">Perijinan Satu Atap</h2>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12 mt-3">
                                <p class="text-wrap">
                                <p><img alt="" src="https://bojonegorokab.go.id/storage/photos/shares/ProgramUnggulan/Baru/perijinan.png" style="height:100%; width:100%" /></p>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal p-0" id="festivalbudayatahunanModal" onmodalclose="#programunggulan" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-portal modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="w-100 text-center">
                            <h2 class="modal-title">Festival Budaya Tahunan</h2>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12 mt-3">
                                <p class="text-wrap">
                                <p><img alt="" src="https://bojonegorokab.go.id/storage/photos/shares/ProgramUnggulan/festival-budaya.jpg" style="width:100%" /></p>

                                <p><img alt="" src="https://bojonegorokab.go.id/storage/photos/shares/ProgramUnggulan/Baru/festival.png" style="height:100%; width:100%" /></p>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal p-0" id="revisiperbup35tahun2015Modal" onmodalclose="#programunggulan" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-portal modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="w-100 text-center">
                            <h2 class="modal-title">Revisi PERBUP 35 Tahun 2015</h2>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12 mt-3">
                                <p class="text-wrap">
                                <p><img alt="" src="https://bojonegorokab.go.id/storage/photos/shares/ProgramUnggulan/revisi-perbup.jpg" style="width:100%" /></p>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal p-0" id="greensmartcityModal" onmodalclose="#programunggulan" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-portal modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="w-100 text-center">
                            <h2 class="modal-title">Green &amp; Smart City</h2>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12 mt-3">
                                <p class="text-wrap">
                                <p><img alt='' src='https://bojonegorokab.go.id/storage/photos/shares/ProgramUnggulan/green-smart-city.jpg' style='width:100%' /></p>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal p-0" id="kenaikanhonorrtrwModal" onmodalclose="#programunggulan" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-portal modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="w-100 text-center">
                            <h2 class="modal-title">Kenaikan Honor RT/RW</h2>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12 mt-3">
                                <p class="text-wrap">
                                <p>Kenaikan Honor RT/RW</p>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal p-0" id="perbaikaninfrastrukturModal" onmodalclose="#programunggulan" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-portal modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="w-100 text-center">
                            <h2 class="modal-title">Perbaikan Infrastruktur</h2>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12 mt-3">
                                <p class="text-wrap">
                                <p><img alt="" src="https://bojonegorokab.go.id/storage/photos/shares/ProgramUnggulan/Baru/infrastruktur-1.png" style="height:100%; width:100%" /></p>

                                <p><img alt="" src="https://bojonegorokab.go.id/storage/photos/shares/ProgramUnggulan/Baru/infrastruktur-2.png" style="height:100%; width:100%" /></p>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal p-0" id="kartutanimandiriplusModal" onmodalclose="#programunggulan" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-portal modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="w-100 text-center">
                            <h2 class="modal-title">Kartu Tani Mandiri Plus</h2>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12 mt-3">
                                <p class="text-wrap">
                                <p><img alt="" src="https://bojonegorokab.go.id/storage/photos/shares/ProgramUnggulan/Baru/kartu-tani.png" style="height:100%; width:100%" /></p>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal p-0" id="sekolahgratisModal" onmodalclose="#programunggulan" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-portal modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="w-100 text-center">
                            <h2 class="modal-title">Sekolah Gratis</h2>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12 mt-3">
                                <p class="text-wrap">
                                <p><img alt="" src="https://bojonegorokab.go.id/storage/photos/shares/ProgramUnggulan/Baru/sekolah-gratis.png" style="height:100%; width:100%" /></p>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal p-0" id="perdamadinModal" onmodalclose="#programunggulan" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-portal modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="w-100 text-center">
                            <h2 class="modal-title">Perda Madin</h2>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12 mt-3">
                                <p class="text-wrap">
                                <p><img alt="" src="https://bojonegorokab.go.id/storage/photos/shares/ProgramUnggulan/Baru/perda-madin.png" style="height:100%; width:100%" /></p>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal p-0" id="lingkunganramahModal" onmodalclose="#programunggulan" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-portal modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="w-100 text-center">
                            <h2 class="modal-title">Lingkungan Ramah</h2>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12 mt-3">
                                <p class="text-wrap">
                                <p><img alt="" src="https://bojonegorokab.go.id/storage/photos/shares/ProgramUnggulan/lingkungan-ramah.jpg" style="width:100%" /></p>

                                <p><img alt="" src="https://bojonegorokab.go.id/storage/photos/shares/ProgramUnggulan/Baru/lingkungan-ramah-1.png" style="height:100%; width:100%" /></p>

                                <p><img alt="" src="https://bojonegorokab.go.id/storage/photos/shares/ProgramUnggulan/Baru/lingkungan-ramah-2.png" style="height:100%; width:100%" /></p>

                                <p><img alt="" src="https://bojonegorokab.go.id/storage/photos/shares/ProgramUnggulan/Baru/lingkungan-ramah-3.png" style="height:100%; width:100%" /></p>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal p-0" id="layanankesehatanModal" onmodalclose="#programunggulan" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-portal modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="w-100 text-center">
                            <h2 class="modal-title">Layanan Kesehatan</h2>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12 mt-3">
                                <p class="text-wrap">
                                <p><img alt="" src="https://bojonegorokab.go.id/storage/photos/shares/ProgramUnggulan/layanan-kesehatan.jpg" style="width:100%" /></p>

                                <p><img alt="" src="https://bojonegorokab.go.id/storage/photos/shares/ProgramUnggulan/Baru/layanan-kesehatan-1.png" style="height:100%; width:100%" /></p>

                                <p><img alt="" src="https://bojonegorokab.go.id/storage/photos/shares/ProgramUnggulan/Baru/layanan-kesehatan-2.png" style="height:100%; width:100%" /></p>

                                <p><img alt="" src="https://bojonegorokab.go.id/storage/photos/shares/ProgramUnggulan/Baru/layanan-kesehatan-3.png" style="height:100%; width:100%" /></p>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal p-0" id="100000lapangankerjaModal" onmodalclose="#programunggulan" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-portal modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="w-100 text-center">
                            <h2 class="modal-title">100.000 Lapangan Kerja</h2>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12 mt-3">
                                <p class="text-wrap">
                                <p><img alt="" src="https://bojonegorokab.go.id/storage/photos/shares/ProgramUnggulan/lapangan-kerja.jpg" style="width:100%" /></p>

                                <p><img alt="" src="https://bojonegorokab.go.id/storage/photos/shares/ProgramUnggulan/Baru/lapangan-kerja-1.png" style="height:100%; width:100%" /></p>

                                <p><img alt="" src="https://bojonegorokab.go.id/storage/photos/shares/ProgramUnggulan/Baru/lapangan-kerja-2.png" style="height:100%; width:100%" /></p>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal p-0" id="programaladinModal" onmodalclose="#programunggulan" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-portal modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="w-100 text-center">
                            <h2 class="modal-title">Program Aladin</h2>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12 mt-3">
                                <p class="text-wrap">
                                <p><img alt="" src="https://bojonegorokab.go.id/storage/photos/shares/ProgramUnggulan/program-aladin.jpg" style="width:100%" /></p>

                                <p><img alt="" src="https://bojonegorokab.go.id/storage/photos/shares/ProgramUnggulan/Baru/aladin-1.png" style="height:100%; width:100%" /></p>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal p-0" id="penataanpasartradisionalModal" onmodalclose="#programunggulan" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-portal modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="w-100 text-center">
                            <h2 class="modal-title">Penataan Pasar Tradisional</h2>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12 mt-3">
                                <p class="text-wrap">
                                <p><img alt="" src="https://bojonegorokab.go.id/storage/photos/shares/ProgramUnggulan/penataan-pasar.jpg" style="width:100%" /></p>

                                <p><img alt="" src="https://bojonegorokab.go.id/storage/photos/shares/ProgramUnggulan/Baru/penataan-pasar-1.png" style="height:100%; width:100%" /></p>

                                <p><img alt="" src="https://bojonegorokab.go.id/storage/photos/shares/ProgramUnggulan/Baru/penataan-pasar-2.png" style="height:100%; width:100%" /></p>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal p-0" id="wonocolo" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-wisata" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="w-100 text-center">
                            <h2 class="modal-title">Teksas Wonocolo</h2>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div>
                            <p>Teksas Wonocolo adalah sebuah daerah di Kecamatan Kedewan, Kabupaten Bojonegoro, Jawa Timur yang memiliki penambangan minyak yang masih dikelola dengan cara tradisional. Lokasi ini berjarak sekitar 60km dari pusat kota Bojonegoro dan berbatasan dengan Kabupaten Blora, Jawa Tengah. Wonocolo dipilih dan diusulkan sebagai geosite di dalam Petroleum Geoheritage Bojonegoro, karena di tempat ini tersingkap batu-batuan yang mewakili sistem petroleum dan adanya pengambilan minyak tradisional di sumur-sumur tinggalan Belanda zaman dahulu. Pengambilan minyak tersebut diusahakan dengan tradisional dengan mesin-mesin mobil, menggunakan rig-rig dari kayu jati. Puncak antiklin Wonocolo mempunyai ketinggian kurang lebih 450m di atas permukaan laut, sedangkan pemboran paling dangkal sekitar 200m dari puncak lipatan. Sehingga ketinggian minyak yang diambil di Wonocolo pada reservoir Wonocolo masih berada di atas permukaan laut. Hal ini dapat membuktikan bahwa pemboran minyak tradisional di Wonocolo adalah yang paling dangkal di seluruh Indonesia, bahkan dunia. Geosite Wonocolo ini dapat dikembangkan menjadi Wisata Geologi Sumur Tua Wonocolo yang merupakan energi tidak terbarukan. Kini, lokasi tersebut dikenal dengan sebutan Teksas Wonocolo, selain karena kondisi lingkungannya yang mirip dengan lokasi minyak Texas di Amerika, Teksas sendiri merupakan singkatan dari Tekad Selalu Aman dan Sejahtera. Teksas Wonocolo kini menjadi lokasi wisata edukasi di Bojonegoro. Terdapat Rumah Singgah yang menjadi learning center tentang minyak dan cara eksploitasi di Wonocolo. Selain itu juga terdapat wisata adventure menggunakan Jeep di seputar kawasan ini.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal p-0" id="agro-jambu" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-wisata" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="w-100 text-center">
                            <h2 class="modal-title">Kebun Jambu</h2>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal p-0" id="gerabah-malo" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-wisata" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="w-100 text-center">
                            <h2 class="modal-title">Gerabah Malo</h2>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal p-0" id="sosrodilogo" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-wisata" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="w-100 text-center">
                            <h2 class="modal-title">Jembatan Sosrodilogo</h2>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal p-0" id="alun-alun" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-wisata" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="w-100 text-center">
                            <h2 class="modal-title">Alun-alun Bojonegoro</h2>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal p-0" id="gedung-pemkab" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-wisata" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="w-100 text-center">
                            <h2 class="modal-title">Gedung PEMKAB Bojonegoro</h2>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal p-0" id="jetak" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-wisata" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="w-100 text-center">
                            <h2 class="modal-title">Bundaran Jetak</h2>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal p-0" id="sapi" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-wisata" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="w-100 text-center">
                            <h2 class="modal-title">Kampung Ternak</h2>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal p-0" id="agro-salak" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-wisata" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="w-100 text-center">
                            <h2 class="modal-title">Wisata Salak Wedi</h2>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal p-0" id="growgoland" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-wisata" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="w-100 text-center">
                            <h2 class="modal-title">Growgoland</h2>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal p-0" id="atas-angin" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-wisata" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="w-100 text-center">
                            <h2 class="modal-title">Negeri Atas Angin</h2>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div>
                            <p>Atas Angin adalah sebuah lokasi di Desa Deling, Kecamatan Sekar, Kabupaten Bojonegoro, Jawa Timur, 50 km dari pusat kota. Lokasi ini menjadi favorit wisatawan karena banyaknya spot indah dari bentangan alam Bojonegoro. Karena banyaknya panorama indah di tempat ini seringkali menjadi lokasi pemotretan terutama untuk fotografi prewedding. Selain itu, banyak pengunjung yang memilih bercamping di atas bukit yang disebut bukit cinta, untuk dapat menyaksikan keindahan sunraise. Bukit cinta tersebut menurut cerita masyarakat setempat, dulunya merupakan tempat pertemuan Dewi Sekar Sari dan Raden Atas Aji, sepasang kekasih yang dipertemukan saat dalam pelarian ketika terjadi perang di zaman Kerajaan Mataram dan Pajang. Keduanya dikisahkan bermukim di lokasi Atas Angin hingga akhir hayat. Kondisi alam di sekitar Atas Angin memang memanjakan mata memandang. Hampir di sepanjang perjalanan menuju lokasi ini, wisatawan akan disuguhi pemandangan yang sangat bagus.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal p-0" id="waduk-pacal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-wisata" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="w-100 text-center">
                            <h2 class="modal-title">Waduk Pacal</h2>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div>
                            <p>Waduk Pacal berada di 35 km selatan wilayah Bojonegoro, provinsi Jawa Timur, Indonesia. Merupakan bangunan peninggalan Belanda yang di bangun sejak 1924 dan diresmikan pada tahun 1933. Termasuk salah satu bangunan bersejarah berukuran raksasa yang masih berfungsi hingga kini. Berada di pingir jalan raya Bojonegoro - Nganjuk, Waduk Pacal yang berada di Desa Kedungsumber, Kecamatan Temayang, Kabupaten Bojonegoro, Jawa Timur ini, mampu menjadi andalan petani di beberapa wilayah Kecamatan di antaranya Kecamatan Temayang, Kecamatan Sukosewu, Kecamatan Kapas, Kecamatan Balen, Kecamatan Sumberejo, Kecamatan Kanor, Kecamatan Baureno, Kecamatan Kepohbaru, Kecamatan Kedungadem, dan Kecamatan Sugihwaras. Bangunan yang kukuh dengan arsitektur khas zaman kolonial Belanda menjadi daya tarik utama Waduk Pacal.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal p-0" id="krondonan" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-wisata" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="w-100 text-center">
                            <h2 class="modal-title">Kedung Maor</h2>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div>
                            <p>Kedung Maor terletak di Desa Kedungsumber, Kecamatan Temayang, Kabupaten Bojonegoro, Jawa Timur. Kedung Maor merupakan air terjun yang berasal dari aliran Kali Soko dan limpahan dari Waduk Pacal. Di lokasi ini terdapat air terjun dan fosil jejak. Menurut penilai geopark internasional, Kedung Maor memiliki nilai situs geoheritage yang tinggi. Nama Kedung Maor sendiri diambil dari suara deru air yang meraung seperti suara hewan buas, oleh sebab itu warga sekitar sejak dulu menyebutnya dengan sebutan Kedung Maor. Kedung Maor dapat ditempuh dengan jarak sekitar 35km dari pusat kota. Kini lokasi tersebut juga menjadi lokasi wisata yang cukup sering dikunjungi karena keindahan alamnya.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal p-0" id="kolam" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-wisata" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="w-100 text-center">
                            <h2 class="modal-title">Wana Wisata Dander</h2>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div>
                            <p>Wana Wisata Dander atau (Tirta Wana Dander) adalah tempat wisata alam yang berada 15 km selatan Kota Bojonegoro ini tepatnya di Desa Dander, Kecamatan Dander, Jawa Timur, Indonesia. Lokasi ini sangat ramai pada hari Minggu karena banyak masyarakat yang mengunjunginya pada saat hari libur. Di dalam taman wisata ini terdapat Kolam renang, dan lapangan Golf. Para pedagangpun ikut serta meramaikan objek wisata ini. Sehingga pada saat anda berwisata di sini, di jamin anda tidak akan kelaparan. Disana anda juga dapat melihat pesawat tempur F-86 Sabre (No. TS-8609) buatan Amerika Serikat yang diserahkan oleh Kepala Staf TNI Angkatan Udara Marsekal TNI Soekardi kepada Pemerintah Kabupaten Bojonegoro pada tanggal 29 Juli 1984.[3][4] Taman Wisata Tirta Wana Dander menawarkan segala potensinya kepada para wisatawan baik lokal maupun dari luar daerah. Didukung oleh keindahan alam, serta pepohonan yang rindang menjadikan tempat wisata yang memiliki andalan kolam renang ini menjadi lebih nyaman sebagai tempat refreshing bagi anda sekeluarga. keunggulan dari wisata ini yaitu tempat yang sangat luas dan dilengkapi dengan padang golf, wisata ini sangat cocok untuk anak-anak karena selain padang golf, disana juga terdapat berbagai macam permainan anak-anak, seperti taman bermain, kolam untuk mandi bola, kolam renang dan sungai yang sangat jernih dengan keadaan sekelilingnya yang sejuk dan tentu saja bebas dari polusi.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal p-0" id="kayangan-api" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-wisata" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="w-100 text-center">
                            <h2 class="modal-title">Kayangan Api</h2>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div>
                            <p>Api Abadi Kayangan Api Adalah berupa sumber api abadi yang tak kunjung padam yang terletak pada kawasan hutan lindung di Desa Sendangharjo, Kecamatan Ngasem, Kabupaten Bojonegoro, Jawa Timur.[1] Kompleks Kayangan Api merupakan fenomena geologi alam berupa keluarnya gas alam dari dalam tanah yang tersulut api sehingga menciptakan api yang tidak pernah padam walaupun turun hujan sekalipun. Menurut cerita, Kayangan Api adalah tempat bersemayamnya Mbah Kriyo Kusumo atau Empu Supa atau lebih dikenal dengan sebutan Mbah Pandhe berasal dari Kerajaan Majapahit. Di sebelah barat sumber api terdapat kubangan lumpur yang berbau belerang dan menurut kepercayaan saat itu Mbah Kriyo Kusumo masih beraktivitas sebagai pembuat alat-alat pertanian dan pusaka seperti keris, tombak, cundrik dan lain-lain. Sumber Api, oleh masyarakat sekitarnya masih ada yang menganggap keramat dan menurut cerita, api tersebut hanya boleh diambil jika ada upacara penting seperti yang telah dilakukan pada masa lalu, seperti upacara Jumenengan Ngarsodalem Hamengkubuwana X dan untuk mengambil api melalui suatu prasyarat yakni selamatan/wilujengan dan tayuban dengan menggunakan gending eling-eling, wani-wani dan gunungsari yang merupakan gending kesukaan Mbah Kriyo Kusumo. Oleh sebab itu ketika gending tersebut dialunkan dan ditarikan oleh waranggono tidak boleh ditemani oleh siapapun.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal p-0" id="kebun-belimbing" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-wisata" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="w-100 text-center">
                            <h2 class="modal-title">Agrowisata Belimbing</h2>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MODAL -->
    </div>

    <script>
        let maps = L.map('map', {
            center: [-1.8647779909219413, 121.53014072928303],
            zoom: 9,
            zoomControl: false,
            dragging: false,
            attributionControl: false
        });

        maps.touchZoom.disable();
        maps.doubleClickZoom.disable();
        maps.scrollWheelZoom.disable();
        maps.boxZoom.disable();
        maps.keyboard.disable();

        let kesehatan = L.icon({
            iconUrl: '<?= base_url('icon/gis/kesehatan.png') ?>',
            iconSize: [15, 28], // size of the icon
            iconAnchor: [11, 48],
            popupAnchor: [-2, -21]
        });
        let pelayanan_public = L.icon({
            iconUrl: '<?= base_url('icon/gis/pelayanan_public.png') ?>',
            iconSize: [15, 28], // size of the icon
            iconAnchor: [11, 48],
            popupAnchor: [-2, -21]
        });
        let pendidikan = L.icon({
            iconUrl: '<?= base_url('icon/gis/pendidikan.png') ?>',
            iconSize: [15, 28], // size of the icon
            iconAnchor: [11, 48],
            popupAnchor: [-2, -21]
        });
        let hotel = L.icon({
            iconUrl: '<?= base_url('icon/gis/hotel.png') ?>',
            iconSize: [15, 28], // size of the icon
            iconAnchor: [11, 48],
            popupAnchor: [-2, -21]
        });
        let kuliner = L.icon({
            iconUrl: '<?= base_url('icon/gis/kuliner.png') ?>',
            iconSize: [15, 28], // size of the icon
            iconAnchor: [11, 48],
            popupAnchor: [-2, -21]
        });
        let wisata = L.icon({
            iconUrl: '<?= base_url('icon/gis/wisata.png') ?>',
            iconSize: [15, 28],
            iconAnchor: [11, 48],
            popupAnchor: [-2, -21]
        });
        let tambang = L.icon({
            iconUrl: '<?= base_url('icon/gis/tambang.png') ?>',
            iconSize: [15, 28],
            iconAnchor: [11, 48],
            popupAnchor: [-2, -21]
        });
        let pabrik = L.icon({
            iconUrl: '<?= base_url('icon/gis/pabrik.png') ?>',
            iconSize: [15, 28],
            iconAnchor: [11, 48],
            popupAnchor: [-2, -21]
        });

        <?php foreach ($gis as $row) : ?>
            var icons;
            <?php if ($row->category_name === "kesehatan") : ?>
                icons = kesehatan
            <?php elseif ($row->category_name === "hotel") : ?>
                icons = hotel
            <?php elseif ($row->category_name === "wisata") : ?>
                icons = wisata
            <?php elseif ($row->category_name === "pelayanan-publik") : ?>
                icons = pelayanan_public
            <?php elseif ($row->category_name === "pendidikan") : ?>
                icons = pendidikan
            <?php elseif ($row->category_name === "kuliner") : ?>
                icons = kuliner
            <?php elseif ($row->category_name === "tambang") : ?>
                icons = tambang
            <?php elseif ($row->category_name === "pabrik") : ?>
                icons = pabrik
            <?php endif; ?>
            L.marker([<?= $row->latitude ?>, <?= $row->longitude ?>], {
                    icon: icons
                })
                .bindPopup('<p class="h4 mt-0 mb-0"><?= $row->title ?><p>' +
                    "<img src='<?= base_url('/img/gis/facilities/' . $row->image_name) ?>'width='100%'><br>" +
                    '<p><?= $row->description ?><p>'
                ).addTo(maps);
        <?php endforeach ?>

        <?php foreach ($batas_kecamatan as $bk) { ?>
            $.getJSON("<?= base_url('file/geojson_batas_kecamatan/' . $bk->geojson_file) ?>", function(data) {
                geoLayer = L.geoJson(data, {
                    style: function(feature) {
                        return {
                            weight: 0.3,
                            opacity: 1,
                            color: '#fff',
                            fillOpacity: 0.9,
                            fillColor: '#32CD32',
                        }
                    },
                }).addTo(maps);
            });
        <?php } ?>
    </script>
    <!--START MOBILE FOOTER-->
    <div class="mobile-footer d-block d-lg-none"></div>
    <!--END MOBILE FOOTER-->
    <script src="https://bojonegorokab.go.id/portal/js/eva.min.js"></script>
    <script src="https://bojonegorokab.go.id/portal/js/jquery.js"></script>
    <script src="https://bojonegorokab.go.id/portal/js/popper.js"></script>
    <script src="https://bojonegorokab.go.id/portal/js/bootstrap.min.js"></script>
    <script src="https://bojonegorokab.go.id/portal/js/portal.js?v=3"></script>
    <script>
        eva.replace();

        $("#selayangModal").on("hidden.bs.modal", function() {
            var src = $('#overview-video').attr("src");
            $('#overview-video').attr("src", src);
        });
    </script>
    <script>
        $('div[onmodalclose]').each(function(_, self) {
            var modalclose = $(this).attr('onmodalclose')
            $(this).on('show.bs.modal', function() {
                $('.modal').modal('hide');
            })
            $(this).on('hidden.bs.modal', function() {
                $(modalclose).modal('show')
            })
        });
    </script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-CQFPK5QCR7"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-CQFPK5QCR7');
    </script>
</body>

</html>
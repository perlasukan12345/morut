<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>PORTAL RESMI - PEMKAB MOROWALI UTARA</title>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-107838959-1');
    </script>
    <!-- END Global Site Tag (gtag.js) - Google Analytics -->

    <!-- Favicon
    ================================================== -->
    <link rel="icon" type="image/png" href="<?= base_url(); ?>/img/morut.png">

    <link rel="stylesheet" href="<?= base_url(); ?>/assets/bootstrap/css/bootstrap.min.css" />
    <!-- leaflet css -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/leaflet/leaflet.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/datatables/DataTables-1.12.1/css/dataTables.bootstrap4.min.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/datatables/Responsive-2.3.0/css/responsive.bootstrap4.min.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>/css/flash.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>/css/animate_flash.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/fontawesome-free/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- jquery -->
    <script src="<?= base_url(); ?>/assets/jquery/jquery.min.js"></script>
    <!-- leaflet js -->
    <script src="<?= base_url(); ?>/assets/leaflet/leaflet.js"></script>

    <script src="<?= base_url(); ?>/js/popper.min.js"></script>
    <script src="<?= base_url(); ?>/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?= base_url(); ?>/js/site.js"></script>
    <script src="<?= base_url(); ?>/js/eva.min.js"></script>
    <script src="<?= base_url(); ?>/assets/typed/typed.js"></script>

</head>

<body>
    <div class="preloader">
        <img src="<?= base_url(); ?>/img/morut.png" class="logo">
    </div>
    <div class="portal">
        <div class="container-fluid p-0">
            <!--START NAVBAR-->
            <nav class="navbar navbar-light nav-header">
                <a class="navbar-brand" href="">
                    <img src="<?= base_url(); ?>/img/morut.png" alt="">
                </a>
                <span class="text-center layout-btn-web">
                    <span class="navbar-text">
                        <span class="navbar-text-brand">
                            PEMKAB MOROWALI UTARA<br>
                        </span>
                        <span class="navbar-text-title" style="text-transform: uppercase;">
                            <p><?= $setting->motto ?></p>
                        </span>
                    </span>
                </span>
                <span class="navbar-brand text-lg-right">
                    <a href="<?php echo base_url() ?>/home/index" class="btn btn-web">
                        SITUS WEB <i data-eva="arrow-forward-outline" class="ml-3"></i>
                    </a>
                </span>
            </nav>
            <!--END NAVBAR-->
            <!--START CONTENT-->
            <div class="row m-0 content">
                <div class="col-12">
                    <div class="row">
                        <div class="col-12 col-lg-3 col-xl-3" data-toggle="modal" data-target="#bupatiModal" style="cursor: pointer;">
                            <div class="circle-widget">
                                <div class="bb">
                                    <img src="<?= base_url() . '/img/setting/' . $bupati->img ?>" alt="" class="w-100">
                                </div>
                                <div class="text-widget">
                                    <div class="title"><?= $bupati->position ?></div>
                                    <div class="sub"><span id="exampleBupaty"></span></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 col-xl-6 px-lg-0 map" id="map" style="height: 450px">
                        </div>
                        <div class="col-12 col-lg-3 col-xl-3" data-toggle="modal" data-target="#wakilModal" style="cursor: pointer;">
                            <div class="circle-widget">
                                <div class="bb">
                                    <img src="<?= base_url() . '/img/setting/' . $wabup->img ?>" alt="" class="w-100">
                                </div>
                                <div class="text-widget">
                                    <div class="title"><?= $wabup->position ?></div>
                                    <div class="sub"><span id="exampleWabub"></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--END CONTENT-->
            <nav class="navbar fixed-bottom navbar-light nav-footer">
                <div class="toolbar mx-lg-auto">
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
                        <a href="javascript:void(0);" data-toggle="modal" data-target="#programunggulan">
                            <div class="toolbar-icon">
                                <span data-eva="grid-outline"></span>
                            </div>
                            <div class="toolbar-text">PROGRAM UNGGULAN</div>
                        </a>
                    </div>
                    <div class="toolbar-grid">
                        <a href="javascript:void(0);" data-toggle="modal" data-target="#pelayananModal">
                            <div class="toolbar-icon">
                                <span data-eva="people-outline"></span>
                            </div>
                            <div class="toolbar-text">PELAYANAN PUBLIK</div>
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
            </nav>
        </div>
        <!--START TOOLBAR-->
        <!--END TOOLBAR-->
        <!--START PATTERN-->
        <div class="green-pattern d-none d-lg-block">
            <div class="dot-green-pattern"></div>
            <div class="box-green-pattern"></div>
        </div>
        <!--END PATTERN-->
        <!--START MODAL-->
        <!--Bupati Modal-->
        <div class="modal p-0" id="bupatiModal" tabindex="-1" role="dialog" aria-labelledby="bupatiModalLabel" aria-hidden="true">
            <div class="modal-portal modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="w-100 text-center">
                            <h2 class="modal-title" id="bupatiModalLabel">Profil <?= $bupati->position ?></h2>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <table class="table">
                                <tr>
                                    <th>Nama</th>
                                    <th>:</th>
                                    <th><?= $bupati->name ?></th>
                                </tr>
                                <tr>
                                    <th>Lahir</th>
                                    <th>:</th>
                                    <th><?= $bupati->birth ?></th>
                                </tr>
                                <tr>
                                    <th>Alamat</th>
                                    <th>:</th>
                                    <th><?= $bupati->address ?></th>
                                </tr>
                                <tr>
                                    <th>Jabatan</th>
                                    <th>:</th>
                                    <th><?= $bupati->position ?></th>
                                </tr>
                                <tr>
                                    <th>Riwayat Jabatan</th>
                                    <th>:</th>
                                    <th><?= $bupati->job_history ?></th>
                                </tr>
                                <tr>
                                    <th>Riwayat Pendidikan</th>
                                    <th>:</th>
                                    <th><?= $bupati->education_background ?></th>
                                </tr>
                                <tr>
                                    <th>Riwayat Organisasi</th>
                                    <th>:</th>
                                    <th><?= $bupati->organization_history ?></th>
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
                            <h2 class="modal-title" id="wakilModalLabel">Profil <?= $wabup->position ?></h2>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <table class="table">
                                <tr>
                                    <th>Nama</th>
                                    <th>:</th>
                                    <th><?= $wabup->name ?></th>
                                </tr>
                                <tr>
                                    <th>Lahir</th>
                                    <th>:</th>
                                    <th><?= $wabup->birth ?></th>
                                </tr>
                                <tr>
                                    <th>Alamat</th>
                                    <th>:</th>
                                    <th><?= $wabup->address ?></th>
                                </tr>
                                <tr>
                                    <th>Jabatan</th>
                                    <th>:</th>
                                    <th><?= $wabup->position ?></th>
                                </tr>
                                <tr>
                                    <th>Riwayat Jabatan</th>
                                    <th>:</th>
                                    <th><?= $wabup->job_history ?></th>
                                </tr>
                                <tr>
                                    <th>Riwayat Pendidikan</th>
                                    <th>:</th>
                                    <th><?= $wabup->education_background ?></th>
                                </tr>
                                <tr>
                                    <th>Riwayat Organisasi</th>
                                    <th>:</th>
                                    <th><?= $wabup->organization_history ?></th>
                                </tr>
                            </table>
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
                                <a target="_blank" href="<?= base_url('WebGis/GisBatasKecamatan'); ?>">
                                    <div class="card-medium">
                                        <span class="fa fa-map-marked-alt"></span>
                                        <div class="card-medium-text small-text">
                                            BATAS KECAMATAN
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 px-4">
                                <a target="_blank" href="<?= base_url('WebGis/GisHotel'); ?>">
                                    <div class="card-medium">
                                        <span class="fa fa-h-square"></span>
                                        <div class="card-medium-text small-text">
                                            FASILITAS HOTEL
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 px-4">
                                <a target="_blank" href="<?= base_url('WebGis/GisMedicalFacility'); ?>">
                                    <div class="card-medium">
                                        <span class="fa fa-heartbeat"></span>
                                        <div class="card-medium-text small-text">
                                            FASILITAS KESEHATAN
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 px-4">
                                <a target="_blank" href="<?= base_url('WebGis/GisCulinaryFacilities'); ?>">
                                    <div class="card-medium">
                                        <span class="fa fa-utensils"></span>
                                        <div class="card-medium-text small-text">
                                            FASILITAS KULINER
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 px-4">
                                <a target="_blank" href="<?= base_url('WebGis/GisEducationalFacilities'); ?>">
                                    <div class="card-medium">
                                        <span class="fa fa-graduation-cap"></span>
                                        <div class="card-medium-text small-text">
                                            FASILITAS PENDIDIKAN
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 px-4">
                                <a target="_blank" href="<?= base_url('WebGis/GisPublicService'); ?>">
                                    <div class="card-medium">
                                        <span class="fa fa-laptop-house"></span>
                                        <div class="card-medium-text small-text">
                                            PERSEBARAN KANTOR PELAYANAN PUBLIK
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 px-4">
                                <a target="_blank" href="<?= base_url('WebGis/GisMining'); ?>">
                                    <div class="card-medium">
                                        <span class="fas fa-dolly-flatbed"></span>
                                        <div class="card-medium-text small-text">
                                            PERSEBARAN TAMBANG
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 px-4">
                                <a target="_blank" href="<?= base_url('WebGis/GisWisata'); ?>">
                                    <div class="card-medium">
                                        <span class="fa fa-image"></span>
                                        <div class="card-medium-text small-text">
                                            TEMPAT-TEMPAT WISATA
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 px-4">
                                <a target="_blank" href="<?= base_url('WebGis/GisIndustry'); ?>">
                                    <div class="card-medium">
                                        <span class="fas fa-industry"></span>
                                        <div class="card-medium-text small-text">
                                            PERSEBARAN PABRIK INDUSTRI
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Social Media Modal-->
        <div class="modal p-0" id="sosialmediaModal" tabindex="-1" role="dialog" aria-hidden="true" aria-labelledby="mediasosialLabel">
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
                                <a class="has-parent" target="_blank" href="https://www.facebook.com/<?= $setting->facebook ?>" target=_blank data-parent="mediasosialModal">
                                    <div class="card-medium">
                                        <span data-eva="browser-outline"></span>
                                        <div class="card-medium-text small-text">
                                            Facebook Morowali Utara
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 px-4">
                                <a class="has-parent" target="_blank" href="https://twitter.com/<?= $setting->facebook ?>" target=_blank data-parent="mediasosialModal">
                                    <div class="card-medium">
                                        <span data-eva="browser-outline"></span>
                                        <div class="card-medium-text small-text">
                                            Twitter Morowali Utara
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 px-4">
                                <a class="has-parent" target="_blank" href="https://www.instagram.com/<?= $setting->instagram ?>" target=_blank data-parent="mediasosialModal">
                                    <div class="card-medium">
                                        <span data-eva="browser-outline"></span>
                                        <div class="card-medium-text small-text">
                                            Instagram Morowali Utara
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 px-4">
                                <a class="has-parent" target="_blank" href="https://www.youtube.com/channel/<?= $setting->youtube ?>" target=_blank data-parent="mediasosialModal">
                                    <div class="card-medium">
                                        <span data-eva="browser-outline"></span>
                                        <div class="card-medium-text small-text">
                                            Youtube Morowali Utara
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Pelayanan Modal-->
        <div class="modal p-0" id="pelayananModal" tabindex="-1" role="dialog" aria-labelledby="pelayananModalLabel" aria-hidden="true">
            <div class="modal-portal modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="w-100 text-center">
                            <h2 class="modal-title" id="pelayananModalLabel">PELAYANAN UMUM</h2>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-3 col-6 px-4">
                                <a href="javascript:void(0);" data-target="#badanDetail" class="trigger-modal-detail">
                                    <div class="card-medium">
                                        <span class="fa fa-building"></span>
                                        <div class="card-medium-text">
                                            PELAYANAN DAERAH
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 px-4">
                                <a href="#" target="_blank">
                                    <div class="card-medium">
                                        <span class="fa fa-window-maximize"></span>
                                        <div class="card-medium-text small-text">
                                            LPSE
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 px-4">
                                <a href="#" target="_blank">
                                    <div class="card-medium">
                                        <span class="fa fa-window-maximize"></span>
                                        <div class="card-medium-text small-text">
                                            SIRUP
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 px-4">
                                <a href="#" target="_blank">
                                    <div class="card-medium">
                                        <span class="fa fa-window-maximize"></span>
                                        <div class="card-medium-text small-text">
                                            SIPD
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 px-4">
                                <a href="#" target="_blank">
                                    <div class="card-medium">
                                        <span class="fa fa-window-maximize"></span>
                                        <div class="card-medium-text small-text">
                                            JDIH KABUPATEN MOROWAI UTARA
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 px-4">
                                <a href="#" target="_blank">
                                    <div class="card-medium">
                                        <span class="fa fa-window-maximize"></span>
                                        <div class="card-medium-text small-text">
                                            JDIH DPRD MOROWAI UTARA
                                        </div>
                                    </div>
                                </a>
                            </div>
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
                        <h2 class="modal-title" id="detailPemerintahanModalLabel">BADAN DAN INSPEKTORAT KABUPATEN MOROWALI UTARA</h2>
                    </div>
                </div>
                <div class="modal-body pt-0">
                    <div class="row">
                        <div class="col-12">
                            <ul class="list-pemerintahan">
                                <?php foreach ($opd as $op) : ?>
                                    <li>
                                        <a href="#" target="_blank">
                                            <div class="row">
                                                <div class="col-lg-1 col-2 text-center">
                                                    <span data-eva="arrow-right-outline"></span>
                                                </div>
                                                <div class="col-lg-9 col-10">
                                                    <?= $op->opd ?>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                <?php endforeach ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        eva.replace();

        $('div[onmodalclose]').each(function(_, self) {
            var modalclose = $(this).attr('onmodalclose')
            $(this).on('show.bs.modal', function() {
                $('.modal').modal('hide');
            })
            $(this).on('hidden.bs.modal', function() {
                $(modalclose).modal('show')
            })
        });

        $(".trigger-modal-detail").click(function() {
            var self = $(this);
            $("#pelayananModal").modal('hide');
            setTimeout(function() {
                $(self.attr('data-target')).modal('show');
            }, 500);
        });

        $(".has-parent").click(function(e) {
            var target = $(this).attr('data-target');
            if (target) {
                var parent = $(this).attr('data-parent');
                $('#' + parent).modal('hide');
            }
        });

        $(".back").click(function() {
            $($(this).closest('[role=dialog]')).modal('hide');
            setTimeout(function() {
                $("#pelayananModal").modal('show');
            }, 500);
        });


        var bupati = ['<?= $bupati->name ?>'];
        var typed_bupaty = new Typed('#exampleBupaty', {
            strings: [
                bupati[0]
            ],
            typeSpeed: 100,
            backSpeed: 100,
            loop: true
        });
        var wabub = ['<?= $wabup->name ?>'];
        var typed_wabub = new Typed('#exampleWabub', {
            strings: [
                wabub[0]
            ],
            typeSpeed: 100,
            backSpeed: 100,
            loop: true
        });

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
            iconAnchor: [8, 30],
            popupAnchor: [-2, -21]
        });
        let pelayanan_public = L.icon({
            iconUrl: '<?= base_url('icon/gis/pelayanan_public.png') ?>',
            iconSize: [15, 28], // size of the icon
            iconAnchor: [8, 30],
            popupAnchor: [-2, -21]
        });
        let pendidikan = L.icon({
            iconUrl: '<?= base_url('icon/gis/pendidikan.png') ?>',
            iconSize: [15, 28], // size of the icon
            iconAnchor: [8, 30],
            popupAnchor: [-2, -21]
        });
        let hotel = L.icon({
            iconUrl: '<?= base_url('icon/gis/hotel.png') ?>',
            iconSize: [15, 28], // size of the icon
            iconAnchor: [8, 30],
            popupAnchor: [-2, -21]
        });
        let kuliner = L.icon({
            iconUrl: '<?= base_url('icon/gis/kuliner.png') ?>',
            iconSize: [15, 28], // size of the icon
            iconAnchor: [8, 30],
            popupAnchor: [-2, -21]
        });
        let wisata = L.icon({
            iconUrl: '<?= base_url('icon/gis/wisata.png') ?>',
            iconSize: [15, 28],
            iconAnchor: [8, 30],
            popupAnchor: [-2, -21]
        });
        let tambang = L.icon({
            iconUrl: '<?= base_url('icon/gis/tambang.png') ?>',
            iconSize: [15, 28],
            iconAnchor: [8, 30],
            popupAnchor: [-2, -21]
        });
        let pabrik = L.icon({
            iconUrl: '<?= base_url('icon/gis/pabrik.png') ?>',
            iconSize: [15, 28],
            iconAnchor: [8, 30],
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
                            opacity: 1.0,
                            color: '<?= $bk->geojson_color ?>',
                            fillOpacity: 0.8,
                            fillColor: '<?= $bk->geojson_color ?>',
                        }
                    },
                }).addTo(maps);
                geoLayer.eachLayer(function(layer) {
                    layer.bindTooltip("<?= $bk->kecamatan_name ?>", {
                        permanent: true,
                        direction: "center",
                        className: "label-poligon"
                    });
                });
            });
        <?php } ?>
    </script>
    <!--START MOBILE FOOTER-->
    <div class="mobile-footer d-block d-lg-none"></div>
    <!--END MOBILE FOOTER-->
</body>

</html>
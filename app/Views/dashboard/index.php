<?php echo $this->extend('dashboard/template/index'); ?>

<?php echo $this->section('page-content'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">
<div class="swal" data-swal="<?= session()->getFlashdata('message') ?>"></div>
<?= $breadcrumbs; ?>
    <!-- Page Heading -->
    <?php
    if (!user_can('dashboard')) {
     	echo "You, don't have Role Permission... Please contact your Administrator";
    }
    ?>

    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Total User</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $count_user ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user-friends fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Total Berita</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $count_news ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-newspaper fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                Total Suara Rakyat
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?= $count_people ?></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Requests Suara Rakyat</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= count($people_said) ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Content Row -->
    <div class="row">
    	<!-- Suara Rakyat -->
        <div class="col-xl-12 col-lg-7">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Suara Rakyat Menunggu Persetujuan</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="comment-widgets m-b-20">
                        <?php foreach ($people_said as $people): ?>
                        <div class="d-flex flex-row comment-row">
                            <div class="p-2"><span class="round"><img src="<?= base_url('img/people/'.$people->image) ?>" alt="user" width="50"></span></div>
                            <div class="comment-text w-100">
                                <h5><?= $people->name ?></h5>
                                <div class="comment-footer">
                                    <span class="date"><?= $people->subject ?></span>
                                    <span class="label label-info">Pending</span> 
                                    <span class="action-icons">
                                        <a href="peoplesaid/activated/<?= $people->id ?>" data-abc="true"><i class="fa fa-edit"></i></a>
                                    </span>
                                </div>
                                <p class="m-b-5 m-t-10"><?= $people->message ?></p>
                            </div>
                        </div>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
        </div>

         <div class="col-xl-12 col-lg-7">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Daftar Suara Rakyat</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                     <div class="table-responsive">
                        <table class="table table-bordered" id="data-people-said" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Message</th>
                                    <th>Option</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
<?php echo $this->endSection(); ?>
<?php echo $this->section('script'); ?>
<script type="text/javascript">
    $(document).ready(function() {
        tampil_table_user();

        const swal = $('.swal').data('swal');
        if (swal) {
            Swal.fire({
                icon: 'success',
                text: swal
            })
        }
    });

      function tampil_table_user() {
        $('#data-people-said').DataTable({
            processing: true,
            serverSide: true,
            bDestroy: true,
            responsive: true,
            ajax: {
                url: "<?php echo base_url('dashboard/dt_people_said'); ?>",
                type: "POST",
                data: {},
                error:function(data){
                    console.log(data);
                }
            },
            columns: [
                {"data": "no"},
                {"data": "name"},
                {"data": "message"},
                {"data": "option"}
            ],
            columnDefs: [{
                    targets: [0, -1],
                    orderable: false,
                },
                {
                    width: "1%",
                    targets: [0, -1],
                },
                {
                    className: "dt-nowrap",
                    targets: [-1],
                },
                {
                    orderable: false,
                    targets: [0, 3],
                }
            ],

        });
    }
</script>
<!-- /.container-fluid -->
<?php echo $this->endSection(); ?>
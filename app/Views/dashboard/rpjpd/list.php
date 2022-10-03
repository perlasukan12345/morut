<?php echo $this->extend('dashboard/template/index'); ?>

<?php echo $this->section('page-content'); ?>
<div class="container-fluid">
    <?= $breadcrumbs; ?>
    <!-- Begin Page Content -->
    <div class="swal" data-swal="<?= session()->getFlashdata('message') ?>"></div>
   
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <?php if (user_can('create-rpjpd')): ?>
                <a href="/rpjpd/add" class="btn btn-primary">Add RPJPD</a>
            <?php endif ?>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="data-rpjpd" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Opd</th>
                            <th>Title</th>
                            <th>Year</th>
                            <th>Download</th>
                            <th>Option</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>
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

    $(document).on('click', '.btn-delete', function(e) {
        e.preventDefault();
        const href = $(this).attr('href');
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                document.location.href = href;
            }
        })
    });

    function tampil_table_user() {
        $('#data-rpjpd').DataTable({
            processing: true,
            serverSide: true,
            bDestroy: true,
            responsive: true,
            ajax: {
                url: "<?php echo base_url('rpjpd/dt_rpjpd'); ?>",
                type: "POST",
                data: {},
                error: function(data) {
                    console.log(data);
                }
            },
            columns: [{
                    "data": "no"
                },
                {
                    "data": "opd"
                },
                {
                    "data": "title"
                },
                {
                    "data": "year"
                },
                {
                    "data": "download"
                },
                {
                    "data": "option"
                }
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
                    targets: [0, 4, 5],
                }
            ],

        });
    }
</script>
<!-- /.container-fluid -->
<?php echo $this->endSection(); ?>
<?php echo $this->extend('dashboard/template/index'); ?>

<?php echo $this->section('page-content'); ?>
<div class="container-fluid">
<?= $breadcrumbs; ?>
<!-- Begin Page Content -->
    <div class="swal" data-swal="<?= session()->getFlashdata('message') ?>"></div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <?php if (user_can('create-user')): ?>
                <a href="/user/add" class="btn btn-primary">Add User</a>
            <?php endif ?>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="data-user" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>User Name</th>
                            <th>Name</th>
                            <th>Role</th>
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

    $(document).on('click','.btn-delete',function(e){
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
        $('#data-user').DataTable({
            processing: true,
            serverSide: true,
            bDestroy: true,
            responsive: true,
            ajax: {
                url: "<?php echo base_url('user/dt_user'); ?>",
                type: "POST",
                data: {},
            },
            columns: [
                {"data": "no"},
                {"data": "username"},
                {"data": "name"},
                {"data": "role_name"},
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
                    targets: [0, 4],
                }
            ],

        });
    }
</script>
<!-- /.container-fluid -->
<?php echo $this->endSection(); ?>
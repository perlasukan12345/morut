<?php echo $this->extend('dashboard/template/index'); ?>

<?php echo $this->section('page-content'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">
    <?= $breadcrumbs; ?>
    <!-- Page Heading -->
    <div class="row">
        <div class="col-sm-6">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Role Edit</h6>
                </div>
                <form action="<?php echo base_url('role/update/' . $post->role_id) ?>" method="post">
                    <input type="hidden" name="token" value="<?= generate_token('role_edit'); ?>">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="Role Name">Role name</label>
                            <input type="text" class="form-control <?= ($validation->hasError('role_name')) ? 'is-invalid' : ''; ?>" id="role_name" name="role_name" value="<?php echo $post->role_name ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('role_name'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" name="edit_role" class="btn btn-success">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
<?php echo $this->endSection(); ?>
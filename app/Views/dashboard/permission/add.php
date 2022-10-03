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
                    <h6 class="m-0 font-weight-bold text-primary">Add Permission</h6>
                </div>
                <form action="<?php echo base_url('permission/create') ?>" method="post">
                    <input type="hidden" name="token" value="<?= generate_token('permission_add'); ?>">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="Description">Description</label>
                            <input type="text" class="form-control <?= ($validation->hasError('description')) ? 'is-invalid' : ''; ?>" id="description" name="description">
                            <div class="invalid-feedback">
                                <?= $validation->getError('description'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="Category">Category</label>
                            <input type="text" class="form-control <?= ($validation->hasError('category')) ? 'is-invalid' : ''; ?>" id="category" name="category">
                            <div class="invalid-feedback">
                                <?= $validation->getError('category'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" name="add_permission" class="btn btn-success">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php echo $this->endSection(); ?>
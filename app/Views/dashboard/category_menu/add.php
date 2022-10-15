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
                    <h6 class="m-0 font-weight-bold text-primary">Add Category</h6>
                </div>
                <form action="<?php echo base_url('category_menu/create/'.$menu) ?>" method="post">
                    <input type="hidden" name="token" value="<?= generate_token('category_menu_add'); ?>">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="Category Name">Category</label>
                            <input type="text" class="form-control <?= ($validation->hasError('category')) ? 'is-invalid' : ''; ?>" id="category" name="category">
                            <div class="invalid-feedback">
                                <?= $validation->getError('category'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" name="add_category_profile" class="btn btn-success">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php echo $this->endSection(); ?>
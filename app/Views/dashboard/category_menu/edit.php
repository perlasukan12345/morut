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
                    <h6 class="m-0 font-weight-bold text-primary">Category Edit</h6>
                </div>
                <form action="<?php echo base_url('category_menu/update/'.$menu.'/'.$post->category_menu_id) ?>" method="post">
                    <input type="hidden" name="token" value="<?= generate_token('category_menu_edit'); ?>">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="Category">Category</label>
                            <input type="text" class="form-control <?= ($validation->hasError('category')) ? 'is-invalid' : ''; ?>" id="category" name="category" value="<?php echo $post->category ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('category'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" name="edit_category_profile" class="btn btn-success">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
<?php echo $this->endSection(); ?>
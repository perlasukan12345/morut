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
                    <h6 class="m-0 font-weight-bold text-primary">Add OPD</h6>
                </div>
                <form action="<?php echo base_url('opd/create') ?>" method="post">
                    <input type="hidden" name="token" value="<?= generate_token('opd_add'); ?>">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="category">Category</label>
                             <select class="form-control <?= ($validation->hasError('category')) ? 'is-invalid' : ''; ?>" name="category" id="category">
                                <option value="">No Selected</option>
                                <?php foreach ($category as $row) : ?>
                                    <option value="<?php echo $row->category_opd_id; ?>"><?php echo $row->category; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <div class="invalid-feedback">
                                <?= $validation->getError('opd'); ?>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="OPD">OPD</label>
                            <input type="text" class="form-control <?= ($validation->hasError('opd')) ? 'is-invalid' : ''; ?>" id="opd" name="opd">
                            <div class="invalid-feedback">
                                <?= $validation->getError('opd'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="OPD">URL</label>
                            <input type="text" class="form-control <?= ($validation->hasError('url')) ? 'is-invalid' : ''; ?>" id="url" name="url">
                            <div class="invalid-feedback">
                                <?= $validation->getError('url'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" name="add_opd" class="btn btn-success">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php echo $this->endSection(); ?>
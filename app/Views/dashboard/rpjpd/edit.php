<?php echo $this->extend('dashboard/template/index'); ?>

<?php echo $this->section('page-content'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">
    <?= $breadcrumbs; ?>
    <!-- Page Heading -->
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-10">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Edit RPJPD</h6>
                </div>
                <form action="<?php echo base_url('rpjpd/update/' . $post->rpjpd_id) ?>" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="token" value="<?= generate_token('rpjpd_edit'); ?>">
                    <input type="hidden" name="old_file" value="<?= $post->file_name; ?>">
                    <div class="card-body">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-12">
                                    <label for="Title">Title</label>
                                    <input type="text" class="form-control <?= ($validation->hasError('title')) ? 'is-invalid' : ''; ?>" id="title" name="title" value="<?= old('title', $post->title); ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('title'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="opd">OPD</label>
                                    <select class="form-control <?= ($validation->hasError('opd')) ? 'is-invalid' : ''; ?>" name="opd" id="opd">
                                        <option value="">No Selected</option>
                                        <?php foreach ($opd as $row) : ?>
                                            <option value="<?php echo $row->opd_id; ?>" <?= ($row->opd_id === $post->opd_id) ? 'selected' : ''; ?>><?php echo $row->opd; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('opd'); ?>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label for="year">Year</label>
                                    <input type="text" class="form-control <?= ($validation->hasError('year')) ? 'is-invalid' : ''; ?>" id="year" name="year" value="<?= old('year', $post->year); ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('year'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="file">File</label>
                                    <input type="file" class="form-control-file <?= ($validation->hasError('file_name')) ? 'is-invalid' : ''; ?>" id="file_name" name="file_name" value="<?= old('file_name', $post->file_name); ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('file_name'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-12">
                                    <label for="description">Description</label>
                                    <textarea class="form-control <?= ($validation->hasError('description')) ? 'is-invalid' : ''; ?>" id="description" name="description" rows="8"><?= $post->description; ?></textarea>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('description'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" name="edit_news" class="btn btn-success">Edit</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-sm-1"></div>
    </div>
</div>
<?php echo $this->endSection(); ?>
<?php echo $this->section('script'); ?>
<script type="text/javascript">
    $(document).ready(function() {
        $("#opd").selectpicker();
    });
</script>
<?php echo $this->endSection(); ?>
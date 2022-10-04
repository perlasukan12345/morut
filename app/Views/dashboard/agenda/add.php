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
                    <h6 class="m-0 font-weight-bold text-primary">Add Agenda</h6>
                </div>
                <form action="<?php echo base_url('agenda/create') ?>" method="post">
                    <input type="hidden" name="token" value="<?= generate_token('agenda_add'); ?>">
                    <div class="card-body">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-12">
                                    <label for="Title">Title</label>
                                    <input type="text" class="form-control <?= ($validation->hasError('title')) ? 'is-invalid' : ''; ?>" id=" title" name="title" value="<?= old('title') ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('title'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-12">
                                    <label for="Category">Category</label>
                                    <select class="form-control <?= ($validation->hasError('category')) ? 'is-invalid' : ''; ?>" name="category" id="category">
                                        <option value="">No Selected</option>
                                        <option value="Kabupaten / Pemerintahan">Kabupaten / Pemerintahan</option>
                                        <option value="Masyarakat">Masyarakat</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('category'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-12">
                                    <label for="Agenda">Agenda</label>
                                    <textarea class="form-control <?= ($validation->hasError('agenda')) ? 'is-invalid' : ''; ?>" id="agenda" name="agenda" rows="8"></textarea>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('agenda'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" name="add_agenda" class="btn btn-success">Save</button>
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
    tinymce.init({
        selector: "textarea",
        plugins: 'preview searchreplace directionality fullscreen charmap advlist lists table',
        toolbar: 'undo redo | bold italic underline strikethrough | fontfamily fontsize blocks | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor | fullscreen  preview ',
        branding: false,
        promotion: false,
    });
</script>
<?php echo $this->endSection(); ?>
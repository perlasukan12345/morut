<?php echo $this->extend('dashboard/template/index'); ?>

<?php echo $this->section('page-content'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">
    <?= $breadcrumbs; ?>
    <!-- Page Heading -->
    <div class="swal" data-swal="<?= session()->getFlashdata('message') ?>"></div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">About</h6>
                </div>
                <form action="<?php echo base_url('about/update/'. $about->about_id) ?>" method="post">
                    <input type="hidden" name="token" value="<?= generate_token('token_about'); ?>">
                    <div class="card-body">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-12">
                                    <label for="history">History</label>
                                    <textarea class="form-control <?= ($validation->hasError('history')) ? 'is-invalid' : ''; ?>" id="history" name="history" rows="8"><?= $about->history ?></textarea>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('history'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-12">
                                    <label for="geografi">Geografi</label>
                                    <textarea class="form-control <?= ($validation->hasError('geografi')) ? 'is-invalid' : ''; ?>" id="geografi" name="geografi" rows="8"><?= $about->geografi ?></textarea>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('geografi'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>    
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-12">
                                    <label for="demografi">Demografi</label>
                                    <textarea class="form-control <?= ($validation->hasError('demografi')) ? 'is-invalid' : ''; ?>" id="demografi" name="demografi" rows="8"><?= $about->demografi ?></textarea>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('demografi'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" name="edit_flash" class="btn btn-success">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php echo $this->endSection(); ?>
<?php echo $this->section('script'); ?>
<script type="text/javascript">
     $(document).ready(function() {
        const swal = $('.swal').data('swal');
        if (swal) {
            Swal.fire({
                icon: 'success',
                text: swal
            })
        }
    });

   tinymce.init({
        selector: "textarea",
        plugins: 'preview searchreplace directionality fullscreen charmap advlist lists',
        toolbar: 'undo redo | bold italic underline strikethrough | fontfamily fontsize blocks | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor | fullscreen  preview ',
        branding: false,
        promotion: false,
    });
</script>
<?php echo $this->endSection(); ?>
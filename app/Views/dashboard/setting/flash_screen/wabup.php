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
                    <h6 class="m-0 font-weight-bold text-primary">Bupati</h6>
                </div>
                <form action="<?php echo base_url('flash/update_wabup/'. $wabup->flash_id) ?>" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="token" value="<?= generate_token('token_flash'); ?>">
                    <input type="hidden" name="imageOld" value="<?= $wabup->img ?>">
                    <div class="card-body">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control <?= ($validation->hasError('name')) ? 'is-invalid' : ''; ?>" id="name" name="name" value="<?= $wabup->name ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('name'); ?>
                                    </div>
                                </div>
                                 <div class="col-sm-6">
                                    <label for="address">Address</label>
                                    <input type="text" class="form-control <?= ($validation->hasError('address')) ? 'is-invalid' : ''; ?>" id="address" name="address" value="<?= $wabup->address ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('address'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="telephone">Telephone</label>
                                    <input type="text" class="form-control <?= ($validation->hasError('telephone')) ? 'is-invalid' : ''; ?>" id="telephone" name="telephone" value="<?= $wabup->telephone ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('telephone'); ?>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label for="Image">Image <span class="small">(400 x 600)</span></label>
                                            <input type="file" class="form-control-file <?= ($validation->hasError('image_file')) ? 'is-invalid' : ''; ?>" id="image_file" name="image_file" onchange="changeImage()">
                                            <div class="invalid-feedback">
                                                <?= $validation->getError('image_file'); ?>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <img src="<?= base_url('/img/setting/'. $wabup->img); ?>" alt="img-preview" class="img-thumbnail" heigth="300" width="200">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-12">
                                    <label for="job_history">Job History</label>
                                    <textarea class="form-control <?= ($validation->hasError('job_history')) ? 'is-invalid' : ''; ?>" id="job_history" name="job_history" rows="8"><?= $wabup->job_history ?></textarea>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('job_history'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                 <div class="col-sm-12">
                                    <label for="education_background">Education Background</label>
                                    <textarea class="form-control <?= ($validation->hasError('education_background')) ? 'is-invalid' : ''; ?>" id="education_background" name="education_background" rows="8"><?= $wabup->education_background ?></textarea>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('education_background'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>        
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-12">
                                    <label for="organization_history">Organization History</label>
                                    <textarea class="form-control <?= ($validation->hasError('organization_history')) ? 'is-invalid' : ''; ?>" id="organization_history" name="organization_history" rows="8"><?= $wabup->organization_history ?></textarea>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('organization_history'); ?>
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

    function changeImage() {
        const preview = document.querySelector('.img-thumbnail');
        const image = document.querySelector('#image_file');

        const imageUpload = new FileReader();
        imageUpload.readAsDataURL(image.files[0]);
        imageUpload.onload = function(e) {
            preview.src = e.target.result;
        }
    }

    tinymce.init({
        selector: "textarea",
        plugins: 'preview searchreplace directionality fullscreen charmap advlist lists',
        toolbar: 'undo redo | bold italic underline strikethrough | fontfamily fontsize blocks | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor | fullscreen  preview ',
        branding: false,
        promotion: false,
    });
</script>
<?php echo $this->endSection(); ?>
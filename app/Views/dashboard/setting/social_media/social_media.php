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
                    <h6 class="m-0 font-weight-bold text-primary">Social Media</h6>
                </div>
                <form action="<?php echo base_url('setting/update_social_media/'. $setting->setting_id) ?>" method="post">
                    <input type="hidden" name="token" value="<?= generate_token('token_social_media'); ?>">
                    <div class="card-body">
                        <div class="form-group">
                            <div class="row">
                                 <div class="col-sm-6">
                                    <label for="facebook">Facebook</label>
                                    <input type="text" class="form-control <?= ($validation->hasError('facebook')) ? 'is-invalid' : ''; ?>" id="facebook" name="facebook" value="<?= $setting->facebook ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('facebook'); ?>
                                    </div>
                                </div>    
                                 <div class="col-sm-6">
                                    <label for="twitter">Twitter</label>
                                    <input type="text" class="form-control <?= ($validation->hasError('twitter')) ? 'is-invalid' : ''; ?>" id="twitter" name="twitter" value="<?= $setting->twitter ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('twitter'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                 <div class="col-sm-6">
                                    <label for="instagram">Instagram</label>
                                    <input type="text" class="form-control <?= ($validation->hasError('instagram')) ? 'is-invalid' : ''; ?>" id="instagram" name="instagram" value="<?= $setting->instagram ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('instagram'); ?>
                                    </div>
                                </div>    
                                 <div class="col-sm-6">
                                    <label for="youtube">Youtube</label>
                                    <input type="text" class="form-control <?= ($validation->hasError('youtube')) ? 'is-invalid' : ''; ?>" id="youtube" name="youtube" value="<?= $setting->youtube ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('youtube'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" name="edit_image" class="btn btn-success">Update</button>
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
</script>
<?php echo $this->endSection(); ?>
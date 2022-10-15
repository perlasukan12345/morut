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
                    <h6 class="m-0 font-weight-bold text-primary">Contact</h6>
                </div>
                <form action="<?php echo base_url('setting/update_contact/'. $setting->setting_id) ?>" method="post">
                    <input type="hidden" name="token" value="<?= generate_token('token_contact'); ?>">
                    <div class="card-body">
                        <div class="form-group">
                            <div class="row">
                                 <div class="col-sm-6">
                                    <label for="address">Address</label>
                                    <input type="text" class="form-control <?= ($validation->hasError('address')) ? 'is-invalid' : ''; ?>" id="address" name="address" value="<?= $setting->address ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('address'); ?>
                                    </div>
                                </div>    
                                 <div class="col-sm-6">
                                    <label for="contact">Contact</label>
                                    <input type="text" class="form-control <?= ($validation->hasError('contact')) ? 'is-invalid' : ''; ?>" id="contact" name="contact" value="<?= $setting->contact ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('contact'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                 <div class="col-sm-6">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control <?= ($validation->hasError('email')) ? 'is-invalid' : ''; ?>" id="email" name="email" value="<?= $setting->email ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('email'); ?>
                                    </div>
                                </div>    
                                 <div class="col-sm-3">
                                    <label for="work_day">Work Day</label>
                                    <input type="text" class="form-control <?= ($validation->hasError('work_day')) ? 'is-invalid' : ''; ?>" id="work_day" name="work_day" value="<?= $setting->work_day ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('work_day'); ?>
                                    </div>
                                </div>
                                 <div class="col-sm-3">
                                    <label for="hour_of_work">Hour of Work</label>
                                    <input type="text" class="form-control <?= ($validation->hasError('hour')) ? 'is-invalid' : ''; ?>" id="hour" name="hour" value="<?= $setting->hour ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('hour'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                 <div class="col-sm-6">
                                    <label for="quotes">Quotes</label>
                                    <input type="text" class="form-control <?= ($validation->hasError('quotes')) ? 'is-invalid' : ''; ?>" id="quotes" name="quotes" value="<?= $setting->quotes ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('quotes'); ?>
                                    </div>
                                </div>    
                                 <div class="col-sm-6">
                                    <label for="motto">Motto</label>
                                    <input type="text" class="form-control <?= ($validation->hasError('motto')) ? 'is-invalid' : ''; ?>" id="motto" name="motto" value="<?= $setting->motto ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('motto'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">  
                                 <div class="col-sm-12">
                                    <label for="author">Author</label>
                                    <input type="text" class="form-control <?= ($validation->hasError('author')) ? 'is-invalid' : ''; ?>" id="author" name="author" value="<?= $setting->author ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('author'); ?>
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
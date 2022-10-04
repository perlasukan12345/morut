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
                    <h6 class="m-0 font-weight-bold text-primary">Image Background & Banner</h6>
                </div>
                <form action="<?php echo base_url('setting/update/'. $setting->setting_id) ?>" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="token" value="<?= generate_token('token_image'); ?>">
                    <input type="hidden" name="imageOldBg" value="<?= $setting->background ?>">
                    <input type="hidden" name="imageOldBn1" value="<?= $setting->banner1 ?>">
                    <input type="hidden" name="imageOldBn2" value="<?= $setting->banner2 ?>">
                    <input type="hidden" name="imageOldBn3" value="<?= $setting->banner3 ?>">
                    <input type="hidden" name="imageOldLogo" value="<?= $setting->logo ?>">
                    <div class="card-body">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="background">Background <span class="small">(1600 x 300)</span></label>
                                    <input type="file" class="form-control-file <?= ($validation->hasError('background')) ? 'is-invalid' : ''; ?>" id="background" name="background" onchange="changeImageBg()">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('background'); ?>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <img src="<?= base_url('/img/setting/'. $setting->background); ?>" alt="img-preview" class="img-thumbnailBg" heigth="100" width="200">
                                </div>
                            </div>
                        </div>   
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="logo">Logo <span class="small">(520 x 60)</span></label>
                                    <input type="file" class="form-control-file <?= ($validation->hasError('logo')) ? 'is-invalid' : ''; ?>" id="logo" name="logo" onchange="changeImageLogo()">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('logo'); ?>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <img src="<?= base_url('/img/setting/'. $setting->logo); ?>" alt="img-preview" class="img-thumbnailLogo" heigth="100" width="200">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="card">
                                <div class="card-header">
                                    Banner 1
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label for="title 1">Title</label>
                                                <input type="text" class="form-control <?= ($validation->hasError('title1')) ? 'is-invalid' : ''; ?>" id="title1" name="title1" value="<?= $setting->title1 ?>">
                                                    <div class="invalid-feedback">
                                                        <?= $validation->getError('title1'); ?>
                                                    </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="url 1">Url</label>
                                                <input type="text" class="form-control <?= ($validation->hasError('url1')) ? 'is-invalid' : ''; ?>" id="url1" name="url1" value="<?= $setting->url1 ?>">
                                                    <div class="invalid-feedback">
                                                        <?= $validation->getError('url1'); ?>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label for="url tag 1">Url Tag</label>
                                                <input type="text" class="form-control <?= ($validation->hasError('url_tag1')) ? 'is-invalid' : ''; ?>" id="url_tag1" name="url_tag1" value="<?= $setting->url_tag1 ?>">
                                                    <div class="invalid-feedback">
                                                        <?= $validation->getError('url_tag1'); ?>
                                                    </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="description 1">Description</label>
                                                <textarea class="form-control <?= ($validation->hasError('description1')) ? 'is-invalid' : ''; ?>" id="description1" name="description1"><?= $setting->description1 ?></textarea>
                                                    <div class="invalid-feedback">
                                                        <?= $validation->getError('description1'); ?>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label for="banner 1">Banner<span class="small">(1600 x 800)</span></label>
                                                <input type="file" class="form-control-file <?= ($validation->hasError('banner1')) ? 'is-invalid' : ''; ?>" id="banner1" name="banner1" onchange="changeImageBn1()">
                                                <div class="invalid-feedback">
                                                    <?= $validation->getError('banner1'); ?>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <img src="<?= base_url('/img/setting/'. $setting->banner1); ?>" alt="img-preview" class="img-thumbnailBn1" heigth="100" width="200">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="card">
                                <div class="card-header">
                                    Banner 2
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label for="title 2">Title</label>
                                                <input type="text" class="form-control <?= ($validation->hasError('title2')) ? 'is-invalid' : ''; ?>" id="title2" name="title2" value="<?= $setting->title2 ?>">
                                                    <div class="invalid-feedback">
                                                        <?= $validation->getError('title2'); ?>
                                                    </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="url 2">Url</label>
                                                <input type="text" class="form-control <?= ($validation->hasError('url2')) ? 'is-invalid' : ''; ?>" id="url2" name="url2" value="<?= $setting->url2 ?>">
                                                    <div class="invalid-feedback">
                                                        <?= $validation->getError('url2'); ?>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label for="url tag 2">Url Tag</label>
                                                <input type="text" class="form-control <?= ($validation->hasError('url_tag2')) ? 'is-invalid' : ''; ?>" id="url_tag2" name="url_tag2" value="<?= $setting->url_tag2 ?>">
                                                    <div class="invalid-feedback">
                                                        <?= $validation->getError('url_tag2'); ?>
                                                    </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="description 2">Description</label>
                                                <textarea class="form-control <?= ($validation->hasError('description2')) ? 'is-invalid' : ''; ?>" id="description2" name="description2"><?= $setting->description2 ?></textarea>
                                                    <div class="invalid-feedback">
                                                        <?= $validation->getError('description2'); ?>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label for="banner 2">Banner 2 <span class="small">(1600 x 800)</span></label>
                                                <input type="file" class="form-control-file <?= ($validation->hasError('banner2')) ? 'is-invalid' : ''; ?>" id="banner2" name="banner2" onchange="changeImageBn2()">
                                                <div class="invalid-feedback">
                                                    <?= $validation->getError('banner2'); ?>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <img src="<?= base_url('/img/setting/'. $setting->banner2); ?>" alt="img-preview" class="img-thumbnailBn2" heigth="100" width="200">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="card">
                                <div class="card-header">
                                    Banner 3
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label for="title 3">Title</label>
                                                <input type="text" class="form-control <?= ($validation->hasError('title3')) ? 'is-invalid' : ''; ?>" id="title3" name="title3" value="<?= $setting->title3 ?>">
                                                    <div class="invalid-feedback">
                                                        <?= $validation->getError('title3'); ?>
                                                    </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="url 3">Url</label>
                                                <input type="text" class="form-control <?= ($validation->hasError('url3')) ? 'is-invalid' : ''; ?>" id="url3" name="url3" value="<?= $setting->url3 ?>">
                                                    <div class="invalid-feedback">
                                                        <?= $validation->getError('url3'); ?>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label for="url tag 3">Url Tag</label>
                                                <input type="text" class="form-control <?= ($validation->hasError('url_tag3')) ? 'is-invalid' : ''; ?>" id="url_tag3" name="url_tag3" value="<?= $setting->url_tag3 ?>">
                                                    <div class="invalid-feedback">
                                                        <?= $validation->getError('url_tag3'); ?>
                                                    </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="description 3">Description</label>
                                                <textarea class="form-control <?= ($validation->hasError('description3')) ? 'is-invalid' : ''; ?>" id="description3" name="description3"><?= $setting->description3 ?></textarea>
                                                    <div class="invalid-feedback">
                                                        <?= $validation->getError('description3'); ?>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label for="banner 3">Banner 3 <span class="small">(1600 x 800)</span></label>
                                                <input type="file" class="form-control-file <?= ($validation->hasError('banner3')) ? 'is-invalid' : ''; ?>" id="banner3" name="banner3" onchange="changeImageBn3()">
                                                <div class="invalid-feedback">
                                                    <?= $validation->getError('banner3'); ?>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <img src="<?= base_url('/img/setting/'. $setting->banner3); ?>" alt="img-preview" class="img-thumbnailBn3" heigth="100" width="200">
                                            </div>
                                        </div>
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

    function changeImageBg() {
        const preview = document.querySelector('.img-thumbnailBg');
        const image = document.querySelector('#background');

        const imageUpload = new FileReader();
        imageUpload.readAsDataURL(image.files[0]);
        imageUpload.onload = function(e) {
            preview.src = e.target.result;
        }
    }

    function changeImageBn1() {
        const preview = document.querySelector('.img-thumbnailBn1');
        const image = document.querySelector('#banner1');

        const imageUpload = new FileReader();
        imageUpload.readAsDataURL(image.files[0]);
        imageUpload.onload = function(e) {
            preview.src = e.target.result;
        }
    }

    function changeImageBn2() {
        const preview = document.querySelector('.img-thumbnailBn2');
        const image = document.querySelector('#banner2');

        const imageUpload = new FileReader();
        imageUpload.readAsDataURL(image.files[0]);
        imageUpload.onload = function(e) {
            preview.src = e.target.result;
        }
    }

    function changeImageBn3() {
        const preview = document.querySelector('.img-thumbnailBn3');
        const image = document.querySelector('#banner3');

        const imageUpload = new FileReader();
        imageUpload.readAsDataURL(image.files[0]);
        imageUpload.onload = function(e) {
            preview.src = e.target.result;
        }
    }

    function changeImageLogo() {
        const preview = document.querySelector('.img-thumbnailLogo');
        const image = document.querySelector('#logo');

        const imageUpload = new FileReader();
        imageUpload.readAsDataURL(image.files[0]);
        imageUpload.onload = function(e) {
            preview.src = e.target.result;
        }
    }
</script>
<?php echo $this->endSection(); ?>
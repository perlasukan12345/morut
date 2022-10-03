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
                    <h6 class="m-0 font-weight-bold text-primary">Add News</h6>
                </div>
                <form action="<?php echo base_url('news/create') ?>" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="token" value="<?= generate_token('news_add'); ?>">
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
                                <div class="col-sm-6">
                                    <label for="User">User</label>
                                    <select class="form-control <?= ($validation->hasError('user')) ? 'is-invalid' : ''; ?>" name="user" id="user">
                                        <option value="">No Selected</option>
                                        <?php foreach ($user as $row) : ?>
                                            <option value="<?php echo $row->user_id; ?>"><?php echo $row->name; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('user'); ?>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label for="Category">Category</label>
                                    <select class="form-control <?= ($validation->hasError('category')) ? 'is-invalid' : ''; ?>" name="category" id="category">
                                        <option value="">No Selected</option>
                                        <?php foreach ($category as $row) : ?>
                                            <option value="<?php echo $row->category_news_id; ?>"><?php echo $row->category_name; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('category'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="Image">Image <span class="small">(750 x 450)</span></label>
                                    <input type="file" class="form-control-file <?= ($validation->hasError('image_file')) ? 'is-invalid' : ''; ?>" id=" image_file" name="image_file" onchange="changeImage(this)">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('image_file'); ?>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <img src="<?= base_url('/img/morut.png') ?>" alt="img-preview" class="img-thumbnail" width="100px" heigth="100px" id="img-preview">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-12">
                                    <label for="Content">Content</label>
                                    <textarea class="form-control <?= ($validation->hasError('content')) ? 'is-invalid' : ''; ?>" id="content" name="content" rows="8"></textarea>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('content'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" name="add_news" class="btn btn-success">Save</button>
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
    function changeImage(input, id) {
        id = id || '#img-preview';
        if (input.files && input.files[0]) {
            var reader = new FileReader();
     
            reader.onload = function (e) {
                $(id)
                        .attr('src', e.target.result)
                        .width(200)
                        .height(150);
            };
     
            reader.readAsDataURL(input.files[0]);
        }
    }

    $(document).ready(function() {
        $("#user").selectpicker();
        $("#category").selectpicker();
    });

    tinymce.init({
        selector: "textarea#content",
        plugins: 'preview importcss searchreplace autolink directionality code visualblocks visualchars fullscreen image link media template codesample table charmap pagebreak nonbreaking anchor insertdatetime advlist lists wordcount help charmap quickbars emoticons',
        menubar: 'file edit view insert format tools table',
        toolbar: 'undo redo | bold italic underline strikethrough | fontfamily fontsize blocks | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | link media',
        toolbar_sticky: true,
        image_advtab: true,
        height: 600,
        image_caption: true,
        quickbars_selection_toolbar: 'bold italic | quicklink h2 h3 blockquote quickimage quicktable',
        toolbar_mode: 'sliding',
        contextmenu: 'link image table',
        branding: false,
        promotion: false,
    });
</script>
<?php echo $this->endSection(); ?>
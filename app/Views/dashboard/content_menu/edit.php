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
                    <h6 class="m-0 font-weight-bold text-primary">Edit Content</h6>
                </div>
                <form action="<?php echo base_url('content_menu/update/'.$menu.'/'.$post->menu_id) ?>" method="post">
                    <input type="hidden" name="token" value="<?= generate_token('content_menu_edit'); ?>">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="Category">Category</label>
                            <select class="form-control <?= ($validation->hasError('category')) ? 'is-invalid' : ''; ?>" name="category" id="category">
                                <option value="">No Selected</option>
                                <?php foreach ($category as $row) : ?>
                                    <option value="<?php echo $row->category_menu_id; ?>" <?= ($row->category_menu_id == $post->category_menu_id) ? 'selected' : '' ?> ><?php echo $row->category; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <div class="invalid-feedback">
                                <?= $validation->getError('category'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="Title">Title</label>
                            <input type="text" class="form-control <?= ($validation->hasError('title')) ? 'is-invalid' : ''; ?>" id="title" name="title" value="<?= $post->title ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('title'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="Content">Content</label>
                            <textarea class="form-control <?= ($validation->hasError('content')) ? 'is-invalid' : ''; ?>" id="content" name="content" rows="8"><?= $post->content ?></textarea>
                            <div class="invalid-feedback">
                                <?= $validation->getError('content'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" name="edit_content_profile" class="btn btn-success">Update</button>
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
        $("#category").selectpicker();
    });

    tinymce.init({
        selector: "textarea#content",
        plugins: 'preview importcss searchreplace autolink directionality code visualblocks visualchars fullscreen image link template codesample table charmap pagebreak nonbreaking anchor insertdatetime advlist lists wordcount help charmap quickbars emoticons',
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
<?php echo $this->extend('dashboard/template/index'); ?>

<?php echo $this->section('page-content'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- 404 Error Text -->
    <div class="text-center">
        <p class="error mx-auto" data-text="OOPS...">OOPS...</p>
        <p class="lead text-gray-800 mb-5">Page Not Found</p>
        <p class="text-gray-500 mb-0">You, don't have access to this method, please contact your Administrator</p>
        <a href="javascript:history.back();">&larr; Back to Dashboard</a>
    </div>

</div>

<!-- /.container-fluid -->
<?php echo $this->endSection(); ?>
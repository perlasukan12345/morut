<?php echo $this->extend('dashboard/template/index'); ?>

<?php echo $this->section('page-content'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">
 <?= $breadcrumbs; ?>
    <!-- Page Heading -->
    <div class="row">
    	<div class="col-sm-6">
    		<div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">User Registration</h6>
                </div>
                <form action="<?php echo base_url('user/create') ?>" method="post">
                    <input type="hidden" name="token" value="<?= generate_token('user_add'); ?>">
                	<div class="card-body">
	                    <div class="form-group">
						    <label for="User Name">Username</label>
						    <input type="text" class="form-control <?= ($validation->hasError('username')) ? 'is-invalid' : ''; ?>" id="username" name="username">
                            <div class="invalid-feedback">
                                <?= $validation->getError('username'); ?>
                            </div>
						</div>
                        <div class="form-group">
                            <label for="Password">Password</label>
                            <input type="password" class="form-control <?= ($validation->hasError('password')) ? 'is-invalid' : ''; ?>" id="password" name="password">
                            <div class="invalid-feedback">
                                <?= $validation->getError('password'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="pwd_conf">Password Confirm</label>
                            <input type="password" class="form-control <?= ($validation->hasError('password_conf')) ? 'is-invalid' : ''; ?>" id="password_conf" name="password_conf">
                            <div class="invalid-feedback">
                                <?= $validation->getError('password_conf'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control <?= ($validation->hasError('name')) ? 'is-invalid' : ''; ?>" id="name" name="name">
                           <div class="invalid-feedback">
                                <?= $validation->getError('name'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="Role Name">Role Name</label>
                                <select class="form-control <?= ($validation->hasError('role_name')) ? 'is-invalid' : ''; ?>" name="role_name" id="role_name">
                                    <option value="">No Selected</option>
                                    <?php foreach ($role as $row) : ?>
                                        <option value="<?php echo $row->role_id; ?>"><?php echo $row->role_name; ?></option>
                                    <?php endforeach; ?>
                                </select>
                           <div class="invalid-feedback">
                                <?= $validation->getError('role_name'); ?>
                            </div>
                        </div>
	                </div>
	                <div class="card-footer">
	                	<button type="submit" name="add_user" class="btn btn-success">Register</button>
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
        $("#role_name").selectpicker();
    });
</script>
<?php echo $this->endSection(); ?>
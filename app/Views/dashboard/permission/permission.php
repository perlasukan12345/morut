<?php echo $this->extend('dashboard/template/index'); ?>

<?php echo $this->section('page-content'); ?>
<div class="container-fluid">
<?= $breadcrumbs; ?>
<!-- Begin Page Content -->
    <div class="panel panel-default">
		<div class="panel-body">
			<form action="<?php echo base_url('permission/create_role_permission') ?>" method="post" role="form">
				<table width="100%" class="table table-hover table-bordered">
					<thead>
						<tr>
							<td class="text-center"><h6><b>Permission</b></h6></td>
							<?php
							foreach ($role_data as $role) {
							?>
							<td class="text-center"><h6><b><?= $role->role_name; ?></b></h6></td>
							<?php
							 } 
							 ?>
						</tr>	
					</thead>
					<tbody>
						<?php
						$category = '';
						foreach ($permission_data as $permission) {
							if ($permission->permission_category != $category){
						 ?>
						 <tr style="background-color:#3498DB;color:$ffffff;">
						 	<td colspan="<?php count($role_data) + 1 ?>">
						 		<strong><h6><b><?= $permission->permission_category; ?> Module</b></h6></strong>
						 	</td>
						 </tr>
							 <?php 
							 $category = $permission->permission_category;
							 }
							 ?>
						<tr>
							<td><h6><?= $permission->permission_description; ?></h6></td>
							<?php
							foreach ($role_data as $value) {
							 ?>
							 <td class="text-center">
							 <input class="icheck" type="checkbox" name="pr[<?= $value->role_id ?>][<?= $permission->permission_id ?>]" value="[<?= $value->role_id ?>][<?= $permission->permission_id ?>]" 
							 	<?= (in_array($value->role_id."-".$permission->permission_id,$permission_role)) ? 'checked' : '' ?> <?php if($value->is_hidden == 1) echo 'disabled'?>>
							 </td>
							 <?php  	
							 } 
							?>
						</tr>
						 <?php
						 } 
						?>
					</tbody>
				</table>
				<br>
				<input type="hidden" name="token" value="<?= generate_token('update_permission'); ?>">
				<div class="col-lg-12">
					<button type="submit" class="btn btn-primary pull-right">Set Permission</button>
				</div>
			</form>			
		</div>
	</div>
</div>
<?php echo $this->endSection(); ?>
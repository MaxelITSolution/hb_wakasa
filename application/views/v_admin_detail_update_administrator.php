<script type="text/javascript">
	$('#master').addClass('active_main');
	$('#administrator').addClass('active');
	$(document).ready(function () {
		$('#administratorTable').DataTable();
	});
</script>
<div class="mycontent">
	
	<div class="col-sm-12"><h2>DETAIL / UPDATE ADMINISTRATOR</h2></div>
	
	<div class="col-xs-12">
		<div class="row">
			<div class="col-xs-3"><a href="administrator"><i class="fa fa-reply fa-lg"></i> Kembali</a></div>
			<div class="col-xs-6"></div>
			<div class="col-xs-3"></div>
		</div>
	</div>
	<div class="container"></div>
	<br/>
	<hr class="bold">
	<br/>
	<form action="update_administrator" method="post">
		<?php foreach ($administrator->result() as $row)  
        {  
        ?>
		<div class="col-sm-6" id="left_content">
			<input type="hidden" class="input_box" id="admin_id" name="admin_id" placeholder="Id ... " value="<?php echo $row->admin_id; ?>" required>
			<input type="text" class="input_box" id="admin_uname" name="admin_uname" placeholder="User Name ... " value="<?php echo $row->admin_uname; ?>" required>
			<textarea rows="5" class="textarea_box" id="admin_address" name="admin_address" placeholder="Address ... " required><?php echo $row->admin_address; ?></textarea>
		</div>
		<div class="col-sm-6" id="right_content">
			<input type="email" class="input_box" id="admin_mail" name="admin_mail" placeholder="Email ... " value="<?php echo $row->admin_email; ?>" required>
			<input type="text" class="input_box" id="admin_phone" name="admin_phone" placeholder="Phone Number ... " value="<?php echo $row->admin_phone; ?>"  required>
			<button type="submit" class="btn btn-default pull-right" id="btn_save_administrator">Save</button>
		</div>
		<?php } ?>
	</form>

</div>
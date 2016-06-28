<script type="text/javascript">
	$('#master').addClass('active_main');
	$('#administrator').addClass('active');
	$(document).ready(function () {
		$('#administratorTable').DataTable();
	});
</script>
<div class="mycontent">
	
	<div class="col-sm-12"><h2>TAMBAH ADMINISTRATOR</h2></div>
	
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
	<form action="new_administrator" method="post">
		<div class="col-sm-6" id="left_content">
			<input type="text" class="input_box" id="admin_uname" name="admin_uname" placeholder="User Name ... " required>
			<input type="text" class="input_box" id="admin_phone" name="admin_phone" placeholder="Phone Number ... "  required>
			<textarea rows="5" class="textarea_box" id="admin_address" name="admin_address" placeholder="Address ... " required></textarea>
		</div>
		<div class="col-sm-6" id="right_content">
			<input type="email" class="input_box" id="admin_mail" name="admin_mail" placeholder="Email ... "  required>
			<input type="password" class="input_box" id="admin_password" name="admin_password" placeholder="Password ... "  required>
			<button type="submit" class="btn btn-default pull-right" id="btn_save_administrator">Save</button>
		</div>
	</form>

</div>
<script type="text/javascript">
	$('#setting').addClass('active_main');
	$('#amail').addClass('active');
	$(document).ready(function () {

	});
</script>
<div class="mycontent">
	
	<div class="col-sm-12"><h2>ADMIN EMAIL</h2></div>
	<div class="container"></div>
	<br/>
	<hr class="bold">
	<br/>
	<form class="form-inline" action="update_admin_mail" method="post">
		<?php foreach ($admin_mail->result() as $row)  
        {  
        ?>
			<div class="col-sm-6" style="text-align: right;">
				<div class="form-group">
				    <label for="admin_email_address">Email</label>
				   	<input type="text" class="form-control for_email" id="admin_email_address" name="admin_email_address" placeholder="Email Address ... " value="<?php echo $row->admin_email_address; ?>" required>
				</div>
				<div class="form-group" style="margin-top: 10px;">
				    <label for="admin_email_uname">UserName</label>
				   	<input type="text" class="form-control for_email" id="admin_email_uname" name="admin_email_uname" placeholder="Email UserName ... " value="<?php echo $row->admin_email_Name; ?>" required>
				</div>
				<div class="form-group" style="margin-top: 10px;">
				    <label for="admin_email_message">Message</label>

				    <textarea rows="5" class="form-control for_email" id="admin_email_message" name="admin_email_message" placeholder="Message ... " required><?php echo $row->admin_email_message; ?></textarea>
				</div>
				<button type="submit" class="btn btn-default pull-right" id="btn_save_email">Save</button>
			</div>
			<div class="col-sm-6">
				<div class="form-group">
				    <label for="admin_email_password">Password</label>
				   	<input type="password" class="form-control for_email" id="admin_email_password" name="admin_email_password" placeholder="Password ... " value="<?php echo $row->admin_email_password; ?>" required>
				</div>
				<div class="form-group" style="margin-top: 10px;">
				    <label for="admin_email_subject" style="margin-right: 10px;">Subject</label>
				   	<input type="text" class="form-control for_email" id="admin_email_subject" name="admin_email_subject" placeholder="Email Subject ... " value="<?php echo $row->admin_email_subject; ?>" required>
				</div>
			</div>
		<?php } ?>
	</form>
</div>
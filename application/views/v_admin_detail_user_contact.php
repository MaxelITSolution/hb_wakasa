<script type="text/javascript">
	$('#report').addClass('active_main');
	$('#client_contact').addClass('active');
</script>
<div class="mycontent">
	
	<div class="col-sm-12"><h2>DETAIL CLIENT CONTACT</h2></div>
	
	<div class="col-xs-12">
		<div class="row">
			<div class="col-xs-3"><a href="<?php echo base_url(); ?>Backend/client_contact"><i class="fa fa-reply fa-lg"></i> Kembali</a></div>
			<div class="col-xs-6"></div>
			<div class="col-xs-3"></div>
		</div>
	</div>
	<div class="container"></div>
	<br/>
	<hr class="bold">
	<br/>
	<?php foreach ($detail_message->result() as $row)  
    {  
    ?>
	<div class="col-sm-6" id="left_content">
		<input type="hidden" class="input_box" id="admin_id" name="admin_id" placeholder="Id ... " value="<?php echo $row->id; ?>" required>
		<h3><i>Nama :</i></h3>
		<input type="text" class="input_box" id="admin_uname" name="admin_uname" placeholder="User Name ... " value="<?php echo $row->name; ?>" required>
		<h3><i>Phone :</i></h3>
		<input type="text" class="input_box" id="admin_uname" name="admin_uname" placeholder="User Name ... " value="<?php echo $row->phone; ?>" required>
		<h3><i>Date :</i></h3>
		<input type="text" class="input_box" id="admin_uname" name="admin_uname" placeholder="User Name ... " value="<?php echo $row->send_date; ?>" required>
		<h3><i>Time :</i></h3>
		<input type="text" class="input_box" id="admin_uname" name="admin_uname" placeholder="User Name ... " value="<?php echo $row->send_time; ?>" required>
	</div>
	<div class="col-sm-6" id="right_content">
		<h3><i>E-mail :</i></h3>
		<input type="text" class="input_box" id="admin_uname" name="admin_uname" placeholder="User Name ... " value="<?php echo $row->email; ?>" required>
		<h3><i>Message :</i></h3>
		<textarea rows="10" class="textarea_box" id="admin_address" name="admin_address" placeholder="Address ... " required><?php echo $row->message; ?></textarea>
	</div>
	<?php } ?>

</div>
<!DOCTYPE html>
<html lang="en-us">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<head>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/css/contact.css"/>
		<link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/footer.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/headerbiru.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/bannerpolos.css" type="text/css" />

		<script type="text/javascript">
			$(document).ready(function(){
				var stat_send = document.getElementById('is_send').value;
				var stat_subs = document.getElementById('is_subs').value;

				if (stat_send=="ok"){
					swal("Pesan Telah Terkirim", "", "success");
				}
				if (stat_send=="no"){
					sweetAlert("Gagal Mengirim Pesan", "", "error");
				}

				if (stat_subs=="ok"){
					swal("Anda Berhasil Subscribe", "", "success");
				}
				if (stat_subs=="no"){
					sweetAlert("Gagal Subscribe", "", "error");
				}

			});
		</script>

	</head>
	<body style="background-image: url('<?php echo base_url(); ?>asset/image/content/bg_full.png'); overflow-x: hidden;">
		<?php include('v_header.php'); ?>
		<?php include('v_banner_polos.php'); ?>
		<div class="content">
			<input type="hidden" id="is_send" value="<?php echo $is_send; ?>">
			<input type="hidden" id="is_subs" value="<?php echo $is_subs; ?>">
			<div class="container">
				<div class="col-sm-5" id="contact_us">
				<form action="<?php echo base_url(); ?>client_message" method="post">
					<h3><?php echo $lang_array[58]; ?></h3>
					<div class="form-group">
					    <label for="contact_us_name" class="sr-only">Name</label>
					   	<input type="text" class="form-control" id="contact_us_name" name="contact_us_name" placeholder="Name">
					</div>
					<div class="form-group">
					    <label for="contact_us_phone" class="sr-only">Phone Number</label>
					   	<input type="text" class="form-control" id="contact_us_phone" name="contact_us_phone" placeholder="Phone Number">
					</div>
					<div class="form-group">
					    <label for="contact_us_email" class="sr-only">E-mail</label>
					   	<input type="email" class="form-control" id="contact_us_email" name="contact_us_email" placeholder="Email">
					</div>
					<div class="form-group">
					    <label for="contact_us_message" class="sr-only">Message</label>
					   	<textarea class="form-control" rows="5" id="contact_us_message" name="contact_us_message" placeholder="Message"></textarea>
					</div>
					<button type="submit" class="btn pull-right" id="contact_us_button">SUBMIT</button>
					<div class="row"></div>
				</form>
				</div>
				<div class="col-sm-1" id="qwe"></div>
				<div class="col-sm-5" id="subscribe_us">
					<h3><?php echo $lang_array[59]; ?></h3>
					<p id="welcome"><?php echo $lang_array[9]; ?></p>
					<p id="sub_desc"><?php echo $lang_array[60]; ?></p>
					<form action="<?php echo base_url(); ?>client_subscribe" method="post">
						<div class="form-group" id="subscribe_us_input_name">
						    <label for="subscribe_us_name" class="sr-only">Name</label>
						   	<input type="text" class="form-control" id="subscribe_us_name" name="subscribe_us_name" placeholder="Name">
						</div>
						<div class="form-group">
						    <label for="contact_us_email" class="sr-only">E-mail</label>
						   	<input type="email" class="form-control" id="contact_us_email" name="contact_us_email" placeholder="Email">
						</div>
						<button type="submit" class="btn pull-right" id="subscribe_us_button">SUBSCRIBE</button>
					</form>
					<div class="row"></div>
				</div>
			</div>
		</div>
		<div id="to_footer"></div>
		<?php include('v_footer.php'); ?>
	</body>
</html>
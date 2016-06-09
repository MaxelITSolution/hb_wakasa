<!DOCTYPE html>
<html lang="en-us">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<head>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/css/contact.css"/>
		<link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/footer.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/headerbiru.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/bannerpolos.css" type="text/css" />
	</head>
	<body style="background-image: url('<?php echo base_url(); ?>asset/image/content/bg_full.png'); overflow-x: hidden;">
		<?php include('v_header.php'); ?>
		<?php include('v_banner_polos.php'); ?>
		<div class="content">
			<div class="container">
				<div class="col-sm-5" id="contact_us">
					<h3>HUBUNGI KAMI</h3>
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
					<button type="button" class="btn pull-right" id="contact_us_button">SUBMIT</button>
					<div class="row"></div>
				</div>
				<div class="col-sm-1" id="qwe"></div>
				<div class="col-sm-5" id="subscribe_us">
					<h3>IKUTI UPDATE KAMI</h3>
					<p id="welcome">Selamat Datang di <i>website</i> Wakasa Automotive Parts.</p>
					<p id="sub_desc">Kami adalah perusahaan penyedia suku cadang otomotif untuk berbagai mobil baik mobil penumpang dan mobil.</p>
					<div class="form-group" id="subscribe_us_input_name">
					    <label for="subscribe_us_name" class="sr-only">Name</label>
					   	<input type="text" class="form-control" id="subscribe_us_name" name="subscribe_us_name" placeholder="Name">
					</div>
					<div class="form-group">
					    <label for="contact_us_email" class="sr-only">E-mail</label>
					   	<input type="email" class="form-control" id="contact_us_email" name="contact_us_email" placeholder="Email">
					</div>
					<button type="button" class="btn pull-right" id="subscribe_us_button">SUBSCRIBE</button>
					<div class="row"></div>
				</div>
			</div>
		</div>
		<div id="to_footer"></div>
		<?php include('v_footer.php'); ?>
	</body>
</html>
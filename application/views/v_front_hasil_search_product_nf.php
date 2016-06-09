<!DOCTYPE html>
<html lang="en-us">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<head>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/css/hasilsearchproduct_nf.css"/>
		<link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/footer.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/headerbiru.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/bannerproduk.css" type="text/css" />
	</head>
	<body style="background-image: url('<?php echo base_url(); ?>asset/image/content/bg_content.png'); overflow-x: hidden;">
		<?php include('v_header.php'); ?>
		<?php include('v_banner_produk.php'); ?>
		<div class="content">
			<div class="container">
				<div id="title">
					<h3>HASIL PENCARIAN</h3>
					<p>Your search for "XXX" did not match with any document</p>
				</div>
			</div>
		</div>
		<div id="to_footer"></div>
		<?php include('v_footer.php'); ?>
	</body>
</html>
<!DOCTYPE html>
<html lang="en-us">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<head>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/css/karir.css"/>
		<link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/footer.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/headerbiru.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/bannerpolos.css" type="text/css" />
	</head>
	<body style="background-image: url('<?php echo base_url(); ?>asset/image/content/bg_content.png'); overflow-x: hidden;">
		<?php include('v_header.php'); ?>
		<?php include('v_banner_polos.php'); ?>
		<div class="content">
			<div class="container">
				<div class="col-sm-12" id="main">
					<div class="col-xs-6" id="left_content"><?php echo $lang_array[20]; ?></div>
					<div class="col-xs-6" id="right_content">
						<p><?php echo $lang_array[21]; ?></p>
						<p id="btm"><?php echo $lang_array[22]; ?></p>
					</div>
				</div>
			</div>
		</div>

		<?php include('v_footer.php'); ?>
	</body>
</html>
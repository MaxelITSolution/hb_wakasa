<!DOCTYPE html>
<html lang="en-us">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<head>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/css/hasilsearchgeneral_nf.css"/>
		<link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/footer.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/headerbiru.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/bannergeneral.css" type="text/css" />
	</head>
	<body style="background-image: url('<?php echo base_url(); ?>asset/image/content/bg_content.png'); overflow-x: hidden;">
		<?php include('v_header.php'); ?>
		<?php include('v_banner_general.php'); ?>
		<div class="content">
			<div class="container" id="container">
				<div id="title">
					<h3><?php echo $lang_array[61]; ?></h3>
					<p><?php echo $lang_array[62]; ?> "<?php echo $name; ?>" <?php echo $lang_array[65]; ?></p>
				</div>
				<div id="result">
					<p id="result_title"><?php echo $lang_array[66]; ?></p>
					<p id="result_desc"><?php echo $lang_array[81]; ?></p>
				</div>
			</div>
		</div>
		<div id="to_footer"></div>
		<?php include('v_footer.php'); ?>
	</body>
</html>
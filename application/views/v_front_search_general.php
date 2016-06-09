<!DOCTYPE html>
<html lang="en-us">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<head>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/css/searchgeneral.css"/>
		<link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/footer.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/headersearchgeneral.css" type="text/css" />
	</head>
	<body>
		<div id="to_header"></div>
		<?php include('v_header.php'); ?>
		<div class="content">
			<div id="title"><p>CARI TENTANG WAKASA</p></div>
			<form class="form-inline" action="search_g" method="post">
			  	<div class="form-group">
			    	<label class="sr-only" for="search_input">Masukkan Kata Kunci</label>
			    	<input type="text" class="form-control" id="search_input" name="search_input" placeholder="Masukkan kata kunci">
		  		</div>
			  	<button type="submit" class="btn" id="btn_search">Search <img src="<?php echo base_url(); ?>asset/image/content/search_icon.png" id="search_icon" /></button>
			</form>
		</div>
		<?php include('v_footer.php'); ?>
	</body>
</html>
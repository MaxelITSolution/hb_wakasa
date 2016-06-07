<!DOCTYPE html>
<html lang="en-us">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<head>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/css/afterlogin.css"/>
		<link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/footer.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/headerbiru.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/bannergeneral.css" type="text/css" />
	</head>
	<body style="background-image: url('<?php echo base_url(); ?>asset/image/content/bg_content.png'); overflow-x: hidden;">
		<?php include('v_header.php'); ?>
		<?php include('v_banner_jelajahi_produk.php'); ?>	
		<div class="content">
			<div class="container" id="container">
				<div id="title">
					<h3>ALL PRODUCT</h3>
				</div>
				<div class="paging pull-right"><b>Page 1 of 99 </b>&nbsp;&nbsp; 2 3 4 5 6 &nbsp;&nbsp; > <u>></u></div>
				<div id="result">
				<?php for ($i=0; $i<5; $i++) { ?>
					<div class="row">
						<?php for ($j=0; $j<4; $j++) { ?>
						<div class="col-sm-3">
							<div class="content_slider">
								<img src="<?php echo base_url(); ?>asset/image/content/baut.png" class="image_result"/>
								<div class="desc_title">
									<p>BAUT MOBIL AVANZA TIPE S</p>
								</div>
								<p class="desc_body">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, total rem aoeriam.</p>
								<p class="desc_footer">SELENGKAPNYA &nbsp;></p>
							</div>
						</div>
						<?php } ?>
					</div>
					<div id="space"></div>
					<?php } ?>
				</div>
				<div class="paging pull-right"><b>Page 1 of 99 </b>&nbsp;&nbsp; 2 3 4 5 6 &nbsp;&nbsp; > <u>></u></div>
			</div>
		</div>
		<div id="to_footer"></div>
		<?php include('v_footer.php'); ?>
	</body>
</html>	
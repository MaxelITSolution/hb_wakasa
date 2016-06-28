<!DOCTYPE html>
<html lang="en-us">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<head>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/css/jelajahi_produk.css"/>
		<link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/footer.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/headerbiru.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/banner_jelajahi_produk.css" type="text/css" />

		<link rel="stylesheet" href="<?php echo base_url(); ?>asset/lightbox/dist/css/lightbox.min.css">

		<script type="text/javascript">
			$(document).ready(function(){

				$("#arrow_right1").click(function(){
				    $('#arrow_right_top').click();
				});


				$("#arrow_right2").click(function(){
				    $('#arrow_right_bottom').click();
				});
			});

		</script>
	</head>
	<body style="background-image: url('<?php echo base_url(); ?>asset/image/content/bg_content.png'); overflow-x: hidden;">
		<?php include('v_header.php'); ?>
		<?php include('v_banner_jelajahi_produk.php'); ?>	
		<div class="content">
			<div class="content_produk_terbaru">
				<h3><?php echo $lang_array[16]; ?></h3>
				<div class="owl-carousel" id="owl-carousel-1">
					<?php $p_new1 = array(); $p_new1_ = array(); $p_new_ctr = 0; $my_ctr_new = 0;?>
				<?php foreach ($new_product->result() as $row) {
					if ($lang=="ina"){
						$p_new1[$p_new_ctr] = $row->product_name_ina;
						$p_new1_[$p_new_ctr] = $row->product_desc_ina;
						$p_new_ctr = $p_new_ctr+1;
					} else {
						$p_new1[$p_new_ctr] = $row->product_name_eng;
						$p_new1_[$p_new_ctr] = $row->product_desc_eng;
						$p_new_ctr = $p_new_ctr+1;
					}
				} ?>

				<?php foreach ($new_product->result() as $row)  
	            {  
	            ?>
					<div class="content_slider">
						<img src="<?php echo base_url(); ?>asset/image/Upload/<?php echo $row->product_image ?>"/>
						<div class="desc_title">
							<p><?php echo $p_new1[$my_ctr_new]; ?></p>
						</div>
						<p class="desc_body"><?php echo $p_new1_[$my_ctr_new]; ?></p>
						<a href="<?php echo base_url(); ?>asset/image/Upload/<?php echo $row->product_image ?>" data-lightbox="produk_terbaru"><p class="desc_footer">SELENGKAPNYA &nbsp;></p></a>
					</div>
				<?php
					$my_ctr_new = $my_ctr_new + 1;
				 } ?>
				</div>
				<img src="<?php echo base_url(); ?>asset/image/content/arrow_right.png" class="pull-right" id="arrow_right1"/>
				<!--<div class="paging pull-right"><b>Page 1 of 99 </b>&nbsp;&nbsp; 2 3 4 5 6 &nbsp;&nbsp; > <u>></u></div>-->
			</div>

			<div class="content_produk_unggulan">
				<h3><?php echo $lang_array[17]; ?></h3>
				<div class="owl-carousel" id="owl-carousel-2">
					<?php $p_ung1 = array(); $p_ung1_ = array(); $p_ung_ctr = 0; $my_ctr = 0;?>
				<?php foreach ($unggulan->result() as $row) {
					if ($lang=="ina"){
						$p_ung1[$p_ung_ctr] = $row->product_name_ina;
						$p_ung1_[$p_ung_ctr] = $row->product_desc_ina;
						$p_ung_ctr = $p_ung_ctr+1;
					} else {
						$p_ung1[$p_ung_ctr] = $row->product_name_eng;
						$p_ung1_[$p_ung_ctr] = $row->product_desc_eng;
						$p_ung_ctr = $p_ung_ctr+1;
					}
				} ?>

				<?php foreach ($unggulan->result() as $row)  
	            {  
	            ?>
					<div class="content_slider">
						<img src="<?php echo base_url(); ?>asset/image/Upload/<?php echo $row->product_image ?>"/>
						<div class="desc_title">
							<p><?php echo $p_ung1[$my_ctr]; ?></p>
						</div>
						<p class="desc_body"><?php echo $p_ung1_[$my_ctr]; ?></p>
						<a href="<?php echo base_url(); ?>asset/image/Upload/<?php echo $row->product_image ?>" data-lightbox="produk_unggulan"><p class="desc_footer">SELENGKAPNYA &nbsp;></p></a>
					</div>
				<?php
					$my_ctr = $my_ctr + 1;
				 } ?>
				</div>
				<img src="<?php echo base_url(); ?>asset/image/content/arrow_right.png" class="pull-right" id="arrow_right2"/>
				<!--<div class="paging pull-right"><b>Page 1 of 99 </b>&nbsp;&nbsp; 2 3 4 5 6 &nbsp;&nbsp; > <u>></u></div>-->
			</div>
		</div>
		<div id="to_footer"></div>
		<?php include('v_footer.php'); ?>

		<script src="<?php echo base_url(); ?>asset/lightbox/dist/js/lightbox-plus-jquery.min.js"></script>

		<script src="<?php echo base_url(); ?>asset/owl-carousel/owl.carousel.min.js"></script>
		<script typ="text/javascript">
			$(document).ready(function(){
			  $("#owl-carousel-1").owlCarousel({
					items: 1,
					nav: true,
					loop: true,
					navText: ['<img src="<?php echo base_url(); ?>asset/image/content/arrow_left.png" id="arrow_left"/>', '<img src="<?php echo base_url(); ?>asset/image/content/arrow_right.png" id="arrow_right_top"/>'],
					responsive : {
					    1280 : {
					    	items: 4
					    },
					    1024 : {
					    	items: 3
					    },
					    850 : {
							items: 3
					    },
					    700 : {
					    	items: 2
					    },
					    600 : {
					    	items: 1
					    }
					}
				});

				$("#owl-carousel-2").owlCarousel({
					items: 1,
					nav: true,
					loop: true,
					navText: ['<img src="<?php echo base_url(); ?>asset/image/content/arrow_left.png" id="arrow_left"/>', '<img src="<?php echo base_url(); ?>asset/image/content/arrow_right.png" id="arrow_right_bottom"/>'],
					responsive : {
					    1280 : {
					    	items: 4
					    },
					    1024 : {
					    	items: 3
					    },
					    850 : {
							items: 3
					    },
					    700 : {
					    	items: 2
					    },
					    600 : {
					    	items: 1
					    }
					}
				});
			});
		</script>
	</body>
</html>
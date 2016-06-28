<!DOCTYPE html>
<html lang="en-us">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<head>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/css/home.css"/>
		<link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/footer.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/bannerhome.css" type="text/css" />

		<link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/headerbiru.css" type="text/css" />
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
	<body style="background-image: url('<?php echo base_url(); ?>asset/image/content/bg_content.png'); overflow-x: hidden; background-repeat: no-repeat;">
		<?php include('v_header.php'); ?>
		<?php include('v_banner_home.php'); ?>
		<div class="content">
			<div class="content_title">
				<div class="col-md-2"></div>
				<div class="col-md-8">
					<div id="title_top">
						<p><?php echo $lang_array[7]; ?></p>
						<?php $ulog = $_SESSION['user_login']; ?>
						<?php if ($ulog=="no") { ?>
							<form class="form-inline" action="<?php echo base_url(); ?>menjadireseller" method="post">
						<?php } else { ?>
							<form class="form-inline" action="<?php echo base_url(); ?>search_p" method="post">
						<?php } ?>
						  	<div class="form-group">
						    	<label class="sr-only" for="search_input">Masukkan Kata Kunci</label>
						    	<input type="text" class="form-control" id="search_input" name="search_input" placeholder="Masukkan kata kunci">
						    	<input type="hidden" name="txt_make" value="">
						    	<input type="hidden" name="txt_model" value="">
					  		</div>
						  	<button type="submit" class="btn" id="btn_search">Search <img src="<?php echo base_url(); ?>asset/image/content/search_icon.png" id="search_icon" /></button>
						</form>
					</div>	
					<div id="title_bottom">
						<img src="<?php echo base_url(); ?>asset/image/content/home/blue_bg.png" class="img-responsive" id="blue_bg">
						<div id="title_bottom_content">
							<h3><?php echo $lang_array[8]; ?></h3>
							<p id="p1"><?php echo $lang_array[9]; ?></p>
							<p id="p2"><?php echo $lang_array[10]; ?></p>
							<p id="p3"><?php echo $lang_array[11]; ?></p>
						</div>
					</div>
				</div>
				<div class="col-md-2"></div>
			</div>

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
						<?php $islog1 = $_SESSION['user_login']; ?>
						<?php if ($islog1=="no"){ ?>
							<a href="menjadireseller">
						<?php } else { ?> 
							<a href="jelajahproduct">
						<?php } ?>
								<p class="desc_footer">SELENGKAPNYA &nbsp;></p>
							</a>
					</div>
				<?php
					$my_ctr_new = $my_ctr_new + 1;
				 } ?>
				</div>
				<img src="<?php echo base_url(); ?>asset/image/content/arrow_right.png" class="pull-right" id="arrow_right1"/>
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
						<?php $islog1 = $_SESSION['user_login']; ?>
						<?php if ($islog1=="no"){ ?>
							<a href="menjadireseller">
						<?php } else { ?> 
							<a href="jelajahproduct">
						<?php } ?>
								<p class="desc_footer">SELENGKAPNYA &nbsp;></p>
							</a>
					</div>
				<?php
					$my_ctr = $my_ctr + 1;
				 } ?>
				</div>
				<img src="<?php echo base_url(); ?>asset/image/content/arrow_right.png" class="pull-right" id="arrow_right2"/>
			</div>

			<div class="content_bottom">
				<div class="col-sm-6" id="left_home_content">
					<div class="col-xs-6">
						<a href="menjadireseller">
						<div class="col-xs-4" id="img_foot_home">
							<img src="<?php echo base_url(); ?>asset/image/content/home/reseller.png" id="img_reseller">
						</div>
						<div class="col-xs-8" id="foot_home_desc_reseller">
							<?php echo $lang_array[12]; ?>
						</div>
						</a>
					</div>
					<div class="col-xs-6">
						<a href="karir">
						<div class="col-xs-4" id="img_foot_home">
							<img src="<?php echo base_url(); ?>asset/image/content/home/karir.png" id="img_karir">
						</div>
						<div class="col-xs-8" id="foot_home_desc_karir">
							<?php echo $lang_array[13]; ?>
						</div>
						</a>
					</div>
					<div class="col-xs-12" id="foot_left_desc">
					<?php echo $lang_array[82]; ?>
					</div>
				</div>
				<div class="col-sm-6" id="right_home_content">
					<p><?php echo $lang_array[14]; ?></p>
					<img src="<?php echo base_url(); ?>asset/image/content/home/iklan.png" id="img_iklan">			
					<a href="temukanwakasa">
						<div id="under_iklan">
							<img src="<?php echo base_url(); ?>asset/image/content/home/yellow.png" id="yellow_bg">
							<img src="<?php echo base_url(); ?>asset/image/content/home/iklan_logo.png" id="logo_iklan">
							<span><?php echo $lang_array[15]; ?></span>
						</div>
					</a>		
				</div>
			</div>
		</div>
		<div id="to_footer"></div>
		<?php include('v_footer.php'); ?>

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
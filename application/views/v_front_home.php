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
							<form class="form-inline" action="<?php echo base_url(); ?>sp" method="post">
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
				<?php foreach ($new_product->result() as $row)  
	            {  
	            ?>
					<div class="content_slider">
		                <?php 
							$fp = 'asset/image/products/' . $row->image;
							if (file_exists($fp)){ ?>
								<img src="<?php echo base_url(); ?>asset/image/products/<?=$row->image;?>" class="image_result"/>
							<?php } else { ?>
								<img src="<?php echo base_url(); ?>asset/image/products/no.PNG" class="image_result"/>
							<?php }
						?>
		                <div class="desc_title">
		                    <p><?php echo $row->nama;?></p> 
		                </div>
		                <p class="desc_body">
		                    <?php echo $row->id_jenis_barang;?>-<?php echo $row->id_kendaraan;?><?php echo $row->id_varian;?><br/>
		                    <?php echo $row->make;?> <?php echo $row->model1;?> <?php echo $row->model2;?><br/>
		                    <?php echo $row->remarks;?><br/>
		                    OEM no. <?php echo $row->nomor_asli;?>
		                </p>
		                <?php if ($reseller_uname=="nn"){ ?>
		                	<!--<a href="<?php echo base_url(); ?>menjadireseller"><p class="desc_footer">SELENGKAPNYA &nbsp;></p></a>-->
		                <?php } else { ?>
							<!--<a href="<?php echo base_url(); ?>jelajahproduct"><p class="desc_footer">SELENGKAPNYA &nbsp;></p></a>-->
		                <?php } ?>
		            </div>
				<?php } ?>
				</div>
				<img src="<?php echo base_url(); ?>asset/image/content/arrow_right.png" class="pull-right" id="arrow_right1"/>
			</div>

			<div class="content_produk_unggulan">
				<h3><?php echo $lang_array[17]; ?></h3>
				<div class="owl-carousel" id="owl-carousel-2">				
				<?php foreach ($unggulan->result() as $row)  
	            {  
	            ?>
					<div class="content_slider">
						<?php 
							$fp = 'asset/image/products/' . $row->image;
							if (file_exists($fp)){ ?>
								<img src="<?php echo base_url(); ?>asset/image/products/<?=$row->image;?>" class="image_result"/>
							<?php } else { ?>
								<img src="<?php echo base_url(); ?>asset/image/products/no.PNG" class="image_result"/>
							<?php }
						?>
		                
		                <div class="desc_title">
		                    <p><?php echo $row->nama;?></p> 
		                </div>
		                <p class="desc_body">
		                    <?php echo $row->id_jenis_barang;?>-<?php echo $row->id_kendaraan;?><?php echo $row->id_varian;?><br/>
		                    <?php echo $row->make;?> <?php echo $row->model1;?> <?php echo $row->model2;?><br/>
		                    <?php echo $row->remarks;?><br/>
		                    OEM no. <?php echo $row->nomor_asli;?>
		                </p>
		                <?php if ($reseller_uname=="nn"){ ?>
		                	<!--<a href="<?php echo base_url(); ?>menjadireseller"><p class="desc_footer">SELENGKAPNYA &nbsp;></p></a>-->
		                <?php } else { ?>
							<!--<a href="<?php echo base_url(); ?>jelajahproduct"><p class="desc_footer">SELENGKAPNYA &nbsp;></p></a>-->
		                <?php } ?>
		                
		            </div>
				<?php } ?>
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
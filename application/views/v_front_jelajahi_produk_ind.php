<!DOCTYPE html>
<html lang="en-us">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<head>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/css/jelajahi_produk.css"/>
		<link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/footer.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/headerbiru.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/banner_jelajahi_produk.css" type="text/css" />
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
				<h3>PRODUK TERBARU</h3>
				<div class="owl-carousel" id="owl-carousel-1">
				<?php foreach($produk as $row){?>
					<div id="<?php echo $row->product_id?>">
						<div class="content_slider">
							<img src="<?php echo base_url('Upload/'.$row->product_image); ?>">
							<div class="desc_title">
								<p><?php echo $row->product_name_ina?></p>
							</div>
							<p class="desc_body"><?php echo $row->product_desc_ina?></p>
							<p class="desc_footer">SELENGKAPNYA &nbsp;></p>
						</div>
					</div>
				<?php }?>
				</div>
				<img src="<?php echo base_url(); ?>asset/image/content/arrow_right.png" class="pull-right" id="arrow_right1"/>
				<div class="paging pull-right"><b>Page 1 of 99 </b>&nbsp;&nbsp; 2 3 4 5 6 &nbsp;&nbsp; > <u>></u></div>
			</div>

			<div class="content_produk_unggulan">
				<h3>PRODUK UNGGULAN</h3>
				<div class="owl-carousel" id="owl-carousel-2">
					<div id="item1">
						<div class="content_slider">
							<img src="<?php echo base_url(); ?>asset/image/content/baut.png"/>
							<div class="desc_title">
								<p>BAUT MOBIL AVANZA TIPE S</p>
							</div>
							<p class="desc_body">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, total rem aoeriam.</p>
							<p class="desc_footer">SELENGKAPNYA &nbsp;></p>
						</div>
					</div>
					<div id="item2">
						<div class="content_slider">
							<img src="<?php echo base_url(); ?>asset/image/content/baut.png"/>
							<div class="desc_title">
								<p>BAUT MOBIL AVANZA TIPE S</p>
							</div>
							<p class="desc_body">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, total rem aoeriam.</p>
							<p class="desc_footer">SELENGKAPNYA &nbsp;></p>
						</div>
					</div>
					<div id="item3">
						<div class="content_slider">
							<img src="<?php echo base_url(); ?>asset/image/content/baut.png"/>
							<div class="desc_title">
								<p>BAUT MOBIL AVANZA TIPE S</p>
							</div>
							<p class="desc_body">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, total rem aoeriam.</p>
							<p class="desc_footer">SELENGKAPNYA &nbsp;></p>
						</div>
					</div>
					<div id="item4">
						<div class="content_slider">
							<img src="<?php echo base_url(); ?>asset/image/content/baut.png"/>
							<div class="desc_title">
								<p>BAUT MOBIL AVANZA TIPE S</p>
							</div>
							<p class="desc_body">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, total rem aoeriam.</p>
							<p class="desc_footer">SELENGKAPNYA &nbsp;></p>
						</div>
					</div>
					<div id="item5">
						<div class="content_slider">
							<img src="<?php echo base_url(); ?>asset/image/content/baut.png"/>
							<div class="desc_title">
								<p>BAUT MOBIL AVANZA TIPE S</p>
							</div>
							<p class="desc_body">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, total rem aoeriam.</p>
							<p class="desc_footer">SELENGKAPNYA &nbsp;></p>
						</div>
					</div>
				</div>
				<img src="<?php echo base_url(); ?>asset/image/content/arrow_right.png" class="pull-right" id="arrow_right2"/>
				<div class="paging pull-right"><b>Page 1 of 99 </b>&nbsp;&nbsp; 2 3 4 5 6 &nbsp;&nbsp; > <u>></u></div>
			</div>
		</div>
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
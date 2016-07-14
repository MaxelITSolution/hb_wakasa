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
		                    EOM no. <?php echo $row->nomor_asli;?>
		                </p>
		                <!--<?php 
							$fp = 'asset/image/products/' . $row->image;
							if (file_exists($fp)){ ?>
								<a href="<?php echo base_url(); ?>asset/image/products/<?=$row->image;?>" data-lightbox="produk_login"><p class="desc_footer">SELENGKAPNYA &nbsp;></p></a>
							<?php } else { ?>
								<a href="<?php echo base_url(); ?>asset/image/products/no.PNG" data-lightbox="produk_login"><p class="desc_footer">SELENGKAPNYA &nbsp;></p></a>
							<?php }
						?>-->
		            </div>
				<?php } ?>
				</div>
				<img src="<?php echo base_url(); ?>asset/image/content/arrow_right.png" class="pull-right" id="arrow_right1"/>
				<!--<div class="paging pull-right"><b>Page 1 of 99 </b>&nbsp;&nbsp; 2 3 4 5 6 &nbsp;&nbsp; > <u>></u></div>-->
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
		                    EOM no. <?php echo $row->nomor_asli;?>
		                </p>
		                <!--<?php 
							$fp = 'asset/image/products/' . $row->image;
							if (file_exists($fp)){ ?>
								<a href="<?php echo base_url(); ?>asset/image/products/<?=$row->image;?>" data-lightbox="produk_login"><p class="desc_footer">SELENGKAPNYA &nbsp;></p></a>
							<?php } else { ?>
								<a href="<?php echo base_url(); ?>asset/image/products/no.PNG" data-lightbox="produk_login"><p class="desc_footer">SELENGKAPNYA &nbsp;></p></a>
							<?php }
						?>-->
		            </div>
				<?php } ?>
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
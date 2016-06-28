<!DOCTYPE html>
<html lang="en-us">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<head>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/css/afterlogin.css"/>
		<link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/footer.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/headerbiru.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/bannerafterlogin.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>asset/lightbox/dist/css/lightbox.min.css">
	</head>
	<body style="background-image: url('<?php echo base_url(); ?>asset/image/content/bg_content.png'); overflow-x: hidden;">
		<?php include('v_header.php'); ?>
		<?php include('v_banner_after_login.php'); ?>	
		<div class="content">
			<div class="container" id="container">
				<div id="title">
					<h3>ALL PRODUCT</h3>
				</div>
				<!--      Paging -->
				<?php if ($page_count<21){ ?>

				<?php } else { ?>
					<div class="paging pull-right">
			      <?php if ($page_count > 1) { ?>
						<ul>
			        <li class="active"><a href="#"><b>Page <?php echo $current_page ?> of <?php echo floor($page_count); ?> &nbsp;&nbsp;</b></a></li>

			        <?php if ($current_page > 1 ) { ?>
			        <li><a href="<?php echo site_url('login?page='.($current_page - 1)); ?>"><</a></li>
			        <?php } ?>

			        <?php for ($i=1 ; $i < $page_count; $i++) { ?>
			        <li><a href="<?php echo site_url('login?page='.$i); ?>"><?php echo $i; ?></a></li>        
			        <?php } ?>
			        
			        <?php if ($current_page < $page_count) { ?>
			        <li><a href="<?php echo site_url('login?page='.($current_page + 1)); ?>">></a></li>
			        <?php } ?>
						</ul>
			      <?php } ?>
				</div>
				<?php } ?>
				<div id="result">
				<?php 
			        if(is_array($product) && count($product) ) {
			         foreach($product as $product){     
			        ?>
			        	<div class="col-sm-3" style="padding-left: 40px; margin-bottom: 30px;">
							<div class="content_slider">
								<img src="<?php echo base_url(); ?>asset/image/Upload/<?=$product->product_image;?>" class="image_result"/>
								<div class="desc_title">
									<?php if ($lang=="ina"){?>
										<p><?=$product->product_name_ina;?></p>	
									<?php } else { ?>
										<p><?=$product->product_name_eng;?></p>	
									<?php } ?>
								</div>
								<p class="desc_body">
									<?php if ($lang=="ina"){?>
										<?=$product->product_desc_ina;?>
									<?php } else { ?>
										<?=$product->product_desc_eng;?>
									<?php } ?>
								</p>
								<a href="<?php echo base_url(); ?>asset/image/Upload/<?=$product->product_image;?>" data-lightbox="produk_login"><p class="desc_footer">SELENGKAPNYA &nbsp;></p></a>
							</div>
						</div>
			           <?php 
			         }        
			        }?>  
				</div>
				<div class="row"></div>
				<!--      Paging -->
				<?php if ($page_count<21){ ?>

				<?php } else { ?>
					<div class="paging pull-right">
			      <?php if ($page_count > 1) { ?>
						<ul>
			        <li class="active"><a href="#"><b>Page <?php echo $current_page ?> of <?php echo floor($page_count); ?> &nbsp;&nbsp;</b></a></li>

			        <?php if ($current_page > 1 ) { ?>
			        <li><a href="<?php echo site_url('login?page='.($current_page - 1)); ?>"><</a></li>
			        <?php } ?>

			        <?php for ($i=1 ; $i < $page_count; $i++) { ?>
			        <li><a href="<?php echo site_url('login?page='.$i); ?>"><?php echo $i; ?></a></li>        
			        <?php } ?>
			        
			        <?php if ($current_page < $page_count) { ?>
			        <li><a href="<?php echo site_url('login?page='.($current_page + 1)); ?>">></a></li>
			        <?php } ?>
						</ul>
			      <?php } ?>
				</div>
				<?php } ?>
			</div>
		</div>
		<div class="row"></div>
		<div id="to_footer"></div>
		<?php include('v_footer.php'); ?>
		<script src="<?php echo base_url(); ?>asset/lightbox/dist/js/lightbox-plus-jquery.min.js"></script>
	</body>
</html>	
<!DOCTYPE html>
<html lang="en-us">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<head>
		<link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/footer.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/headerbiru.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/bannerproduk.css" type="text/css" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/css/hasilsearchproduct.css"/>

		<link rel="stylesheet" href="<?php echo base_url(); ?>asset/lightbox/dist/css/lightbox.min.css">

		<style type="text/css">
			.content_slider{
				height: 400px;
			}
			.content_slider img{
				height: 200px;
			}
			.content_slider .desc_body{
				height: 110px;
			}
		</style>

	</head>
	<body style="background-image: url('<?php echo base_url(); ?>asset/image/content/bg_content.png'); overflow-x: hidden;">
		<?php include('v_header.php'); ?>
		<?php include('v_banner_produk.php'); ?>
		<div class="content">
			<div class="container">
				<div id="title">
					<h3><?php echo $lang_array[61]; ?></h3>
					<p><?php echo $lang_array[62]; ?> "<?php echo $name; ?>" <?php echo $lang_array[63]; ?> <?php echo $total; ?> <?php echo $lang_array[64]; ?></p>
				</div>
				<div id="result">

					<?php foreach ($query->result() as $row) { ?>
					
					<div class="col-sm-3">
						<div class="content_slider">
							<img src="<?php echo base_url(); ?>asset/image/Upload/<?=$row->product_image;?>" class="image_result"/>
							<div class="desc_title">
								<?php if ($lang=="ina"){?>
									<p><?php echo $row->product_name_ina;?></p>	
								<?php } else { ?>
									<p><?php echo $row->product_name_eng;?></p>	
								<?php } ?>
							</div>
							<p class="desc_body">
								<?php if ($lang=="ina"){?>
									<?php echo $row->product_desc_ina;?>
								<?php } else { ?>
									<?php echo $row->product_desc_eng;?>
								<?php } ?>
							</p>
							<a href="<?php echo base_url(); ?>asset/image/Upload/<?=$row->product_image;?>" data-lightbox="produk_login"><p class="desc_footer">SELENGKAPNYA &nbsp;></p></a>
						</div>
						<div id="spasi" style="margin-bottom: 30px;"></div>
					</div>

				<?php } ?>

				</div>
				<div class="row"></div>
				<div class="row">
					<!--      Paging -->
					<div class="paging pull-right">
				      <?php if ($page_count > 1) { ?>
							<ul>
				        <li class="active"><a href="#"><b>Page <?php echo $current_page ?> of <?php echo floor($page_count); ?> &nbsp;&nbsp;</b></a></li>

				        <?php if ($current_page > 1 ) { ?>
				        <li><a href="<?php echo site_url('search_p_d?page='.($current_page - 1)); ?>"><</a></li>
				        <?php } ?>

				        <?php for ($i=1 ; $i < $page_count; $i++) { ?>
				        <li><a href="<?php echo site_url('search_p_d?page='.$i); ?>"><?php echo $i; ?></a></li>        
				        <?php } ?>
				        
				        <?php if ($current_page < $page_count) { ?>
				        <li><a href="<?php echo site_url('search_p_d?page='.($current_page + 1)); ?>">></a></li>
				        <?php } ?>
							</ul>
				      <?php } ?>
					</div>
				</div>
			</div>
		</div>
		<div id="to_footer"></div>
		<?php include('v_footer.php'); ?>
		<script src="<?php echo base_url(); ?>asset/lightbox/dist/js/lightbox-plus-jquery.min.js"></script>
	</body>
</html>
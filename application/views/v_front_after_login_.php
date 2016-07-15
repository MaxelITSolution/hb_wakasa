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
		<style type="text/css">
			ul.pagination li a{
				font-family: Ubuntu;
				color: #636363;	
			}
			ul.pagination li.active a{
				background: transparent;
				border: none;
				color: #636363;
			}
			ul.pagination li.active a:hover{
				background: transparent;
				border: none;
				color: #636363;
			}
			ul.pagination li#prev a{
				background: transparent;
				border: none;
			}
			ul.pagination li#next a{
				background: transparent;
				border: none;
			}
			ul.pagination li#first a{
				background: transparent;
				border: none;
			}
			ul.pagination li#last a{
				background: transparent;
				border: none;
			}
			#page_num a{
				background: transparent;
				border: none;
			}
		</style>
		<?php $all_page = ceil($total_page / $per_hal); ?>
		<script type="text/javascript">
			$(document).ready(function(){
				zxc();
			});
			function zxc(){
				var get1 = document.getElementById('page_active').innerHTML;
				var res1 = get1.split(">");
				var res1 = res1[1].substring(0, 1);
				document.getElementById('page_now').innerHTML = res1;
			}
		</script>
	</head>
	<body style="background-image: url('<?php echo base_url(); ?>asset/image/content/bg_content.png'); overflow-x: hidden;">
		<?php include('v_header.php'); ?>
		<?php include('v_banner_after_login.php'); ?>	
		<div class="content">
			<div class="container" id="container">
				<div id="title">
					<h3>ALL PRODUCT</h3>
				</div>
				<div id="result">

				<?php foreach ($query->result() as $row) { ?>
					
					<div class="col-sm-3">
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
							<!--<?php 
								$fp = 'asset/image/products/' . $row->image;
								if (file_exists($fp)){ ?>
									<a href="<?php echo base_url(); ?>asset/image/products/<?=$row->image;?>" data-lightbox="produk_login"><p class="desc_footer">SELENGKAPNYA &nbsp;></p></a>
								<?php } else { ?>
									<a href="<?php echo base_url(); ?>asset/image/products/no.PNG" data-lightbox="produk_login"><p class="desc_footer">SELENGKAPNYA &nbsp;></p></a>
								<?php }
							?>-->
						</div>
						<div id="spasi" style="margin-bottom: 30px;"></div>
					</div>

				<?php } ?>

				</div>
				<div class="row"></div>
			</div>
		</div>
		<div class="row"></div>
		<?php if ($total_page<21) { ?>

		<?php } else { ?>
			<p id="paging_info" class="pull-right"><b>Page <span id="page_now"></span> of <?php echo $all_page; ?> </b></p><?php echo $page_links; ?>
		<?php } ?>
		<div id="to_footer"></div>
		<?php include('v_footer.php'); ?>
		<script src="<?php echo base_url(); ?>asset/lightbox/dist/js/lightbox-plus-jquery.min.js"></script>
	</body>
</html>	
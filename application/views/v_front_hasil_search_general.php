<!DOCTYPE html>
<html lang="en-us">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<head>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/css/hasilsearchgeneral.css"/>
		<link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/footer.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/headerbiru.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/bannergeneral.css" type="text/css" />
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
			#page_num a{
				background: transparent;
				border: none;
			}
			#paging_info{
				font-family: Ubuntu;
				color: #636363;	
				margin-left: 710px;
				margin-top: 27px;
				position: absolute;
			}
			ul.pagination{
				margin-right: 130px;
			}
			ul.pagination li#first a{
				background: transparent;
				border: none;
			}
			ul.pagination li#last a{
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
		<?php include('v_banner_general.php'); ?>
		<div class="content">
			<div class="container" id="container">
				<div id="title">
					<h3>HASIL PENCARIAN</h3>
					<p>Your search for "<?php echo $name; ?>" has <?php echo $total_page; ?> matches</p>
				</div>
				<div id="result">

					<?php for ($i = 0; $i < count($products); ++$i) { ?>
				        <p id="result_title">
				        	<?php echo $products[$i]->nama;?>
						</p>
						<p id="result_desc">
							<?php $tmp = $products[$i]->desc;
								if ($tmp==""){
									echo $products[$i]->remarks;	
								} else {
									echo $products[$i]->desc;
								}
							 ?>
						</p>
						<div class="separator"></div>
				    <?php } ?>

					
					<!--<p id="result_title">Xxx The Price of Insurance Broker become High</p>
					<p id="result_desc">On the other hand, we denounce with righteous indignarion and dislike men who are so beguiled and demoralized by the charms of the moment, so blinded by desire, that they cannot foresee the pain and truble that are bound to ensure and equal blame belongs to those who fail in their duty throught weakness.www.dps-insurancebroker.co/xxx-The-Price-of-Insurance</p>
					<div class="separator"></div>
					<p id="result_title">Xxx The Price of Insurance Broker become High</p>
					<p id="result_desc">On the other hand, we denounce with righteous indignarion and dislike men who are so beguiled and demoralized by the charms of the moment, so blinded by desire, that they cannot foresee the pain and truble that are bound to ensure and equal blame belongs to those who fail in their duty throught weakness.www.dps-insurancebroker.co/xxx-The-Price-of-Insurance</p>
					<div class="separator"></div>
					<p id="result_title">Xxx The Price of Insurance Broker become High</p>
					<p id="result_desc">On the other hand, we denounce with righteous indignarion and dislike men who are so beguiled and demoralized by the charms of the moment, so blinded by desire, that they cannot foresee the pain and truble that are bound to ensure and equal blame belongs to those who fail in their duty throught weakness.www.dps-insurancebroker.co/xxx-The-Price-of-Insurance</p>
					<div class="separator"></div>
					<p id="result_title">Xxx The Price of Insurance Broker become High</p>
					<p id="result_desc">On the other hand, we denounce with righteous indignarion and dislike men who are so beguiled and demoralized by the charms of the moment, so blinded by desire, that they cannot foresee the pain and truble that are bound to ensure and equal blame belongs to those who fail in their duty throught weakness.www.dps-insurancebroker.co/xxx-The-Price-of-Insurance</p>
					<div class="separator"></div>-->
				</div>
				<p id="paging_info" class="pull-right"><b>Page <span id="page_now"></span> of <?php echo $all_page; ?> </b></p><?php echo $pagination; ?>
			</div>
		</div>
		<div id="to_footer"></div>
		<?php include('v_footer.php'); ?>
	</body>
</html>
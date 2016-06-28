<!DOCTYPE html>
<html lang="en-us">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<head>
		
		<link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/footer.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/headerbiru.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/bannertemukanwakasa.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/hasilsearchwakasa.css" type="text/css" />
		<style type="text/css">
			.title_table{
				font-family: Ubuntu;
				font-size: 18px;
				text-align: center;
				color: #247dc1;
			}
			.content_table.toko{
				font-family: Ubuntu;
				font-size: 16px;
				color: #4d4d4d;
				border-right-color: #b5b1b1;
				border-left-color: #b5b1b1;
				border-right-width: 2px;
				border-left-width: 2px;
				text-align: center;
			}
			.content_table.alamat, .content_table.kota, .content_table.phone{
				font-family: Ubuntu;
				font-size: 16px;
				color: #4d4d4d;
				border-right-color: #b5b1b1;
				border-left-color: #b5b1b1;
				border-right-width: 2px;
				border-left-width: 2px;
				padding-left: 10px;
				padding-right: 10px;
			}
		</style>

	</head>
	<body style="background-image: url('<?php echo base_url(); ?>asset/image/content/bg_full.png'); overflow-x: hidden;">
		<?php include('v_header.php'); ?>
		<?php include('v_banner_temukan_wakasa.php'); ?>
		<div class="content">
			<div class="container" id="container">
				<div id="title">
					<h3><?php echo $lang_array[61]; ?></h3>
					<!--<p><?php echo $lang_array[62]; ?> "<?php echo $prov; ?>, <?php echo $city; ?>" <?php echo $lang_array[63]; ?> <?php echo $total; ?> <?php echo $lang_array[64]; ?></p>-->	
				</div>
			</div>
			<div class="container">
				<div id="result">
					<table class="table table-responsive table-bordered" id="table_search_g"  style="border-color: #b5b1b1; border-width: 2px;">
						<thead>
							<tr>
								<td class="title_table" style="border-color: #b5b1b1; border-width: 2px;">Nama Toko</td>
								<td class="title_table" style="border-color: #b5b1b1; border-width: 2px;">Alamat</td>
								<td class="title_table" style="border-color: #b5b1b1; border-width: 2px;">Kota / Kabupaten</td>
								<td class="title_table" style="border-color: #b5b1b1; border-width: 2px;">Telepon</td>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($hasil->result() as $row)  
				            {  
				            ?>
				            <tr>
				            	<td class="content_table toko"><?php echo $row->reseller_nama_toko; ?></td>
				            	<td class="content_table alamat"><?php echo $row->reseller_alamat_toko; ?></td>
				            	<td class="content_table kota"><?php echo $row->reseller_kota; ?></td>
				            	<td class="content_table phone"><?php echo $row->reseller_phone_toko; ?></td>
				            </tr>
				            <?php } ?>
						</tbody>
					</table>
				</div>
				<?php if ($total<0) { ?>

				<?php } else { ?>
					
				<?php } ?>
			</div>
		</div>
		<div id="to_footer"></div>
		<?php include('v_footer.php'); ?>
	</body>
</html>
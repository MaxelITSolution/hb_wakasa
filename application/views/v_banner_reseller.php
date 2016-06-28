<div class="banner">
	<?php foreach ($banner_reseller->result() as $row) { ?>
		<img src="<?php echo base_url(); ?>asset/image/banner/<?php echo $row->image; ?>" id="image_banner">
	<?php } ?>

<div id="banner_text1">
	<div id="banner_text1_"><?php echo $lang_array[28]; ?></div>
</div>
<div id="banner_text2">
	<div id="banner_text2_"><?php echo $lang_array[29]; ?></div>
</div>
<div id="banner_text3">
	<div id="banner_text3_"><?php echo $lang_array[30]; ?></div>
</div>
</div>
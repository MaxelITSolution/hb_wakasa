<div class="banner">
	<?php foreach ($banner_general->result() as $row) { ?>
		<img src="<?php echo base_url(); ?>asset/image/banner/<?php echo $row->image; ?>" id="image_banner">
	<?php } ?>

	<h3><?php echo $lang_array[70]; ?></h3>
	<form class="form-inline" action="<?php echo base_url(); ?>Frontend/s_g" method="post">
	  	<div class="form-group">
	    	<label class="sr-only" for="search_input">Masukkan Kata Kunci</label>
	    	<input type="text" class="form-control" id="search_input" name="search_input" placeholder="Masukkan kata kunci">
			</div>
	  	<button type="submit" class="btn" id="btn_search">Search <img src="<?php echo base_url(); ?>asset/image/content/search_icon.png" id="search_icon" /></button>
	</form>
</div>
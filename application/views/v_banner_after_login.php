<div class="banner">
	<?php foreach ($banner_login->result() as $row) { ?>
		<img src="<?php echo base_url(); ?>asset/image/banner/<?php echo $row->image; ?>" id="image_banner">
	<?php } ?>

	<h3>CARI PRODUK WAKASA</h3>
	<form class="form-inline" action="<?php echo base_url(); ?>sp" method="post">
	  	<div class="form-group">
	    	<label class="sr-only" for="search_input">Masukkan Kata Kunci</label>
	    	<input type="text" class="form-control" id="search_input" name="search_input" placeholder="Masukkan kata kunci">
	    	<input type="hidden" name="txt_make" value="">
			<input type="hidden" name="txt_model" value="">
		</div>
	  	<button type="submit" class="btn" id="btn_search">Search <img src="<?php echo base_url(); ?>asset/image/content/search_icon.png" id="search_icon" /></button>
	</form>
</div>
<div class="banner">
	<img src="<?php echo base_url(); ?>asset/image/banner/banner1.jpg" id="image_banner">

	<h3><?php echo $lang_array[70]; ?></h3>
	<form class="form-inline" action="search_g" method="post">
	  	<div class="form-group">
	    	<label class="sr-only" for="search_input">Masukkan Kata Kunci</label>
	    	<input type="text" class="form-control" id="search_input" name="search_input" placeholder="Masukkan kata kunci">
			</div>
	  	<button type="button" class="btn" id="btn_search">Search <img src="<?php echo base_url(); ?>asset/image/content/search_icon.png" id="search_icon" /></button>
	</form>
</div>
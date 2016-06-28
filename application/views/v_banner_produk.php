<div class="banner">
	<?php foreach ($banner_produk->result() as $row) { ?>
		<img src="<?php echo base_url(); ?>asset/image/banner/<?php echo $row->image; ?>" id="image_banner">
	<?php } ?>

	<h3><?php echo $lang_array[71]; ?></h3>
	<form class="form-inline" action="search_p" method="post">
	  	<div class="form-group">
	    	<label class="sr-only" for="search_input">Masukkan Kata Kunci</label>
	    	<input type="text" class="form-control" id="search_input" name="search_input" placeholder="Masukkan kata kunci">
	    	<input type="hidden" id="txt_make" name="txt_make" value="">
			<input type="hidden" id="txt_model" name="txt_model" value="">
		</div>

	  	<button type="submit" class="btn" id="btn_search">Search <img src="<?php echo base_url(); ?>asset/image/content/search_icon.png" id="search_icon" /></button>

	  	<input type="hidden" id="search_input1" name="search_input1" placeholder="Masukkan kata kunci">

	  	<div class="row"></div>

		<select class="selectpicker" id="make_select" name="make_select" onchange="setMake();">
			<option value="">By Make</option>
			<?php $y = date('Y'); for ($i=2000; $i<$y+1; $i++) { ?>
				<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
			<?php } ?>
		</select>

		<select class="selectpicker" id="model_select" name="model_select" onchange="setModel();">
			<option value="">By Model</option>
	         <?php foreach ($models->result() as $row) { ?>
	         	<option value="<?=$row->product_model;?>"><?=$row->product_model;?></option>
	        <?php } ?>
		</select>
	</form>

	<script type="text/javascript">
		function setMake(){
			var getMake = document.getElementById('make_select').value;
			document.getElementById('txt_make').value = getMake;
		}
		function setModel(){
			var getModel = document.getElementById('model_select').value;
			document.getElementById('txt_model').value = getModel;
		}
	</script>

</div>
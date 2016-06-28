<div class="banner">
	<?php foreach ($banner_temukan->result() as $row) { ?>
		<img src="<?php echo base_url(); ?>asset/image/banner/<?php echo $row->image; ?>" id="image_banner">
	<?php } ?>

	<p id="title"><?php echo $lang_array[68]; ?></p>
	<p id="desc"><?php echo $lang_array[69]; ?></p>

	<form action="search_wakasa" method="post">
		<input type="hidden" name="prov" id="prov" value="Aceh">
		<input type="hidden" name="kota" id="kota" value="Airmadidi">
		<select class="selectpicker" id="left_select" name="left_select" onchange="setProvinsi();">
		  <?php foreach ($provinsi->result() as $row) { ?>
				<option value="<?php echo $row->provinsi; ?>"><?php echo $row->provinsi; ?></option>
	        <?php } ?>
		</select>

		<select class="selectpicker" id="right_select" name="right_select" onchange="setKota();">
			<?php foreach ($city->result() as $row) { ?>
				<option value="<?php echo $row->city; ?>"><?php echo $row->city; ?></option>
	        <?php } ?>
		</select>


		<button type="submit" class="btn" id="btn_search">Search <img src="<?php echo base_url(); ?>asset/image/content/search_icon.png" id="search_icon" /></button>

		<script type="text/javascript">
			function setProvinsi(){
				var getProvinsi = document.getElementById('left_select').value;
				document.getElementById('prov').value = getProvinsi;
			}

			function setKota(){
				var getKota = document.getElementById('right_select').value;
				document.getElementById('kota').value = getKota;
			}
		</script>

	</form>

</div>
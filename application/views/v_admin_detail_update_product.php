<script type="text/javascript">
	$('#master').addClass('active_main');
	$('#product').addClass('active');
	$(document).ready(function () {
		$('#productTable').DataTable();
		
	});
</script>
<div class="mycontent" style="overflow-x: hidden; ">
	<div class="col-sm-12">
		<h2>DETAIL / UPDATE PRODUK</h2>
	</div>
	<div class="container">
		
		<div class="col-xs-12">
			<div class="row">
				<div class="col-xs-3"><a href="product"><i class="fa fa-reply fa-lg"></i> Kembali</a></div>
				<div class="col-xs-6"></div>
				<div class="col-xs-3"></div>
			</div>
		</div>
	</div>
	<br/>
	<hr class="bold">
	<br/>
	<div class="row">
		<div class="col-sm-8" id="left_content">
		<?php echo form_open_multipart('backend/do_upload');?>
		<input type="hidden" name="url" value="<?php echo $this->uri->segment(3)?>">
		
			<h3><i>English</i></h3>
			<input type="text" class="product_name" id="product_name_eng" name="product_name_eng" placeholder="Product Name ... " value="<?php echo $detailNameEng?>">
			<textarea rows="5" class="product_desc" id="product_desc_eng" name="product_desc_eng" placeholder="Product Description ... "><?php echo $detailDescEng?></textarea>

			<br/>
			<hr class="bold" id="sep_prod">

			<h3><i>Indonesia</i></h3>
			<input type="text" class="product_name" id="product_name_ina" name="product_name_ina" placeholder="Nama Product ... " value="<?php echo $detailNameIna?>" >
			<textarea rows="5" class="product_desc" id="product_desc_ina" name="product_desc_ina" placeholder="Deskripsi Produk ... "><?php echo $detailDescIna?></textarea>

			<hr class="bold" id="sep_prod">
			
			<input type="submit" value="save" class="btn btn-default pull-right" id="btn_save_product"></input>

		</div>
		<div class="col-sm-4" id="right_content">
			<h3><i>Image / Gambar</i></h3>
			<input type='file' id="button_add_image" name="userfile" size="20" />
			</form>
			<img id="content_image" src="<?php echo base_url("Upload/".$detailPicture)?>" alt="your image" />

		</div>
	</div>
</div>
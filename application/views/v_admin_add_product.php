<script type="text/javascript">
	$('#master').addClass('active_main');
	$('#product').addClass('active');
	$(document).ready(function () {
		$('#productTable').DataTable();
	});
</script>
<div class="mycontent" style="overflow-x: hidden; ">
	<div class="col-sm-12">
		<h2>TAMBAH PRODUK</h2>
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
			<h3><i>English</i></h3>
			<input type="text" class="product_name" id="product_name_eng" name="product_name_eng" placeholder="Product Name ... " >
			<textarea rows="5" class="product_desc" id="product_desc_eng" name="product_desc_eng" placeholder="Product Description ... "></textarea>

			<br/>
			<hr class="bold" id="sep_prod">

			<h3><i>Indonesia</i></h3>
			<input type="text" class="product_name" id="product_name_ina" name="product_name_ina" placeholder="Nama Product ... " >
			<textarea rows="5" class="product_desc" id="product_desc_ina" name="product_desc_ina" placeholder="Deskripsi Produk ... "></textarea>

			<hr class="bold" id="sep_prod">

			<input type="submit" class="btn btn-default pull-right" id="btn_save_product">Save</button>

		</div>
		<div class="col-sm-4" id="right_content">
			<h3><i>Image / Gambar</i></h3>
			<input type='file' id="button_add_image" name="userfile" size="20" />
			<img id="content_image" src="#" alt="your image" />

		</div>
	</div>
</div>
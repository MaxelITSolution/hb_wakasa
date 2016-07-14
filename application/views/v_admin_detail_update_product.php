<script type="text/javascript">
	$('#master').addClass('active_main');
	$('#product').addClass('active');
	$(document).ready(function () {
		$('#productTable').DataTable();
		$('#upimageproduct').change(function(){
			var image_url = document.getElementById('upimageproduct');
			upimageproduct.src = URL.createObjectURL(event.target.files[0]);
			$("#content_image").attr("src", upimageproduct.src);
		});
	});
</script>
<style type="text/css">
	input {
		width: 100%;
	}
	textarea{
		width: 100%;
	}
</style>
<div class="mycontent" style="overflow-x: hidden; ">
	<div class="col-sm-12">
		<h2>DETAIL / UPDATE PRODUK</h2>
	</div>
	<div class="container">
		
		<div class="col-xs-12">
			<div class="row">
				<div class="col-xs-3"><a href="<?php echo base_url(); ?>Backend/product"><i class="fa fa-reply fa-lg"></i> Kembali</a></div>
				<div class="col-xs-6"></div>
				<div class="col-xs-3"></div>
			</div>
		</div>
	</div>
	<br/>
	<hr class="bold">
	<br/>
	<form action="<?php echo base_url(); ?>Backend/update_product" method="post" enctype="multipart/form-data">
		<?php foreach ($product->result() as $row) { ?>
		<input type="hidden" class="product_name" id="id_product" name="id_product" placeholder="ID Barang ... " value="<?php echo $row->id; ?>" >
		<input type="hidden" class="product_name" id="new_url_image" name="new_url_image" placeholder="URL IMAGE ... " >
		<input type="hidden" class="product_name" id="new_url_image_ori" name="new_url_image_ori" placeholder="URL IMAGE ... " >
		<script>
			$(document).ready(function () {
				$('#upimageproduct').change(function(){
					document.getElementById('new_url_image').value = "asset/image/products/<?php echo $row->image; ?>";
					document.getElementById('new_url_image_ori').value = "asset/image/products_ori/<?php echo $row->image; ?>";
				});
			});
		</script>
		<div class="col-sm-6">
			<div class="col-sm-6">
				<h3><i>ID Jenis Barang</i></h3>
				<input type="text" class="product_name" id="id_jenis_barang" name="id_jenis_barang" placeholder="ID Jenis Barang ... " value="<?php echo $row->id_jenis_barang; ?>" >
				<h3><i>ID Varian</i></h3>
				<input type="text" class="product_name" id="id_varian" name="id_varian" placeholder="ID Varian ... " value="<?php echo $row->id_varian; ?>" >
			</div>
			<div class="col-sm-6">
				<h3><i>ID Kendaraan</i></h3>
				<input type="text" class="product_name" id="id_kendaraan" name="id_kendaraan" placeholder="ID Kendaraan ... " value="<?php echo $row->id_kendaraan; ?>" >
				<h3><i>No. Asli</i></h3>
				<input type="text" class="product_name" id="no_asli" name="no_asli" placeholder="Nomor Asli ... " value="<?php echo $row->nomor_asli; ?>" >
			</div>
			<div class="container col-sm-12">
				<h3><i>Nama Barang</i></h3>
				<input type="text" class="product_name" id="nama_barang" name="nama_barang" placeholder="Nama Barang ... " value="<?php echo $row->nama; ?>" >
				<h3><i>Remarks</i></h3>
				<input type="text" class="product_name" id="remarks" name="remarks" placeholder="Remarks ... " value="<?php echo $row->remarks; ?>" >
				<h3><i>Make</i></h3>
				<input type="text" class="product_name" id="make_barang" name="make_barang" placeholder="Make ... " value="<?php echo $row->make; ?>" >
			</div>
			<div class="col-sm-6">
				<h3><i>Model 1</i></h3>
				<input type="text" class="product_name" id="model1_barang" name="model1_barang" placeholder="Model 1 ... " value="<?php echo $row->model1; ?>" >	
			</div>
			<div class="col-sm-6">
				<h3><i>Model 2</i></h3>
				<input type="text" class="product_name" id="model2_barang" name="model2_barang" placeholder="Model 2 ... " value="<?php echo $row->model2; ?>" >	
			</div>
		</div>
		<div class="col-sm-6">
			<div class="col-sm-6">
				<h3><i>Updated</i></h3>
				<input type="text" class="product_name" id="updated" name="updated" placeholder="Updated ... " value="<?php echo $row->updated; ?>" >	
				<h3><i>Harga</i></h3>
				<input type="text" class="product_name" id="harga_barang" name="harga_barang" placeholder="Harga ... " value="<?php echo $row->harga; ?>" >	
			</div>
			<div class="col-sm-6">
				<h3><i>Kemasan</i></h3>
				<input type="text" class="product_name" id="kemasan" name="kemasan" placeholder="Kemasan ... " value="<?php echo $row->kemasan; ?>" >	
				<h3><i>Image / Gambar</i></h3>
				<input type="file" id="upimageproduct" name="upimageproduct" />
				<img id="content_image" src="<?php echo base_url();?>asset/image/products/<?php echo $row->image; ?>" alt="your image" style="height: 120px;" />
			</div>
			<div class="container col-sm-12" style="margin-top: -45px;">
				<h3><i>Deskripsi</i></h3>
				<textarea rows="7" class="product_desc" id="deskripsi" name="deskripsi" placeholder="Product Description ... "><?php echo $row->desc; ?></textarea>
			</div>
			<input type="submit" class="btn btn-default pull-right" id="btn_save_product" style="margin-right: 15px;" value="SIMPAN"></input>
		</div>
		<?php } ?>
	</form>
</div>
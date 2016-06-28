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
		<h2>TAMBAH PRODUK</h2>
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
	<form action="add_new_product" method="post" enctype="multipart/form-data">
		<div class="col-sm-6">
			<div class="col-sm-6">
				<h3><i>ID Jenis Barang</i></h3>
				<input type="text" class="product_name" id="id_jenis_barang" name="id_jenis_barang" placeholder="ID Jenis Barang ... " >
				<h3><i>ID Varian</i></h3>
				<input type="text" class="product_name" id="id_varian" name="id_varian" placeholder="ID Varian ... " >
			</div>
			<div class="col-sm-6">
				<h3><i>ID Kendaraan</i></h3>
				<input type="text" class="product_name" id="id_kendaraan" name="id_kendaraan" placeholder="ID Kendaraan ... " >
				<h3><i>No. Asli</i></h3>
				<input type="text" class="product_name" id="no_asli" name="no_asli" placeholder="Nomor Asli ... " >
			</div>
			<div class="container col-sm-12">
				<h3><i>Nama Barang</i></h3>
				<input type="text" class="product_name" id="nama_barang" name="nama_barang" placeholder="Nama Barang ... " >
				<h3><i>Remarks</i></h3>
				<input type="text" class="product_name" id="remarks" name="remarks" placeholder="Remarks ... " >
				<h3><i>Make</i></h3>
				<input type="text" class="product_name" id="make_barang" name="make_barang" placeholder="Make ... " >
			</div>
			<div class="col-sm-6">
				<h3><i>Model 1</i></h3>
				<input type="text" class="product_name" id="model1_barang" name="model1_barang" placeholder="Model 1 ... " >	
			</div>
			<div class="col-sm-6">
				<h3><i>Model 2</i></h3>
				<input type="text" class="product_name" id="model2_barang" name="model2_barang" placeholder="Model 2 ... " >	
			</div>
		</div>
		<div class="col-sm-6">
			<div class="col-sm-6">
				<h3><i>Updated</i></h3>
				<input type="text" class="product_name" id="updated" name="updated" placeholder="Updated ... " >	
				<h3><i>Harga</i></h3>
				<input type="text" class="product_name" id="harga_barang" name="harga_barang" placeholder="Harga ... " >	
			</div>
			<div class="col-sm-6">
				<h3><i>Kemasan</i></h3>
				<input type="text" class="product_name" id="kemasan" name="kemasan" placeholder="Kemasan ... " >	
				<h3><i>Image / Gambar</i></h3>
				<input type="file" id="upimageproduct" name="upimageproduct" />
				<img id="content_image" src="#" alt="your image" style="height: 120px;" />
			</div>
			<div class="container col-sm-12" style="margin-top: -45px;">
				<h3><i>Deskripsi</i></h3>
				<textarea rows="7" class="product_desc" id="deskripsi" name="deskripsi" placeholder="Product Description ... "></textarea>
			</div>
			<input type="submit" class="btn btn-default pull-right" id="btn_save_product" style="margin-right: 15px;" value="SIMPAN"></input>
		</div>
	</form>
</div>
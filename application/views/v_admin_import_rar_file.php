<script type="text/javascript">
	$('#master').addClass('active_main');	
	$('#import_image').addClass('active');
	$(document).ready(function(){
		var sts = document.getElementById('status').value;
		if (sts=="no"){
			sweetAlert("Gagal Upload File", "Pastikan file ber extensi .zip", "error");
			document.getElementById('status').value = "";
		}
		if (sts=="ok"){
			swal("Sukses Upload File", "", "success");
			document.getElementById('status').value = "";
		}
	});
</script>

<div class="mycontent" style="overflow-x: hidden; ">
	<div class="container">
		<div class="col-sm-3" style="margin-top: 60px;"></div>
		<div class="col-sm-6" class="cop">
			<h3 style="text-align: center; font-weight: bold; font-size: 30px;">IMPORT IMAGE</h3>
			
			<h4 style="text-align:center;">IMPORT ZIP FILE</h4>
			
			<br/>
		</div>
		<div class="col-sm-3"></div>
	</div>
	<hr class="bold">
	<br/>
	<form class="form-horizontal" action="<?php echo base_url(); ?>Backend/upload_zip_file" method="POST" enctype="multipart/form-data">
		<input type="hidden" id="status" name="status" value="<?php echo $status; ?>">
		<h4>Pilih ZIP FILE : </h4>
		<input type="file" id="zip_file" name="zip_file" />
		<div class="row"></div>
		<br/>
			<hr class="bold">
		<br/>	

		<input type="submit" class="btn btn-default pull-right" id="btn_save_product"></input>

	</form>
</div>